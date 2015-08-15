<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/16/2015
 * Time: 2:06 AM
 */

//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 'On');

?>

<head>
    <meta name="google-signin-client_id" content="251993177722-sm7r5qj9sq3lrff1ao2hgeoesmjs89dj.apps.googleusercontent.com">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script>
        //sends command to the server to play the video
        function playVideo(){
            var player = document.getElementById('player');
            if (!player.paused) {
                TogetherJS.send({
                    type: 'play'
                });
            }

            return false;
        }

        //sends commands to the server to pause the video
        function pauseVideo(){
            var player = document.getElementById('player');
            if (player.paused) {
                TogetherJS.send({
                    type: 'pause'
                });
            }

            return false;
        }

        //sends commands to the server to seek the video
        function seekingVideo(){
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
</head>

<body>
<div id='main' style='visibility:visible' disabled=''>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>
    <div id='side'>
      <div id='loginup'>
            <div class='g-signin2' data-onsuccess='onSignIn'></div>
            <a href='#' onclick='signOut();'>Sign out</a>
          </div>
      </div>
    <script type="text/javascript">
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
            console.log("Name: " + profile.getName());
            console.log("Image URL: " + profile.getImageUrl());
            console.log("Email: " + profile.getEmail());
            
            document.getElementById("main").style.visibility = "visible";
            document.getElementById("main").disabled = "";
            
        }
    </script>
    
    <script>
      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
              console.log("User signed out.");
              window.location="/realtc/";
          });
      }
    </script>
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
//        setTimeout(pauseVideo, 2000);
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

    //changes on seek and also plays the video
    TogetherJS.hub.on('seek', function(msg) {
        var player = document.getElementById('player');
        player.currentTime = msg.currentTime;
        playVideo();
        return false;
    });
</script>

<br/>
<br/>
<video id="player" controls="controls" onplay="playVideo();" onpause="pauseVideo();" onseeked="seekingVideo();">
    <source src="new.mp4" type="video/mp4">
    Your browser does not support the audio element.
</video>


</div>
</body>
