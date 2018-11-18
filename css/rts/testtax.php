<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script type="text/javascript">
function check(str){
	
	if(document.getElementById(str).checked){
	this.calculatetax();
	}else{
		
		alert("unchecked");
		
	}
}
</script>>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>

<body>

<input name="test" id="test" type="checkbox" value="yes" onclick="check("this.id")"/>
</body>
</html>