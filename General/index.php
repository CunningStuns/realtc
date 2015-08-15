<?php
/**
 * Created by Floobits
 * User: Ray
 * Date: 16/08/2015
 * Time: 1:10AM
 */

$users = array();

require_once("../headTemplate.php");
require_once("../bodyTemplate.php");

$mainpanel="
  <div id='main'>
      ".generateIFrame."
    </div>
"

$userpanel="
  <div id='user_sidebar'>
    <ul>
      <li></li>
    </ul>  
  </div>
"

headTemplate("Login", "Login", "\\landing.css", "loginjs.php");
bodyTemplate($mainPanel, $bodyPanel);

?>


<form action="" method="post" style="width: 100%;text-align: center">
    
</form>