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
        var myaudio;
        $(document).on("ready", function(){
            myaudio = new Audio('Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3');
        });
        
        $("#play").on("click", function () {
            myaudio.play();
        })
    </script>

</head>

<body>
    <audio controls="controls">
        <source src="Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3" type="audio/mpeg" />
        Your browser does not support the audio element.
    </audio>

    <h1>HTML 5 Audio Player</h1>

    <div class="container gradient">

        <div class="player gradient">

            <a class="button gradient" id="play" href="" title=""></a>
            <a class="button gradient" id="mute" href="" title=""></a>

            <input type="range" id="seek" value="0" max=""/>

            <a class="button gradient" id="close" href="" title=""></a>

        </div><!-- / player -->

    </div><!-- / Container-->
</body>