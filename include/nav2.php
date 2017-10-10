<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Essential Watch</title>
   
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
   
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
            
          <form name="Login" method="post" id="formulaire">
              Name: <input type="name">
              Password: <input type="password">
              <button>Send</button>
          </form>
          
      </div>   
   </header> 
   
   <section  id="submenuDiscover">
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
    //buttonLogIn
    function activerLogIn(id) {
        document.querySelector('div > button').addEventListener('click', function(){
          
            document.querySelector('form').classList.toggle('visible');
//            btnLogIn.style.display = 'none';
        });

    }

    activerLogIn(formulaire);
    
    //submenu    
    function activerSubMenu(id) {
        document.querySelector('ul > li:nth-of-type(1) ').addEventListener('mouseover', function(){
            document.querySelector('section:nth-of-type(1)').style.display = 'block';
        });
    }
    
    function desactiverSubMenu(id){
    document.querySelector('#submenuDiscover').addEventListener('mouseleave', function(e){   
        console.log (e.currentTarget);
        document.querySelector('#submenuDiscover').style.display = 'none';
        });
        
    }

    activerSubMenu(submenuDiscover);
    desactiverSubMenu(submenuDiscover);
    
    // desactiver a gauche
    document.querySelector('nav > ul ').addEventListener('mouseleave', function(e){
        console.log (e.relatedTarget.nodeName);
        if (e.relatedTarget.nodeName == "NAV" ){
            document.querySelector('#submenuDiscover').style.display = 'none';
        }
    
            
    });
        
    
    
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