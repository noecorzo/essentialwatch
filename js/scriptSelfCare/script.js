var picto = document.getElementsByTagName("figure");
    var figcaption = document.getElementsByTagName("figcaption");
    
    for (var i=0; i<figcaption.length; i++){
        figcaption[i].setAttribute("id", i);
    }
    
    for (var i=0; i<picto.length; i++){
        picto[i].setAttribute("id", i);
        picto[i].addEventListener("mouseover", function(e){
            for(var i=0; i<picto.length; i++){
                picto[i].style.position="relative";
                if(this.id == figcaption[i].id){
                   figcaption[i].style.display="block"; 
                   figcaption[i].style.position="absolute"; 
                   figcaption[i].style.width="290px"; 
                   figcaption[i].style.height="290px"; 
                   figcaption[i].style.background="rgba(51, 51, 51, 0.9)"; 
                   figcaption[i].style.color="white"; 
                   figcaption[i].style.top="5px"; 
                   figcaption[i].style.left="5px"; 
                   figcaption[i].style.textAlign="center"; 
                   figcaption[i].style.paddingTop="100px";  
                   figcaption[i].style.transition="all 2s ease";   
                }  
            }   
        })
        
        picto[i].addEventListener("mouseout", function(e){
            console.log("bonjour");
            
            for(var i=0; i<figcaption.length; i++){
            figcaption[i].style.display="none";
            }    
        });   
    }   