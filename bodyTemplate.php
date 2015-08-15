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
	      <th><!--Empty Table Headers, since we won't need these --></th>
	      <th></th>
      </tr>
      <tr>
	      <td id='mainview'>";
	echo $mainpanel; // Main Control View
	echo "</td>
	      <td id='sideview'>";
  echo $sidepanel; // Side bar which will be used for either signing in/up, and then for showing who is part of the workspace.
  echo "</td>
	    </tr>
		</table>
	</div>
</div>

<div id='footer'>
	<p>Copyright &copy; 2015</p>
	<p>A product of the Cunning Stunts during <a href='http://unihack.net/'>UNIHACK 2015</a></p>
</div>
</body>

";
}

function bodyTemplate2($mainPanel, $mainCSS, $sidePanel, $sideCSS){
	echo "
		<body>
		  	<div id='headBar'>
				<a><img src='realTCLogo.jpg' alt='imgnotfound.jpg' /></a>
			</div>
		
			<div id='content'>
				<table style='width:100%'  style='width:100%'>
						<tr id = main style=' ".$mainCSS."'>
							<td colspan='2'>$mainPanel</td>
						</tr>
						<tr style=' ".$sideCSS."'>
							<td>$sidePanel</td>
						</tr>
			</table> 
			
			<div id='footer'>
			
		</div>
	</body>
	";
}
?>