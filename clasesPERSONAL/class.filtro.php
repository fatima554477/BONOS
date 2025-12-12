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
	
	public function datos_bancarios_xml($idRelacion){
    $conn = $this->db();

    $sql = "SELECT db.idRelacion
            FROM 04personal p
            LEFT JOIN 01DATOSBANCARIOS db
                ON p.idPersonal = db.idRelacion
            WHERE p.idPersonal = ?
            LIMIT 1";

    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) { return null; }

    mysqli_stmt_bind_param($stmt, "i", $idRelacion);
    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt);
    if (!$res) { return null; }

    $row = mysqli_fetch_assoc($res);
    return $row['idRelacion'] ?? null;
}

public function datos_bancarios_todo($idRelacion){
    $conn = $this->db();

    $sql = "SELECT *
            FROM 01DATOSBANCARIOS
            WHERE idRelacion = ?
              AND checkbox = 'si'
            ORDER BY id DESC
            LIMIT 1";

    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) { return null; }

    mysqli_stmt_bind_param($stmt, "i", $idRelacion);
    mysqli_stmt_execute($stmt);

    $res = mysqli_stmt_get_result($stmt);
    if (!$res) { return null; }

    $row = mysqli_fetch_assoc($res);
    return $row ?: null;
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
                $tables = '04personal';
				$tables2 = '01DATOSBANCARIOS';
                $baseConditions = " ( (NOMBRE_PERSONAL is not null or NOMBRE_PERSONAL <> \"\" ) and ($tables1.NUMERO_EVENTO is not null AND $tables1.NUMERO_EVENTO <> \"\") ) ";
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

if($search['NOMBRE_COMERCIAL_EVENTO']!=""){
$sWhere2.="  $tables1.NOMBRE_COMERCIAL_EVENTO LIKE  '%".$search['NOMBRE_COMERCIAL_EVENTO']."%' OR ";}

if($search['NOMBRE_FISCAL_EVENTO']!=""){
$sWhere2.="  $tables1.NOMBRE_FISCAL_EVENTO LIKE  '%".$search['NOMBRE_FISCAL_EVENTO']."%' OR ";}
		
if($search['NOMBRE_PERSONAL']!=""){
$sWhere2.="  $tables.NOMBRE_PERSONAL LIKE '%".$search['NOMBRE_PERSONAL']."%' OR ";}

if($search['PUESTO_PERSONAL2']!=""){
$sWhere2.="  $tables.PUESTO_PERSONAL2 LIKE '%".$search['PUESTO_PERSONAL2']."%' OR ";}

if($search['WHAT_PERSONAL']!=""){
$sWhere2.="  $tables.WHAT_PERSONAL LIKE '%".$search['WHAT_PERSONAL']."%' OR ";}

if($search['EMAIL_PERSONAL2']!=""){
$sWhere2.="  $tables.EMAIL_PERSONAL2 LIKE '%".$search['EMAIL_PERSONAL2']."%' OR ";}

if($search['FECHA_INICIO']!=""){
$sWhere2.="  $tables.FECHA_INICIO LIKE '%".$search['FECHA_INICIO']."%' OR ";}
if($search['FECHA_FINAL']!=""){
$sWhere2.="  $tables.FECHA_FINAL LIKE '%".$search['FECHA_FINAL']."%' OR ";}
if($search['NUMERO_DIAS']!=""){
$sWhere2.="  $tables.NUMERO_DIAS LIKE '%".$search['NUMERO_DIAS']."%' OR ";}
if($search['MONTO_BONO']!=""){
$sWhere2.="  $tables.MONTO_BONO LIKE '%".$search['MONTO_BONO']."%' OR ";}
if($search['MONTO_BONO_TOTAL']!=""){
$sWhere2.="  $tables.MONTO_BONO_TOTAL LIKE '%".$search['MONTO_BONO_TOTAL']."%' OR ";}
if($search['VIATICOS_PERSONAL']!=""){
$sWhere2.="  $tables.VIATICOS_PERSONAL LIKE '%".$search['VIATICOS_PERSONAL']."%' OR ";}
if($search['TOTAL']!=""){
$sWhere2.="  $tables.TOTAL LIKE '%".$search['TOTAL']."%' OR ";}
if($search['ULTIMO_DIA']!=""){
$sWhere2.="  $tables.ULTIMO_DIA LIKE '%".$search['ULTIMO_DIA']."%' OR ";}
if($search['OBSERVACIONES_PERSONAL']!=""){
$sWhere2.="  $tables.OBSERVACIONES_PERSONAL LIKE '%".$search['OBSERVACIONES_PERSONAL']."%' OR ";}
if($search['PERSONAL_FECHA_ULTIMA_CARGA']!=""){
$sWhere2.="  $tables.PERSONAL_FECHA_ULTIMA_CARGA LIKE '%".$search['PERSONAL_FECHA_ULTIMA_CARGA']."%' OR ";}
if($search['hDatosPERSONAL']!=""){
$sWhere2.="  $tables.hDatosPERSONAL LIKE '%".$search['hDatosPERSONAL']."%' OR ";}


		/////////////////////////////nuevo//////////////////////////INSTITUCION_FINANCIERA_1
		if($search['TIPO_DE_MONEDA_1']!=""){
			$sWhere2.="  $tables2.TIPO_DE_MONEDA_1 LIKE '%".$search['TIPO_DE_MONEDA_1']."%' and ";}
		if($search['INSTITUCION_FINANCIERA_1']!=""){
			$sWhere2.="  $tables2.INSTITUCION_FINANCIERA_1 LIKE '%".$search['INSTITUCION_FINANCIERA_1']."%' and ";}
		if($search['NUMERO_DE_CUENTA_DB_1']!=""){
			$sWhere2.="  $tables2.NUMERO_DE_CUENTA_DB_1 LIKE '%".$search['NUMERO_DE_CUENTA_DB_1']."%' and ";}
		if($search['NUMERO_CLABE_1']!=""){
			$sWhere2.="  $tables2.NUMERO_CLABE_1 LIKE '%".$search['NUMERO_CLABE_1']."%' and ";}
		if($search['NUMERO_IBAN_1']!=""){
			$sWhere2.="  $tables2.NUMERO_IBAN_1 LIKE '%".$search['NUMERO_IBAN_1']."%' and ";}
		if($search['NUMERO_CUENTA_SWIFT_1']!=""){
			$sWhere2.="  $tables2.NUMERO_CUENTA_SWIFT_1 LIKE '%".$search['NUMERO_CUENTA_SWIFT_1']."%' and ";}
		if($search['FOTO_ESTADO_PROVEE']!=""){
			$sWhere2.="  $tables2.FOTO_ESTADO_PROVEE LIKE '%".$search['FOTO_ESTADO_PROVEE']."%' and ";}
		if($search['ULTIMA_CARGA_DATOBANCA']!=""){
			$sWhere2.="  $tables2.ULTIMA_CARGA_DATOBANCA LIKE '%".$search['ULTIMA_CARGA_DATOBANCA']."%' and ";}



IF($sWhere2!=""){
                                $sWhere22 = substr($sWhere2,0,-3);
                        $sWhere3  = ' 04altaeventos left join 04personal ON 04altaeventos.id = 04personal.idRelacion'
                        .' where '.$baseConditions.' and ('.$sWhere22.') ';
                }ELSE{
                $sWhere3  = ' 04altaeventos left join 04personal ON 04altaeventos.id = 04personal.idRelacion where '
                        .$baseConditions;
		}


			
			
	
		

		
		$sWhere3.="  order by $tables.id asc ";
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
