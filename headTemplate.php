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
    echo "<head><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
<title></title>";

include $jsFile;
    
echo "<style>";
        include realpath(dirname(__FILE__)) . $style;

    echo "</style>
    <meta name='google-signin-client_id' content='251993177722-sm7r5qj9sq3lrff1ao2hgeoesmjs89dj.apps.googleusercontent.com'>
</head>

            ";
}


function tailTemple(){
    
}
