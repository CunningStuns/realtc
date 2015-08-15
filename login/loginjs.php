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
            var selector = $("input#aboutBox" );

            selector.css("display", "inline");
    });
    
</script>
