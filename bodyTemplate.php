<?php
function bodyTemplate( $mainpanel, $sidepanel){
  echo "
  <body>
  <div id='headBar'>
	    <a><img src='/realtc/images/logo.jpg' alt='imgnotfound.jpg' class='mainLogo'/></a>";
//	echo $_SERVER["DOCUMENT_ROOT"];
//	echo realpath(dirname(__FILE__)); no longer needed

	echo"</div>

<div id='middle'>
		<table id='content'>
	    <tr>
	      <th width='80%'><!--Empty Table Headers, since we won't need these --></th>
	      <th width='20%'></th>
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
	<p>Copyright &copy; 2015<br/>
	A product of the Cunning Stunts during <a href='http://unihack.net/'>UNIHACK 2015</a></p>
</div>
</body>

";
}
?>