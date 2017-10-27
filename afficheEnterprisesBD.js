//document.querySelector('select').addEventListener("click", function(e){
    
//    console.log('click');
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function(e){
        if (xhr.readyState == 4){

            if (xhr.status == 200){

                var objetJSON = JSON.parse(xhr.responseText);
                console.log(objetJSON);
                
                if(document.querySelector('#selectEnterprise').length == 1){
                    for (var i=0; i<objetJSON.length; i++){
                        var monOption = document.createElement('option');
                        monOption.innerHTML = objetJSON[i];
                        monOption.setAttribute('value', objetJSON[i]);
                        document.querySelector('#selectEnterprise').append(monOption);  
                    }
                        
                }
                
               
            }
        }
    }
    
//    xhr.open('GET', 'traitementBD_enterprises.php');
    xhr.send(null);
    
//});