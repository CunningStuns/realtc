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

        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <div class="g-signin2" data-onsuccess="onSignIn"></div>
        <a href="#" onclick="signOut();">Sign out</a>
        
        <script type="text/javascript">
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                console.log("ID: " + profile.getId()); // Do not send to your backend! Use an ID token instead.
                console.log("Name: " + profile.getName());
                console.log("Image URL: " + profile.getImageUrl());
                console.log("Email: " + profile.getEmail());
            }
        </script>
        
        <script>
          function signOut() {
              var auth2 = gapi.auth2.getAuthInstance();
              auth2.signOut().then(function () {
                  console.log("User signed out.");
              });
          }
        </script>
  
';







$mainPanel ="
    <div id='main'>
      <div id='welcome'>
      <p>Welcome to RealTC, <br />
      a browser plugin which will allow for you and all your friends to collaborate in one single workspace!</p>
      </div>
      
      <div id='getstarted'>
      <p>To get started, click on the button below!</p>
      <button type='button' onclick=''>Get Started</button>
      </div>
      
      <div id='about'>
      <p>About (Us, The Application and Our Dream)</p>
      <button type='button' onclick='showRTCOptions()' >About</button>
      </div>
      
      <div id='funding'>
      <p>To donate any money for whatsoever reason, click on the button below!</p>
      <button type='button' onclick='' >Donate Us</button>
      </div>
    </div>
";
$bodyPanel ="
    <div id='side'>
        <br>
        <label id='signIn'>signIn</label> <label id='signUp'> signUp</label> </br>
        
        <label id='in'>Email:</label> %tab;
        <input type='text' name='username' id='in' ></br>
        <label id='in'>Password:</label> %tab;
        <input id='in' type='text' name='password'  ></br>
        <input id='in'type='submit' value='sign in' id='signUpButton'>
        
        <label id='up' style='display: none' >Email:</label>
        <input type='text' style='display: none' name='email' id='up email' ></br>
        <label id='up password' style='display: none'>Password:</label>
        <input type='text' style='display: none' name='Password' id='up password' ></br>
        <label id='up retypepassword' style='display: none'>retype Password:</label>
        <input type='text' style='display: none' name='retypePassword' id='up retypepassword' ></br>
        <input type='submit' value='sign up' id='signInButton' >
        
        " . $googleSignIn . "
    </div>
";

headTemplate("Login", "Login", "\\landing.css", "loginjs.php");
bodyTemplate($mainPanel, $bodyPanel);


?>

<form action="" method="post" style="width: 100%;text-align: center">
    
</form>
