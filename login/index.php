<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 2:55 PM
 */

require_once("../headTemplate.php");
require_once("../bodyTemplate.php");

$mainPanel ="

    <div id='welcome'>
    <p>Welcome to RealTC, <br />
    a browser plugin which will allow for you and all your friends to collaborate in one single workspace!</p>
    </div>
    
    <div id='about'>
    <button type='button' onclick='showRTCOptions()' >About</button>
    <caption>About (Us, The Application and Our Dream)</caption>
    <caption>To get started, click on the button below!</caption>
    </div>
    
    <div id='funding'>
    <button type='button' onclick='' >Option 1</button>
    <caption>To donate any money for whatsoever reason, click on the button below!</caption>
    </div>
";
$bodyPanel ="
    <div>
        <br>
        <label id='signIn'>signIn</label><label id='signUp'> signUp</label> </br>
        
        <label id='in'>Email:</label>
        <input type = 'text' name='username' id='in' ></br>
        <label id ='in'>Password:</label>
        <input id='in' type = 'text' name='password'  ></br>
        <input id='in'type = 'submit' value = 'sign in' id ='signUpButton'>
        
        <label id='up' display='none' >Email:</label>
        <input type = 'text' display='none' name='email' id = 'up email' ></br>
        <label id='up password' display='none'>Password:</label>
        <input type = 'text' display='none' name='Password' id = 'up password' ></br>
        <label id='up retypepassword' display='none'>retype Password:</label>
        <input type = 'text' style = 'display=none' name='retypePassword' id = 'up retypepassword' ></br>
        <input type ='submit' value = 'sign up' id='signInButton' >
        
    </div>


";

headTemplate("Login", "Login", "", "loginjs.php");
bodyTemplate($mainPanel, $bodyPanel);


?>

<form action="" method="post" style="width: 100%;text-align: center">
    
</form>
