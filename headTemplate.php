<?php
/**
 * Created by PhpStorm.
 * User: ProDigy SML
 * Date: 8/15/2015
 * Time: 2:59 PM
 */

//error_reporting(E_ALL | E_STRICT);
//ini_set('display_errors', 'On');
function headTemplate($title, $description, $style, $jsFile){
    echo "$_SERVER["DOCUMENT_ROOT"]";
    echo "<head>
<title></title>

<link rel='stylesheet' type='text/css/' href='" .$_SERVER["DOCUMENT_ROOT"] ."/CunningStunts/landing' />
<script src=$jsFile></script>
</head>
            ";
}


function tailTemple(){
    
}
