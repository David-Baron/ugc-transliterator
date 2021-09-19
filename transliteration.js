/* transliteration */

(function($) { // Avoid conflicts with other libraries

    'use strict';
    var elements = document.querySelectorAll(".row-item-transliteration");
    
    elements.forEach(element => {
        var id = element.dataset.id;
        var surname = element.dataset.name;
        $.get("transliterator/transliteration.php?cyrillic-string="+surname, function(data, status){
           element.textContent = "[" + data + "]";
        });
    });
    
    /* $('#transliteration').click(function(){
        console.log('trans neaded');
        $.get("transliteration.php?cyrillic-string=Щепаник", function(data, status){
            console.log("Data: " + data + "\nStatus: " + status);
        });
    }); */
    
   
    })(jQuery); // Avoid conflicts with other libraries