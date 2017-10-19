document.querySelector('select').addEventListener("click", function(e){
    
    console.log('click');
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function(e){
        if (xhr.readyState == 4){
            if (xhr.status == 200){
                
                var objetJSON = JSON.parse(xhr.responseText);
                
                if (document.querySelector('select').length == 0){
                    for (var i=0; i<objetJSON.length; i++){
                        var monOption = document.createElement('option');
                        monOption.innerHTML = objetJSON[i]; document.querySelector('select').append(monOption);
                    };       
                };
                    
                
                

            }
        }
    }
    
    xhr.open('GET', 'traitement.php');
    xhr.send(null);
    
});