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
            var selector = $("div#aboutBox" );
            if(selector.style.display="none"){

                selector.css("display", "inline");
            }
            else{
                selector.css("display", "none");
            }
            console.log(selector.style.display);
    });
    
</script>
