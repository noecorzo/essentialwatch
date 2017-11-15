<?php
ob_start();
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential Watch Discover</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     
<!--     normalize-->
     <link rel="stylesheet" href="./css/normalize.css">
<!--style bxslider-->
<link rel="stylesheet" href="./js/discover/bxslider/dist/jquery.bxslider.min.css">
<!--style-->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/discover.css">
<!--font-awesome-->
    <link rel="stylesheet" href="./css/font-awesome.min.css">
<!-- police-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
<!--jQuery  -->
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    
<!--    bxSlider-->
   <script src="./js/discover/bxslider/dist/jquery.bxslider.min.js"></script>
   
   <!--script-->
    <script src="./js/nav/script.js"></script>
    <script src="./js/discover/script.js"></script>
    
    
    
      
    
        
</head>
<body>
  <?php
    require_once './include/nav.php';
    ?>
<!--    SECTION 1 - SLIDER -->
    <section>
         <ul class="slider">
             <li><img id="img1" src="./images/discover/mecanismeMontre3.jpg"></li>
             <li><img id="img2" src="./images/discover/img1.jpg"></li>
             <li><img id="img3" src="./images/discover/imgMontres.jpg"></li>
         </ul>   
    </section>
     
   <main>
<!--      SECTION 2 : titre + icons avec texte-->
       <section>
           <div>
                <h1>An <strong>essential</strong> in personal and professional development</h1> <h2>Combining <strong>nature and high technology</strong></h2>
           </div>
           <div>
               <div>
                   <i class="fa fa-line-chart fa-4x" aria-hidden="true"></i>
                   <p>Reach the highest performance rates at work</p>
               </div>
               <div>
                   <i class="fa fa-heartbeat fa-4x" aria-hidden="true"></i>
                   <p>Control your stress and your emotions</p>
               </div>
               <div>
                   <i class="fa fa-sun-o fa-4x" aria-hidden="true"></i>
                   <p>Manage your energy all day long</p>
               </div>
               <div>
                   <i class="fa fa-frown-o fa-4x" aria-hidden="true"></i>
                   <p>Take care of yourself when you are not feeling good</p>
               </div>
       </div>
       </section>
       
       <div><h2>How does it work?</h2></div>
       
<!--SECTION 3 : Our Technology-->
       <section>          
           <div>   
           </div>
           <div>
                <h3>Our Technology</h3>
<!--                <i class="fa fa-tint fa-3x" aria-hidden="true"></i>-->
                <p>Three reservoirs.</p>
                <p> Three synergies of essential oils.</p>
                <p> Plenty of small filaments to difuse their properties into your body.</p>
                <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Know more</button>
           </div>
       </section>
       
<!--       SECTION 4 : How to connect-->
       
       <section>
           <div>
                <h3>How to connect</h3>
<!--                <i class="fa fa-usb fa-3x" aria-hidden="true"></i>-->
                <p>Put on your Essential Watch into your wrist.</p>
                <p>Choose the diffusion mode better suits you: manually or automatically.</p>
                <p>Let Essential Watch change your life.</p>
                <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Know more</button>  
           </div>
           <div>   
           </div>
       </section>
       
<!--       SECTION 5 : Scientific studies-->
       
       <div><h2>Based on <strong>scientific studies</strong></h2></div>
       <section>
          
           <div>
               
           </div>  
       </section>   
   </main>
   
   
   
   
   
   <?php
    require_once './include/footer.php';
    ?>
   
    

    
</body>
</html>
<?php
    ob_flush();
?>