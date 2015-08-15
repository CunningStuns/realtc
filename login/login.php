<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 15/08/2015
 * Time: 2:55 PM
 */


$mainPanel ="";
$bodyPanel ="
    <div>
        <br>
        <label id='signIn'> 'signIN'</label><label id='signUp'> 'singUp'</label> </br>
        
        <label id='in email'>Email:</label>
        <input type = 'text' name='username' id='in' ></br>
        <label id ='in password'>Password:</label>
        <input id='in' type = 'text' name='password'  >
        
        <label id='up email' display='none' >Email:</label>
        <input type = 'text' display='none' name='email' id = 'up email' >
        <label id='up password' display='none'>Password:</label>
        <input type = 'text' display='none' name='Password' id = 'up password' >
        <label id='up retypepassword' display='none'>retype Password:</label>
        <input type = 'text' display='none' name='retypePassword' id = 'up retypepassword' >
    </div>


";

headTemplate("Login", "Login", "", "login.php")


?>

<form action="" method="post" style="width: 100%;text-align: center">
    
</form>
