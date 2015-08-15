<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 2:55 PM
 */

require_once("../headTemplate.php");
require_once("../bodyTemplate.php");
//require_once("../google.php");
$googleSignIn = '
 
        <script  src="https://apis.google.com/js/platform.js" async defer></script>
        
        <script type="text/javascript">
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log("Name: " + profile.getName());
                console.log("Image URL: " + profile.getImageUrl());
                console.log("Email: " + profile.getEmail());
                
                document.getElementById("getstarted").style.visibility = "visible";
                document.getElementById("getstartedB").disabled = "";
                
            }
        </script>
        
        <script>
          function signOut() {
              var auth2 = gapi.auth2.getAuthInstance();
              auth2.signOut().then(function () {
                  console.log("User signed out.");
                  document.getElementById("getstarted").style.visibility = "hidden";
                  document.getElementById("getstartedB").disabled = "disbled";
              });
          }
        </script>
  
';
$mainPanel = "
      
    <div id='main'>
      <div id='welcome'>
      <h1>Welcome to RealTC, <br />
      a browser plugin which will allow for you and all your friends to collaborate in one single workspace!</h1>
      </div>
      
      <div id='getstarted' style='visibility:hidden'>
          <h3>To get started, click on the button below!</h3>
          <button type='button' class='toggleShow' id='getstartedB' onclick='document.' disabled='disabled'>Get Started</button>
      </div>
      
      <table id='line2'>
      <tr>
        <th width='250px'>
          <div id='about'>
            <h3>About (Us, The Application and Our Dream)</h3>
            <button id='about' type='button'>About</button>
          </div>
        </th>
        <th width='250px'>
          <div id='funding'>
            <h4>To donate any money for whatsoever reason, <br/>click on the button below!</h4>
            <p>And thanks :)</p>
            <button type='button' onclick='donate.html' >Donate Us</button>
          </div>
        </th>
      </tr>
      </table>
    </div>
";

$bodyPanel ="
    <div id='side'>
    <div id='loginup'>
          <div class='g-signin2' data-onsuccess='onSignIn'></div>
          <a href='#' onclick='signOut();'>Sign out</a>
        </div>
    " . $googleSignIn . "
    </div>
";

headTemplate("Login", "Login", "\\landing.css", "loginjs.php");
bodyTemplate($mainPanel, $bodyPanel);


?>

<form action="" method="post" style="width: 100%;text-align: center">
    
</form>
