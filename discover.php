<?php
ob_start();
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Essential Watch&trade; Discover</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--     normalize-->
    <link rel="stylesheet" href="./css/normalize.css">
    <!--style bxslider-->
    <link rel="stylesheet" href="./js/discover/bxslider/dist/jquery.bxslider.min.css">
    <!--style-->
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/discover.min.css">
    <link rel="stylesheet" href="./css/discover-responsive.min.css">
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
        <!--    BLOCK 1 (section 1) - SLIDER -->
        <section>
            <ul class="slider">
                <li><img id="img1" src="./images/discover/slider-2montres.png" alt="montre essential watch"></li>
                <li><img id="img2" src="./images/discover/front-slider765.png" alt="montre essential watch"></li>
                <li><img id="img3" src="./images/discover/appPreview.png" alt="app essential watch"></li>
<!--                <li><img id="img3" src="./images/discover/slider-mobile.png" alt="app essential watch"></li>-->
            </ul>
        </section>

        <main>
            <!--      BLOCK 2 : titre + SECTION 1 du main (icons + texte) -->
            <section>
                <div>
                    <h1>An <strong>essential</strong> in personal and professional development</h1>
                    <h2>Combining <strong>nature and high technology</strong></h2>
                </div>
                <div>
                    <div>
                        <img src="./images/discover/progress-design-white.svg" alt="progress">
                        <p>Reach the highest performance rates</p>
                    </div>
                    <div>
                        <img src="./images/discover/heart-design-white.svg" alt="heart">
                        <p>Control your stress and your emotions</p>
                    </div>
                    <div>
                        <img src="./images/discover/clock-desing-white.svg" alt="clock">
                        <p>Manage your energy all day long</p>
                    </div>
                    <div>
                        <img src="./images/discover/drop-design-white.svg" alt="drop">
                        <p>Take care of yourself when you feel the need</p>
                    </div>
                </div>
            </section>

            <!--BLOCK 3-->
            <!--SECTION 2 du main : Our Technology-->
            <section>
                <div>
                </div>
                <div>
                    <h3>Our Technology</h3>
                    <p>Three reservoirs.</p>
                    <p> Three synergies of essential oils.</p>
                    <p> Plenty of small filaments to difuse their properties into your body.</p>
                    <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                </div>
            </section>

            <!--SECTION 3 du main : How to connect-->

            <section>
                <div>
                    <h3>How to connect</h3>
                    <p>Put on your Essential Watch&trade; to your wrist.</p>
                    <p>Choose the diffusion mode that suits you the best: manually or automatically.</p>
                    <p>Let Essential Watch&trade; change your life.</p>
                    <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i> Learn more</button>
                </div>
                <div>
                </div>
            </section>

            <!--SECTION 4 : Scientific studies-->

            <div>
                <h2>Based on <strong>scientific studies</strong></h2>
            </div>
            <section>

                <div>
                    <figure>
                        <img src="./images/discover/pubmed-orange.png">
                        <figcaption>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quae non magnam nobis dolores veritatis!</p>
                            <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="https://www.ncbi.nlm.nih.gov/pubmedhealth/PMHT0025082/" target="_blank"> Read more</a></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./images/discover/doterra-orange.png">
                        <figcaption>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quae non magnam nobis dolores veritatis!</p>
                            <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="https://www.doterra.com/US/en/using-essential-oils" target="_blank"> Read more</a></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./images/discover/achs-orange.png">
                        <figcaption>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quae non magnam nobis dolores veritatis!</p>
                            <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="http://info.achs.edu/blog/depression-and-anxiety-can-essential-oils-help" target="_blank"> Read more</a></button>
                        </figcaption>
                    </figure>
                    <figure>
                        <img src="./images/discover/chopracenter-orange.png">
                        <figcaption>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores quae non magnam nobis dolores veritatis!</p>
                            <button class="btnKnowMore"><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="https://www.chopra.com/articles/4-aromatherapy-recipes-to-boost-your-immune-system#sm.001w5yftcb97fky115v2f9ql01th5" target="_blank"> Read more</a></button>
                        </figcaption>
                    </figure>

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
