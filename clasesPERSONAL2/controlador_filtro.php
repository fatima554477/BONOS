<?php

/**
 	--------------------------
	Autor: Sandor Matamoros
	Programer: Fatima Arellano
	Propietario: EPC
	----------------------------
 
*/


	if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
	define("__ROOT6__", dirname(__FILE__));

require(__ROOT6__."/class.filtroP2.php");

if(isset($_POST["STATUS_BONORECHAZO_id"]) && isset($_POST["STATUS_BONORECHAZO_text"])) {
	$database = new orders();
	echo $database->actualizaSTATUS_BONORECHAZO($_POST["STATUS_BONORECHAZO_id"], $_POST["STATUS_BONORECHAZO_text"]);
	exit;
}

if(isset($_POST["RECHAZO_MOTIVO_PERSONAL_id"]) && isset($_POST["RECHAZO_MOTIVO_PERSONAL_tipo"]) && isset($_POST["RECHAZO_MOTIVO_PERSONAL_text"])) {
	$database = new orders();
	echo $database->guardar_motivo_rechazo_personal($_POST["RECHAZO_MOTIVO_PERSONAL_id"], $_POST["RECHAZO_MOTIVO_PERSONAL_tipo"], $_POST["RECHAZO_MOTIVO_PERSONAL_text"]);
	exit;
}

if(isset($_POST["RECHAZO_MOTIVO_PERSONAL_VER_id"]) && isset($_POST["RECHAZO_MOTIVO_PERSONAL_VER_tipo"])) {
	$database = new orders();
	echo $database->obtener_motivo_rechazo_personal($_POST["RECHAZO_MOTIVO_PERSONAL_VER_id"], $_POST["RECHAZO_MOTIVO_PERSONAL_VER_tipo"]);
	exit;
}

$action = (isset($_POST["action2"])&& $_POST["action2"] !=NULL)?$_POST["action2"]:"";
if($action == "ajax2"){

	$database=new orders();	
	$puedeVerAdmin2 = ($database->variablespermisos('', 'PERSO2BONO', 'ver') === 'si');
	$puedeGuardarAdmin2 = ($database->variablespermisos('', 'PERSO2BONO', 'guardar') === 'si');
	$puedeModificarAdmin2 = ($database->variablespermisos('', 'PERSO2BONO', 'modificar') === 'si');
	$puedeVerVYO2 = ($database->variablespermisos('', 'PERSOvyo2BONO', 'ver') === 'si');
	$puedeGuardarVYO2 = ($database->variablespermisos('', 'PERSOvyo2BONO', 'guardar') === 'si');
	$puedeModificarVYO2 = ($database->variablespermisos('', 'PERSOvyo2BONO', 'modificar') === 'si');
	$puedeVerDIRECCION2 = ($database->variablespermisos('', 'PERSOdire2BONO', 'ver') === 'si');
	$puedeGuardarDIRECCION2 = ($database->variablespermisos('', 'PERSOdire2BONO', 'guardar') === 'si');
	$puedeModificarDIRECCION2 = ($database->variablespermisos('', 'PERSOdire2BONO', 'modificar') === 'si');
	$puedeVerRechazoBono2 = ($database->variablespermisos('', 'rechazo2', 'ver') === 'si');
	$puedeGuardarRechazoBono2 = ($database->variablespermisos('', 'rechazo2', 'guardar') === 'si');
	$puedeModificarRechazoBono2 = ($database->variablespermisos('', 'rechazo2', 'modificar') === 'si');

	$query=isset($_POST["query"])?$_POST["query"]:"";

$DEPARTAMENTO = !EMPTY($_POST["DEPARTAMENTO2"])?$_POST["DEPARTAMENTO2"]:"DEFAULT";	
	$tables = "04personal2";
	$nombreTabla = "SELECT * FROM `08altaeventosfiltroDes`, 08altaeventosfiltroPLA WHERE 08altaeventosfiltroDes.id = 08altaeventosfiltroPLA.idRelacion";
	$altaeventos = "altaeventos";

	
$NUMERO_EVENTO = isset($_POST["NUMERO_EVENTO"])?$_POST["NUMERO_EVENTO"]:""; 
$NOMBRE_EVENTO = isset($_POST["NOMBRE_EVENTO"])?$_POST["NOMBRE_EVENTO"]:""; 
$FECHA_INICIO_EVENTO = isset($_POST["FECHA_INICIO_EVENTO"])?$_POST["FECHA_INICIO_EVENTO"]:""; 
$PAIS_DEL_EVENTO = isset($_POST["PAIS_DEL_EVENTO"])?$_POST["PAIS_DEL_EVENTO"]:""; 
$CIUDAD_DEL_EVENTO = isset($_POST["CIUDAD_DEL_EVENTO"])?$_POST["CIUDAD_DEL_EVENTO"]:""; 


$NOMBRE_PERSONAL2 = isset($_POST["NOMBRE_PERSONAL2"])?$_POST["NOMBRE_PERSONAL2"]:""; 
$FECHA_INICIO1 = isset($_POST["FECHA_INICIO1"])?$_POST["FECHA_INICIO1"]:""; 
$FECHA_FINAL1 = isset($_POST["FECHA_FINAL1"])?$_POST["FECHA_FINAL1"]:""; 
$NUMERO_DIAS1 = isset($_POST["NUMERO_DIAS1"])?$_POST["NUMERO_DIAS1"]:""; 
$MONTO_BONO1 = isset($_POST["MONTO_BONO1"])?$_POST["MONTO_BONO1"]:""; 
$MONTO_BONO_TOTAL1 = isset($_POST["MONTO_BONO_TOTAL1"])?$_POST["MONTO_BONO_TOTAL1"]:""; 
$VIATICOS_PERSONAL2 = isset($_POST["VIATICOS_PERSONAL2"])?$_POST["VIATICOS_PERSONAL2"]:""; 
$TOTAL1 = isset($_POST["TOTAL1"])?$_POST["TOTAL1"]:""; 
$ULTIMO_DIA1 = isset($_POST["ULTIMO_DIA1"])?$_POST["ULTIMO_DIA1"]:""; 
$OBSERVACIONES_PERSONAL2 = isset($_POST["OBSERVACIONES_PERSONAL2"])?$_POST["OBSERVACIONES_PERSONAL2"]:""; 
$PERSONAL2_FECHA_ULTIMA_CARGA = isset($_POST["PERSONAL2_FECHA_ULTIMA_CARGA"])?$_POST["PERSONAL2_FECHA_ULTIMA_CARGA"]:""; 
$hDatosPERSONAL2 = isset($_POST["hDatosPERSONAL2"])?$_POST["hDatosPERSONAL2"]:""; 
$PUESTO_PERSONAL2 = isset($_POST["PUESTO_PERSONAL2"])?$_POST["PUESTO_PERSONAL2"]:""; 
$EMAIL_PERSONAL2 = isset($_POST["EMAIL_PERSONAL2"])?$_POST["EMAIL_PERSONAL2"]:""; 
$WHAT_PERSONAL2 = isset($_POST["WHAT_PERSONAL2"])?$_POST["WHAT_PERSONAL2"]:""; 
$TIPO_DE_MONEDA_1 = isset($_POST["TIPO_DE_MONEDA_1"])?trim($_POST["TIPO_DE_MONEDA_1"]):"";  
$INSTITUCION_FINANCIERA_1 = isset($_POST["INSTITUCION_FINANCIERA_1"])?trim($_POST["INSTITUCION_FINANCIERA_1"]):"";  
$NUMERO_DE_CUENTA_DB_1 = isset($_POST["NUMERO_DE_CUENTA_DB_1"])?trim($_POST["NUMERO_DE_CUENTA_DB_1"]):"";  
$NUMERO_CLABE_1 = isset($_POST["NUMERO_CLABE_1"])?trim($_POST["NUMERO_CLABE_1"]):"";  
$NUMERO_IBAN_1 = isset($_POST["NUMERO_IBAN_1"])?trim($_POST["NUMERO_IBAN_1"]):"";  
$NUMERO_CUENTA_SWIFT_1 = isset($_POST["NUMERO_CUENTA_SWIFT_1"])?trim($_POST["NUMERO_CUENTA_SWIFT_1"]):"";  
$FOTO_ESTADO_PROVEE = isset($_POST["FOTO_ESTADO_PROVEE"])?trim($_POST["FOTO_ESTADO_PROVEE"]):"";  
$FECHA_PPAGO1 = isset($_POST["FECHA_PPAGO1"])?trim($_POST["FECHA_PPAGO1"]):"";  
$FORMA_PAGO1 = isset($_POST["FORMA_PAGO1"])?trim($_POST["FORMA_PAGO1"]):"";  
$FECHA_EFECTIVA1 = isset($_POST["FECHA_EFECTIVA1"])?trim($_POST["FECHA_EFECTIVA1"]):"";  
$ADJUNTO_COMPROBANTE = isset($_POST["ADJUNTO_COMPROBANTE"])?trim($_POST["ADJUNTO_COMPROBANTE"]):"";  
$NOMBRE_RECIBIO1 = isset($_POST["NOMBRE_RECIBIO1"])?trim($_POST["NOMBRE_RECIBIO1"]):"";  
$ULTIMA_CARGA_DATOBANCA = isset($_POST["ULTIMA_CARGA_DATOBANCA"])?trim($_POST["ULTIMA_CARGA_DATOBANCA"]):"";  
$VYO = isset($_POST["VYO"])?trim($_POST["VYO"]):"";
$DIRECCION = isset($_POST["DIRECCION"])?trim($_POST["DIRECCION"]):"";
$admin = isset($_POST["admin"])?trim($_POST["admin"]):"";
$STATUS_BONORECHAZO = isset($_POST["STATUS_BONORECHAZO"])?trim($_POST["STATUS_BONORECHAZO"]):"";
$per_page=intval($_POST["per_page"]);
$formasPago = array(

"03" => "TRANSFERENCIA ELECTRONICA",

"04" => "TARJETA DE CRÉDITO",

"28" => "TARJETA DE DÉBITO",

"01" => "EFECTIVO",

"02" => "CHEQUE NOMINATIVO",

"05" => "MONEDERO ELECTRÓNICO",

"06" => "DINERO ELECTRÓNICO",

"08" => "VALES DE DESPENSA",

"29" => "TARJETA DE SERVICIO",

"99" => "OTROS"

);



	$campos="04personal2.*, 01informacionpersonal.*, 01DATOSBANCARIOS.*, 04altaeventos.*";
	//Variables de paginación

	$page = (isset($_POST["page"]) && !empty($_POST["page"]))?$_POST["page"]:1;

	$adjacents  = 4; //espacio entre páginas después del número de adyacentes

	$offset = ($page - 1) * $per_page;

	//Variables de paginación
	$page = (isset($_POST["page"]) && !empty($_POST["page"]))?$_POST["page"]:1;
	$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;
	
	$search=array(
"NUMERO_EVENTO"=>$NUMERO_EVENTO,
"NOMBRE_EVENTO"=>$NOMBRE_EVENTO,
"FECHA_INICIO_EVENTO"=>$FECHA_INICIO_EVENTO,
"PAIS_DEL_EVENTO"=>$PAIS_DEL_EVENTO,
"CIUDAD_DEL_EVENTO"=>$CIUDAD_DEL_EVENTO,
"PUESTO_PERSONAL2"=>$PUESTO_PERSONAL2,
"EMAIL_PERSONAL2"=>$EMAIL_PERSONAL2,
"WHAT_PERSONAL2"=>$WHAT_PERSONAL2,
"NOMBRE_PERSONAL2"=>$NOMBRE_PERSONAL2,
"FECHA_INICIO1"=>$FECHA_INICIO1,
"FECHA_FINAL1"=>$FECHA_FINAL1,
"NUMERO_DIAS1"=>$NUMERO_DIAS1,
"MONTO_BONO1"=>$MONTO_BONO1,
"MONTO_BONO_TOTAL1"=>$MONTO_BONO_TOTAL1,
"VIATICOS_PERSONAL2"=>$VIATICOS_PERSONAL2,
"TOTAL1"=>$TOTAL1,
"ULTIMO_DIA1"=>$ULTIMO_DIA1,
"OBSERVACIONES_PERSONAL2"=>$OBSERVACIONES_PERSONAL2,
"PERSONAL2_FECHA_ULTIMA_CARGA"=>$PERSONAL2_FECHA_ULTIMA_CARGA,
"TIPO_DE_MONEDA_1"=>$TIPO_DE_MONEDA_1,
"INSTITUCION_FINANCIERA_1"=>$INSTITUCION_FINANCIERA_1,
"NUMERO_DE_CUENTA_DB_1"=>$NUMERO_DE_CUENTA_DB_1,
"NUMERO_CLABE_1"=>$NUMERO_CLABE_1,
"NUMERO_IBAN_1"=>$NUMERO_IBAN_1,
"NUMERO_CUENTA_SWIFT_1"=>$NUMERO_CUENTA_SWIFT_1,
"FOTO_ESTADO_PROVEE"=>$FOTO_ESTADO_PROVEE,
"FECHA_PPAGO1"=>$FECHA_PPAGO1,
"FORMA_PAGO1"=>$FORMA_PAGO1,
"FECHA_EFECTIVA1"=>$FECHA_EFECTIVA1,
"ADJUNTO_COMPROBANTE"=>$ADJUNTO_COMPROBANTE,
"NOMBRE_RECIBIO1"=>$NOMBRE_RECIBIO1,
"ULTIMA_CARGA_DATOBANCA"=>$ULTIMA_CARGA_DATOBANCA,
"VYO"=>$VYO,
"DIRECCION"=>$DIRECCION,
"admin"=>$admin,
"STATUS_BONORECHAZO"=>$STATUS_BONORECHAZO,
"hDatosPERSONAL2"=>$hDatosPERSONAL2,

 "per_page"=>$per_page,
	"query"=>$query,
	"offset"=>$offset);
	//consulta principal para recuperar los datos

      $datosQuery=$database->getData($tables,$campos,$search);
        $datos = array();
        if (is_object($datosQuery) && method_exists($datosQuery, 'fetch_assoc')) {
                while ($fila = $datosQuery->fetch_assoc()) {
                        $datos[] = $fila;
                }
                if (method_exists($datosQuery, 'free')) {
                        $datosQuery->free();
                }
        } elseif (is_array($datosQuery)) {
                $datos = $datosQuery;
        }
        $countAll=$database->getCounter();
	$row = $countAll;

	if ($row>0){
		$numrows = $countAll;;
	} else {
		$numrows=0;
	}	
	$total_pages = ceil($numrows/$per_page);
	
	
	//Recorrer los datos recuperados
		?>


		<div class="clearfix">
			<?php 
				echo "<div class='hint-text'> ".$numrows." registros</div>";
				require __ROOT6__."/pagination.php"; //include pagination class
				$pagination=new Pagination($page, $total_pages, $adjacents);
				echo $pagination->paginate();
			?>
        </div>
	<div class="table-responsive">
	<style>
    thead tr:first-child th {
        position: sticky;
        top: 0;
        background: #c9e8e8;
        z-index: 10;
    }

    thead tr:nth-child(2) td {
        position: sticky;
        top: 37px; /* Altura del primer encabezado */
        background: #e2f2f2;
        z-index: 9;
    }
</style>
<div style="max-height: 600px; overflow-y: auto;">
			  
				  
	 <table class="table table-striped table-bordered" >	
		<thead>
            <tr>
<th style="background:#c9e8e8"></th>
<th style="background:#c9e8e8">#</th>



<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE EVENTO </th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL EVENTO </th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE INICIO DEL EVENTO </th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PAÍS DEL EVENTO </th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CIUDAD DEL EVENTO </th>
<?php } ?>


<?php if($puedeVerVYO2){ ?><th style="background:#c9e8e8;text-align:center">AUTORIZACIÓN <br>POR VYO</th>
<?php } ?>
<?php if($puedeVerDIRECCION2){ ?><th style="background:#c9e8e8;text-align:center">AUTORIZACIÓN <br>POR DIRECCIÓN</th>
<?php } ?>
<?php if($puedeVerAdmin2){ ?><th style="background:#c9e8e8;text-align:center">AUTORIZACIÓN <br>POR AUDITORÍA</th>
<?php } ?>
<?php if($puedeVerRechazoBono2){ ?><th style="background:#c9e8e8;text-align:center">RECHAZAR<br>PAGO BONO</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL PERSONAL</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PUESTO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TELEFONO DE OFICINA</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">EMAIL</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE INICIO DE COORDINACIÓN</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE FINAL DE COORDINACIÓN</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE DIAS</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO DEL BONO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TOTAL</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MOTIVO DEL BONO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TIPO DE MONEDA</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"INSTITUCION_FINANCIERA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">INSTITUCIÓN FINANCIERA</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_DE_CUENTA_DB_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE CUENTA</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_CLABE_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE CUENTA CLABE</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FOTO ESTADO DE CUENTA</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FORMA DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">FECHA EFECTIVA DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">COMPROBANTE DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#f48a81;text-align:center">PAX QUE COBRO</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA ULTIMA CARGA</th>
<?php } ?>
<th style="background:#c9e8e8"></th>
<?php /*termina copiar y terminaA3*/ ?>
            </tr>
            <tr>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>


<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NUMERO_EVENTO_2" value="<?php 
echo $NUMERO_EVENTO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NOMBRE_EVENTO_2" value="<?php 
echo $NOMBRE_EVENTO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="date" class="form-control" id="FECHA_INICIO_EVENTO_2" value="<?php 
echo $FECHA_INICIO_EVENTO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="PAIS_DEL_EVENTO_2" value="<?php 
echo $PAIS_DEL_EVENTO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CIUDAD_DEL_EVENTO_2" value="<?php 
echo $CIUDAD_DEL_EVENTO; ?>"></td>
<?php } ?>


<?php if($puedeVerVYO2){ ?><td style="background:#c9e8e8">
    <select class="form-select" id="VYO_2" onchange="load2(1)">
        <option value="" <?php if($VYO==""){ echo "selected"; } ?>>Todos</option>
        <option value="si" <?php if($VYO=="si"){ echo "selected"; } ?>>Si</option>
        <option value="no" <?php if($VYO=="no"){ echo "selected"; } ?>>No</option>
    </select>
</td>
<?php } ?>
<?php if($puedeVerDIRECCION2){ ?><td style="background:#c9e8e8">
    <select class="form-select" id="DIRECCION_2" onchange="load2(1)">
        <option value="" <?php if($DIRECCION==""){ echo "selected"; } ?>>Todos</option>
        <option value="si" <?php if($DIRECCION=="si"){ echo "selected"; } ?>>Si</option>
        <option value="no" <?php if($DIRECCION=="no"){ echo "selected"; } ?>>No</option>
    </select>
</td>
<?php } ?>
<?php if($puedeVerAdmin2){ ?><td style="background:#c9e8e8">
    <select class="form-select" id="admin_2" onchange="load2(1)">
        <option value="" <?php if($admin==""){ echo "selected"; } ?>>Todos</option>
        <option value="si" <?php if($admin=="si"){ echo "selected"; } ?>>Si</option>
        <option value="no" <?php if($admin=="no"){ echo "selected"; } ?>>No</option>
    </select>
</td>
<?php } ?>
<?php if($puedeVerRechazoBono2){ ?><td style="background:#c9e8e8">
    <select class="form-select" id="STATUS_BONORECHAZO_2" onchange="load2(1)">
        <option value="" <?php if($STATUS_BONORECHAZO==""){ echo "selected"; } ?>>Todos</option>
        <option value="si" <?php if($STATUS_BONORECHAZO=="si"){ echo "selected"; } ?>>Si</option>
        <option value="no" <?php if($STATUS_BONORECHAZO=="no"){ echo "selected"; } ?>>No</option>
    </select>
</td><?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_PERSONAL2_2" value="<?php 
echo $NOMBRE_PERSONAL2; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="PUESTO_PERSONAL2_1" value="<?php 
echo $PUESTO_PERSONAL2; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="WHAT_PERSONAL2_1" value="<?php 
echo $WHAT_PERSONAL2; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="EMAIL_PERSONAL2_1" value="<?php 
echo $EMAIL_PERSONAL2; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_INICIO1_2" value="<?php 
echo $FECHA_INICIO1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_FINAL1_2" value="<?php 
echo $FECHA_FINAL1; ?>"></td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_DIAS1_2" value="<?php 
echo $NUMERO_DIAS1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_BONO1_2" value="<?php 
echo $MONTO_BONO1; ?>"></td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TOTAL1_2" value="<?php 
echo $TOTAL1; ?>"></td>
<?php } ?>







<?php  
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="OBSERVACIONES_PERSONAL2_2" value="<?php 
echo $OBSERVACIONES_PERSONAL2; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TIPO_DE_MONEDA_1_1" value="<?php 
echo $TIPO_DE_MONEDA_1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"INSTITUCION_FINANCIERA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="INSTITUCION_FINANCIERA_1_1" value="<?php 
echo $INSTITUCION_FINANCIERA_1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_DE_CUENTA_DB_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_DE_CUENTA_DB_1_1" value="<?php 
echo $NUMERO_DE_CUENTA_DB_1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_CLABE_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_CLABE_1_1" value="<?php 
echo $NUMERO_CLABE_1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="FOTO_ESTADO_PROVEE_1" value="<?php 
echo $FOTO_ESTADO_PROVEE; ?>"></td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?>  
<td style="background:#c9e8e8">
    <select class="form-select mb-3" id="FORMA_PAGO1_1" name="FORMA_PAGO1" onchange="load2(1);">
        <option value="">TODOS</option>

        <option value="03" <?php if($FORMA_PAGO1=='03'){echo "selected";} ?>>03 TRANSFERENCIA ELECTRONICA</option>
        <option value="04" <?php if($FORMA_PAGO1=='04'){echo "selected";} ?>>04 TARJETA DE CRÉDITO</option>
        <option value="28" <?php if($FORMA_PAGO1=='28'){echo "selected";} ?>>28 TARJETA DE DÉBITO</option>
        <option value="01" <?php if($FORMA_PAGO1=='01'){echo "selected";} ?>>01 EFECTIVO</option>
        <option value="02" <?php if($FORMA_PAGO1=='02'){echo "selected";} ?>>02 CHEQUE NOMINATIVO</option>
        <option value="05" <?php if($FORMA_PAGO1=='05'){echo "selected";} ?>>05 MONEDERO ELECTRÓNICO</option>
        <option value="06" <?php if($FORMA_PAGO1=='06'){echo "selected";} ?>>06 DINERO ELECTRÓNICO</option>
        <option value="08" <?php if($FORMA_PAGO1=='08'){echo "selected";} ?>>08 VALES DE DESPENSA</option>
        <option value="29" <?php if($FORMA_PAGO1=='29'){echo "selected";} ?>>29 TARJETA DE SERVICIO</option>
        <option value="99" <?php if($FORMA_PAGO1=='99'){echo "selected";} ?>>99 OTROS</option>

    </select>
</td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="date" class="form-control" id="FECHA_EFECTIVA1_2" value="<?php 
echo $FECHA_EFECTIVA1; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="text" class="form-control" id="ADJUNTO_COMPROBANTE_2" value="<?php 
echo $ADJUNTO_COMPROBANTE; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#f48a81"><input type="text" class="form-control" id="NOMBRE_RECIBIO1_2" value="<?php 
echo $NOMBRE_RECIBIO1; ?>"></td>
<?php } ?>










<?php  
if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="PERSONAL2_FECHA_ULTIMA_CARGA_2" value="<?php 
echo $PERSONAL2_FECHA_ULTIMA_CARGA; ?>"></td>
<?php } ?>
<td style="background:#c9e8e8"></td>
<?php /*termina copiar y terminaA4*/ ?>
	
	
            </tr>			
        </thead>
		<?php 	if ($numrows<0){ ?>
		</table>
		<?php }else{ ?>		
<tbody>
	<?php
	$finales=0;

	$MONTO_BONO12 = 0;
	$MONTO_BONO_TOTAL12 = 0;
	$VIATICOS_PERSONAL12 = 0;
	$TOTAL12 = 0;
	$colspan = 5;
$colspanFields = array(
		"NUMERO_EVENTO",
		"NOMBRE_EVENTO",
		"FECHA_INICIO_EVENTO",
		"PAIS_DEL_EVENTO",
		"CIUDAD_DEL_EVENTO",
		"NOMBRE_PERSONAL2",
		"PUESTO_PERSONAL2",
		"WHAT_PERSONAL2",
	
	
		
	);
	foreach ($colspanFields as $colspanField) {
		if ($database->plantilla_filtro($nombreTabla, $colspanField, $altaeventos, $DEPARTAMENTO) == "si") {
			$colspan++;
		}
	}
	if ($puedeVerVYO2) {
		$colspan++;
	}
	if ($puedeVerDIRECCION2) {
		$colspan++;
	}
	if ($puedeVerAdmin2) {
		$colspan++;
	}
	if ($puedeVerRechazoBono2) {
		$colspan++;
	}

			foreach ($datos as $key=>$row){
			$filaRechazoBono2 = ((isset($row["STATUS_BONORECHAZO"]) && $row["STATUS_BONORECHAZO"]=='si') || (isset($row["STATUS_RECHAZOBONO"]) && $row["STATUS_RECHAZOBONO"]=='si'));
			$estiloFila2 = $filaRechazoBono2 ? 'red' : '#FFFFFF';
			$montoBonoTotalOriginal2 = floatval(str_replace(',', '', $row['MONTO_BONO_TOTAL1']));
			$montoBonoTotalAjustado2 = $filaRechazoBono2 ? 0 : $montoBonoTotalOriginal2;
			$motivoRechazoPersonal2 = $database->obtener_motivo_rechazo_personal(!empty($row["PERSONAL2_ID"]) ? $row["PERSONAL2_ID"] : $row["id"], 'personal2');
			$mostrarAgregarRechazoPersonal2 = ($filaRechazoBono2 && $motivoRechazoPersonal2 == '');
			$mostrarVerRechazoPersonal2 = ($filaRechazoBono2 && $motivoRechazoPersonal2 != '');
			?>
		 <tr style="background:<?php echo $estiloFila2; ?>;">
		 						<td>
    <input type="checkbox" 
           class="checkbox"
           data-id="<?php echo $row['id'];?>" 
           style="transform: scale(1.0); cursor: pointer;" 
           onchange="
               const fila = this.closest('tr');
               const id = this.getAttribute('data-id');
               if (this.checked) {
                      fila.style.filter = 'brightness(65%) sepia(100%) saturate(200%) hue-rotate(0deg)';
                   localStorage.setItem('checkbox_' + id, 'checked');
               } else {
                   fila.style.filter = 'none';
                   localStorage.removeItem('checkbox_' + id);
               }">

</td>
<td style="text-align:center"><?php echo $row['id']; ?></td>


<?php /*inicia copiar y pegar iniciaA5*/ ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center">
<a href="calendarioDEeventos2.php?idevento=<?php echo isset($row['EVENTO_ID']) ? $row['EVENTO_ID'] : ''; ?>"><?php echo $row['NUMERO_EVENTO'];?></a>
</td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_EVENTO'];?></td>
<?php } ?>
<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fecha = trim($row['FECHA_INICIO_EVENTO']);
?>
<td style="text-align:center">
    <?php 
    echo ($fecha !== '' && $fecha !== '0000-00-00')
        ? date('d/m/Y', strtotime($fecha))
        : '';
    ?>
</td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PAIS_DEL_EVENTO'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CIUDAD_DEL_EVENTO'];?></td>
<?php } ?>

<?php $personal2Id = !empty($row["PERSONAL2_ID"]) ? $row["PERSONAL2_ID"] : $row["id"]; ?>
<?php if($puedeVerVYO2){ ?>
<td class="autorizacion-cell2<?php echo (isset($row["VYO"]) && $row["VYO"]=='si') ? ' autorizacion-checked' : ''; ?>" style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="VYO[]" id="VYO<?php echo $personal2Id; ?>" value="<?php echo $personal2Id; ?>" onclick="pasara1_personal2VYO_filtro(<?php echo $personal2Id; ?>)" <?php if(isset($row["VYO"]) && $row["VYO"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarVYO2 || ((isset($row["VYO"]) && $row["VYO"]=='si') && !$puedeModificarVYO2)) { echo "disabled"; } ?>/> </td>
<?php } ?>

<?php if($puedeVerDIRECCION2){ ?>
<td class="autorizacion-cell2<?php echo (isset($row["DIRECCION"]) && $row["DIRECCION"]=='si') ? ' autorizacion-checked' : ''; ?>" style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="DIRECCION[]" id="DIRECCION<?php echo $personal2Id; ?>" value="<?php echo $personal2Id; ?>" onclick="pasara1_personal2DIRECCION_filtro(<?php echo $personal2Id; ?>)" <?php if(isset($row["DIRECCION"]) && $row["DIRECCION"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarDIRECCION2 || ((isset($row["DIRECCION"]) && $row["DIRECCION"]=='si') && !$puedeModificarDIRECCION2)) { echo "disabled"; } ?>/> </td>
<?php } ?>

<?php if($puedeVerAdmin2){ ?>
<td class="autorizacion-cell2<?php echo (isset($row["admin"]) && $row["admin"]=='si') ? ' autorizacion-checked' : ''; ?>" style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="admin[]" id="admin<?php echo $personal2Id; ?>" value="<?php echo $personal2Id; ?>" onclick="pasara1_personal2ADMIN_filtro(<?php echo $personal2Id; ?>)" <?php if(isset($row["admin"]) && $row["admin"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarAdmin2 || ((isset($row["admin"]) && $row["admin"]=='si') && !$puedeModificarAdmin2)) { echo "disabled"; } ?>/> </td>
<?php } ?>
<?php if($puedeVerRechazoBono2){ ?>
<td style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" id="STATUS_BONORECHAZO<?php echo $personal2Id; ?>" name="STATUS_BONORECHAZO<?php echo $personal2Id; ?>" value="<?php echo $personal2Id; ?>" onclick="STATUS_BONORECHAZO_filtro(<?php echo $personal2Id; ?>)" <?php if($filaRechazoBono2){ echo "checked"; } ?> <?php if(!$puedeGuardarRechazoBono2 || ($filaRechazoBono2 && !$puedeModificarRechazoBono2)) { echo "disabled"; } ?>/>
    <input type="hidden" id="motivo_rechazo_personal2_<?php echo $personal2Id; ?>" value="<?php echo htmlspecialchars($motivoRechazoPersonal2, ENT_QUOTES, 'UTF-8'); ?>" />
    <button type="button" title="Agregar motivo" id="agregar_rechazo_personal2_<?php echo $personal2Id; ?>" style="border:none;background:transparent;cursor:pointer;color:#007bff;font-size:13px;<?php echo $mostrarAgregarRechazoPersonal2 ? '' : 'display:none;'; ?>" onclick="abrirFormularioRechazoPersonal(<?php echo $personal2Id; ?>, 'personal2')">agregar<br>motivo</button>
    <button type="button" title="Ver motivo" id="ver_rechazo_personal2_<?php echo $personal2Id; ?>" style="border:none;background:transparent;cursor:pointer;color:#28a745;font-size:13px;<?php echo $mostrarVerRechazoPersonal2 ? '' : 'display:none;'; ?>" onclick="verMotivoRechazoPersonal(<?php echo $personal2Id; ?>, 'personal2')">ver</button>
</td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $database->un_solo_colaborador_nombre($row["NOMBRE_PERSONAL2"],'01informacionpersonal','NOMBRE_1'); ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL2"],'01empresa','PUESTO'); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL2"],'01empresa','CORREO_3'); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL2"],'01empresa','CORREO_4'); ?></td>
<?php } ?>




<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fecha1 = trim($row['FECHA_INICIO1']);
?>
<td style="text-align:center">
    <?php 
    echo ($fecha1 !== '' && $fecha1 !== '0000-00-00')
        ? date('d/m/Y', strtotime($fecha1))
        : '';
    ?>
</td>
<?php } ?>

<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fecha2 = trim($row['FECHA_FINAL1']);
?>
<td style="text-align:center">
    <?php 
    echo ($fecha2 !== '' && $fecha2 !== '0000-00-00')
        ? date('d/m/Y', strtotime($fecha2))
        : '';
    ?>
</td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $filaRechazoBono2 ? 0 : $row['NUMERO_DIAS1'];
$NUMERO_DIAS112 += $filaRechazoBono2 ? 0 : floatval($row['NUMERO_DIAS1']);

?></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $filaRechazoBono2 ? '0.00' : $row['MONTO_BONO1'];
$MONTO_BONO12 += $filaRechazoBono2 ? 0 : floatval(str_replace(',', '', $row['MONTO_BONO1']));
?></td>
<?php } ?>




<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_BONO_TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td class="monto-bono-total1-cell" data-original="<?php echo $montoBonoTotalOriginal2; ?>" style="text-align:center"><?php echo number_format($montoBonoTotalAjustado2, 2, '.', ',');
$TOTAL12 += $montoBonoTotalAjustado2;
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['OBSERVACIONES_PERSONAL2'];?></td>
<?php } ?>


<?php 
$urlFOTO_ESTADO_PROVEE = "";
if (!empty($row["FOTO_ESTADO_PROVEE"])) {
	$urlFOTO_ESTADO_PROVEE = $database->descargararchivo($row["FOTO_ESTADO_PROVEE"]);
}
$urlADJUNTO_COMPROBANTE = "";
$adjuntosComprobante = array_filter(array_map('trim', explode(',', $row["ADJUNTO_COMPROBANTE"])));
if (!empty($adjuntosComprobante)) {
	$urlADJUNTO_COMPROBANTE = "<ul class='list-unstyled mb-0'>";
	foreach ($adjuntosComprobante as $adjuntoComprobante) {
		if ($adjuntoComprobante == '' || $adjuntoComprobante == '2') {
			continue;
		}
		$urlADJUNTO_COMPROBANTE .= "<li><a target='_blank' href='includes/archivos/".$adjuntoComprobante."'>Visualizar!</a></li>";
	}
	$urlADJUNTO_COMPROBANTE .= "</ul>";
}
?>


<?php  if($database->plantilla_filtro($nombreTabla,"TIPO_DE_MONEDA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['TIPO_DE_MONEDA_1'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"INSTITUCION_FINANCIERA_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['INSTITUCION_FINANCIERA_1'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_DE_CUENTA_DB_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_DE_CUENTA_DB_1'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_CLABE_1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_CLABE_1'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FOTO_ESTADO_PROVEE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $urlFOTO_ESTADO_PROVEE; ?></td>
<?php } ?>




<?php  if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo isset($formasPago[$row['FORMA_PAGO1']]) ? $formasPago[$row['FORMA_PAGO1']] : $row['FORMA_PAGO1'];?></td>

<?php } ?>

<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA1",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fechaEfectiva = trim($row['FECHA_EFECTIVA1']);
?>
<td style="text-align:center">
    <?php 
    echo ($fechaEfectiva !== '' && $fechaEfectiva !== '0000-00-00')
        ? date('d/m/Y', strtotime($fechaEfectiva))
        : '';
    ?>
</td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTE",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $urlADJUNTO_COMPROBANTE; ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_RECIBIO1'];?></td>
<?php } ?>














<?php  if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['PERSONAL2_FECHA_ULTIMA_CARGA'])); ?></td>
<?php } ?>
<td>
    <?php $personal2Id = !empty($row["PERSONAL2_ID"]) ? $row["PERSONAL2_ID"] : $row["id"]; ?>

    <input 
        type="button" 
        name="view" 
        value="MODIFICAR" 
        id="<?php echo $personal2Id; ?>" 
        class="btn btn-info btn-xs view_dataDATOSpersonal2modificaBONOS" 
    />


</td>

		
		</tr>
			<?php
			$finales++;
	}	
	?>
	
	<tr style="border-top:4px solid #c9c9c9;">
		<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan; ?>"><strong style="font-size:16px">TOTALES</strong></td>
					<?php if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td style="text-align:center;"><strong style="font-size:16px"><?php echo number_format($NUMERO_DIAS112); ?></strong></td>
		<?php } ?>
		<?php if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($MONTO_BONO12,2,'.',','); ?></strong></td>
		<?php } ?>

	
		<?php if($database->plantilla_filtro($nombreTabla,"TOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td id="total_bonos_filtro_personal2" style="text-align:center"><strong style="font-size:16px">$<?php echo number_format($TOTAL12,2,'.',','); ?></strong></td>
		<?php } ?>
	
	</tr>

		</tbody>
		</table>
		</div>
		<div class="clearfix">
			<?php 
				$inicios=$offset+1;
				$finales+=$inicios -1;
				echo '<div class="hint-text">Mostrando '.$inicios.' al '.$finales.' de '.$numrows.' registros</div>';
				echo $pagination->paginate();
			?>
        </div>
	<?php
	}
}
?>