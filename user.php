<?php

require_once('./config/config.php');

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
    
}
catch (PDOException $e) {
    echo $e->getMessage(); // A mettre ABSOLUMENT en commentaire en ligne
    $pdo = null; // fermer la connexion vers la DB 
    die ('Problème technique'); //Prévenir l'utilisateur du problème
}

if(isset ($_POST['fname'], $_POST['lname'], $_POST['enterprise'], $_POST['telephone'], $_POST['email'], $_POST['password'])){
    

    $statement = $pdo->prepare('INSERT INTO t_users 
                                (idUser, firstName, lastName, enterprise,  telephone, email, password) 
                                VALUES 
                                (NULL, :fn, :ln, :ent, :tel, :em, :pass)');
    $statement->bindValue(':fn', $_POST['fname'], PDO::PARAM_STR);
    $statement->bindValue(':ln', $_POST['lname'], PDO::PARAM_STR);
    $statement->bindValue(':ent', $_POST['enterprise'], PDO::PARAM_STR);
    $statement->bindValue(':tel', $_POST['telephone'], PDO::PARAM_STR);
    $statement->bindValue(':em', $_POST['email'], PDO::PARAM_STR);
    $statement->bindValue(':pass', $_POST['password'], PDO::PARAM_STR);

    $statement->execute();
    
    if($statement->errorInfo()[0]==="00000"){
        $msg = 'Nouveau perso inséré dans la DB...';
    }
    
    else {
        $msg = 'Erreur technique';
    }
}

else {
    $msg = 'On n\'a rien reçu du formulaire';   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    <script src="./jQuery/jquery-3.2.1.slim.js"></script>
    <script src="./js/nav/script.js"></script>

</head>
<body>
  <?php
    require_once './include/nav.php'
    ?>
    
    <main>
   
   <form name="Login" method="post" id="formulaire" action="user.php">
          <input type="text" name="fname" placeholder="First Name">
          <input type="text" name="lname" placeholder="Last Name">
          <input type="text" name="enterprise" placeholder="Enterprise">
          <input type="text" name="telephone" placeholder="Phone Number">
          <input type="email" name="email" placeholder="Email">
          <input type="password" name="password" placeholder="Password">
          
<!--
          <p>Are you the purchasing manager? <input type="radio" name="pruchasingManager" value="true">T
          <input type="radio" name="pruchasingManager" value="false"></p>
-->
          
          <button>Get Started</button>
          

          

<!--
          <?php
            
            echo $msg;
        ?>
-->

    </form>
    
    </main>
    
    <?php
    require_once './include/footer.php'
    ?>
    
</body>
</html>