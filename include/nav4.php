<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Essential Watch</title>

    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./jQuery/jquery-3.2.1.slim.js"></script>

    <script>
        $(document).ready(function(e) {

            //            $('.nav li > .sub-menu').parent().on(function() {
            //                
            //              var submenu = $(this).children('.sub-menu');
            //              if ($(submenu).is(':hidden')) {
            //                $(submenu).show();
            //              } else {
            //                $(submenu).hide();
            //              }
            //            });

            //            $('.nav > li').hover(function(e){
            //                $(this).children()[1].show();
            //                //console.log($(this).children()[1]);
            //            }, function(e){
            //                $(this).children()[1].hide();
            //            })
        })

    </script>

</head>

<body>
    <header>
        <div>
            <a href="index.php"><img src="./images/logo/logo-FIN.png" alt="Logo Essential Watch"></a>
            <nav>
                <ul class="nav">
                    <li><a href="">Discover</a>
                        <ul class="sub-menu">
                            <li><a href="discover.php">Essential Watch</a></li>
                            <li><a>Our Technology</a></li>
                            <li><a>Scientific References</a></li>
                            <li><a>Gallery</a></li>
                        </ul>
                    </li>
                    <li><a href="selfDevelopment.php">Self-development</a>
                        <ul class="sub-menu">
                            <li><a>Personnaly</a></li>
                            <li><a>Professionally</a></li>
                        </ul>
                    </li>
                    <li><a href="selfCare.php">Self-care</a>
                        <ul class="sub-menu">
                            <li><a>We Propose</a></li>
                            <li><a>Contraindications</a></li>
                        </ul>
                    </li>
                    <li><a href="app.php">App</a></li>
                    <li><a href="">Contact</a>
                        <ul class="sub-menu">
                            <li><a>How to buy</a></li>
                            <li><a>Technical Support</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>

            <button><i class="fa fa-user fa-2x" aria-hidden="true"></i></button>
            <form name="Login" method="post">
                Name: <input type="name"> Password: <input type="password">
                <button>Send</button>
            </form>
        </div>
    </header>





</body>

</html>
