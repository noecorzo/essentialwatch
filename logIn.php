<?php

require_once('./config/config.php');

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
    
}
catch (PDOException $e) {
    echo $e->getMessage(); 
    $pdo = null;  
    die ('Problème technique'); 
}

$sql = "SELECT email, password FROM t_users  WHERE email=:email";

$resultat = $pdo->prepare ($sql);
$resultat->bindValue (":email", $_POST['email']);
$resultat->execute();
$tableau = $resultat->fetchAll (PDO::FETCH_ASSOC);

if (password_verify ($_POST['password'], $tableau[0]['password'])){
	echo "Login correct!";
    
}
else {
	echo "Password incorrect";
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
    
    <script src="./jQuery/jquery-3.2.1.slim.js"></script>
    <script src="./js/nav/script.js"></script>
</head>
<body>
  <?php
    require_once './include/nav.php';
    ?>
    
    <main>
       <form name="Login" method="post" id="formulaireLogIn" action="logIn.php">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">          
            <button>Get Started</button>

        </form>
    </main>
    
    <?php
    require_once './include/footer.php';
    ?>
    
</body>
</html>