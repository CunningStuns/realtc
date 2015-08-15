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
        
        function playMusic(){
            document.getElementById('player').play();       
            playMusicChanges();
        }
        
        function pauseMusic(){
            document.getElementById("player").pause();
            pauseMusicChanges();
        }
        
        function playMusicChanges(){
            console.log("Am Playing Now!!!");
            var button = $("#play");
            button.text("Pause ME!!!");
            button.attr("onclick", "pauseMusic()");
            TogetherJS.send({
                type: 'play'
            });
        }
        
        function pauseMusicChanges(){
            console.log("Am Pausing");
            var button = $("#play");
            button.text("PLAY ME!!!");
            button.attr("onclick", "playMusic()");
            TogetherJS.send({
                type: 'pause'
            });
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
    });

    // Draw initially received drawings:
    TogetherJS.hub.on('init', function () {
        console.log("HELLO!!!");
    });
    
    //changes on play
    TogetherJS.hub.on('play', function () {
        document.getElementById('player').play();
        playMusicChanges();
    });
    
    //changes on pause
    TogetherJS.hub.on('pause', function() {
        document.getElementById('player').pause();
        pauseMusic();
    });
</script>

<br/>
<br/>
    <audio id="player" controls="controls" onplay="playMusicChanges();" onpause="pauseMusicChanges();">
        <source src="Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <button id="play" onclick="playMusic();">PLAY ME!!!</button>
</body>