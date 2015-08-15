<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/15/2015
 * Time: 6:23 PM
 */

//error_reporting(-1);
//ini_set('display_errors', 'On');

?>

<head>
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

</head>

<body>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>

<script>


    // Hello is sent from every newly connected user, this way they will receive what has already been drawn:
    TogetherJS.hub.on('togetherjs.hello', function () {
        TogetherJS.send({
            type: 'init'
        });
        return false;
    });

    // Draw initially received drawings:
    TogetherJS.hub.on('init', function () {
        setTimeout(pauseMusic, 2000);
        console.log("HELLO!!!");
        return false;
    });

    //changes on play
    TogetherJS.hub.on('play', function () {
        var player = document.getElementById('player');
        if (player.paused) {
            player.play();
        }
        return false;
    });

    //changes on pause
    TogetherJS.hub.on('pause', function() {
        var player = document.getElementById('player');
        if (!player.paused) {
            player.pause();
        }
        return false;
    });

    //changes on seek
    TogetherJS.hub.on('seek', function(msg) {
        var player = document.getElementById('player');
        player.currentTime = msg.currentTime;
        playMusic();
        return false;
    });
</script>

<br/>
<br/>
<audio id="player" controls="controls" onplay="playMusic();" onpause="pauseMusic();" onseeked="seekingMusic();">
    <source src="falcon.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
</body>