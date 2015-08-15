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
            console.log($("div#aboutBox"));
            if(document.getElementById("aboutBox").style.display == 'none'){
                $("div#aboutBox").css("display", "inline");
                console.log($("div#aboutBox"));
            }
            else{
                $("div#aboutBox").css("display", "none");
                
                console.log($("div#aboutBox"));
            }
    });
    
</script>
