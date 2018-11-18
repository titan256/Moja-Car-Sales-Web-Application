<?php
//the parameters

//if the car is a truck and it has a certain weight
$exempt = "truck";
$exemptweight;

function getParams($caryear,$cartype,$cif,$exemptweight){
//the rates
$oldrate='0.735';
$newrate='0.535';
$exemptrate='0.38';
$exchangerate='2330';
$misc = '1018000';

$currentyear = date("Y");
$age = $currentyear -$caryear ;
//checking whether car is a truck over two tons
if($cartype ==$exempt){

	if($exemptweight>1){
	Formular($cif,$exemptrate,$misc,$exchangerate);
	}else{
	
	if($age<8){

	Formular($cif,$newrate,$misc,$exchangerate);
	}else if($age>8){
	Formular($cif,$oldrate,$misc,$exchangerate);
	}else{
	echo "really";
	}
	
	}
}else{
	if($age<8){

	Formular($cif,$newrate,$misc,$exchangerate);
	}else if($age>8){
	Formular($cif,$oldrate,$misc,$exchangerate);
	}else{
	echo "really";
	}
}

}
function Formular($cif,$taxrate,$misc,$exchangerate){

 $taxcost = ($cif*$taxrate*$exchangerate)+$misc;
 echo "<td>".$taxcost."</td>";
 return "<td>".$taxcost."</td>";



}
function register($rate){
}


?>