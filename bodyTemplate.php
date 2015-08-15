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
  echo $sidepanel; // 
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

function bodyTemplate2($mainPanel, $sidePanel){
	echo "	<table style='width:100%' border='1' style='width:100%'>
  				<tr>
					<td colspan='2'>$mainPanel</td>
  				</tr>
  				<tr>
					<td>$sidePanel</td>
  				</tr>
</table> ";
}
?>