<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 3:12 PM
 */
?>
<script>
    $(document).on("click", "label#signUp"){
        
        
        var selector = $("input#up");
        for(var i = 0; i < selector.length;i++){
            selector[i].css("display", "inline");
        }
        selector = $("input#in"){
            for(var i = 0; i < selector.length;i++){
                selector[i].css("display", "none");
            }
        }
    }
    $(document).on("click", "label#signIn"){
        var selector = $("input#up");
        for(var i = 0; i < selector.length;i++){
            selector[i].css("display", "none");
        }
        selector = $("input#in"){
            for(var i = 0; i < selector.length;i++){
                selector[i].css("display", "inline");
            }
        }
    }
</script>
