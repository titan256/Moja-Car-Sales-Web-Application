<?php


include('php/connection.php');
	

	connecttodbm();
	$q=$_GET["q"];
	$sql="SELECT distinct model FROM tax WHERE brand = '".$q."'";
	$result = mysql_query($sql);
	echo "<option >Select Model</option>";
	while($row = mysql_fetch_array($result))
	  {
	  
	  	echo "<option >" . $row['model'] . "</option>";
	
	
	  }
	
	
	
	?>
