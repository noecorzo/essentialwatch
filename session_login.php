<?php
ob_start();
require_once('./session_auth.php');
require_once('./config/config.php');

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);   
}
catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;  
    die ('Problème technique'); 
}

$msg = '';

if(isset ($_POST['email'], $_POST['password'])){
    $sql = "SELECT firstName, email, password FROM t_users  WHERE email=:email";

    $resultat = $pdo->prepare ($sql);
    $resultat->bindValue (":email", $_POST['email']);
    $resultat->execute();
    $tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);

    if (password_verify ($_POST['password'], $tableau[0]['password'])){
        session_start();
        $_SESSION['lastAccess'] = time();
        $_SESSION['userName'] = $tableau[0]['firstName'];
        
        header("Location: ./index.php"); 
        die();
    } else {
        $msg = "Sorry. The email or the password are incorrect. Try again!";
    }    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/logIn.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>
</head>
<body>
    <?php
        $page = "login";
        require_once './include/nav.php';
    ?>
    <main>
      <div></div>
       <form name="Login" method="post" id="formulaireLogIn" action="session_login.php">
         <h2>Log In</h2>
         <p>Don't have an account? <a href="user.php">Create it now</a>,<br> it takes less than one minute.</p>
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">          
            <button>Get Started</button>  
            <?php
                echo '<p>' . $msg . '</p>';
           ?>      
        </form>    
    </main> 
    <?php
    require_once './include/footer.php';
    ?>   
</body>
</html>
<?php
    ob_flush();
?>