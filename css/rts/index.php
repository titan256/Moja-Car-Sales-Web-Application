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
	
  </script>
  
  <script type="text/javascript">
function recp(str) {
  $('#banner').load(str);
}
</script>


    <?php
	include('php/connection.php');
	
	connecttodbm();

	$make=mysql_query("SELECT DISTINCT make FROM make limit 21"); 
	$makes=mysql_query("SELECT DISTINCT make,makeid FROM make "); 
	
	?>

	<link href="css/sub.css" rel="stylesheet" type="text/css" />
	</head>
	
	<body>
	
	<div id="header">
	
	<div id="menu" class="tab-container">
	<ul class='mtabs'>
	<li class="tabs"><a href="index.php"> Home </a></li>
	<li class="tabs"><a href="#" onclick="recp('about.php')"> About </a></li>
	<li class="tabs"><a href="#" onclick="recp('buy.php')"> How to Buy </a></li>
	<li class="tabs"><a href="#" onclick="recp('cont.php')"> Contact Us </a></li>
	<li class="tabs"><a href="#" onclick="recp('help.php')"> Help </a></li>
	</ul>
	</div>
	
	</div>
	
	<div id="container">
	<div class="container2012">
	<div class="inner">
	
		<div id="left_sidebar">
	
	<div class="tracker">
	  <form id="trackers" class="trackers" name="form3" method="post" action="">
        <p>
          <textarea name="track" cols="25" rows="10" id="track" style="margin-left: 6%;
    margin-top: 25px;">Insert Tracking Number</textarea>
        </p>
        <p>
          <input name="button" type="submit" class="trackbtn" id="trackbtn" title="trackbtn" value="Track" />
        </p>
	  </form>
	</div>
	<div id="lowbottom" class="lowbottom" >
    <table width="240px" align="center">
    
    <?php $tdmake="makes"; while($notes = mysql_fetch_array($make)){echo"<tr><td  bgcolor=\"#FFFFFF\" class =' $tdmake' value='$notes[makeid]'><a href = '$url'>$notes[make]</a></td></tr>";}?>
    
    </table>
    </div>
	
	<div id="currency">
    <hr />
	
    <h2><img src="images/ugflag.png" width="43" height="41"/> Ship to Uganda</h2>
    <hr />
	<p>&nbsp;</p>
    </div>
	
	</div>
	
	
	<div class="middle">
	
	<div id="banner">
	<div id='coin-slider'>
	<a href="#" target="_blank">
		<img src="images/banner.gif"/>
		<span>
			
		</span>
	</a>
	<a href="#">
		<img src="images/bannera.gif"/>
		<span>
			
		</span>
	</a>
		<a href="#">
		<img src="images/bannerb.gif"/>
		<span>
		
		</span>
	</a>
</div></div>
	
	<div class="src">
	
	

	
	<div id="tab-container" class="tab-container">
			  <ul class='etabs'>
			  <li class='tab'><a href="#srch">Search For Car</a></li>
				<li class='tab'><a href="#tax">Calculate Tax</a></li>
				
				<li class='tab'><a href="#cur">Find Exchange Rate</a></li>
                
				
			  </ul>
             <div id="cur" align="center">
            <div id='oanda_ecc'> <!-- IF YOU ALTER OR REMOVE THE FOLLOWING CODE, THE EMBEDDED WIDGET WILL NOT WORK. --><span style='color:#000; text-decoration:none; font-size:9px;'><a href='http://www.oanda.com/currency/converter/' id='oanda_cc_link'>Currency Converter</a> by OANDA</span><script src='http://www.oanda.com/embedded/converter/get/ZXNlemEvL2RlZmF1bHQ=/?lang=en'></script></div> </div>
		    <div id="tax">
			
			  <p><div id="make">
                  <p>Make:<br />
                    <select name="make" size="1" onchange="fetchValues(this.value)" id="make" >
                      <option>Select Make</option>
                      <?php $tdmake="makes";
							  while($noter = mysql_fetch_array($makes)){echo"
							  <option value=$noter[make]>$noter[make]</option>";}
							  echo"</select>";
					  		?>
                    </select>
                    <br />
                  Brand:			</p>
                  </div>
			  <div id="brand">
			
			</div></p>
	      	<div id="all">
			
			</div>
			
			</div>
		
			  <div id="srch">
				<div id="find">
	<form id="form2" name="form2" method="post" action="">
    
	<p><label>Keyword:</label><input type="text" id = "keywords" name="keyword" size="30" />
	<label> Type:</label>
	<select name="select" id="stocks">
	    <option>Japan stocks</option>
	    </select> 
	<label>Make:</label>
	<select name="select" id="make">
	    <option>--All Makes---</option>
	    </select> 
	<label>Model:</label><select name="select" id="model">
	    <option>--All Models--</option>
	    </select>
	</p>
	<p>
	<label>Year:</label>
	  <select name="yr" id="yr"><option>--Any--</option></select><select name="yr2" id="yr2"><option>Any</option></select>
	  <label>	F.O.B :</label>
	  <select name="price" id="price"><option>--Any--</option></select> 
	  <select name="price2" id="price2"><option>Any</option></select>
	  <input type="checkbox" id="lhd"/>
	  <label>Left Hand Drive</label>
	  <input type="checkbox" id="rhd"/>
	  <label>Right Hand Drive</label>
	</p>
	  <p align="right">
	    <label for="Submit"></label>
	    <input name="button" type="submit" class="trackbtn" id="trackbtn" title="trackbtn" value="Search"/>
	  </p>
	  </form>
	  </div>
			</div>
			  </div>
			  
	</div>
<div class="cars"><img src="images/dummy_car.gif"/></div>
	</div>
	</div>
	</div>
	
	
	<div id="footer">
	
	<div id="footer1"></div>
	<div id="footer2"></div>
	</div>
	</div>
	
	</body>
	</html>
