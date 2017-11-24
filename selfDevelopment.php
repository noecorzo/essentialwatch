<?php
ob_start();
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential Watch&trade; Self-development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <link rel="stylesheet" href="./css/normalize.css">
     <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/selfDevelopment.css">
    <link rel="stylesheet" href="./css/selfDevelopment-responsive.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>     
</head>
<body>  
    <?php
        require_once './include/nav.php'
    ?>  
    <main>
<!--       BLOCK 1 : IMG FOND + H1-->
        <div>
            <h1><span>Essential Watch</span><br> Your Personal Life Coach</h1>
        </div>
<!--        BLOCK 2 : H2 -->
         <div>
             <h2><span>essential watch</span> with you</h2>    
        </div>
<!--        BLOCK 3 : BLOCK ORANGE -->
        <div>
            <div>
<!--                img-->
            </div>    
            <div>
                <p><span>essential watch</span> fait plus que collecter et interpréter vos données, elle permet une réel interaction grâce à sa capacité à libérer une synergie d'huile essentielle.</p>
                <a href="">
                 <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                 </a>
            </div>         
        </div> 
<!--        BLOCK 4 : PROFESSIONALLY   -->
        <div> 
            <div>
                <!--img-->    
            </div>
            <div class="professionally">
                    <h2>professionally</h2>
                    <p>Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium</p>
                    <a href="">
                        <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                     </a>        
            </div>
        </div>
<!--        BLOCK 5 : PERSONALLY -->
        <div>     
            <div>
                <h2>personally</h2>
                <p>Oportunum est, ut arbitror, explanare nunc causam, quae ad exitium</p>
                <a href="">
                    <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                </a>       
            </div>
            <div>   
                 <!--img-->
            </div>    
        </div> 
    </main>
    <?php
    require_once './include/footer.php'
    ?>   
</body>   
</html>
<?php
    ob_flush();
?>