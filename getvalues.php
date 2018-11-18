<?php



	include('php/connection.php');
	//include('php/currency.php');
	
	connecttodbm();
	$q=$_GET["q"];
	$sql="SELECT distinct brand FROM tax WHERE make = '".$q."'";
	$result = mysql_query($sql);
	echo "<select onclick=\"getyear(this.value)\"><option>Select Brand</option>";
	while($row = mysql_fetch_array($result))
	  {
	  
		echo "<option value=$row[brand]>$row[brand]</option>";  
		
	  
	
	
	  }
	  
	  echo"</select>";
	

	
	
	?>
