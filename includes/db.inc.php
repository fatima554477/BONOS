<?php

class conectdb{

public function db(){
$conn='';
$ambiente = $this->ambiente();
if($ambiente == 'QA'){
$db_server='localhost';
$db_username='u492963066_epeventos';
$db_password='12Epc@@^9Aa';
$db_name='u492963066_epeventos';
 }elseif($ambiente == 'localhost'){
$db_server='localhost';
$db_username='root';
$db_password='';
$db_name='epeventos_crm6';
}elseif($ambiente == 'PROD2'){
$db_server='localhost';
$db_username='u492963066_prod';
$db_password='EPc@@ñ^IN722489';
$db_name='u492963066_prod';
}elseif($ambiente == 'PROD'){
$db_server='localhost';
$db_username='u492963066_prod01';
$db_password='iXRGWFu5gMn449u';
$db_name='u492963066_prod01';
}
	$conn = mysqli_connect($db_server,$db_username,$db_password,$db_name);
	mysqli_set_charset($conn,"iso-8859-1");
	mysqli_set_charset($conn,"utf8");
	return $conn;
}

}

?>