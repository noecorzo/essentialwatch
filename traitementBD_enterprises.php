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


$sql_enterprises = $pdo->query('SELECT nomEnterprise FROM t_enterprise');
$lignes = $sql_enterprises->fetchAll(PDO::FETCH_ASSOC); 

$arrayPourJSON = [];
foreach ($lignes as $key => $ligne){
    $arrayPourJSON[] = $ligne['nomEnterprise'];
}
//var_dump ($arrayPourJSON);
echo json_encode($arrayPourJSON);




    




?>

