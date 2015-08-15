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

        var music = document.getElementById("player");
        
        music.onplay = function(){
            var button = $("#play");
            button.text("Pause ME!!!");
            button.attr("onclick", "pauseMusic()");
        };

        $("#player").on("play", function () {
            var button = $("#play");
            button.text("Pause ME!!!");
            button.attr("onclick", "pauseMusic()");
        });
        
        function playMusic(){
            document.getElementById('player').play();       
            console.log("Am Playing Now!!!");
            var button = $("#play");
            button.text("Pause ME!!!");
            button.attr("onclick", "pauseMusic()");
        }
        
        function pauseMusic(){
            document.getElementById("player").pause();
            console.log("Am Pausing");
            var button = $("#play");
            button.text("PLAY ME!!!");
            button.attr("onclick", "playMusic()");
        }
        
        function playMusic2(){
            console.log("Am Playing Now!!!");
            var button = $("#play");
            button.text("Pause ME!!!");
            button.attr("onclick", "pauseMusic()");
        }
    </script>

</head>

<body>
    <audio id="player" controls="controls" onplay="playMusic2();">
        <source src="Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
    <button id="play" onclick="playMusic();">PLAY ME!!!</button>
</body>