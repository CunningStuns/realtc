<?php
function headTemplate( $title, $description, $style, $jsFile){
  echo "<head><script src='http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
  <title>RealTC - Real Time Collaboration</title>";
include $jsFile;
if ($style){
	echo"<style>";
	include realpath(dirname(__FILE__)).$style;
	echo "</style>";
}
echo" <meta name='google-signin-client_id' content='251993177722-sm7r5qj9sq3lrff1ao2hgeoesmjs89dj.apps.googleusercontent.com'>
</head>
";
}