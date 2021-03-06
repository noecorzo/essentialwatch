<?php
ob_start();
$page = 'app';
require_once('./session_auth.php');
?>
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Essential Watch&trade; App</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



    <!-- CSS -->
    <!--normalize-->
    <link rel="stylesheet" href="./css/normalize.css">

    <!--fontawesome-->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!--app-->
    <link rel="stylesheet" href="./css/app.css">

    <!--responsive-->
    <link rel="stylesheet" href="./css/app-responsive.css">

    <!--nav-->
    <link rel="stylesheet" href="./css/nav.css">

    <link rel="stylesheet" href="./css/footer.css">

    <!--animate-->
    <link rel="stylesheet" href="./css/app-animate.css">

    <!-- WOW Pluggin-->
    <script src="./js/app/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>

    <!-- Lien vers dossier jQuery et notre page JS (pour faire fonctioner le bouton LogIn - Noelia) -->
    <script src="./jQuery/jquery-3.2.1.min.js"></script>
    <script src="./js/nav/script.js"></script>
</head>


<body>
    <!-- NAV -->
    <?php
            require_once './include/nav.php'
        ?>

        <section id="header">

            <div class="bg-img">
                <!-- Animation - image smartphone -->
                <div class="app-showcase wow fadeInDown" data-wow-delay=".3s">

                    <!-- image smartphone -->
                    <img id="smartphone" src="./images/app/iphonex.svg" alt="iphone">
                </div>

                <div>
                    <div class="block wow fadeInRight" data-wow-delay="1s">

                        <!-- App icon + link -->

                        <img id="app" src="./images/app/appIcon.png" alt="essential app">

                        <h2>Essential App, the only app you need.</h2>

                        <!-- App Store icons -->
                        <div class="download-btn">
                            <a href="#" class="andriod">
                                    <img src="./images/app/android-button.png" alt="">
                                </a>
                            <a href="#" class="apple">
                                    <img src="./images/app/apple-button.png" alt="">
                                </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>






        <section id="service">
            <div class="title" data-wow-delay=".5s">
                <h2>Useful Tools For Your Life</h2>
                
            </div>

            <!-- Icons-->

            <div class="serviceTools">
                <div class="block wow fadeInLeft" data-wow-delay=".7s">
                    <img src="./images/app/calendar-design.svg" alt="">
                    <h3>Day by day</h3>
                    <!--Day after day-->
                    <!--From day to day-->

                    <p>
                        Optimize your field interventions.
                    </p>
                </div>

                <div class="block wow fadeInLeft" data-wow-delay=".8s">
                    <img src="./images/app/clock-design.svg" alt="">
                    <h3>Timeline &amp; Milestone</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing.
                    </p>
                </div>

                <div class="block wow fadeInLeft" data-wow-delay="1.1s">
                    <img src="./images/app/partners-design.svg" alt="">
                    <h3>Partners</h3>
                    <p>
                        Increase your partners' satisfaction by answering their needs.
                    </p>
                </div>
            </div>
        </section>



        <section id="showcase">
            <div class="container">
                <div class="block text-center wow fadeInUp" data-wow-delay=".5s">
                    <img src="./images/app/appPreview.png" alt="mobile app preview">
                </div>
            </div>
        </section>




        <section id="feature">
            <!--INTRO FEATURES-->

            <div class="title" data-wow-delay=".5s">
                <h2>Essential Features</h2>

            </div>

            <!--FEATURES-->
            <div class="featureTools">
                <!--FEATURES - LEFT-->
                <div class="block">

                    <!--PROGRESS-->
                    <div class="media wow fadeInDown" data-wow-delay=".5s">
                        <img class="media-object pull-left" src="./images/app/progress-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Visualize your progress</h4>
                            <p>Keep track of your daily evolution and see how you manage your emotional moments of the day.</p>
                        </div>
                    </div>

                    <!--KNOW YOU-->
                    <div class="media wow fadeInDown" data-wow-delay=".8s">
                        <img class="media-object pull-left" src="./images/app/knowYou-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Get to know you</h4>
                            <p>Identify your best and worst feelings to take control of stress.</p>
                        </div>
                    </div>

                    <!--HEART RATE-->
                    <div class="media wow fadeInDown" data-wow-delay="1.1s">
                        <img class="media-object pull-left" src="./images/app/heart-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Heart rate</h4>
                            <p>Analyze your heart activity to know more about your natural boost, stressful or relaxing moments.</p>
                        </div>
                    </div>
                </div>



                <!--FEATURES - RIGHT-->

                <div class="block">
                    <!--NOTIFICATIONS-->
                    <div class="media wow fadeInDown" data-wow-delay="1.4s">
                        <img class="media-object pull-left" src="./images/app/notifications-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Notifications</h4>
                            <p>Get notified when it's time to do some relaxing or energizing exercices.</p>
                        </div>
                    </div>

                    <!--CALENDAR-->
                    <div class="media wow fadeInDown" data-wow-delay="1.7s">
                        <img class="media-object pull-left" src="./images/app/calendar-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Calendar</h4>
                            <p>Schedule your meetings, lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, vitae!.</p>
                        </div>
                    </div>

                    <div class="media wow fadeInDown" data-wow-delay="2s">
                        <img class="media-object pull-left" src="./images/app/progress-design.svg" alt="Image">
                        <div class="media-body">
                            <h4 class="media-heading">Visualize your progress</h4>
                            <p>Keep track of your daily evolution and see how you manage your emotional moments of the day.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- FOOTER -->
        <?php
            require_once './include/footer.php'
        ?>


</body>

</html>
<?php
    ob_flush();
?>
