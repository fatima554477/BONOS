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

	public function actualizaSTATUS_RECHAZOBONO($STATUS_RECHAZOBONO_id, $STATUS_RECHAZOBONO_text){
		$conn = $this->db();
		$idPersonal = (int)$STATUS_RECHAZOBONO_id;
		$valor = ($STATUS_RECHAZOBONO_text === 'si') ? 'si' : 'no';

		if($idPersonal <= 0){
			return "Datos_invalidos";
		}

		$var1 = "
			UPDATE 04personal
			SET STATUS_RECHAZOBONO = '".$conn->real_escape_string($valor)."'
			WHERE id = ".$idPersonal."
			LIMIT 1
		";
		mysqli_query($conn, $var1) or die('P156'.mysqli_error($conn));
		return "Actualizado";
	}

	private function crear_tabla_rechazos_personal_si_no_existe($conn){
		$crearTabla = "CREATE TABLE IF NOT EXISTS `04PERSONAL_RECHAZOS` (
			`id` int(11) NOT NULL AUTO_INCREMENT,
			`tipo_personal` varchar(20) NOT NULL,
			`id_personal` int(11) NOT NULL,
			`motivo_rechazo` text,
			`usuario_registro` varchar(255) DEFAULT NULL,
			`fecha_registro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
			PRIMARY KEY (`id`),
			UNIQUE KEY `uniq_tipo_personal` (`tipo_personal`,`id_personal`)
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		mysqli_query($conn, $crearTabla);
	}

	public function guardar_motivo_rechazo_personal($idPersonal, $tipoPersonal, $motivoRechazo){
		$conn = $this->db();
		$session = isset($_SESSION['idem']) ? $_SESSION['idem'] : '';

		$idPersonal = intval($idPersonal);
		$tipoPersonal = trim($tipoPersonal);
		$motivoRechazo = trim($motivoRechazo);

		if($idPersonal <= 0 || $motivoRechazo == ''){ return "Datos_invalidos"; }
		if($tipoPersonal != 'personal' && $tipoPersonal != 'personal2'){ return "Tipo_invalido"; }

		$this->crear_tabla_rechazos_personal_si_no_existe($conn);
		$idEscapado = mysqli_real_escape_string($conn, $idPersonal);
		$tipoEscapado = mysqli_real_escape_string($conn, $tipoPersonal);
		$motivoEscapado = mysqli_real_escape_string($conn, $motivoRechazo);
		$usuarioEscapado = mysqli_real_escape_string($conn, ($session != '' ? $session : 'sistema'));

		$insert = "INSERT INTO 04PERSONAL_RECHAZOS (tipo_personal, id_personal, motivo_rechazo, usuario_registro, fecha_registro)
		VALUES ('".$tipoEscapado."', '".$idEscapado."', '".$motivoEscapado."', '".$usuarioEscapado."', NOW())
		ON DUPLICATE KEY UPDATE motivo_rechazo = VALUES(motivo_rechazo), usuario_registro = VALUES(usuario_registro), fecha_registro = NOW()";

		mysqli_query($conn, $insert) or die('P156'.mysqli_error($conn));
		return "ok";
	}

	public function obtener_motivo_rechazo_personal($idPersonal, $tipoPersonal){
		$conn = $this->db();
		$idPersonal = intval($idPersonal);
		$tipoPersonal = trim($tipoPersonal);

		if($idPersonal <= 0){ return ''; }
		if($tipoPersonal != 'personal' && $tipoPersonal != 'personal2'){ return ''; }

		$this->crear_tabla_rechazos_personal_si_no_existe($conn);
		$idEscapado = mysqli_real_escape_string($conn, $idPersonal);
		$tipoEscapado = mysqli_real_escape_string($conn, $tipoPersonal);

		$query = mysqli_query($conn, "SELECT motivo_rechazo FROM 04PERSONAL_RECHAZOS WHERE tipo_personal = '".$tipoEscapado."' AND id_personal = '".$idEscapado."' LIMIT 1");
		if($query){
			$row = mysqli_fetch_array($query, MYSQLI_ASSOC);
			if($row && isset($row['motivo_rechazo'])){
				return $row['motivo_rechazo'];
			}
		}

		return '';
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
          $baseConditions = " ( ($tables.NOMBRE_PERSONAL is not null or $tables.NOMBRE_PERSONAL <> \"\" ) and ($tables1.NUMERO_EVENTO is not null AND $tables1.NUMERO_EVENTO <> \"\") )"
			." and ($tables.NOMBRE_RECIBIO is null or $tables.NOMBRE_RECIBIO = \"\")"
			." and ($tables.ADJUNTO_COMPROBANTEP is null or $tables.ADJUNTO_COMPROBANTEP = \"\") ";
		$sWhere2="";$sWhere3="";
		$autorizacionWhere = "";

		if(isset($search['VYO']) && $search['VYO'] !== ""){
			$autorizacionWhere .= " and $tables.VYO = '".$search['VYO']."'";
		}

		if(isset($search['DIRECCION']) && $search['DIRECCION'] !== ""){
			$autorizacionWhere .= " and $tables.DIRECCION = '".$search['DIRECCION']."'";
		}

		if(isset($search['admin']) && $search['admin'] !== ""){
			$autorizacionWhere .= " and $tables.admin = '".$search['admin']."'";
		}

		
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

if($search['FECHA_PPAGO']!=""){
$sWhere2.="  $tables.FECHA_PPAGO LIKE '%".$search['FECHA_PPAGO']."%' OR ";}

if($search['FORMA_PAGO']!=""){
$sWhere2.="  $tables.FORMA_PAGO LIKE '%".$search['FORMA_PAGO']."%' OR ";}

if($search['FECHA_EFECTIVA']!=""){
$sWhere2.="  $tables.FECHA_EFECTIVA LIKE '%".$search['FECHA_EFECTIVA']."%' OR ";}

if($search['ADJUNTO_COMPROBANTEP']!=""){
$sWhere2.="  $tables.ADJUNTO_COMPROBANTEP LIKE '%".$search['ADJUNTO_COMPROBANTEP']."%' OR ";}

if($search['NOMBRE_RECIBIO']!=""){
$sWhere2.="  $tables.NOMBRE_RECIBIO LIKE '%".$search['NOMBRE_RECIBIO']."%' OR ";}




if($search['PUESTO_PERSONAL2']!=""){
$sWhere2.="  $tables.PUESTO_PERSONAL2 LIKE '%".$search['PUESTO_PERSONAL2']."%' OR ";}

if($search['WHAT_PERSONAL']!=""){
$sWhere2.="  $tables.WHAT_PERSONAL LIKE '%".$search['WHAT_PERSONAL']."%' OR ";}

if($search['EMAIL_PERSONAL2']!=""){
$sWhere2.="  $tables.EMAIL_PERSONAL2 LIKE '%".$search['EMAIL_PERSONAL2']."%' OR ";}

if($search['TIPO_DE_MONEDA_1']!=""){
$sWhere2.="  01DATOSBANCARIOS.TIPO_DE_MONEDA_1 LIKE '%".$search['TIPO_DE_MONEDA_1']."%' OR ";}

if($search['INSTITUCION_FINANCIERA_1']!=""){
$sWhere2.="  01DATOSBANCARIOS.INSTITUCION_FINANCIERA_1 LIKE '%".$search['INSTITUCION_FINANCIERA_1']."%' OR ";}

if($search['NUMERO_DE_CUENTA_DB_1']!=""){
$sWhere2.="  01DATOSBANCARIOS.NUMERO_DE_CUENTA_DB_1 LIKE '%".$search['NUMERO_DE_CUENTA_DB_1']."%' OR ";}

if($search['NUMERO_CLABE_1']!=""){
$sWhere2.="  01DATOSBANCARIOS.NUMERO_CLABE_1 LIKE '%".$search['NUMERO_CLABE_1']."%' OR ";}

if($search['FOTO_ESTADO_PROVEE']!=""){
$sWhere2.="  01DATOSBANCARIOS.FOTO_ESTADO_PROVEE LIKE '%".$search['FOTO_ESTADO_PROVEE']."%' OR ";}

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
IF($sWhere2!=""){
                                $sWhere22 = substr($sWhere2,0,-3);
                        $sWhere3  = ' 04altaeventos left join 04personal ON 04altaeventos.id = 04personal.idRelacion'
                        .' left join 01informacionpersonal ON 04personal.NOMBRE_PERSONAL = 01informacionpersonal.idRelacion'
                        .' left join 01DATOSBANCARIOS ON 01DATOSBANCARIOS.idRelacion = 01informacionpersonal.idRelacion'
                        .' where '.$baseConditions.' and 01DATOSBANCARIOS.checkbox = \'si\''.$autorizacionWhere.' and ('.$sWhere22.') ';
                }ELSE{
                $sWhere3  = ' 04altaeventos left join 04personal ON 04altaeventos.id = 04personal.idRelacion'
                        .' left join 01informacionpersonal ON 04personal.NOMBRE_PERSONAL = 01informacionpersonal.idRelacion'
                        .' left join 01DATOSBANCARIOS ON 01DATOSBANCARIOS.idRelacion = 01informacionpersonal.idRelacion where '
						.$baseConditions.' and 01DATOSBANCARIOS.checkbox = \'si\''.$autorizacionWhere;
		}


			
			
	
		

		
		$sWhere3.="  order by $tables.id asc ";
		$sql="SELECT $campos, 04personal.id as PERSONAL_ID, 04altaeventos.id as EVENTO_ID, IDPERSONAL as id FROM $sWhere $sWhere3 LIMIT $offset,$per_page";
		
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
