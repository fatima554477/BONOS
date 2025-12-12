<?php
/**
 	--------------------------
	Autor: Sandor Matamoros
	Programer: Fatima Arellano
	Propietario: EPC
	----------------------------
 
*/

define("__ROOT1__", dirname(dirname(__FILE__)));
	include_once (__ROOT1__."/../includes/error_reporting.php");
	include_once (__ROOT1__."/../calendariodeeventos2/class.epcinnAE.php");

	
	class orders extends accesoclase {
	public $mysqli;
	public $counter;//Propiedad para almacenar el numero de registro devueltos por la consulta

	function __construct(){
		$this->mysqli = $this->db();
    }
	
	public function countAll($sql){
		$query=$this->mysqli->query($sql);
		$count=$query->num_rows;
		return $count;
	}
	//STATUS_EVENTO,NOMBRE_CORTO_EVENTO,NOMBRE_EVENTO
	public function getData($tables,$campos,$search){
		$offset=$search['offset'];
		$per_page=$search['per_page'];
		
		$sWhere=" ";

		$tables1 = '04altaeventos';
		$tables = '04personal2'; 		
$sWhere2="";$sWhere3="";
		
if($search['NUMERO_EVENTO']!=""){
$sWhere2.="  $tables1.NUMERO_EVENTO LIKE   '%".$search['NUMERO_EVENTO']."%' OR ";}

if($search['NOMBRE_EVENTO']!=""){
$sWhere2.="  $tables1.NOMBRE_EVENTO LIKE   '%".$search['NOMBRE_EVENTO']."%' OR ";}

if($search['FECHA_INICIO_EVENTO']!=""){
$sWhere2.="  $tables1.FECHA_INICIO_EVENTO LIKE  '%".$search['FECHA_INICIO_EVENTO']."%' OR ";}

if($search['PAIS_DEL_EVENTO']!=""){
$sWhere2.="  $tables1.PAIS_DEL_EVENTO LIKE   '%".$search['PAIS_DEL_EVENTO']."%' OR ";}

if($search['CIUDAD_DEL_EVENTO']!=""){
$sWhere2.="  $tables1.CIUDAD_DEL_EVENTO LIKE  '%".$search['CIUDAD_DEL_EVENTO']."%' OR ";}
		





if($search['NOMBRE_PERSONAL2']!=""){
$sWhere2.="  $tables.NOMBRE_PERSONAL2 LIKE '%".$search['NOMBRE_PERSONAL2']."%' OR ";}
if($search['FECHA_INICIO1']!=""){
$sWhere2.="  $tables.FECHA_INICIO1 LIKE '%".$search['FECHA_INICIO1']."%' OR ";}
if($search['FECHA_FINAL1']!=""){
$sWhere2.="  $tables.FECHA_FINAL1 LIKE '%".$search['FECHA_FINAL1']."%' OR ";}
if($search['NUMERO_DIAS1']!=""){
$sWhere2.="  $tables.NUMERO_DIAS1 LIKE '%".$search['NUMERO_DIAS1']."%' OR ";}
if($search['MONTO_BONO1']!=""){
$sWhere2.="  $tables.MONTO_BONO1 LIKE '%".$search['MONTO_BONO1']."%' OR ";}
if($search['MONTO_BONO_TOTAL1']!=""){
$sWhere2.="  $tables.MONTO_BONO_TOTAL1 LIKE '%".$search['MONTO_BONO_TOTAL1']."%' OR ";}
if($search['VIATICOS_PERSONAL2']!=""){
$sWhere2.="  $tables.VIATICOS_PERSONAL2 LIKE '%".$search['VIATICOS_PERSONAL2']."%' OR ";}
if($search['TOTAL1']!=""){
$sWhere2.="  $tables.TOTAL1 LIKE '%".$search['TOTAL1']."%' OR ";}
if($search['ULTIMO_DIA1']!=""){
$sWhere2.="  $tables.ULTIMO_DIA1 LIKE '%".$search['ULTIMO_DIA1']."%' OR ";}
if($search['OBSERVACIONES_PERSONAL2']!=""){
$sWhere2.="  $tables.OBSERVACIONES_PERSONAL2 LIKE '%".$search['OBSERVACIONES_PERSONAL2']."%' OR ";}
if($search['PERSONAL2_FECHA_ULTIMA_CARGA']!=""){
$sWhere2.="  $tables.PERSONAL2_FECHA_ULTIMA_CARGA LIKE '%".$search['PERSONAL2_FECHA_ULTIMA_CARGA']."%' OR ";}
if($search['hDatosPERSONAL2']!=""){
$sWhere2.="  $tables.hDatosPERSONAL2 LIKE '%".$search['hDatosPERSONAL2']."%' OR ";}
IF($sWhere2!=""){
				$sWhere22 = substr($sWhere2,0,-3);
			$sWhere3  = ' 04altaeventos left join 04personal2 ON 04altaeventos.id = 04personal2.idRelacion  
			where (  (NOMBRE_PERSONAL2 is not null or NOMBRE_PERSONAL2 <> "" ) and '.$sWhere22.' ) ';
		}ELSE{
		$sWhere3  = ' 04altaeventos left join 04personal2 ON 04altaeventos.id = 04personal2.idRelacion where ( NOMBRE_PERSONAL2 is not null or NOMBRE_PERSONAL2 <> "" ) ';	
		}
		

		
		$sWhere3.="  order by $tables.id desc ";
		$sql="SELECT $campos, 04altaeventos.id as id FROM $sWhere $sWhere3 LIMIT $offset,$per_page";
		
		$query=$this->mysqli->query($sql);
		$sql1="SELECT $campos FROM $sWhere $sWhere3 ";
		$nums_row=$this->countAll($sql1);
		//Set counter
		$this->setCounter($nums_row);
		return $query;
	}
	function setCounter($counter) {
		$this->counter = $counter;
	}
	function getCounter() {
		return $this->counter;
	}
}
?>
