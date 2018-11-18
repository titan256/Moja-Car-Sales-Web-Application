
 

<?php


	include('php/connection.php');
	include('php/tax/tax.php');
	
	connecttodbm();
	$q=$_GET["q"];
	
	$sql="SELECT model,year,capacity,fuel,transmission,doors,type,wheeldrive,cif,weight FROM tax WHERE brand='".$q."'";
	$result = mysql_query($sql);
	echo "<form><table>";
	echo"<tr><td>Select</td>
			<td>Model</td>
			<td>Year</td>
			<td>Capacity</td>
			<td>Fuel</td>
			<td>Transmission</td>
			<td>Doors</td>
			<td>Type</td>
			<td>Drive</td>
			<td>weight</td>
			<td>C.I.F</td>
			<td> Uganda Tax</td>
		</tr>";
	while($row = mysql_fetch_array($result))
	  { 
	  	
		echo "<tr>";
		echo "<td><input type =\"checkbox\" name=".$row['cif']." id=".$row['cif']." onclick=\"checks(". $row['cif'] .")\"/>";
		echo "<td>" . $row['model'] . "</td>";
	  	echo "<td>" . $row['year'] . "</td>";
		echo "<td>" . $row['capacity'] . "</td>";
		echo "<td>" . $row['fuel'] . "</td>";
		echo "<td>" . $row['transmission'] . "</td>";
		echo "<td>" . $row['doors'] . "</td>";
		echo "<td>" . $row['type'] . "</td>";
		echo "<td>" . $row['wheeldrive'] . "</td>";
		echo "<td>" . $row['weight'] . "</td>";
		echo "<td>" . $row['cif'] . "</td>";
		echo  getParams($row['year'],$row['type'],$row['cif'],$row['weight']);
		echo  "</tr>";
	  }
	
	echo "</table></form>";
	
	?>
