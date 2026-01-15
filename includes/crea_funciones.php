<?php 
print_r($_POST);
$etiquetas1 = '';$valores='';
echo "creando insert into<br/><br/><br/><br/>";
$insertinto = "< insert into XXX (";
FOREACH($_POST AS $ETIQUETA => $valor){
	$etiquetas1 .= ' '.$ETIQUETA .',' ;
}
	$idRelacion = 'idRelacion';
$idRelaciona1 = ' idRelacion) values ( ' ;
FOREACH($_POST AS $ETIQUETA => $valor){
	$valores .= '\'".$'. $ETIQUETA.'."\' , ';
}
//echo "idRelacion)";
 $idRelaciona2 =  '\'".$'. $idRelacion.'."\' ); ';
 
 
echo $insertinto.$etiquetas1.$idRelaciona1.$valores.$idRelaciona2;
echo "<hr/>nota, quitar el ,where de la sentencia, SENTENCIA PARA ACTUALIZAR<BR/>";

$update =  "< update XXX set ";$parametros='';
FOREACH($_POST AS $ETIQUETA => $valor){
	$parametros .= $ETIQUETA.' = \'".$'. $ETIQUETA.'."\' , ';
}

$existe = 'existe';
$where = " where idRelacion = " ;
$idrelacion1 = '\'".$'. $existe.'."\' ; ';

$todos = $update.$parametros.$where.$idrelacion1;
$todos2 = str_replace(', where',' where ',$todos);
echo $todos2;
echo "<hr/>nota, quitar el ,where de la sentencia<BR/>";

$create = "< create table XXX( id int(15) AUTO_INCREMENT ";$parametros2='';
FOREACH($_POST AS $ETIQUETA => $valor){
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
echo "<hr/>_FILES";
//print_r($_FILES);
foreach($_FILES AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($ROW["'.$ETIQUETA.'"])?$ROW["'.$ETIQUETA.'"]:""; <BR/>';	
}
	
echo "<hr/>COPIAR Y PEGAR EN CONTROLADOR .PHP<BR/>";
foreach($_POST AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($_POST["'.$ETIQUETA.'"])?$_POST["'.$ETIQUETA.'"]:""; <BR/>';	
}




echo "<hr/>SOLO ARCHIVOS, COPIAR Y PEGAR EN CONTROLADOR .PHP<BR/>";
foreach($_FILES AS $ETIQUETA => $valor){
	
ECHO 'if( $_FILES["'.$ETIQUETA.'"] == true){ <BR/>';
ECHO '$'.$ETIQUETA.' = $conexion->solocargar("'.$ETIQUETA.'"); <BR/>';
ECHO '} <BR/>';
	
}

echo "<hr/>variableeeeeeeeeeeeeee variables.php<br/>";
foreach($_POST AS $ETIQUETA => $valor){
echo '$'.$ETIQUETA . ' = isset($ROWempresa["'.$ETIQUETA.'"])?$ROWempresa["'.$ETIQUETA.'"]:""; <BR/>';	
}


echo "<hr/>variablesssss";
foreach($_POST AS $ETIQUETA => $valor){
echo htmlentities( '<?php echo $'.$ETIQUETA . '; ?>');
echo "<br/>";
}



echo "<hr/>variablesssss2";
foreach($_POST AS $ETIQUETA => $valor){
echo htmlentities( 'value="<?php echo $'.$ETIQUETA . '; ?>"');
echo "<br/>";
}


echo "<hr/>INICIA CONEXIÓN CON CONTROLADOR Y CLASE<BR/><BR/>";
$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_POST AS $ETIQUETA => $valor){
$parametrosfuncion .= ', $'.$ETIQUETA . ' ';	
}
$fin = ");";

echo $iniciofunction.$parametrosfuncion.$fin;


echo "<hr/>";
$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_POST AS $ETIQUETA => $valor){
$parametrosfuncion .= 'or $'.$ETIQUETA . ' =="" ';	
}
$fin = ");";

echo $iniciofunction.$parametrosfuncion.$fin;



echo "<hr/>";
$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_FILES AS $ETIQUETA => $valor){
$parametrosfuncion .= '$_FILES["'.$ETIQUETA . '"] == true or ' ;	
}
$fin = ");";

echo $iniciofunction.$parametrosfuncion.$fin;


echo "<hr/>";
echo '//////////////////////////////////////////////////////////////MULTI ITEM//////////////////////////////////////////////////////////////';
echo '<br/>';echo "<hr/>HTML DENTRO DE VISTAPREVIA.PHP";echo '<br/>';

$pantalla = "";
$iniciofunction = "XXX (".$pantalla;$parametrosfuncion='';
foreach($_POST AS $ETIQUETA => $valor){
	/*     <tr>  
            <td width="30%"><label>FECHA DE ENTREGA DE TARJETA:</label></td>  
            <td width="70%"><input type="date" class="form-control"  name="FECHA_ENTREGA_TARJETA" value="'.$row["FECHA_ENTREGA_TARJETA"].'"></td>  
        </tr>*/
echo htmlentities('<tr>');
echo '<br/>';
echo htmlentities('<td width="30%"><label>'.$ETIQUETA.'</label></td>');
echo '<br/>';
echo htmlentities('<td width="70%"><input type="text"  name="'.$ETIQUETA.'" 
value="\'.$row["'.$ETIQUETA.'"].\'"></td>');
echo '<br/>';
echo htmlentities('</tr> ') ;	
}


foreach($_FILES AS $ETIQUETA => $valor){

echo htmlentities('<tr>');
echo '<br/>';
echo htmlentities('<td width="30%"><label>'.$ETIQUETA.'</label></td>');
echo '<br/>';

echo htmlentities('<td width="70%">');


echo htmlentities('<div class="col-md-6">

<div id="drop_file_zone" 
ondrop="upload_file(event, \\\''.$ETIQUETA.'\\\');"  ondragover="return false" style="width:300px;">
<p>Suelta aquí o busca tu archivo</p>
<p>

<input class="form-control form-control-sm" id="'.$ETIQUETA.'" type="text" onkeydown="return false"

onclick="file_explorer(\\\''.$ETIQUETA.'\\\');" 

style="width:250px;" value="\'.$row["'.$ETIQUETA.'"].\'" required />

</p>
<input type="file" name="'.$ETIQUETA.'" id="nono"/>
<div id="2'.$ETIQUETA.'">

"\'.$url'.$ETIQUETA.'.\'"

</div>
</div>	
</div>');

echo htmlentities('</td>');
echo '<br/>';
echo htmlentities('</tr> ') ;	
}










echo '<br/>';echo "<hr/>VARIABLES, DENTRO VISTAPREVIA.PHP";echo '<br/>';


echo '<br/><hr/><br/>';
echo '<br/><hr/><br/>';
foreach($_FILES AS $ETIQUETA => $valor){
echo htmlentities(' if($row["'.$ETIQUETA.'"]!=""){ ');echo '<br/>';
echo htmlentities('$url'.$ETIQUETA.' =  "<a target=\'_blank\' ');echo '<br/>';
echo htmlentities('href=\'includes/archivos/".$row["'.$ETIQUETA.'"]."\'>Visualizar!</a>";');echo '<br/>';
echo htmlentities('}else{');echo '<br/>';
echo htmlentities('$url'.$ETIQUETA.'="";');echo '<br/>';
echo htmlentities('}');echo '<br/>';;
			  
}













echo '<br/>';echo "<hr/>LISTADO, DENTRO HTML";echo '<br/>';

  ECHO htmlentities("<?php ");echo '<br/>';

 ECHO htmlentities('$querycontras = $conexion->Listado_XXXXXXXXXXXXX();');echo '<br/>';
 ECHO htmlentities("?>");echo '<br/>';
  ECHO htmlentities("   <div class='container'> ");echo '<br/>';
  ECHO htmlentities("  <br />  ");echo '<br/>';
  ECHO htmlentities("  <div class='table-responsive'>");echo '<br/>';
  ECHO htmlentities("   <div align='right'>");echo '<br/>';
  ECHO htmlentities("   </div>");echo '<br/>';
  ECHO htmlentities("   <br />");echo '<br/>';
  ECHO htmlentities("   <div id='employee_table'>");echo '<br/>';
   ECHO htmlentities("  <tbody= 'font-style:italic;'>");echo '<br/>';
  
  
   ECHO htmlentities("  <table border='0' class='table mb-0 table-striped' id='resetXXXXXXXXXXXXX' name='resetXXXXXXXXXXXXX'>");echo '<br/>';
  ECHO htmlentities("     <tr>");echo '<br/>';
  
  
  foreach($_POST AS $ETIQUETA => $valor){
      echo htmlentities('<th width="20%"style="background:#c9e8e8">'.$ETIQUETA.'</th>');echo '<br/>';
       
  }
  
  foreach($_FILES AS $ETIQUETA => $valor){
      echo htmlentities('<th width="20%"style="background:#c9e8e8">'.$ETIQUETA.'</th>');echo '<br/>';
       
  }  
  
  
  
  ECHO htmlentities("      </tr>");echo '<br/>';
   ECHO htmlentities("     <?php");echo '<br/>';
  ECHO htmlentities('     while($row = mysqli_fetch_array($querycontras))');echo '<br/>';
  ECHO htmlentities("     { ");echo '<br/>';

   ECHO htmlentities("    ?>");echo '<br/>';
   
   
   
   
 ECHO htmlentities("       <tr style='background:#f5f9fc'>");echo '<br/>';
 
   foreach($_POST AS $ETIQUETA => $valor){
 echo htmlentities('<td ><?php echo $row["'.$ETIQUETA.'"]; ?></td>');echo '<br/>';;
   }
   foreach($_FILES AS $ETIQUETA => $valor){
 echo htmlentities('<td ><?php echo $row["'.$ETIQUETA.'"]; ?></td>');echo '<br/>';;
   }

	   
	   
  ECHO htmlentities(' <td><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataXXXXXXXXXXXXXmodifica" /></td>');echo '<br/>';
	   
	   
   ECHO htmlentities('     <td><input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataXXXXXXXXXXXXXborrar" /></td>');echo '<br/>';
	   
	   
  ECHO htmlentities("     </tr>");echo '<br/>';
  ECHO htmlentities("     <?php");echo '<br/>';
  ECHO htmlentities("     }");echo '<br/>';
   ECHO htmlentities("    ?>");echo '<br/>';
   ECHO htmlentities("   </table>");echo '<br/>';
   ECHO htmlentities("   </tbody>");echo '<br/>';
   ECHO htmlentities("  </div>");echo '<br/>';
   ECHO htmlentities(" </div>  ");echo '<br/>';
  ECHO htmlentities(" </div>	");echo '<br/>';


echo '<br/>';echo "<hr/>LLAMA UNA VISTAPREVIA.PHP, DENTRO DE SCRIPT.PHP";echo '<br/>';

ECHO htmlentities(" $(document).on('click', '.xxxxxxxxxxx', function(){");echo '<br/>';

  ECHO htmlentities(" var personal_id = $(this).attr('id');");echo '<br/>';
 ECHO htmlentities("  $.ajax({");echo '<br/>';
 ECHO htmlentities("   url:'xxxxxxxxxxx/xxxxxxxxxxx.php',");echo '<br/>';
 ECHO htmlentities("   method:'POST',");echo '<br/>';
 ECHO htmlentities("   data:{personal_id:personal_id},");echo '<br/>';
 ECHO htmlentities("    beforeSend:function(){ "); echo '<br/>';
 ECHO htmlentities("   $('#xxxxxxxxxxx').html('cargando');"); echo '<br/>';
 ECHO htmlentities("    },    ");echo '<br/>';
 ECHO htmlentities("   success:function(data){");echo '<br/>';
  ECHO htmlentities("   $('#personal_detalles').html(data);");echo '<br/>';
  ECHO htmlentities("   $('#dataModal').modal('toggle');");echo '<br/>';
 ECHO htmlentities("   }");echo '<br/>';
 ECHO htmlentities("  });");echo '<br/>';
 ECHO htmlentities(" });");echo '<br/>';





echo '<br/>';echo "<hr/>SCRIPT DENTRO DE VISTA PREVIA ";echo '<br/>';



	    ECHO htmlentities(' //NOMBRE DEL BOTÓN  ');echo '<br/>';
  ECHO htmlentities('$("#XXXXXXXXXXX").click(function(){');echo '<br/>';
  ECHO htmlentities('   $.ajax({  ');echo '<br/>';
	    ECHO htmlentities(' //URL  ');echo '<br/>';  
   ECHO htmlentities('   url:"XXXXXXXXXXX/XXXXXXXXXXX.php",');echo '<br/>';
   ECHO htmlentities('   method:"POST",  ');echo '<br/>';
	    ECHO htmlentities(' //FORMULARIO  ');echo '<br/>';   
   ECHO htmlentities('   data:$("#XXXXXXXXXXX").serialize(),');echo '<br/>';
    ECHO htmlentities('  beforeSend:function(){  ');echo '<br/>';
	    ECHO htmlentities(' //MENSAJE  ');echo '<br/>';
    ECHO htmlentities('  $("#XXXXXXXXXXX").html("cargando"); ');echo '<br/>';
    ECHO htmlentities('  }, 	');echo '<br/>';
  ECHO htmlentities('    success:function(data){');echo '<br/>';
  ECHO htmlentities('		if($.trim(data)=="Ingresado" || $.trim(data)=="Actualizado"){');echo '<br/>';
  ECHO htmlentities('			$("#add_data_Modal").modal("hide");');echo '<br/>';
	    ECHO htmlentities(' //RESET  ');echo '<br/>';  
  ECHO htmlentities('			$("#XXXXXXXXXXX").load(location.href + " #XXXXXXXXXXX");');echo '<br/>';
	    ECHO htmlentities(' //MENSAJE  ');echo '<br/>';  
  ECHO htmlentities('			$("#XXXXXXXXXXX").html("<span id=\'ACTUALIZADO\' >"+data+"</span>");');echo '<br/>';
  ECHO htmlentities('			}else{');echo '<br/>';
	    ECHO htmlentities(' //MENSAJE  ');echo '<br/>';  
  ECHO htmlentities('			$("#XXXXXXXXXXX").html(data);');echo '<br/>';
  ECHO htmlentities('		}');echo '<br/>';
   ECHO htmlentities('   }  ');echo '<br/>';
   ECHO htmlentities('  });');echo '<br/>';
   
  ECHO htmlentities('});');echo '<br/>';






echo '<br/>';echo "<hr/>SCRIPT PARA BORRAR ";echo '<br/>';





  ECHO htmlentities("$(document).on('click', '.view_dataXXXXXXXXXX', function(){");echo '<br/>';
  ECHO htmlentities("  var borra_id_XXXXXXXXXX = $(this).attr('id');");echo '<br/>';
  ECHO htmlentities("  var borraXXXXXXXXXX = 'borraXXXXXXXXXX';");echo '<br/>';
  ECHO htmlentities("    $('#personal_detalles3').html();");echo '<br/>';
  ECHO htmlentities("    $('#dataModal3').modal('show');");echo '<br/>';
   ECHO htmlentities(" $('#btnYes').click(function() {");echo '<br/>';
   ECHO htmlentities(" $.ajax({");echo '<br/>';
  ECHO htmlentities("   url:'XXXXXXXXXX/XXXXXXXXXX.php',");echo '<br/>';
   ECHO htmlentities("  method:'POST',");echo '<br/>';
   ECHO htmlentities("  data:{borra_id_XXXXXXXXXX:borra_id_XXXXXXXXXX,borraXXXXXXXXXX:borraXXXXXXXXXX},");echo '<br/>';
   
   ECHO htmlentities("   beforeSend:function(){  ");echo '<br/>';
   ECHO htmlentities("   $('#XXXXXXXXXX').html('cargando');");echo '<br/>'; 
   ECHO htmlentities("   },    ");echo '<br/>';
   ECHO htmlentities("  success:function(data){");echo '<br/>';
  ECHO htmlentities("	   			$('#dataModal3').modal('hide');	");echo '<br/>';   
  ECHO htmlentities("			$('#XXXXXXXXXX').html(\"<span id='ACTUALIZADO' >\"+data+\"</span>\");	");echo '<br/>';		
  ECHO htmlentities("			$('#resetXXXXXXXXXX').load(location.href + ' #resetXXXXXXXXXX');");echo '<br/>';
    ECHO htmlentities(" }");echo '<br/>';
   ECHO htmlentities(" });");echo '<br/>';
  ECHO htmlentities("	});");echo '<br/>'; 
   ECHO htmlentities("});");echo '<br/>';




echo '<br/>';echo "<hr/><H6>FUNCIONES, DENTRO DE CLASS </H6>";echo '<br/>';

echo "primer listado relacionado con html";echo '<br/>';
   ECHO htmlentities(' 	public function listado_xxxxxxx1(){
		$conn = $this->db();
		$variablequery = "select * from 01conveniopago  where idRelacion = \'".$_SESSION[\'id\']."\' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
	} ');echo '<br/>';echo '<br/>';echo '<br/>';

echo "segundo listado dentro de vista previa.php";echo '<br/>';
   ECHO htmlentities(' 	public function listado_xxxxxxx2($id){
		$conn = $this->db();
		$variablequery = "select * from 01conveniopago  where id = \'".$id."\' ";
		return $arrayquery = mysqli_query($conn,$variablequery);
	}');echo '<br/>';echo '<br/>';echo '<br/>';


echo "funcion para borrar";echo '<br/>';
   ECHO htmlentities(' 	public function borra_xxxxxxx_2($id){
		$conn = $this->db();
		$variablequery = "delete from 01conveniopago where id = \'".$id."\' ";
		$arrayquery = mysqli_query($conn,$variablequery);
		RETURN 
		
		"ELEMENTO BORRADO";
	}');echo '<br/>';

echo '<br/>';echo "<hr/>SCRIPT PARA email ";echo '<br/>';

   ECHO htmlentities(" 	elseif(\$xxxxxxxxxxxxxxx_IMAIL ==true){");echo '<br/>';
   ECHO htmlentities(" 	\$conexion2 = new herramientas();");echo '<br/>';
   ECHO htmlentities(" 	\$NOMBRE_1 = 'Peticion'; ");echo '<br/>';
   ECHO htmlentities(" 	\$EMAILnombre = array(\$xxxxxxxxxxxxxxx_IMAIL=>\$NOMBRE_1);");echo '<br/>';
   ECHO htmlentities(" 	\$adjuntos = array(''=>'');");echo '<br/>';
   ECHO htmlentities(" 	\$Subject = 'DATOS SOLICITADOS';");echo '<br/>';
	foreach($_POST AS $ETIQUETA => $VALOR){
	$CONCATENADO .= $ETIQUETA.',';
	}
	
	ECHO htmlentities(" 	\$MANDA_INFORMACION = \$conexion->MANDA_INFORMACION('".$CONCATENADO ."',");echo '<br/>';
   ECHO htmlentities(" 	false,");echo '<br/>';
	
   ECHO htmlentities(" 	'03xxxxxxxxxxxxxxx');");echo '<br/>';
	
   ECHO htmlentities(" 	\$html = \$conexion->html2('DATOS DE xxxxxxxxxxxxxxx',\$MANDA_INFORMACION );");echo '<br/>';
   ECHO htmlentities(" 	\$embebida = array('../manuales/ver.jpg' => 'ver'); ");echo '<br/>';
   ECHO htmlentities(" 	echo \$conexion2->email(\$EMAILnombre, \$html, \$adjuntos, \$embebida, \$Subject);");echo '<br/>';
   ECHO htmlentities(" }");
	







	
?>