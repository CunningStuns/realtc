<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/15/2015
 * Time: 6:23 PM
 */

//error_reporting(-1);
//ini_set('display_errors', 'On');
require_once '../headTemplate.php';

headTemplate("Music Streaming", "Music Streaming", null, "includes.php");


?>


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
  <?php
        echo "<select name='files'>";
        $files = array_map("htmlspecialchars", scandir("..\\upload\\"));
        foreach ($files as $file){
            $ext = substr($file,-3);
            echo $ext;
            if($ext="mp3"){
                echo "<option value='$file'>$file</option>";
            }
        }
        echo "</select>";
?>
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
        if (player.paused) {
            player.currentTime = msg.currentTime;
            playMusic();
        }
        return false;
    });
</script>

    <?php $main = '
<br/>
<br/>
<audio id="player" controls="controls" onplay="playMusic();" onpause="pauseMusic();" onseeked="seekingMusic();">
    <source src="falcon.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>'; 
    
    require_once '../bodyTemplate.php'; 
    
    bodyTemplate($main, "");?>
</body>