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

// Liste des enterprises
$sql_enterprises = $pdo->query('SELECT idEnterprise, nomEnterprise FROM t_enterprise');
$sql_enterprises->setFetchMode(PDO::FETCH_ASSOC);  
$data_enterprises = $sql_enterprises->fetchAll(); 

// Liste des enterprises pour la validation
$enterprises_id_list = [];

foreach ($data_enterprises as $enterprise) {
    $enterprises_id_list[] = $enterprise['idEnterprise'];
}

if(isset ($_POST['fname'], $_POST['lname'], $_POST['telephone'], $_POST['email'], $_POST['password'], $_POST['enterprise'])){
  
    if(is_string($_POST['fname']) && $_POST['lname'] != '' && $_POST['telephone'] != '' && $_POST['email'] != '' && $_POST['password'] != '' && in_array($_POST['enterprise'], $enterprises_id_list)){
    
        $statement = $pdo->prepare('INSERT INTO t_users 
                                    (idUser, firstName, lastName, telephone, email, password, idEnterprise) 
                                    VALUES 
                                    (NULL, :fn, :ln, :tel, :em, :pass, :ent)');

        $statement->bindValue(':fn', $_POST['fname'], PDO::PARAM_STR);
        $statement->bindValue(':ln', $_POST['lname'], PDO::PARAM_STR);
        $statement->bindValue(':tel', $_POST['telephone'], PDO::PARAM_STR);
        $statement->bindValue(':em', $_POST['email'], PDO::PARAM_STR);
        $statement->bindValue(':pass', password_hash($_POST['password'], PASSWORD_DEFAULT, ['COST'=>12]), PDO::PARAM_STR);
        $statement->bindValue(':ent', $_POST['enterprise'], PDO::PARAM_STR);

        $statement->execute();

        if($statement->errorInfo()[0]==="00000"){
            $msg = 'Nouveau personne insere dans la DB';
        }

        else {
            $msg = 'Erreur technique';
        }
    }else{
        $msg = 'Veuillez bien remplir le formulaire';
    }
    
}else {
    $msg = 'On n\'a rien reçu du formulaire';   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New User</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/newUser.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>

</head>
<body>
  <?php
    require_once './include/nav.php';
    ?>
    
    <main>
        <div> 
            <p>Thank you for your inscription.</p><br> 
            <p>We will keep you updated with the latest news about Essential Watch.</p>
            <div>
             <p>Visit us!</p><br>
              <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
             <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
             <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
            </div>
        </div>
    </main>
    
    <?php
    require_once './include/footer.php';
    ?>
    
</body>
</html>