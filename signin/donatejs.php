<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 16/08/2015
 * Time: 7:26 AM
 */
?>
<script>
    $(document).on("click", "a#payment",function(){
        var amount= $(this).parent().attr("id")

        var request = $.ajax({
            url: "/realtc/signin/paypal",
            type: "get",
            data: {
                amount: amount
            }
        });
    });
    
</script>

