<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 3:12 PM
 */
?>

<script>
    $(document).on("click", "button#about",function(){
            
            console.log("here");
            var selector = $("div#aboutBox");
            console.log($("div#aboutBox").length);
            if(document.getElementById("aboutBox").style.display == 'none'){

                selector.css("display", "inline");
                console.log("there");
            }
            else{
                selector.css("display", "none");
                console.log("ere");
            }
    });
    
</script>
