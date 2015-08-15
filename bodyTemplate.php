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
	echo $mainpanel; // Main Control View
	echo "</th>
	      <th>";
  echo $sidepanel; // Side bar which will be used for either signing in/up, and then for showing who is part of the workspace.
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

function bodyTemplate2($mainPanel, $mainCSS, $sidePanel, $sideCSS){
	echo "	<table style='width:100%' border='1' style='width:100%'>
  				<tr style=' ".$mainCSS."'>
					<td colspan='2'>$mainPanel</td>
  				</tr>
  				<tr style=' ".$sideCSS."'>
					<td>$sidePanel</td>
  				</tr>
</table> ";
}
?>