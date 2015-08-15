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
            console.log($("div#aboutBox").style);
            selector.css("display", "inline");
            console.log($("div#aboutBox").length);
            if($("div#aboutBox").length == 0){

                selector.css("display", "inline");
            }
            else{
                selector.css("display", "none");
            }
    });
    
</script>
