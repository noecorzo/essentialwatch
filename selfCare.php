<?php
ob_start();
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />


    <title>Essential Watch&trade; Self-care</title>
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
    $page = 'selfCare';
    require_once './include/nav.php'
    ?>
        <main>

            <section id="mesSlides">
                <div id="slide1">
                    <h2>Essential oil for <span>self-care</span></h2>
                    <p>
                        The <span>essential oil</span> is a highly concentrated vegetal extract. <br><br>
                        <!--                        is a highly concentrated vegetal extract.                        -->
                        Elaborated from active molecules both very rich and complex, the <span>essential oils</span> will benefit your body in many ways.

                    </p>
                </div>
                <div id="slide2">
                    <h2>The power of nature and high technology, captured in<br> <span>Essential Watch.</span></h2>

                </div>

            </section>

            <div id="selfCareEssential">
                <h2><span>self care</span> is not an option, it is essential</h2>

            </div>


            <div id="sectionPicto">
                <figure class="picto">
                    <img src="./images/selfCare/zen.svg" />
                    <figcaption>
                        <h2><span>Essential Watch&trade;</span><br> relaxes you</h2>
                        <a href="./selfCareRelaxBoost.php">
				          <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                       </a>
                    </figcaption>
                </figure>
                <figure class="picto"><img src="./images/selfCare/boost.svg" />
                    <figcaption>
                        <h2><span>Essential Watch&trade;</span><br>boosts you</h2>
                        <a href="./selfCareRelaxBoost.php"> 
				        <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
				    </a>
                    </figcaption>

                </figure>

                <figure class="picto"><img src="./images/selfCare/imune.svg" />
                    <figcaption>
                        <h2><span>Essential Watch&trade;</span><br>improves your immunity</h2>
                        <a href="./selfCareRelaxBoost.php"> 
				       <button class="btnKnowMore" id="btnKnowMore3"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
				    </a>
                    </figcaption>
                </figure>

            </div>

        </main>

        <?php
    require_once './include/footer.php'
    ?>


</body>

<script src="./js/scriptSelfCare/script.js"></script>
</html>
<?php
    ob_flush();
?>
