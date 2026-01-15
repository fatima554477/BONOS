<?php 
print_r($_FILES);
$etiquetas1 = '';$valores='';
echo "creando insert into<br/>";
$insertinto = "insert into XXX (";
FOREACH($_FILES AS $ETIQUETA => $valor){
	$etiquetas1 .= ' '.$ETIQUETA .',' ;
}
	$idRelacion = 'idRelacion';
$idRelaciona1 = ' idRelacion) values ( ' ;
FOREACH($_FILES AS $ETIQUETA => $valor){
	$valores .= '\'".$'. $ETIQUETA.'."\' , ';
}
//echo "idRelacion)";
 $idRelaciona2 =  '\'".$'. $idRelacion.'."\' ); ';
 
 
echo $insertinto.$etiquetas1.$idRelaciona1.$valores.$idRelaciona2;
echo "<hr/>nota, quitar el ,where de la sentencia";

$update =  "update XXX set ";$parametros='';
FOREACH($_FILES AS $ETIQUETA => $valor){
	$parametros .= $ETIQUETA.' = \'".$'. $ETIQUETA.'."\' , ';
}

$existe = 'existe';
$where = " where idRelacion = " ;
$idrelacion1 = '\'".$'. $existe.'."\' ; ';

$todos = $update.$parametros.$where.$idrelacion1;
$todos2 = str_replace(', where',' where ',$todos);
echo $todos2;
echo "<hr/>nota, quitar el ,where de la sentencia";

$create = "create table XXX( id int(15) AUTO_INCREMENT ";$parametros2='';
FOREACH($_FILES AS $ETIQUETA => $valor){
	$parametros2 .= ', '.$ETIQUETA.' varchar(100) ';
}
$primary = ", idRelacion int(15) , primary key(id));";

echo $create.$parametros2.$primary;

/*echo 	'
<div class="col-md-6">
		<label for="formFileSm" class="form-label">SUBIR '.str_replace('_',' ',$ETQIETA).'</label>
		<div id="drop_file_zone" ondrop="upload_file(event,\''.$ETQIETA.'\')" ondragover="return false" >
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="'.$ETQIETA.'" type="text" onclick="file_explorer(\''.$ETQIETA.'\');" style="width:300px;" VALUE="<?php echo $'.$ETQIETA.'; ?>" required ></p>
		<input type="file" name="'.$ETQIETA.'" id="nono"/>
		<div id="1'.$ETQIETA.'">
		<?php
		if($'.$ETQIETA.'!=""){echo "<a target=\'_blank\' href=\'includes/archivos/".$'.$ETQIETA.'."\'>descargar!</a>"; 
		}?></div>
	</div>	
	</div>
	';*/
echo "<hr/>";
foreach($_FILES AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($ROW["'.$ETIQUETA.'"])?$ROW["'.$ETIQUETA.'"]:""; <BR/>';	
}
	
echo "<hr/>";
foreach($_FILES AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($_FILES["'.$ETIQUETA.'"])?$_FILES["'.$ETIQUETA.'"]:""; <BR/>';	
}


echo "<hr/>variableeeeeeeeeeeeeee";
foreach($_FILES AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($ROWempresa["'.$ETIQUETA.'"])?$ROWempresa["'.$ETIQUETA.'"]:""; <BR/>';	
}


echo "<hr/>variablesssss";
foreach($_FILES AS $ETIQUETA => $valor){
echo htmlentities( '<?php echo $'.$ETIQUETA . '; ?>');
echo "<br/>";
}



echo "<hr/>variablesssss2";
foreach($_FILES AS $ETIQUETA => $valor){
echo htmlentities( 'value="<?php echo $'.$ETIQUETA . '; ?>"');
echo "<br/>";
}


echo "<hr/>";
$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_FILES AS $ETIQUETA => $valor){
$parametrosfuncion .= ', $'.$ETIQUETA . ' ';	
}
$fin = ");";

echo $iniciofunction.$parametrosfuncion.$fin;


echo "<hr/>";
$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_FILES AS $ETIQUETA => $valor){
$parametrosfuncion .= 'or $'.$ETIQUETA . ' =="" ';	
}
$fin = ");";

echo $iniciofunction.$parametrosfuncion.$fin;









	
?>