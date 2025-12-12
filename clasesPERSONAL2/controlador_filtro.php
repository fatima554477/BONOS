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
$action = (isset($_POST["action2"])&& $_POST["action2"] !=NULL)?$_POST["action2"]:"";
if($action == "ajax2"){

	require(__ROOT6__."/class.filtroP2.php");
	$database=new orders();	

	$query=isset($_POST["query"])?$_POST["query"]:"";

	$DEPARTAMENTO = !EMPTY($_POST["DEPARTAMENTO2"])?$_POST["DEPARTAMENTO2"]:"DEFAULT";	
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

$per_page=intval($_POST["per_page"]);
	$campos="*";
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
<?php /*inicia copiar y pegar iniciaA3*/ ?>

<!--<hr/><H1>HTML FILTRO .PHP A3</H1><BR/>-->
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

<?php 
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NOMBRE DEL PERSONAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE INICIO EN EVENTO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA DE FINAL EN EVENTO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">NÚMERO DE DIAS</th>
<?php } ?>
		   	<?php if($database->variablespermisos('','PERSOVERBONO','ver')=='si' ){ ?>

<?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO DEL BONO</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO_TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">MONTO BONO TOTAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"VIATICOS_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">VIATICOS DEL PERSONAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">TOTAL</th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"ULTIMO_DIA1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">ÚLTIMO DÍA PARA<br>COMPRAR VIATICOS</th>
<?php } ?>
<?php } ?>


<?php 
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">OBSERVACIONES </th>
<?php } ?><?php 
if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8;text-align:center">FECHA ULTIMA CARGA</th>
<?php } ?>

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
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8;text-align:center"><input type="text" class="form-control" id="CIUDAD_DEL_EVENTO_2" value="<?php 
echo $CIUDAD_DEL_EVENTO; ?>"></td>
<?php } ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NOMBRE_PERSONAL2_2" value="<?php 
echo $NOMBRE_PERSONAL2; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_INICIO1_2" value="<?php 
echo $FECHA_INICIO1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="FECHA_FINAL1_2" value="<?php 
echo $FECHA_FINAL1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="NUMERO_DIAS1_2" value="<?php 
echo $NUMERO_DIAS1; ?>"></td>
<?php } ?>
<?php if($database->variablespermisos('','PERSOVERBONO','ver')=='si' ){ ?>

<?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_BONO1_2" value="<?php 
echo $MONTO_BONO1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"MONTO_BONO_TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="MONTO_BONO_TOTAL1_2" value="<?php 
echo $MONTO_BONO_TOTAL1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"VIATICOS_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="VIATICOS_PERSONAL2_2" value="<?php 
echo $VIATICOS_PERSONAL2; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="TOTAL1_2" value="<?php 
echo $TOTAL1; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"ULTIMO_DIA1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="ULTIMO_DIA1_2" value="<?php 
echo $ULTIMO_DIA1; ?>"></td>
<?php } ?>
<?php } ?>



<?php  
if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="OBSERVACIONES_PERSONAL2_2" value="<?php 
echo $OBSERVACIONES_PERSONAL2; ?>"></td>
<?php } ?><?php  
if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="date" class="form-control" id="PERSONAL2_FECHA_ULTIMA_CARGA_2" value="<?php 
echo $PERSONAL2_FECHA_ULTIMA_CARGA; ?>"></td>
<?php } ?>
<?php /*termina copiar y terminaA4*/ ?>
	
	
            </tr>			
        </thead>
		<?php 	if ($numrows<0){ ?>
		</table>
		<?php }else{ ?>		
        <tbody>
		<?php
		$finales=0;
		
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
<td style="text-align:center" >
<?php /*inicia copiar y pegar iniciaA5*/ ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center">
<a href="calendarioDEeventos2.php?idevento=<?php echo $row['id']; ?>"><?php echo $row['NUMERO_EVENTO'];?></a>
</td>
<?php } ?>


<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NOMBRE_EVENTO'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['FECHA_INICIO_EVENTO'])); ?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"PAIS_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['PAIS_DEL_EVENTO'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"CIUDAD_DEL_EVENTO",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['CIUDAD_DEL_EVENTO'];?></td>
<?php } ?>



<?php  if($database->plantilla_filtro($nombreTabla,"NOMBRE_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"> <?php echo $database->un_solo_colaborador_nombre($row["NOMBRE_PERSONAL2"],'01informacionpersonal','NOMBRE_1','NOMBRE_2','APELLIDO_PATERNO','APELLIDO_MATERNO'); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_INICIO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['FECHA_INICIO1'])); ?></td> 
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"FECHA_FINAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['FECHA_FINAL1'])); ?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"NUMERO_DIAS1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['NUMERO_DIAS1'];?></td>
<?php } ?>
<?php if($database->variablespermisos('','PERSOVERBONO','ver')=='si' ){ ?>
<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_BONO1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['MONTO_BONO1'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"MONTO_BONO_TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"php echo $row['MONTO_BONO_TOTAL1'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"VIATICOS_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['VIATICOS_PERSONAL2'];?></td>
<?php } ?>
<?php  if($database->plantilla_filtro($nombreTabla,"TOTAL1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"php echo $row['TOTAL1'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"ULTIMO_DIA1",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['ULTIMO_DIA1'];?></td>
<?php } ?>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"OBSERVACIONES_PERSONAL2",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo $row['OBSERVACIONES_PERSONAL2'];?></td>
<?php } ?>

<?php  if($database->plantilla_filtro($nombreTabla,"PERSONAL2_FECHA_ULTIMA_CARGA",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="text-align:center"><?php echo date('d/m/Y', strtotime($row['PERSONAL2_FECHA_ULTIMA_CARGA'])); ?></td>
<?php } ?>


		
		</tr>
			<?php
			$finales++;
		}	
	?>
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
