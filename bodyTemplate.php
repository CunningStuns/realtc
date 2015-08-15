<?php
function bodyTemplate( $mainpanel, $sidepanel){
  echo "
  <body>
  <div id='headBar'>
	    <a><img src='realTCLogo.jpg' alt='imgnotfound.jpg' /></a>
    </div>

<div id='content'>
	<div id='main'>
		<table id='main'>
      
	    <tr>
	      <th>";
	echo $mainpanel;
	echo "</th>
	      <th>";
  echo $sidepanel;
  echo "</th>
	    </tr>
	    
		</table>
	</div>
</div>

<div id='footer'>
	
</div>
</body>

";
}
?>