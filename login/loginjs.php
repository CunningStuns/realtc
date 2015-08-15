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
        for(var i = 0; i < seclector.length;i++){
            selector[i].css("display", "inline");
        }
        seclector = $("input#in"){
            for(var i = 0; i < seclector.length;i++){
                selector[i].css("display", "none");
            }
        }
    }
    $(document).on("click", "label#signIn"){
        var selector = $("input#up");
        for(var i = 0; i < seclector.length;i++){
            selector[i].css("display", "none");
        }
        seclector = $("input#in"){
            for(var i = 0; i < seclector.length;i++){
                selector[i].css("display", "inline");
            }
        }
    }
</script>
