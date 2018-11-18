<?php
function connecttodbp($servername,$dbname,$dbuser,$dbpassword)
{
	global $link;
	$link=mysql_connect ("$servername","$dbuser","$dbpassword");
	if(!$link){die("Could not connect to MySQL");}
	mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());

}
function connecttodb()
{
	$dbservertype='mysql';
	$servername='localhost';
	$dbuser='root';
	$dbpassword='root';
	$dbname='rts';
	global $link;
	$link=mysql_connect ("$servername","$dbuser","$dbpassword");
	if(!$link){die("Could not connect to MySQL");}
	mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());

}
function  connecttodbm()
{
	$dbservertype='mysql';
	$servername='localhost';
	$dbuser='mamutcom_eseza';
	$dbpassword='89kzoo9j';
	$dbname='mamutcom_rts';
	global $link;
	$link=mysql_connect ("$servername","$dbuser","$dbpassword");
	if(!$link){die("Could not connect to MySQL");}
	mysql_select_db("$dbname",$link) or die ("could not open db".mysql_error());

}

?>
