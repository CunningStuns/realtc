<?php
/**
 * Created by Floobits
 * User: Ray
 * Date: 16/08/2015
 * Time: 1:10AM
 */

$users = array("Ray", "Sajeeb", "Stephanie", "Vatsalya");

require_once("../headTemplate.php");
require_once("../bodyTemplate.php");

$mainpanel="
  <div id='main'>
      //.generateIFrame.
    blah main blah
    </div>
";

$userpanel="
  <div id='user_sidebar'>
    <ul>
      ";
      for ($i=0;$i<$users.size();$i++) {
        echo "<li>".$i."</li>
        ";
      }
    "</ul>  
  </div>
";

headTemplate("Login", "Login", "\\general.css", "loginjs.php");
bodyTemplate($mainPanel, $bodyPanel);

?>


<form action="" method="post" style="width: 100%;text-align: center">
    
</form>