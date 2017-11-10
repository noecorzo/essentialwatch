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
    
    <link rel="stylesheet" href="./css/selfCare.css">
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

        <section id="mesSlides">

            <div id="slide1">
                
                <h1>
                <span>Self-care</span> is not an option, <br>it is <span>essential
                </span></h1>
               
            </div>


            <div id="slide2">
                <h2>Oil <span>essential</span> for <span>self-care</span></h2>
                 <p>

                   The essential oil, the most powerful and evolved extract of a vegetal. <br> The composition in active molecules is both very rich and complex, which will determine the multiple properties and activities of it on the body.

                </p>
                
            </div>
            <div id="slide3">
                <h2>The power of nature and high technology,<br> captured in <span>Essential Watch.</span>
                </h2>
            </div>

        </section>

        
             
     <div id = "logos">       
      <figure class="snip1584"><img src="./images/selfCare/stress3.png"/>
			<figcaption>
				<h2><span>Essential Watch</span></h2>
				<h3>relaxes you</h3>
			</figcaption><a href="./selfCareRelaxBoost.php"></a>
		</figure>

		<figure class="snip1584"><img src="./images/selfCare/demotive2.png"/>
			<figcaption>
				<h2><span>Essential Watch</span></h2>
				<h3>boosts you</h3>
			</figcaption><a href="./selfCareRelaxBoost.php"></a>
		</figure>
		
		<figure class="snip1584"><img src="./images/selfCare/febrile2.png"/>
			<figcaption>
				<h2><span>Essential Watch</span></h2>
				<h3>boosts your immunity</h3>
			</figcaption><a href="./selfCareRelaxBoost.php"></a>
		</figure>       
             
        </div>      
             
             
          

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
