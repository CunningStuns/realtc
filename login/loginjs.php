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
            selector.css("display", "inline");
            console.log($("div#aboutBox").style);
            console.log(document.getElementById('#aboutBox').style);
            console.log(document.getElementById('#aboutBox').style.display);
            console.log($("div#aboutBox").length);
            if(document.getElementById('aboutBox').style.display == 'none'){

                selector.css("display", "inline");
            }
            else{
                selector.css("display", "none");
            }
    });
    
</script>
