<?php
ob_start();
require_once('./session_auth.php');
require_once('./config/config.php');
try {
    $pdoEW = new PDO( MYSQL_DSN , DB_USER , DB_PWD ) ;
} catch ( PDOException $e ) {
    echo $e->getMessage(); 
    $pdoEW = null ; 
    die () ; 
}
$msg = " ";

if(isset($_POST['first_name'],$_POST['last_name'],$_POST['email'],$_POST['message'])){
    $sql_contact= $pdoEW->prepare('INSERT INTO t_contact (Id, lastname, firstname,                                      adressemail, message) 
                                   VALUES(null,:last_name, :first_name, :email,:message)');                               
    $sql_contact->bindValue(':first_name',$_POST['first_name'], PDO::PARAM_STR);
    $sql_contact->bindValue(':last_name',$_POST['last_name'], PDO::PARAM_STR);
    $sql_contact->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
    $sql_contact->bindValue(':message',$_POST['message'], PDO::PARAM_STR);
    
    if ( $sql_contact->execute() && $_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['message'] ) {
        $msg = "Thank you for contacting Essential Watch. We will be in touch with you very soon.";
    } else {
        $msg = "Sorry, something went wrong. Try again later, please.";
    }
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
<main>  
    <form name="formulaire" method="POST" action="<?php echo basename($_SERVER['PHP_SELF']); ?>"> 
       <h2>Contact us</h2> 
        <input type="text" name="first_name" placeholder="First Name">
        <input type="text" name="last_name" placeholder="Last Name">
        <input type="text" name="email" placeholder="Email"/>
        <textarea type="text" name="message" maxlength="1000" cols="25" rows="10" placeholder="Type your message..."></textarea>
         <button>Submit</button>

         <?php
            echo '<p>' . $msg . '</p>';

        ?>
    </form>
    <div>
       <div>
             <p><a href="">Essential Watch</a></p>
             <p><i class="fa fa-map-marker" aria-hidden="true"></i> Rue Gaucheret 98, 1030 Brussels (Belgium)</p>
             <p><i class="fa fa-phone" aria-hidden="true"></i> 0496 ** ** **</p>
             <p><i class="fa fa-envelope" aria-hidden="true"></i> info@e-watch.com</p>
        </div>
        <div>
             <i class="fa fa-facebook" aria-hidden="true"></i>
             <i class="fa fa-twitter" aria-hidden="true"></i>
             <i class="fa fa-instagram" aria-hidden="true"></i>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2518.2356139506733!2d4.358573615804967!3d50.863837679534534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c39e03423535%3A0xb4e58e8abb2713a3!2sRue+Gaucheret+88%2C+1030+Schaerbeek!5e0!3m2!1ses!2sbe!4v1511430536554" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</main>
<?php
    require_once './include/footer.php';
?>
</body>
</html>
<?php
    ob_flush();
?>