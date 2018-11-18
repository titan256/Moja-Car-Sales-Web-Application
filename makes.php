    <?php
	include('php/connection.php');
		
	
	connecttodbm();
	$tdmake="makes";
	$make=mysql_query("SELECT DISTINCT make FROM make order by weight"); 
	$makes=mysql_query("SELECT DISTINCT make,makeid FROM make order by weight"); 
	while($notes = mysql_fetch_array($make)){echo"<tr><td  bgcolor=\"#FFFFFF\" class =' $tdmake' value='$notes[make]'><a href =\"\"	onclick=\"stock('$notes[make]')\">$notes[make]</a></td></tr>";}
	
	?>

