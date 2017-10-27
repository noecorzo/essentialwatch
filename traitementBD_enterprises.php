<?php

ob_start();

header("Cache-Control: no-cache"); 
header('content-type:application/json');

require_once('./config/config.php');

try {
    $pdo = new PDO(MYSQL_DSN, DB_USER, DB_PWD);
    
}
catch (PDOException $e) {
    echo $e->getMessage(); // A mettre ABSOLUMENT en commentaire en ligne
    $pdo = null; // fermer la connexion vers la DB 
    die ('Problème technique'); //Prévenir l'utilisateur du problème
}

$sql_enterprises = $pdo->prepare('SELECT idEnterprise, nomEnterprise FROM t_enterprise');

    $sql_characters->bindValue(':house', $_POST['house'], PDO::PARAM_STR);
    $sql_characters->execute();
   
    if ($sql_enterprises->rowCount() > 0) {
        
        $json = '{"familyMembers" : [';
        $tmpArray = [];
        
             while ($row = $sql_characters->fetch(PDO::FETCH_ASSOC)) {
                 $tmpArray [] = json_encode($row);
                 
                 
                    
            } 
        $json.=implode(',',$tmpArray);
        
        $json = $json.']}';
        echo $json;
    
    
        } else {
                echo '{"familyMembers":[]}';
        }








$sql_enterprises = $pdo->query('SELECT idEnterprise, nomEnterprise FROM t_enterprise');
$lignes = $sql_enterprises->fetchAll(PDO::FETCH_ASSOC); 

$arrayPourJSON = [];
foreach ($lignes as $key => $ligne){
    $arrayPourJSON[] = $ligne['nomEnterprise'];
}
var_dump ($arrayPourJSON);
echo json_encode($arrayPourJSON);




    

ob_flush(); 


?>

