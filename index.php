<?php
ob_start();
require_once('./session_auth.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Essential Watch&trade;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/screen.min.css">
    <link rel="stylesheet" href="./css/screen-reponsive.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <!--    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


    <script src="./jQuery/jquery-3.2.1.min.js"></script>

    <script src="./js/nav/script.js"></script>


</head>

<body>
   <!-- INCLUDE NAVIGATION -->
    <?php
    require_once './include/nav.php';
    ?>

        <main id="topPage">
            <article data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;">

                <div data-top=" opacity:1; transform[swing]:scale(1) " data-top-bottom=" opacity:0; " data-anchor-target="article">
                    <h1>ESSENTIAL WATCH</h1>
                    <p>The best of technology, nature and personal coaching assembled</p>
                </div>
            </article>


            <!-- PARALAX 1 -->
            <section>
                <div class="paralax1" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;">


                    <div class="paralaxtext" data-bottom-top=" opacity:0; transform[swing]:scale(0.5) " data-top=" opacity:1; transform[swing]:scale(2) ">
                        <h2> Essential Watch&trade; Helps you to Succeed</h2>
                    </div>
                </div>
            </section>


            <!-- PARALAX 2 -->
            <section>
                <div class="paralax2" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;">
                    <div class="paralaxtext" data-bottom-top=" opacity:0; transform[swing]:scale(0.5) " data-top=" opacity:1; transform[swing]:scale(2) ">
                        <h2> To control your stress,</h2>
                    </div>
                </div>
            </section>


            <!-- PARALAX 3 -->
            <section>
                <div class="paralax3" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -200px;" data-bottom-top="background-position: 50% 100px;">
                    <div class="paralaxtext" data-bottom-top=" opacity:0; transform[swing]:scale(0.5) " data-top=" opacity:1; transform[swing]:scale(2) ">
                        <h2> and gives you energy<br> to manage your personal life</h2>
                    </div>
                </div>
            </section>

        </main>

        <!-- INCLUDE FOOTER-->
        <?php
    require_once './include/footer.php';
    ?>

</body>

<!-- SCRIPT -->
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>

<script type="text/javascript">
    var s = skrollr.init({
        forceHeight: false
    });

</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js'></script>

</html>

<?php
    ob_flush();
?>
