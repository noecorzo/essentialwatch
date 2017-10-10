<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential Watch</title>
   
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <script src="./jQuery/jquery-3.2.1.slim.js"></script>
<!--
    <script>
          $(document).ready(function(e){
            $("nav > ul > li:nth-of-type(2) > a").click(funtion(e){
                $("#submenuSelfDevelopment").show(); 
                                    });
    });
    </script>
-->
</head>
<body>
   <header>
      <div>
         <a href="index.php"><img src="./images/logo/logo-FIN.png" alt="Logo Essential Watch"></a>
         <nav>
           <ul>
               <li><a href="discover.php">Discover</a></li>
               <li><a href="selfDevelopment.php">Self-development</a></li>
               <li><a href="">Self-care</a></li>
               <li><a href="">App</a></li>
               <li><a href="">Contact</a></li>
           </ul>
       </nav>
         
        <button><i class="fa fa-user fa-2x" aria-hidden="true"></i></button>   
          <form name="Login" method="post">
              Name: <input type="name">
              Password: <input type="password">
              <button>Send</button>
          </form>
      </div>   
   </header> 
   
   <section id="submenuDiscover">
          <ul>
              <li><a>Essential Watch</a></li>
              <li><a>Our Technology</a></li>
              <li><a>Scientific References</a></li>
              <li><a>Gallery</a></li>
          </ul> 
    </section> 
       
<!--
    <section>
        <ul>
            <li><a>Professionally</a></li>
            <li><a>Personally</a></li>
        </ul>
    </section>
-->
        
</body>
<script>
    function activerLogIn() {
        document.querySelector('div > button').addEventListener('click', function(){
            
            document.querySelector('form').classList.toggle('visible');
//            btnLogIn.style.display = 'none';
        });

    }

    activerLogIn();
    
    function activerSubMenuDiscover() {
        
        document.querySelector('ul > li:nth-of-type(1) > a').addEventListener('mouseover', function(){
            
            document.querySelector('section:nth-of-type(1)').style.display = 'block';
        });
        
//        document.querySelector('ul > li:nth-of-type(1) > a').addEventListener('mouseout', function(){
//            
//            document.querySelector('section:nth-of-type(1)').style.display = 'none';
//        });

    }
    
    function desactiverSubMenuDiscover(){
    document.querySelector('#submenuDiscover').addEventListener('mouseout', function(){
            
            document.querySelector('#submenuDiscover').style.display = 'none';
        });
        
    }

    
    activerSubMenuDiscover();
    desactiverSubMenuDiscover()
    /*
    function activerSubMenuSelfDev() {
        
        document.querySelector('ul > li:nth-of-type(2) > a').addEventListener('mouseover', function(){
            
            document.querySelector('section:nth-of-type(2)').style.display = 'block';
        });
        
//        document.querySelector('ul > li:nth-of-type(2) > a').addEventListener('mouseout', function(){
//            
//            document.querySelector('section:nth-of-type(2)').style.display = 'none';
//        });

    }

//    activerSubMenuSelfDev();
    

  */
    
    
        
</script>

</html>