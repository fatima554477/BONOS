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
$action = (isset($_POST["action"])&& $_POST["action"] !=NULL)?$_POST["action"]:"";
if($action == "ajax"){

require(__ROOT6__."/class.filtro.php");
	$database=new orders();	
	$puedeVerAdmin = ($database->variablespermisos('', 'PERSO', 'ver') === 'si');
	$puedeGuardarAdmin = ($database->variablespermisos('', 'PERSO', 'guardar') === 'si');
	$puedeModificarAdmin = ($database->variablespermisos('', 'PERSO', 'modificar') === 'si');
	$puedeVerVYO = ($database->variablespermisos('', 'PERSOvyo', 'ver') === 'si');
	$puedeGuardarVYO = ($database->variablespermisos('', 'PERSOvyo', 'guardar') === 'si');
	$puedeModificarVYO = ($database->variablespermisos('', 'PERSOvyo', 'modificar') === 'si');
	$puedeVerDIRECCION = ($database->variablespermisos('', 'PERSOdire', 'ver') === 'si');
	$puedeGuardarDIRECCION = ($database->variablespermisos('', 'PERSOdire', 'guardar') === 'si');
	$puedeModificarDIRECCION = ($database->variablespermisos('', 'PERSOdire', 'modificar') === 'si');

	$query=isset($_POST["query"])?$_POST["query"]:"";

        $DEPARTAMENTO = !EMPTY($_POST["DEPARTAMENTO2"])?$_POST["DEPARTAMENTO2"]:"DEFAULT";
        $tables = "04personal";
        $nombreTabla = "SELECT * FROM `08altaeventosfiltroDes`, 08altaeventosfiltroPLA WHERE 08altaeventosfiltroDes.id = 08altaeventosfiltroPLA.idRelacion";
        $altaeventos = "altaeventos";




	
$NUMERO_EVENTO = isset($_POST["NUMERO_EVENTO"])?$_POST["NUMERO_EVENTO"]:""; 
$NOMBRE_COMERCIAL_EVENTO = isset($_POST["NOMBRE_COMERCIAL_EVENTO"])?$_POST["NOMBRE_COMERCIAL_EVENTO"]:""; 
$NOMBRE_FISCAL_EVENTO = isset($_POST["NOMBRE_FISCAL_EVENTO"])?$_POST["NOMBRE_FISCAL_EVENTO"]:""; 
$PUESTO_PERSONAL2 = isset($_POST["PUESTO_PERSONAL2"])?$_POST["PUESTO_PERSONAL2"]:""; 
$EMAIL_PERSONAL2 = isset($_POST["EMAIL_PERSONAL2"])?$_POST["EMAIL_PERSONAL2"]:""; 
$WHAT_PERSONAL = isset($_POST["WHAT_PERSONAL"])?$_POST["WHAT_PERSONAL"]:""; 
$NOMBRE_EVENTO = isset($_POST["NOMBRE_EVENTO"])?$_POST["NOMBRE_EVENTO"]:""; 
$FECHA_INICIO_EVENTO = isset($_POST["FECHA_INICIO_EVENTO"])?$_POST["FECHA_INICIO_EVENTO"]:""; 
$PAIS_DEL_EVENTO = isset($_POST["PAIS_DEL_EVENTO"])?$_POST["PAIS_DEL_EVENTO"]:""; 
$CIUDAD_DEL_EVENTO = isset($_POST["CIUDAD_DEL_EVENTO"])?$_POST["CIUDAD_DEL_EVENTO"]:""; 

$NOMBRE_PERSONAL = isset($_POST["NOMBRE_PERSONAL"])?$_POST["NOMBRE_PERSONAL"]:""; 
$FECHA_INICIO = isset($_POST["FECHA_INICIO"])?$_POST["FECHA_INICIO"]:""; 
$FECHA_FINAL = isset($_POST["FECHA_FINAL"])?$_POST["FECHA_FINAL"]:""; 
$NUMERO_DIAS = isset($_POST["NUMERO_DIAS"])?$_POST["NUMERO_DIAS"]:""; 
$MONTO_BONO = isset($_POST["MONTO_BONO"])?$_POST["MONTO_BONO"]:""; 
$MONTO_BONO_TOTAL = isset($_POST["MONTO_BONO_TOTAL"])?$_POST["MONTO_BONO_TOTAL"]:""; 
$VIATICOS_PERSONAL = isset($_POST["VIATICOS_PERSONAL"])?$_POST["VIATICOS_PERSONAL"]:""; 
$TOTAL = isset($_POST["TOTAL"])?$_POST["TOTAL"]:""; 
$ULTIMO_DIA = isset($_POST["ULTIMO_DIA"])?$_POST["ULTIMO_DIA"]:""; 
$OBSERVACIONES_PERSONAL = isset($_POST["OBSERVACIONES_PERSONAL"])?$_POST["OBSERVACIONES_PERSONAL"]:""; 
$PERSONAL_FECHA_ULTIMA_CARGA = isset($_POST["PERSONAL_FECHA_ULTIMA_CARGA"])?$_POST["PERSONAL_FECHA_ULTIMA_CARGA"]:""; 



$TIPO_DE_MONEDA_1 = isset($_POST["TIPO_DE_MONEDA_1"])?trim($_POST["TIPO_DE_MONEDA_1"]):"";  
$INSTITUCION_FINANCIERA_1 = isset($_POST["INSTITUCION_FINANCIERA_1"])?trim($_POST["INSTITUCION_FINANCIERA_1"]):"";  
$NUMERO_DE_CUENTA_DB_1 = isset($_POST["NUMERO_DE_CUENTA_DB_1"])?trim($_POST["NUMERO_DE_CUENTA_DB_1"]):"";  
$NUMERO_CLABE_1 = isset($_POST["NUMERO_CLABE_1"])?trim($_POST["NUMERO_CLABE_1"]):"";  
$NUMERO_IBAN_1 = isset($_POST["NUMERO_IBAN_1"])?trim($_POST["NUMERO_IBAN_1"]):"";  
$NUMERO_CUENTA_SWIFT_1 = isset($_POST["NUMERO_CUENTA_SWIFT_1"])?trim($_POST["NUMERO_CUENTA_SWIFT_1"]):"";  
$FOTO_ESTADO_PROVEE = isset($_POST["FOTO_ESTADO_PROVEE"])?trim($_POST["FOTO_ESTADO_PROVEE"]):"";  
$ULTIMA_CARGA_DATOBANCA = isset($_POST["ULTIMA_CARGA_DATOBANCA"])?trim($_POST["ULTIMA_CARGA_DATOBANCA"]):"";  
$hDatosPERSONAL = isset($_POST["hDatosPERSONAL"])?trim($_POST["hDatosPERSONAL"]):"";  
$FECHA_PPAGO = isset($_POST["FECHA_PPAGO"])?trim($_POST["FECHA_PPAGO"]):"";  
$FORMA_PAGO = isset($_POST["FORMA_PAGO"])?trim($_POST["FORMA_PAGO"]):"";  
$FECHA_EFECTIVA = isset($_POST["FECHA_EFECTIVA"])?trim($_POST["FECHA_EFECTIVA"]):"";  
$ADJUNTO_COMPROBANTEP = isset($_POST["ADJUNTO_COMPROBANTEP"])?trim($_POST["ADJUNTO_COMPROBANTEP"]):"";  
$NOMBRE_RECIBIO = isset($_POST["NOMBRE_RECIBIO"])?trim($_POST["NOMBRE_RECIBIO"]):"";  

$per_page=intval($_POST["per_page"]);


$campos="04personal.*, 01informacionpersonal.*, 01DATOSBANCARIOS.*, 04altaeventos.*";
	$page = (isset($_POST["page"]) && !empty($_POST["page"]))?$_POST["page"]:1;
	$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;

	$search=array(
"NUMERO_EVENTO"=>$NUMERO_EVENTO,
"NOMBRE_EVENTO"=>$NOMBRE_EVENTO,
"NOMBRE_COMERCIAL_EVENTO"=>$NOMBRE_COMERCIAL_EVENTO,
"NOMBRE_FISCAL_EVENTO"=>$NOMBRE_FISCAL_EVENTO,
"FECHA_INICIO_EVENTO"=>$FECHA_INICIO_EVENTO,
"PUESTO_PERSONAL2"=>$PUESTO_PERSONAL2,
"EMAIL_PERSONAL2"=>$EMAIL_PERSONAL2,
"WHAT_PERSONAL"=>$WHAT_PERSONAL,
"PAIS_DEL_EVENTO"=>$PAIS_DEL_EVENTO,
"CIUDAD_DEL_EVENTO"=>$CIUDAD_DEL_EVENTO,

"NOMBRE_PERSONAL"=>$NOMBRE_PERSONAL,
"FECHA_INICIO"=>$FECHA_INICIO,
"FECHA_FINAL"=>$FECHA_FINAL,
"NUMERO_DIAS"=>$NUMERO_DIAS,
"MONTO_BONO"=>$MONTO_BONO,
"MONTO_BONO_TOTAL"=>$MONTO_BONO_TOTAL,
"VIATICOS_PERSONAL"=>$VIATICOS_PERSONAL,
"TOTAL"=>$TOTAL,
"ULTIMO_DIA"=>$ULTIMO_DIA,
"OBSERVACIONES_PERSONAL"=>$OBSERVACIONES_PERSONAL,
"PERSONAL_FECHA_ULTIMA_CARGA"=>$PERSONAL_FECHA_ULTIMA_CARGA,

"TIPO_DE_MONEDA_1"=>$TIPO_DE_MONEDA_1,
"INSTITUCION_FINANCIERA_1"=>$INSTITUCION_FINANCIERA_1,
"NUMERO_DE_CUENTA_DB_1"=>$NUMERO_DE_CUENTA_DB_1,
"NUMERO_CLABE_1"=>$NUMERO_CLABE_1,
"NUMERO_IBAN_1"=>$NUMERO_IBAN_1,
"NUMERO_CUENTA_SWIFT_1"=>$NUMERO_CUENTA_SWIFT_1,
"FOTO_ESTADO_PROVEE"=>$FOTO_ESTADO_PROVEE,
"ULTIMA_CARGA_DATOBANCA"=>$ULTIMA_CARGA_DATOBANCA,

"hDatosPERSONAL"=>$hDatosPERSONAL,
"FECHA_PPAGO"=>$FECHA_PPAGO,
"FORMA_PAGO"=>$FORMA_PAGO,
"FECHA_EFECTIVA"=>$FECHA_EFECTIVA,
"ADJUNTO_COMPROBANTEP"=>$ADJUNTO_COMPROBANTEP,
"NOMBRE_RECIBIO"=>$NOMBRE_RECIBIO,

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

<?php /*inicia copiar y pegar iniciaA3*/ ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE EVENTO </th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL EVENTO </th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DEL EVENTO </th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE COMERCIAL CLIENTE </th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_FISCAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE FISCAL CLIENTE </th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PAÍS</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">CIUDAD</th>
<?php } ?>


<?php if($puedeVerVYO){ ?><th style="background:#c9e8e8;text-align:center">AUTORIZACIÓN <br>POR VYO</th>
<?php } ?>
<?php if($puedeVerDIRECCION){ ?><th style="background:#c9e8e8;text-align:center">AUTORIZACIÓN <br>POR DIRECCIÓN</th>
<?php } ?>
<?php if($puedeVerAdmin){ ?><th style="background:#c9e8e8;text-align:center">ADMIN</th>
<?php } ?>


<?php
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL PERSONAL</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PUESTO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TELEFONO DE OFICINA</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">EMAIL</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA INICIO DE CORDINACIÓN</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA FINAL DE CORDINACIÓN</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DÍAS</th>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO BONO</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"TOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TOTAL</th>
<?php } ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MOTIVO DEL BONO</th>
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
if($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE PROGRAMACIÓN<br> DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FORMA DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FORMA EFECTIVA DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTEP",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">COMPROBANTE DE PAGO</th>
<?php } ?>
<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">PAX QUE COBRO</th>
<?php } ?>







<?php 
if($database->plantilla_filtro($nombreTabla,"PERSONAL_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center"> FECHA ULTIMA CARGA</th>
<?php } ?>
<th style="background:#c9e8e8"></th>

<?php /*termina copiar y terminaA3*/ ?>
            </tr>
            <tr>
<td style="background:#c9e8e8"></td>
<td style="background:#c9e8e8"></td>

<?php /*inicia copiar y pegar iniciaA4*/ ?>

<!--<hr/><H1>HTML FILTRO E INPUT .PHP A4</H1><BR/>-->

<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NUMERO_EVENTO_1" value="<?php 
echo $NUMERO_EVENTO; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NOMBRE_EVENTO_1" value="<?php 
echo $NOMBRE_EVENTO; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="date" class="form-control" id="FECHA_INICIO_EVENTO_1" value="<?php 
echo $FECHA_INICIO_EVENTO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NOMBRE_COMERCIAL_EVENTO_1" value="<?php 
echo $NOMBRE_COMERCIAL_EVENTO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_FISCAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="NOMBRE_FISCAL_EVENTO_1" value="<?php 
echo $NOMBRE_FISCAL_EVENTO; ?>"></td>
<?php } ?>




<?php  
if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="PAIS_DEL_EVENTO_1" value="<?php 
echo $PAIS_DEL_EVENTO; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CIUDAD_DEL_EVENTO_1" value="<?php 
echo $CIUDAD_DEL_EVENTO; ?>"></td>
<?php } ?>



<?php if($puedeVerVYO){ ?><td style="background:#c9e8e8"></td>
<?php } ?>
<?php if($puedeVerDIRECCION){ ?><td style="background:#c9e8e8"></td>
<?php } ?>
<?php if($puedeVerAdmin){ ?><td style="background:#c9e8e8"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_PERSONAL_1" value="<?php 
echo $NOMBRE_PERSONAL; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="PUESTO_PERSONAL2_1" value="<?php 
echo $PUESTO_PERSONAL2; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="WHAT_PERSONAL_1" value="<?php 
echo $WHAT_PERSONAL; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="EMAIL_PERSONAL2_1" value="<?php 
echo $EMAIL_PERSONAL2; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_INICIO_1" value="<?php 
echo $FECHA_INICIO; ?>"></td>

<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_FINAL_1" value="<?php 
echo $FECHA_FINAL; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_DIAS_1" value="<?php 
echo $NUMERO_DIAS; ?>"></td>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_BONO_1" value="<?php 
echo $MONTO_BONO; ?>"></td>
<?php } ?>


<?php  
if($database->plantilla_filtro($nombreTabla,"TOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TOTAL_1" value="<?php 
echo $TOTAL; ?>"></td>
<?php } ?>
<?php  
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="OBSERVACIONES_PERSONAL_1" value="<?php 
echo $OBSERVACIONES_PERSONAL; ?>"></td>
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
if($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_PPAGO_1" value="<?php 
echo $FECHA_PPAGO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="FORMA_PAGO_1" value="<?php 
echo $FORMA_PAGO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_EFECTIVA_1" value="<?php 
echo $FECHA_EFECTIVA; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTEP",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="ADJUNTO_COMPROBANTEP_1" value="<?php 
echo $ADJUNTO_COMPROBANTEP; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_RECIBIO_1" value="<?php 
echo $NOMBRE_RECIBIO; ?>"></td>
<?php } ?>













<?php  
if($database->plantilla_filtro($nombreTabla,"PERSONAL_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="PERSONAL_FECHA_ULTIMA_CARGA_1" value="<?php 
echo $PERSONAL_FECHA_ULTIMA_CARGA; ?>"></td>
<?php } ?>
<?php /*termina copiar y terminaA4*/ ?>
	
<td style="background:#c9e8e8"></td>

	
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
		"NOMBRE_COMERCIAL_EVENTO",
		"NOMBRE_FISCAL_EVENTO",
		"PAIS_DEL_EVENTO",
		"CIUDAD_DEL_EVENTO",
		"NOMBRE_PERSONAL",
		"PUESTO_PERSONAL2",
		"WHAT_PERSONAL",
		"EMAIL_PERSONAL2",
		"FECHA_INICIO",
		"FECHA_FINAL",
		
	);
	foreach ($colspanFields as $colspanField) {
		if ($database->plantilla_filtro($nombreTabla, $colspanField, $altaeventos, $DEPARTAMENTO) == "si") {
			$colspan++;
		}
	}
	if ($puedeVerVYO) {
		$colspan++;
	}
	if ($puedeVerDIRECCION) {
		$colspan++;
	}
	if ($puedeVerAdmin) {
		$colspan++;
	}

	foreach ($datos as $key=>$row){?>
		 <tr style="background:#FFFFFF;">
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
		
<td style="text-align:center"><?php echo $key + 1; ?></td>

<?php /*inicia copiar y pegar iniciaA5*/ ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center">
<a href="calendarioDEeventos2.php?idevento=<?php echo $row['IDPERSONAL']; ?>"><?php echo $row['NUMERO_EVENTO'];?></a>
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



<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_COMERCIAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_COMERCIAL_EVENTO'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_FISCAL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_FISCAL_EVENTO'];?></td>
<?php } ?>





<?php  if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PAIS_DEL_EVENTO'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CIUDAD_DEL_EVENTO'];?></td>
<?php } ?>

<?php $personalId = !empty($row["PERSONAL_ID"]) ? $row["PERSONAL_ID"] : $row["id"]; ?>
<?php if($puedeVerVYO){ ?>
<td style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="VYO[]" id="VYO<?php echo $personalId; ?>" value="<?php echo $personalId; ?>" onclick="pasara1_personalVYO_filtro(<?php echo $personalId; ?>)" <?php if(isset($row["VYO"]) && $row["VYO"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarVYO || ((isset($row["VYO"]) && $row["VYO"]=='si') && !$puedeModificarVYO)) { echo "disabled"; } ?>/> </td>
<?php } ?>

<?php if($puedeVerDIRECCION){ ?>
<td style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="DIRECCION[]" id="DIRECCION<?php echo $personalId; ?>" value="<?php echo $personalId; ?>" onclick="pasara1_personalDIRECCION_filtro(<?php echo $personalId; ?>)" <?php if(isset($row["DIRECCION"]) && $row["DIRECCION"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarDIRECCION || ((isset($row["DIRECCION"]) && $row["DIRECCION"]=='si') && !$puedeModificarDIRECCION)) { echo "disabled"; } ?>/> </td>
<?php } ?>

<?php if($puedeVerAdmin){ ?>
<td style="text-align:center">
    <input type="checkbox" style="width:40PX;" class="form-check-input" name="admin[]" id="admin<?php echo $personalId; ?>" value="<?php echo $personalId; ?>" onclick="pasara1_personalADMIN_filtro(<?php echo $personalId; ?>)" <?php if(isset($row["admin"]) && $row["admin"]=='si'){ echo "checked"; } ?> <?php if(!$puedeGuardarAdmin || ((isset($row["admin"]) && $row["admin"]=='si') && !$puedeModificarAdmin)) { echo "disabled"; } ?>/> </td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><a href="colaboradores.php?id=<?php echo $row["NOMBRE_PERSONAL"]; ?>"><?php echo $database->un_solo_colaborador_nombre($row["NOMBRE_PERSONAL"],'01informacionpersonal','NOMBRE_1'); ?></a></td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"PUESTO_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL"],'01empresa','PUESTO'); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"WHAT_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL"],'01empresa','CORREO_3'); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"EMAIL_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador($row["NOMBRE_PERSONAL"],'01empresa','CORREO_4'); ?></td>
<?php } ?>

<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_INICIO",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fecha1 = trim($row['FECHA_INICIO']);
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
if ($database->plantilla_filtro($nombreTabla,"FECHA_FINAL",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fecha2 = trim($row['FECHA_FINAL']);
?>
<td style="text-align:center">
    <?php 
    echo ($fecha2 !== '' && $fecha2 !== '0000-00-00')
        ? date('d/m/Y', strtotime($fecha2))
        : '';
    ?>
</td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_DIAS'];
$NUMERO_DIAS12 += floatval($row['NUMERO_DIAS']);
?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_BONO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:right; padding-right:10px;"><?php echo $row['MONTO_BONO'];
$MONTO_BONO12 += floatval(str_replace(',', '', $row['MONTO_BONO']));
?></td>
<?php } ?>





<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:right; padding-right:10px;"><?php echo $row['TOTAL'];
$TOTAL12 += floatval(str_replace(',', '', $row['TOTAL']));
?></td>
<?php } ?>






<?php  if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['OBSERVACIONES_PERSONAL'];?></td>
<?php } ?>




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

<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_PPAGO",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fechaPago = trim($row['FECHA_PPAGO']);
?>
<td style="text-align:center">
    <?php 
    echo ($fechaPago !== '' && $fechaPago !== '0000-00-00')
        ? date('d/m/Y', strtotime($fechaPago))
        : '';
    ?>
</td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FORMA_PAGO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['FORMA_PAGO'];?></td>
<?php } ?>

<?php  
if ($database->plantilla_filtro($nombreTabla,"FECHA_EFECTIVA",$altaeventos,$DEPARTAMENTO)=="si") { 
    $fechaEfectiva = trim($row['FECHA_EFECTIVA']);
?>
<td style="text-align:center">
    <?php 
    echo ($fechaEfectiva !== '' && $fechaEfectiva !== '0000-00-00')
        ? date('d/m/Y', strtotime($fechaEfectiva))
        : '';
    ?>
</td>
<?php } ?>
<?php 
$urlADJUNTO_COMPROBANTEP = "";
$adjuntosComprobante = array_filter(array_map('trim', explode(',', $row["ADJUNTO_COMPROBANTEP"])));
if (!empty($adjuntosComprobante)) {
	$urlADJUNTO_COMPROBANTEP = "<ul class='list-unstyled mb-0'>";
	foreach ($adjuntosComprobante as $adjuntoComprobante) {
		if ($adjuntoComprobante == '' || $adjuntoComprobante == '2') {
			continue;
		}
		$urlADJUNTO_COMPROBANTEP .= "<li><a target='_blank' href='includes/archivos/".$adjuntoComprobante."'>Visualizar!</a></li>";
	}
	$urlADJUNTO_COMPROBANTEP .= "</ul>";
}
?>
<?php  if($database->plantilla_filtro($nombreTabla,"ADJUNTO_COMPROBANTEP",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $urlADJUNTO_COMPROBANTEP; ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_RECIBIO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_RECIBIO'];?></td>
<?php } ?>



<?php  if($database->plantilla_filtro($nombreTabla,"PERSONAL_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['PERSONAL_FECHA_ULTIMA_CARGA'])); ?></td>
<?php } ?>



<td>
    <?php $personalId = !empty($row["PERSONAL_ID"]) ? $row["PERSONAL_ID"] : $row["id"]; ?>

    <input 
        type="button" 
        name="view" 
        value="MODIFICAR" 
        id="<?php echo $personalId; ?>" 
        class="btn btn-info btn-xs view_dataDATOSpersonalmodificaBONOS" 
    />


</td>

			

		</tr>

			<?php

			$finales++;

		}	

	?>



	<tr style="border-top:4px solid #c9c9c9;">
		<td style="text-align:right; padding-right:45px;" colspan="<?php echo $colspan; ?>"><strong style="font-size:16px">TOTALES</strong></td>
			<?php if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td style="text-align:center;"><strong style="font-size:16px"><?php echo number_format($NUMERO_DIAS12); ?></strong></td>
		<?php } ?>
		
		<?php if($database->plantilla_filtro($nombreTabla,"MONTO_BONO",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td style="text-align:right; padding-right:10px;"><strong style="font-size:16px">$<?php echo number_format($MONTO_BONO12,2,'.',','); ?></strong></td>
		<?php } ?>
	
	
	<?php if($database->plantilla_filtro($nombreTabla,"TOTAL",$altaeventos,$DEPARTAMENTO)=="si"){ ?>
			<td style="text-align:right; padding-right:10px;"><strong style="font-size:16px">$<?php echo number_format($TOTAL12,2,'.',','); ?></strong></td>
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
