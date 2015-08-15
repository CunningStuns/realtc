<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/16/2015
 * Time: 9:01 AM
 */

//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 'On');
?>
<meta name="google-signin-client_id" content="251993177722-sm7r5qj9sq3lrff1ao2hgeoesmjs89dj.apps.googleusercontent.com">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
    //Sends a play command to the server
    function playMusic(){
        var player = document.getElementById('player');
        TogetherJS.send({
            type: 'play'
        });

        return false;
    }

    //Sends a pause command to the server
    function pauseMusic(){
        var player = document.getElementById('player');
        TogetherJS.send({
            type: 'pause'
        });

        return false;
    }

    //Sends a seek command to the server and also sends the currentTime of the music
    function seekingMusic(){
        var player = document.getElementById('player');
        if (player.paused) {
            TogetherJS.send({
                type: 'seek',
                currentTime: player.currentTime
            });
        }
        return false;
    }
</script>
<script  src="https://apis.google.com/js/platform.js" async defer></script>
