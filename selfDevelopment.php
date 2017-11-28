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
     <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/selfDevelopment.css">
    <link rel="stylesheet" href="./css/selfDevelopment-responsive.css">
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
            <h1><span>Essential Watch&trade;</span><br> Your Personal Life Coach</h1>
        </div>
<!--        BLOCK 2 : H2 -->
         <div>
             <h2><span>essential watch&trade;</span> with you</h2>    
        </div>
<!--        BLOCK 3 : BLOCK ORANGE -->
        <div>
            <div>
<!--                img-->
            </div>    
            <div>
                <p>Essential Watch&trade; does way more than just collect and analyse your inputs, it creates an authentic relation with you thanks to its essential oil-release feature.</p>
                 <button class="btnKnowMoreWhite"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
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