<?php
ob_start();
require_once('./session_auth.php');
require_once('./config/config.php');
// Use Data Source Name appropriate (DSN) to DB type
try {
    $pdoEW = new PDO( MYSQL_DSN , DB_USER , DB_PWD ) ;
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch ( PDOException $e ) {
    echo $e->getMessage(); // Affiche le message d'erreur !
    $pdoEW = null ; // Ferme la DB
    die () ; // Fin du script ou redirection, info utilisateur
//    var_dump($pdoEW->errorInfo());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <meta name="viewport" content="width=device-width,
initial-scale=1.0"/>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/contact.css">
<!--font-awesome-->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
<!-- police-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">     
<!--jQuery  -->
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
<!-- Script nav   -->
    <script src="./js/nav/script.js"></script>

</head>
<body>
<?php
    require_once './include/nav.php';

?>
<?php     
if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['message'])) {
    $sql_contact= $pdoEW->prepare('INSERT INTO t_contact (Id, lastname, firstname, adressemail, message) 
                                   VALUES                (null,:last_name, :first_name, :email, :message)');                               
    $sql_contact->bindValue(':first_name',$_POST['first_name'], PDO::PARAM_STR);
    $sql_contact->bindValue(':last_name',$_POST['last_name'], PDO::PARAM_STR);
    $sql_contact->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
    $sql_contact->bindValue(':message',$_POST['message'], PDO::PARAM_STR);
    
    if ( $sql_contact->execute() && $_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['message'] ) {
        $MessageEnvoye = true;
    } else {
        $MessageEnvoye = false;
    }
   
    //var_dump($sql_contact->errorInfo());
    if($MessageEnvoye){
        echo '<p id="sucess"> We Will be in touch with you very Soon. Thank You for contacting Essential Watch</p>';
            
    }else{
        echo '<p id="fail"> Please, try again to send us you\'re message. Essential Watch</p>';
            
    }  
}

?> 
<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0"> 
<source src="./images/contact/cq5dam.video.mp4" type="video/webm"> 
<source src="./images/contact/cq5dam.video.mp4" type="video/mp4"> Video not supported </video>

    <h1>Contact Us</h1>
<form id="formcontact" name="formulaire" method="POST" action="<?php echo basename($_SERVER['PHP_SELF']); ?>">  
    <div>
        <input class="inputcontact" type="text" id="first_name" name="first_name" placeholder="First Name">
        <input class="inputcontact" type="text" id="last_name" name="last_name" placeholder="Last Name">
         <input class="inputcontact" type="text" id="email" name="email" placeholder="E-Mail"/>
    </div>
     <textarea type="text" id="message" name="message" maxlength="1000" cols="25" rows="10"placeholder="Type you're message..."></textarea>
     <button id="button">Submit</button>
</form>
<?php
    require_once './include/footer.php';
?>
</body>
</html>

<?php
    ob_flush();
?>