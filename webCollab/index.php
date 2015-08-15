<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/16/2015
 * Time: 6:39 AM
 */

//error_reporting(-1);
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
        $("a").on("click", function () {
            alert("CliCKED!!!");
        })
    </script>
    <script  src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
<div id='main' style='visibility:visible' disabled=''>
<script src="https://togetherjs.com/togetherjs-min.js"></script>
<a onclick="TogetherJS(this); return false;"><img src="https://togetherjs.com/images/start-togetherjs-blue.png" style="width: 135px" /></a>

<iframe id="iframe" src="http://www.w3schools.com" style="width: 50%; height: 50%" onload="iframeAttack();"></iframe>
<script>
    function iframeAttack() {
        var iframe = document.getElementById('iframe');

        console.log(iframe.contentDocument || iframe.contentWindow.document);
    }
</script>

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
        window.location="http://vatsalyapc:4321/realtc/login/index.php";
  });
}
</script>

<script>

    TogetherJS.hub.on('togetherjs.hello', function () {
        TogetherJS.send({
            type: 'init'
        });
        return false;
    });

    TogetherJS.hub.on('init', function () {
        console.log("HELLO!!!");
        return false;
    });
    
</script>
