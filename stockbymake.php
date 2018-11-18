	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>RTS</title>
	
	<link rel="stylesheet" href="css/styles.css" type="text/css" />
	<link rel="stylesheet" href="tab-panel.css" type="text/css" />
	<script language="JavaScript" type="text/javascript" src="js/tabs.js"></script>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.hashchange.js" type="text/javascript"></script>
	<script src="js/jquery.easytabs.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/gallery/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="js/gallery/coin-slider.min.js"></script>
	<link rel="stylesheet" href="js/gallery/coin-slider-styles.css" type="text/css" />

<script type="text/javascript" src="http://currate.com/econverterbox.js.php"></script>

 <script type="text/javascript">
    $(document).ready( function() {
      $('#tab-container').easytabs();
	   $('#coin-slider').coinslider({ width:705,height:351, navigation: false, delay: 4000 });
    });
	
  </script>
  
  <script type="text/javascript">
  
  //get brands
  function fresh(str,dvid,url){
  		
  		if (str=="")
  		{
  		document.getElementById(dvid).innerHTML="";
  		return;
  		}
  
		if (window.XMLHttpRequest)
  		{// code for IE7+, Firefox, Chrome, Opera, Safari
 		 xmlhttp=new XMLHttpRequest();
  		}
		else
  		{// code for IE6, IE5
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  		}
		xmlhttp.onreadystatechange=function()
 		{
 		 if (xmlhttp.readyState==4 && xmlhttp.status==200)
    	{
    	document.getElementById(dvid).innerHTML=xmlhttp.responseText;
		document.getElementById(dvid).value = xmlhttp.responseText;
    	}
  		}
		
		xmlhttp.open("GET",url+str,true);
		xmlhttp.send();
	
		
  	}
  	function fetchValues(strs){
	
  		this.fresh(strs,"brand","getvalues.php?q=");
		
	}
	function getmodels(strn){
	
  		this.fresh(strn,"model","getmodels.php?q=");
		
	}
		function getyear(strn){
		
  		this.fresh(strn,"all","getyear.php?q=");
		
	}
	function checks(str){
	
	if(document.getElementById(str).checked){
	
		
	}else{
	
	}
	}
	function stock(strs){
	this.fresh(strs,"stock","getStock.php?q=");
	}

function recp(str) {
  $('#banner').load(str);
}

</script>
<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("advanced");
	var text = document.getElementById("basictext");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Advanced Search";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Basic Search";
	}
} 
</script>



    <?php
	include('php/connection.php');
		
	
	connecttodbm();

	$make=mysql_query("SELECT DISTINCT make FROM make order by weight"); 
	$makes=mysql_query("SELECT DISTINCT make,makeid FROM make order by weight"); 
	
	?>

	<link href="css/sub.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
	
	<div id="header">
	
	<div id="menu" class="tab-container">
	<ul class='mtabs'>
	<li class="tabs"><a href="index.php"> Home </a></li>
	<li class="tabs"><a href="#" onclick="recp('about.php')"> About Us</a></li>
	<li class="tabs"><a href="#" onclick="recp('buy.php')"> How to Buy </a></li>
	<li class="tabs"><a href="#" onclick="recp('cont.php')"> Contact Us </a></li>
	<li class="tabs"><a href="#" onclick="recp('help.php')"> Help </a></li>
	</ul>
	</div>
	
	</div>
	
	<div id="container" class="container2012">
	<div class="container2012">
	<div class="inner">
		<div id="left_sidebar">
	
	<div id="basic" class="tracker">
	
	  <form id="trackers" class="trackers" name="form3" method="post" action="">
        <p>Keywords<br />
          <label>
            <input type="text" name="textfield" />
          </label>
            <br />
            Make<br />
            <label>
            <select name="select">
			  <option>Select Make</option>
                      <?php $tdmake="makes";
							  while($noter = mysql_fetch_array($makes)){echo"
							  <option value=$noter[make]>$noter[make]</option>";}
							  echo"</select>";
					  		?>
            </select>
            </label>
            <br />
            Model<br />
            <label>
            <select name="select2">
              <option>Select Model</option>
            </select>
            </label>
            <br />
            FOB Price Range<br />
            <label>
            <select name="select3">
            </select>
            </label>
            -
            <label>
            <select name="select4">
            </select>
            </label>
            <br />
            Year<br />
            <label>
            <select name="select5">
            </select>
            </label>
            -
            <label>
            <select name="select6">
            </select>
            </label>
            <br />
            <label>
            <input type="checkbox" name="checkbox" value="checkbox" />
            </label>
        RTS<br />
		
		</p>
		</form>
		<div id="advanced" style="display:none">
		
          Body Style<br />
          <label>
          <select name="select7">
            <option>Select Body</option>
          </select>
          </label>
          <br />
          Steering<br />
          <label>
          <input type="checkbox" name="checkbox2" value="checkbox" />
          </label>
          Left Hand Drive<br />
          <label>
          <input type="checkbox" name="checkbox3" value="checkbox" />
          </label>
          Right Hand Drive<br />
          Accident 
          <br />
          <label>
          <input type="checkbox" name="checkbox4" value="checkbox" />
          </label>
          Accident Only<br />
          Transmission<br />
          <label>
          <select name="select8">
            <option>Select Transmission</option>
          </select>
          </label>
          <br />
          Mileage<br />
          <label>
          <select name="select9">
            <option>Select Mileage</option>
          </select>
          </label>
          <br />
          Fuel<br />
          <label>
          <select name="select10">
            <option>Select Fuel</option>
          </select>
          </label>
          <br />
          Displacement<br />
          <label>
          <select name="select11">
            <option>Select Displacement</option>
          </select>
          </label>
          <br />
          Door<br />
          <label>
          <select name="select12">
            <option>Select Doors</option>
          </select>
          </label>
          <br />
          Color<br />
          <label>
          <select name="select13">
            <option>Select Colors</option>
          </select>
          </label>
          <br />
          Drive<br />
          <label>
          <select name="select14">
            <option>Select Drive</option>
          </select>
          </label>
          <br />
          Condition<br />
          <label>
          <input type="checkbox" name="checkbox5" value="checkbox" />
          </label>
          Used Stocks<br />
          <label>
          <input type="checkbox" name="checkbox6" value="checkbox" />
          </label>
          New Stocks<br />  
            </p>
      </form>
	  </div>
          <a id="basictext" href="javascript:toggle();">Advanced Search</a> <input name="button" type="submit" class="trackbtn" id="trackbtn" title="trackbtn" value="Search" />
      
	  
	</div>
	<div id="lowbottom" class="lowbottom" >
    <table width="240px" align="center">
    
    <?php $tdmake="makes"; while($notes = mysql_fetch_array($make)){echo"<tr><td  bgcolor=\"#FFFFFF\" class =' $tdmake' value='$notes[make]'><a href=\"stockbymake.php?q=$notes[make]\" >$notes[make]</a></td></tr>";}?>
    
    </table>
    </div>
	
	<div id="currency">
	<div id="conv">
	  <div id='oanda_ecc'> <!-- IF YOU ALTER OR REMOVE THE FOLLOWING CODE, THE EMBEDDED WIDGET WILL NOT WORK. --><span style='color:#000; text-decoration:none; font-size:9px;'><a href='http://www.oanda.com/currency/converter/' id='oanda_cc_link'>Currency Converter</a> by OANDA</span><script src='http://www.oanda.com/embedded/converter/get/ZXNlemEvL2RlZmF1bHQ=/?lang=en'></script></div>
    </div>
	</div>
	
	</div>
	
	
	<div class="middle" id="middle">
	<div id="banner"></div> 
	<div id="stocks">
	<?php

	$q=$_GET["q"];
	
	$sql="SELECT * FROM stock WHERE make='".$q."'";
	$result = mysql_query($sql);
	echo "<form id=\"stocktd\"><table>";
	echo"<tr><td>Select</td>
	<td></td>
			<td>Car</td>
			<td>Dealer</td>
			<td>Year</td>
			<td>Mileage</td>
			<td>FOB</td>
		</tr>";
	while($row = mysql_fetch_array($result))
	  { 
	  	
		echo "<tr>";
		echo "<td><input type =\"checkbox\" name=".$row['cif']." id=".$row['cif']." onclick=\"checks(". $row['cif'] .")\"/></td>";
		echo "<td><img src =\"one.jpg\"/></td>";
	  	echo "<td>".$row['Make']."<p>".$row['brand ']."<p>".$row['cc']."<p>".$row['hand']."</td>";
		echo "<td>" . $row['Dealer'] . "</td>";
		echo "<td>" . $row['Year'] . "</td>";
		echo "<td>" . $row['Mileage'] . "</td>";
		echo "<td>" . $row['fob'] . "\n <input id=\"trackbtn\" class=\"trackbtn\" type=\"submit\" value=\"Contact Seller\" title=\"trackbtn\" name=\"button\"/></td>";
		echo  "</tr>";
	  }
	echo "</table></form>";
	
	?>


	</div>
	<div id="other">
	</div>
	</div>
	
	
	<div id="footer">
	
	<div id="footer1"></div>
	<div id="footer2"></div>
	</div>
	</div>
	
	</body>
	</html>
