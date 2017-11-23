var picto = document.getElementsByTagName("figure");
var figcaption = document.getElementsByTagName("figcaption");
    
    for (var i=0; i<figcaption.length; i++){
        figcaption[i].setAttribute("id", i);
        console.log(figcaption[i]);
    }
    
    for (var i=0; i<picto.length; i++){
        picto[i].setAttribute("id", i);
        picto[i].addEventListener("mouseover", function(e){
            for(var i=0; i<picto.length; i++){

                
                if(this.id == figcaption[i].id){ 
                   figcaption[i].style.display="block"; 
 
                }  
            }   
        });
        
        picto[i].addEventListener("mouseout", function(e){            
            for(var i=0; i<figcaption.length; i++){
            figcaption[i].style.display="none";
            }    
        });   
    }   