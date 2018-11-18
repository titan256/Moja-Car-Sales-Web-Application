<?php
include('php/connection.php');
	include('php/tax/tax.php');

	
	connecttodbm();
	$q=$_GET["q"];
	
	$sql="SELECT * FROM stock WHERE make='".$q."'";
	$result = mysql_query($sql);
	echo "<form><table>";
	echo"<tr><td>Select</td>
			<td>Car</td>
			<td>Dealer</td>
			<td>Year</td>
			<td>Mileage</td>
			<td>fob</td>
		</tr>";
	while($row = mysql_fetch_array($result))
	  { 
	  	
		echo "<tr>";
		echo "<td><input type =\"checkbox\" name=".$row['cif']." id=".$row['cif']." onclick=\"checks(". $row['cif'] .")\"/></td>";
		echo "<td><img src =\"".$row['img1'].".jpg\"\></td>" ;
	  	echo $row['make']."".$row['brand'].$row['cc'].$row['hand'];
		echo "<td>" . $row['dealer'] . "</td>";
		echo "<td>" . $row['year'] . "</td>";
		echo "<td>" . $row['mileage'] . "</td>";
		echo "<td>" . $row['fob'] . "<input type=\"submit\"/></td>";
		echo  "</tr>";
	  }
	echo "</table></form>";
	
	?>

?>