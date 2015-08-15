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
        $(document).on("ready", function(){
            var myaudio = new Audio('Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3');
        });
    </script>
    
    <style>
        .gradient {
            border: 1px solid black;

            -webkit-box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
            -moz-box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
            box-shadow: inset 0 1px 0px rgba(255,255,255,.2);
            background: #494949; /* Old browsers */
            background: -webkit-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);

            background: -moz-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
            background: -o-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
            background: -ms-linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%);
            background: linear-gradient(top, #494949 0%, #434242 31%, #393838 55%, #242323 83%, #1b1a1a 100%, #161515 100%, #0b0b0b 100%); /* W3C */
            -image  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#494949', endColorstr='#0b0b0b',GradientType=0 ); /* IE6-9 */
        }

        .container {
            -webkit-transition: all .7s ease;
            -moz-transition: all .7s ease;
            -o-transition: all .7s ease;
            -ms-transition: all .7s ease;
            transition: all .7s ease;
            position: absolute;
            width: 427px;
            height: 70px;

            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;

            -webkit-box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
            -moz-box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
            box-shadow: 0px 0px 13px rgba(0,0,0,.3),inset 0 1px 0px rgba(255,255,255,.2);
            top: 50%;
            left: 50%;
            margin: -214px 0px 0px -214px;
            padding: 10px;

            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
        }


        .containerLarge {
            height: 427px;
        }

        .cover {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
            filter: alpha(opacity=0);
            opacity: 0;
            width: 398px;
            height: 10px;
            border: 2px solid black;

            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;

            -webkit-box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
            -moz-box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
            box-shadow: inset 0px 5px 5px rgba(0,0,0,1);
        }

        .coverLarge {
            -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
            filter: alpha(opacity=100);
            opacity: 1;
            height: 398px;

            -webkit-transition: opacity .7s ease;
            -moz-transition: opacity .7s ease;
            -o-transition: opacity .7s ease;
            -ms-transition: opacity .7s ease;
            transition: opacity .7s ease;

            -webkit-transition-delay: .5s;
            -moz-transition-delay: .5s;
            -o-transition-delay: .5s;
            -ms-transition-delay: .5s;
            transition-delay: .5s;
        }
        .player {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            position: absolute;
            width: 300px;
            bottom: 10px;
            width: 95%;

            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            padding: 5px;
        }

        .button {
            display: block;
            width: 34px;
            height: 34px;
            background-image: url(../images/sprite.png);
            background-repeat: no-repeat;
            float: left;
            margin-right: 5px;
        }

        #play {
            background-position: 6px 5px;
        }

        #pause {
            background-position: -32px 5px;
        }

        #mute {
            background-position: -63px 5px;
        }

        #muted {
            background-position: -106px 5px;
        }

        input[type="range"] {
            width: 250px;
            margin-top: -5px;
        }

        #close {
            float: right;
            background-position: -146px 5px;
            display: none;
        }

        .volume {
            position: absolute;
            height: 100px;
            width: 34px;
            border: 1px solid black;
            background-color: #242323;
            top: -97px;
            display: none;
        }
        input{
            display:none\9!important;
        }
        input[type="range"] {
            -webkit-appearance: none;
            border: 1px solid black;
            position: absolute;
            top: 18px;
            display: block;
            width: 63%;
            height: 15px;

            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
            background-color: #242323;
            left: 90px;

            -webkit-box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
            -moz-box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
            box-shadow: inset 0px 4px 4px rgba(0,0,0,.6);
        }

        input::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 20px;
            border:1px solid black;

            -webkit-border-radius: 10px;
            border-radius: 10px;
            background: #80e4df; /* Old browsers */
            background: -webkit-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);

            background: -moz-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);
            background: -o-linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%);
            background: linear-gradient(top, #80e4df 0%, #75dbd6 13%, #5ec4bf 33%, #57bbb6 47%, #419d99 80%, #378f8b 100%); /* W3C */
        }
    </style>
    
    <script>
        var container;
        var cover;
        var play;
        var pause;
        var mute;
        var muted;
        var close;
        var song;
        var duration;
        
        $(document).on("ready", function(){
            container = $('.container');
            cover = $('.cover');
            play = $('#play');
            pause = $('#pause');
            mute = $('#mute');
            muted = $('#muted');
            close = $('#close');
            song = new Audio('Macklemore-and-Ryan-Lewis-Growing-Up-Sloanes-Song-feat-Ed-Sheeran.mp3');
            duration = song.duration;

            if (song.canPlayType('audio/mpeg;')) {
                song.type= 'audio/mpeg';
                song.src= 'music/track1.mp3';
            } else {
                song.type= 'audio/ogg';
                song.src= 'music/track1.ogg';
            }
        });

        $(play).live('click', function(e) {
            e.preventDefault();
            song.play();

            $(this).replaceWith('<a class="button gradient" id="pause" href="" title=""></a>');
            container.addClass('containerLarge');
            cover.addClass('coverLarge');
            $('#close').fadeIn(300);
            $('#seek').attr('max',song.duration);
        });

        $(pause).live('click', function(e) {
            e.preventDefault();
            song.pause();
            $(this).replaceWith('<a class="button gradient" id="play" href="" title=""></a>');

        });
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