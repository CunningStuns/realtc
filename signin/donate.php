<?php
/**
 * Created by PhpStorm.
 * User: Steffi
 * Date: 16/08/2015
 * Time: 6:25 AM
 */

require_once("../headTemplate.php");
require_once("../bodyTemplate.php");

$mainPanel="
    <div>
        Please Donate!!!!!!!!!
        How much?
</div>
    <table id = donate>
        <tr>
            <th id = 10> <a id = payment>$10 </a></th>
            <th id =20> <a id = payment>$20 </a></th>
            <th id =30> <a id = payment>$30 </a></th>
            <th id =40> <a id = payment>$40 </a></th>
            <th id =50> <a id = payment>$50 </a></th>
            
        </tr>
        <tr>
            <th><img src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' align='left' style='margin-right:7px;'></th>
            ";

echo "
	        
        </tr>
    
    </table>

";
headTemplate("Login", "Login", "\\landing.css", "donatejs.php");
$showStartOption = false;
bodyTemplate($mainPanel, "", $showStartOption);