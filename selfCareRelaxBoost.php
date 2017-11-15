<?php
ob_start();
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Essential Watch Self-development</title>
    <link rel="stylesheet" href="./css/normalize.css">
    
    <link rel="stylesheet" href="./css/selfCareRelaxBoost.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--    <script type="text/javascript"src= "./parallax/jquery.parallax-1.1.3.js"></script>-->
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>
   
</head>

<body>

    <?php
    require_once './include/nav.php'
    ?>
         <main>

            
             
     <section id="container">

            <div>
<!--                  ici image nth-child(1)voir:css -->
            </div>
           
            
            <div id ="ul">
                <h2>Essentiel Watch vous relax</h2>
                <ul>
                    <li>Mandarine: Relaxante et calmante</li>
                    <li>Lavande vraie: Anti-angoisse, anti-stress et favorise la détente</li>
                    <li>Ylang-Ylang: Relaxante nerveuse</li>
                    <li>Camomille noble: Calmante et relaxante</li>
                
                </ul>
                  
            </div>

            <div id="ul">
               <h2>Boostez-vous</h2>
                <ul>
                    <li>Menthe poivré: pour ses effets...</li>
                    <li>Citronnier: pour ses effets...</li>
                    <li>Pin-sylvestre: pour ses effets...</li>
                    <li>Cannelier de Chine: pour ses effets...</li>
                
                </ul>
                   
            </div>
            <div>
<!--                  ici image nth-child(4)voir:css -->
            </div>
          
            <div>
<!--                    ici image nth-child(5)voir:css -->
            </div>
            <div>
                 <h2>Stimuler votre immunité</h2>
                <ul>
                    <li>Ravintsara: pour ses effets...</li>
                    <li>Eucalyptus radié: pour ses effets...</li>
                    <li>Tea-tree: pour ses effets...</li>
                    <li>Thym vulgaire: pour ses effets...</li>
                
                </ul>
            </div>

        </section>
              


    </main>
    
    

        <?php
    require_once './include/footer.php'
    ?>

<script src="./js/scriptSelfCare/script.js"></script>
  

</body>



</html>
<?php
    ob_flush();
?>
