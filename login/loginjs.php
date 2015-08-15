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
<<<<<<< HEAD
                console.log($(document.getElementById("aboutBox").style.display));
=======
                console.log($("document.getElementById('aboutBox').style.display"));
>>>>>>> c308949bc28ba31be8d6160aef3be99f0df72b17
            }
            else{
                $("div#aboutBox").css("display", "none");
                
<<<<<<< HEAD
                console.log($(document.getElementById("aboutBox").style.display));
=======
                console.log($("document.getElementById('aboutBox').style.display"));
>>>>>>> c308949bc28ba31be8d6160aef3be99f0df72b17
            }
    });
    
</script>
