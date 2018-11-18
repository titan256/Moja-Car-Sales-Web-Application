<?php

$q=$_GET["q"];

include('php/connection.php');
	//include('php/currency.php');
	
	$dbservertype='mysql';
	$servername='localhost';
	$dbusername='mamutcom_eseza';
	$dbpassword='89kzoo9j';
	$dbname='mamutcom_rts';
	connecttodb($servername,$dbname,$dbusername,$dbpassword);
	$sql="SELECT model FROM tax WHERE make = '".$q."'";
	$result = mysql_query($sql);


while($row = mysql_fetch_array($result))
  {
  
  echo "" . $row['model'] . "";


  }
//mysql_close($con);

?>
