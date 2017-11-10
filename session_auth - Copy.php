<?php
$sessionTimeOut = 600; // 60sec * 10 = 10 minutes

if (session_status() !== PHP_SESSION_ACTIVE) {
//    session_start();
    echo 'bonjour';
    header("Location: ./app.php"); 
}

// Vérification de l'existance de la session
//if (!isset($_SESSION['lastAccess'])){
if (!isset($_SESSION['userName'])){
    $_SESSION = [];

    // Destroy cookie
    if (session_status() == PHP_SESSION_ACTIVE) { 
        session_destroy(); 
    }
    
    header("Location: ./session_login.php"); 
    die();
}else{
    echo 'hello';
    
}

// ToDo : tests de sécurité (double IP, ...)

// Timeout
if (time() - $_SESSION['lastAccess'] > $sessionTimeOut) {
    $_SESSION = [];

    // Destroy cookie
    if (session_status() == PHP_SESSION_ACTIVE) { 
        session_destroy(); 
    }
    
    header("Location: ./session_login.php"); 
    die();
}

$_SESSION['lastAccess'] = time();
?>