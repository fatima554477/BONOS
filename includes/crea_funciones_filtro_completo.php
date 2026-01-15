<?php 
print_r($_POST);
$etiquetas1 = '';$valores='';

		$filepath = "clasesAVION/";

if(!is_dir($filepath)){
 @mkdir($filepath, 0777); 
}


$contenido .='<?php

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

	$query=isset($_POST["query"])?$_POST["query"]:"";

	$DEPARTAMENTO = !EMPTY($_POST["DEPARTAMENTO2"])?$_POST["DEPARTAMENTO2"]:"DEFAULT";	
	$nombreTabla = "SELECT * FROM `08altaeventosfiltroDes`, 08altaeventosfiltroPLA WHERE 08altaeventosfiltroDes.id = 08altaeventosfiltroPLA.idRelacion";
	$altaeventos = "altaeventos";
	$tables="'.$tablesdb.'";
	'.chr(10).chr(10);




echo "<hr/><H1>COPIAR Y PEGAR para filtro2 .PHP A1</H1><BR/>";
foreach($_POST AS $ETIQUETA => $valor){
$contenido .=  '$'.$ETIQUETA . ' = isset($_POST["'.$ETIQUETA.'"])?$_POST["'.$ETIQUETA.'"]:""; '.chr(10);		
}

$contenido .= chr(10);

$contenido .='$per_page=intval($_POST["per_page"]);
	$campos="*";
	//Variables de paginación
	$page = (isset($_POST["page"]) && !empty($_POST["page"]))?$_POST["page"]:1;
	$adjacents  = 4; //espacio entre páginas después del número de adyacentes
	$offset = ($page - 1) * $per_page;
	
	$search=array('.chr(10);

$contenido .= chr(10);

echo "<hr/><H1>FILTRO ARRAY .PHP A2</H1><BR/>";
foreach($_POST AS $ETIQUETA => $valor){
$contenido .=  '"'.$ETIQUETA. '"=>$'.$ETIQUETA.','.chr(10);	
}

$contenido .= chr(10);




$contenido .= ' "per_page"=>$per_page,
	"query"=>$query,
	"offset"=>$offset);
	//consulta principal para recuperar los datos
	$datos=$database->getData($tables,$campos,$search);
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
				echo "<div class=\'hint-text\'> ".$numrows." registros</div>";
				require __ROOT6__."/pagination.php"; //include pagination class
				$pagination=new Pagination($page, $total_pages, $adjacents);
				echo $pagination->paginate();
			?>
        </div>
	<div class="table-responsive">
	 <table class="table table-striped table-bordered" >	
		<thead>
            <tr>
<th style="background:#c9e8e8">#</th>
<?php /*inicia copiar y pegar iniciaA3*/ ?>'.chr(10);


$contenido .= chr(10);




/*<th style="background:#c9e8e8">STATUS_EVENTO</th>*/
echo "<hr/><H1>HTML FILTRO .PHP A3</H1><BR/>";
$contenido .= "<!--<hr/><H1>HTML FILTRO .PHP A3</H1><BR/>-->";
foreach($_POST AS $ETIQUETA => $valor){
$contenido .= ('<?php ').''.chr(10). ('if($database->plantilla_filtro($nombreTabla,"'.$ETIQUETA.'",$altaeventos,$DEPARTAMENTO)=="si"){ ?><th style="background:#c9e8e8">').str_replace('_',' ',$ETIQUETA). ('</th>').''.chr(10);

$contenido .= '<?php } ?>';
	
}

$contenido .= chr(10).chr(10);






$contenido .='<?php /*termina copiar y terminaA3*/ ?>
            </tr>
            <tr>
<td style="background:#c9e8e8"></td>
<?php /*inicia copiar y pegar iniciaA4*/ ?>';

$contenido .= chr(10).chr(10);



echo "<hr/><H1>HTML FILTRO E INPUT .PHP A4</H1><BR/>";
$contenido .= "<!--<hr/><H1>HTML FILTRO E INPUT .PHP A4</H1><BR/>-->";
foreach($_POST AS $ETIQUETA => $valor){
$contenido .= ('<?php  ').''.chr(10). ('if($database->plantilla_filtro($nombreTabla,"'.$ETIQUETA.'",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td style="background:#c9e8e8"><input type="text" class="form-control" id="').$ETIQUETA. ('_1" value="<?php 
').('echo $'.$ETIQUETA.'; ?>"></td>').''.chr(10);

$contenido .= '<?php } ?>';

}

$contenido .= chr(10);


$contenido .=  '<?php /*termina copiar y terminaA4*/ ?>
	
		<td style="background:#c9e8e8"></td>
		<td style="background:#c9e8e8"></td>
            </tr>			
        </thead>
		<?php 	if ($numrows<0){ ?>
		</table>
		<?php }else{ ?>		
        <tbody>
		<?php
		$finales=0;
		
		foreach ($datos as $key=>$row){?>
		<tr>
<td><?php echo $row["id"];?></td>
<?php /*inicia copiar y pegar iniciaA5*/ ?>';

$contenido .= chr(10);

echo "<hr/><H1>FOREACH FILTRO .PHP A5</H1><BR/>";
$contenido .= "<!--<hr/><H1>FOREACH FILTRO .PHP A5</H1><BR/>-->";
foreach($_POST AS $ETIQUETA => $valor){
$contenido .= ('<?php  ').''. ('if($database->plantilla_filtro($nombreTabla,"'.$ETIQUETA.'",$altaeventos,$DEPARTAMENTO)=="si"){ ?><td><?php echo $row[\''.$ETIQUETA.'\'];?></td>').''.chr(10);
$contenido .= '<?php } ?>';	
}

$contenido .= chr(10);



$contenido .='<?php /*termina copiar y terminaA5*/ ?>
			<td>
<?php if($database->variablespermisos(\'\',\'ALTA_EVENTOS\',\'modificar\')==\'si\'){ ?>
<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataaltaeventosmodifica" />			
<?php } ?>
			</td>
			<td>
<?php if($database->variablespermisos(\'\',\'ALTA_EVENTOS\',\'borrar\')==\'si\'){ ?>
<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataaltaeventosborrar" />
<?php } ?>
			</td>			
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
				echo \'<div class="hint-text">Mostrando \'.$inicios.\' al \'.$finales.\' de \'.$numrows.\' registros</div>\';
				echo $pagination->paginate();
			?>
        </div>
	<?php
	}
}
?>';

$contenido .= chr(10);


			$rutaarchivo = $filepath.'controlador_filtro.php';
			$idAmazonPDF = '';
if (! file_exists ( $filepath )) {
            mkdir ( $filepath, 0777, true );
        }

$archivo= fopen($rutaarchivo,'w+');
fwrite($archivo,$contenido);
fclose($archivo);

/**/


$contenido2 .='<?php
/**
 	--------------------------
	Autor: Sandor Matamoros
	Programer: Fatima Arellano
	Propietario: EPC
	----------------------------
 
*/

define("__ROOT1__", dirname(dirname(__FILE__)));
	include_once (__ROOT1__."/../includes/error_reporting.php");
	include_once (__ROOT1__."/../'.$RUTAFILTRO.'/'.$claseactual.'");

	
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
		$offset=$search[\'offset\'];
		$per_page=$search[\'per_page\'];
		
		$sWhere=" ";
		$sWhere2="";$sWhere3="";';
		



echo "<hr/><H1>QUERY FILTRO .PHP</H1><BR/>";
foreach($_POST AS $ETIQUETA => $valor){
$contenido2 .= ('if($search[\''.$ETIQUETA.'\']!=""){').''. chr(10).
			('$sWhere2.="  $tables.'.$ETIQUETA.' LIKE \'%".$search[\''.$ETIQUETA.'\']."%\' OR ";').
		('}').''. chr(10);	
}


		$contenido2 .='IF($sWhere2!=""){
				$sWhere22 = substr($sWhere2,0,-3);
			$sWhere3  = \' where ( \'.$sWhere22.\' ) \';
		}ELSE{
		$sWhere3  = \'\';	
		}
		
		$sWhere3.="  order by $tables.id desc ";
		$sql="SELECT $campos FROM  $tables $sWhere $sWhere3 LIMIT $offset,$per_page";
		
		$query=$this->mysqli->query($sql);
		$sql1="SELECT $campos FROM  $tables $sWhere $sWhere3 ";
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
?>';



$contenido2 .= chr(10);

			$rutaarchivo = $filepath.'class.filtro.php';
			$idAmazonPDF = '';
if (! file_exists ( $filepath )) {
            mkdir ( $filepath, 0777, true );
        }
$archivo= fopen($rutaarchivo,'w+');
fwrite($archivo,$contenido2);
fclose($archivo);




$contenido3 .= '<script type="text/javascript">
	
	/*filtro */

/* iniciaB1*/

		$(function() {
			load(1);
		});
		function load(page){
			var query=$("#NOMBRE_EVENTO").val();
			var DEPARTAMENTO2=$("#DEPARTAMENTO2WE").val();';

echo "<hr/><H1>JQUERY2 FILTRO .PHP</H1><BR/>";
foreach($_POST AS $ETIQUETA => $valor){
$contenido3 .= ('var '.$ETIQUETA.'=$("#'.$ETIQUETA.'_1").val();').''.chr(10);	
}
$contenido3 .= chr(10);
$contenido3 .= '/*termina copiar y pegar*/
			
			var per_page=$("#per_page").val();
			var parametros = {
			"action":"ajax",
			"page":page,
			\'query\':query,
			\'per_page\':per_page,

/*inicia copiar y pegar*/';


echo "<hr/><H1>JQUERY FILTRO .PHP</H1><BR/>";
foreach($_POST AS $ETIQUETA => $valor){
$contenido3 .=('\''.$ETIQUETA.'\':'.$ETIQUETA.',').''.chr(10);	
}


$contenido3 .= '/*termina copiar y pegar*/

			\'DEPARTAMENTO2\':DEPARTAMENTO2
			};
			$("#loader").fadeIn(\'slow\');
			$.ajax({
				url:\''.$RUTAFILTRO.'/clases/controlador_filtro.php\',
				type: \'POST\',				
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".datos_ajax").html(data).fadeIn(\'slow\');
					$("#loader").html("");
				}
			})
		}
/* terminaB1*/		
		
	</script>';



$contenido3 .= chr(10);

			$rutaarchivo = $filepath.'script.filtro.php';
			$idAmazonPDF = '';
if (! file_exists ( $filepath )) {
            mkdir ( $filepath, 0777, true );
        }
$archivo= fopen($rutaarchivo,'w+');
fwrite($archivo,$contenido3);
fclose($archivo);

$contenido4 .= '<?php
class Pagination{
	public $page;
    public $tpages;
    public $adjacents;

    function __construct($page, $tpages, $adjacents){
		$this->page = $page;
		$this->tpages  = $tpages;
		$this->adjacents   = $adjacents;
    }
	
	
	public	function paginate() {
		
		$page=$this->page;
		$tpages=$this->tpages;
		$adjacents=$this->adjacents ;
		
		$prevlabel = "&lsaquo; Anterior";
		$nextlabel = "Siguiente &rsaquo;";
		$out = \'<ul class="pagination   pull-right">\';
		// previous label
		 
		if($page==1) {
		$out.= "<li class=\'page-item disabled\'><a class=\'page-link\'>$prevlabel</a></li>";
		} else if($page==2) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(1)\'>$prevlabel</a></li>";
		}else {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(".($page-1).")\'>$prevlabel</a></li>";
		 
		}
		// first label
		if($page>($adjacents+1)) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(1)\'>1</a></li>";
		}
		// interval
		if($page>($adjacents+2)) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\'>...</a></li>";
		}
		 
		// pages
		 
		$pmin = ($page>$adjacents) ? ($page-$adjacents) : 1;
		$pmax = ($page<($tpages-$adjacents)) ? ($page+$adjacents) : $tpages;
		for($i=$pmin; $i<=$pmax; $i++) {
		if($i==$page) {
		$out.= "<li class=\'active page-item\'><a class=\'page-link\'>$i</a></li>";
		}else if($i==1) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(1)\'>$i</a></li>";
		}else {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(".$i.")\'>$i</a></li>";
		}
		}
		 
		// interval
		 
		if($page<($tpages-$adjacents-1)) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\'>...</a></li>";
		}
		 
		// last
		 
		if($page<($tpages-$adjacents)) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load($tpages)\'>$tpages</a></li>";
		}
		 
		// next
		 
		if($page<$tpages) {
		$out.= "<li class=\'page-item\'><a class=\'page-link\' href=\'javascript:void(0);\' onclick=\'load(".($page+1).")\'>$nextlabel</a></li>";
		}else {
		$out.= "<li class=\'disabled page-item\'><a class=\'page-link\'>$nextlabel</a></li>";
		}
		$out.= "</ul>";
		return $out;
		}
}
?>';

$contenido4 .= chr(10);

			$rutaarchivo = $filepath.'pagination.php';
			$idAmazonPDF = '';
if (! file_exists ( $filepath )) {
            mkdir ( $filepath, 0777, true );
        }
$archivo= fopen($rutaarchivo,'w+');
fwrite($archivo,$contenido4);
fclose($archivo);


ECHO "AAAAAA";

	
?>