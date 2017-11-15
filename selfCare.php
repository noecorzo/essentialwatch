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



            <div id="logos">
                <figure class="picto">
                    <img src="./images/selfCare/zen-petit.svg" />

                    <figcaption>
                        <h2><span>Essential Watch</span></h2>
                        <h3>relaxes you</h3>

                    </figcaption>

                    <a href="./selfCareRelaxBoost.php"></a>
                </figure>

                <figure class="picto">
                    <img src="./images/selfCare/boost-petit.svg" />
                    <figcaption>
                        <h2><span>Essential Watch</span></h2>
                        <h3>boosts you</h3>
                    </figcaption>
                    <a href="./selfCareRelaxBoost.php"></a>
                </figure>

                <figure class="picto">
                    <img src="./images/selfCare/dna.svg" />
                    <figcaption>
                        <h2><span>Essential Watch</span></h2>
                        <h3>reinforce your immunity</h3>
                    </figcaption>
                    <a href="./selfCareRelaxBoost.php"></a>
                </figure>

            </div>




        </main>



        <?php
    require_once './include/footer.php'
    ?>

            <script src="./js/scriptSelfCare/script.js"></script>


</body>
<script>
    //    Figure
    var picto = document.getElementsByTagName("figure");

    //    Figcaption
    var figcaption = document.getElementsByTagName("figcaption")


    //    Boucle
    for (var i = 0; i < figcaption.length; i++) {
        figcaption[i].setAttribute("id", i);
    }

    for (var i = 0; i < picto.length; i++) {

        picto[i].setAttribute("id", i);

        picto[i].addEventListener("mouseover", function(e) {

            for (var i = 0; i < picto.length; i++) {
                //                var picto = document.getElementsByTagName("figure");
                console.log(this.id);
                console.log(figcaption.id);

                if (this.id == figcaption.id) {
                    figcaption.style.display = "block";
                    console.log(figcaption.id);
                }

            }

        });
    }



    //    console.log(picto[0].id);
    //    console.log(figcaption);



    //    function afficheFigcaption(e) {
    //        if(picto.id == figcaption.id){
    //           figcaption.style.display="block";
    //            
    //        } else{
    //            console.log('non');
    //        }
    //    }
    //    
    //    afficheFigcaption();

    //    var picto = document.getElementsByClassName("picto");
    //    var figcaption = document.getElementsByTagName("figcaption");
    //    
    //    for(var i=0; i<picto.length; i++){
    //        
    //        picto[i].addEventListener("mouseover",function(e){
    //            
    //            for (var i=0; i<picto.length; i++){
    //           figcaption[i].style.display="block";  
    //                
    //            }
    //                
    //            });
    //            
    //           
    //    
    ////            for(var i=0; i<figcaption.length; i++){
    ////                figcaption[i].classList.toggle("visible");
    ////                console.log("bonjour");
    ////            }
    //   
    //    
    ////        });
    //    
    //        
    //        
    //        
    //        
    // };
    //

</script>



</html>
