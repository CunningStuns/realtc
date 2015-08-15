<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 3:12 PM
 */
?>

<script>
    $(document).on("click", "label#signUp", function(){
        console.log("inSignUp");
        hideSignIn();
        showSignUp();
        
    });
    $(document).on("click", "label#signIn",function(){
        var login =true;
        if(login){
            hideSignIn();
            hideSignUp();
            //redirect
        }
        else(){
            console.log("loginFailed");
        }
    });
    $(document).on("click", "signUpButton",function(){
        
        var login =true;
        if(login){
            hideSignIn();
            hideSignUp();
            //redirect
        }
        else(){
            console.log("loginFailed");
        }
        
    });
    $(document).on("click", "signInButton", function(){
        hideSignIn();
        hideSignUp();

    });
    function hideSignIn(){
        selector = $("input#in"){
            for(var i = 0; i < selector.length;i++){
                selector[i].css("display", "none");
            }
        }
    }
    function hideSignUp(){
        var selector = $("input#up");
        for(var i = 0; i < selector.length;i++){
            selector[i].css("display", "none");
        }
    }
    function showSignIn(){
        selector = $("input#in"){
            for(var i = 0; i < selector.length;i++){
                selector[i].css("display", "inline");
            }
        }
    }
    function showSignUp(){
        var selector = $("input#up");
        for(var i = 0; i < selector.length;i++){
            selector[i].css("display", "inline");
        }
    }
</script>
