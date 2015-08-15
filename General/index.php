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

$mainpanel ="
  <div id='main'>
      <iframe></iframe>
    </div>
";

$userpanel ="
  <div id='user_sidebar'>
      
  </div>
";

headTemplate("Login", "Login", "\\general.css", "\login\loginjs.php");
bodyTemplate($mainpanel, $userpanel);

?>


<form action="" method="post" style="width: 100%;text-align: center">
    
</form>