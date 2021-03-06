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

// Liste des enterprises
$sql_enterprises = $pdo->query('SELECT idEnterprise, nomEnterprise FROM t_enterprise');
$sql_enterprises->setFetchMode(PDO::FETCH_ASSOC);  
$data_enterprises = $sql_enterprises->fetchAll(); 

// Liste des enterprises pour la validation
$enterprises_id_list = [];

foreach ($data_enterprises as $enterprise) {
    $enterprises_id_list[] = $enterprise['idEnterprise'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential Watch&trade; Create Account</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>

</head>
<body>
  <?php
    $page = 'user';
    require_once './include/nav.php';
    ?>
    
    <main>
      <div></div>
       <form name="Login" method="post" id="formulaire" action="newUser.php">
          <h2>Create your account</h2>
          <input type="text" name="fname" placeholder="First Name">
          <input type="text" name="lname" placeholder="Last Name">
          <input type="text" name="telephone" placeholder="Phone Number">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">          
          <select id="selectEnterprise" name="enterprise">
              <option selected >Enterprise</option>
              <?php             
                foreach ($data_enterprises as $row){
                    echo '<option value="' . $row["idEnterprise"] . '">' .  $row['nomEnterprise'] . '</option>';
                };
                ?>
          </select>
            <button>Get Started</button>
        </form>
    </main>
    
    <?php
    require_once './include/footer.php';
    ?>   
</body>
<script src="./js/user/script.js"></script>
</html>
<?php
    ob_flush();
?>