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
            console.log(document.getElementById("aboutBox").style.display);
            $("div#aboutBox").css("diplay", "inline");
            if(document.getElementById("aboutBox").style.display == 'none'){
                $("div#aboutBox").css("display", "inline");

                console.log($(document.getElementById("aboutBox").style.display));

            }
            else{
                $("div#aboutBox").css("display", "none");
                console.log($(document.getElementById("aboutBox").style.display));
            }
    });
    
    
  var showStartOptions = false;
  
  $(document).on("click", "button#getstarted", function( ){
    
  }

    
</script>
