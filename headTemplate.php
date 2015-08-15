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
    echo $_SERVER["DOCUMENT_ROOT"];
    echo realpath(dirname(__FILE__)); 
    echo "<head>
<title></title>

<link rel='stylesheet' type='text/css/' href='landing.css' />
<script src=$jsFile></script>";
        include realpath(dirname(__FILE__)) . "\\landing.css";

    echo "
</head>
            ";
}


function tailTemple(){
    
}
