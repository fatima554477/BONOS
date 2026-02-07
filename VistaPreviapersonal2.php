<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }  
//select.php  CONTRASENA_DE1
$identioficador = isset($_POST["personal_id"])?$_POST["personal_id"]:'';
if($identioficador != '')
{
 $output = '';
	require "controladorAE.php";
	$conexion = NEW accesoclase();

$queryVISTAPREV = $conexion->listado_personal33($identioficador);
 $output .= '
<div id="mensajePERSONAL2"></div> 
 <form  id="listado_personal2form"> 
      <div class="table-responsive">  
           <table class="table table-bordered">';
  $row = mysqli_fetch_array($queryVISTAPREV);
    
     $puedeBorrarAdjuntoPersonal2 = ($conexion->variablespermisos('','PERSONAL','borrar')=='si' && (!isset($var_bloquea_fecha) || $var_bloquea_fecha=='no'));
      $adjuntosComprobante = array_filter(array_map('trim', explode(',', $row["ADJUNTO_COMPROBANTE"])));
        if($row["ADJUNTO_COMPROBANTE"]=="" or $row["ADJUNTO_COMPROBANTE"]=='2' or empty($adjuntosComprobante)){
        $urlADJUNTO_COMPROBANTE="";
        $valorADJUNTO_COMPROBANTE = "";
        }else{
			$urlADJUNTO_COMPROBANTE= "<ul class='list-unstyled mb-0'>";
			foreach ($adjuntosComprobante as $adjuntoComprobante) {
				if ($adjuntoComprobante == '' || $adjuntoComprobante == '2') {
					continue;
				}
				$botonBorrarAdjunto = '';
				if ($puedeBorrarAdjuntoPersonal2) {
					$botonBorrarAdjunto = " <button type='button' class='btn btn-link p-0 text-danger view_dataPERSONAL2adjuntoBorrar' data-personal='".$row["id"]."' data-archivo='".$adjuntoComprobante."'>Borrar</button>";
				}
				$urlADJUNTO_COMPROBANTE .= "<li class='d-flex align-items-center gap-2'><a target='_blank' href='includes/archivos/".$adjuntoComprobante."'>Visualizar!</a>".$botonBorrarAdjunto."</li>";
			}
			$urlADJUNTO_COMPROBANTE .= "</ul>";
        $valorADJUNTO_COMPROBANTE = implode(',', $adjuntosComprobante);
        }					
             $output .= '
	

			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>NOMBRE</label></td>
			 <td width="70%">
			 '.$altaeventos->un_solo_colaborador_nombre($row["NOMBRE_PERSONAL2"],'01informacionpersonal','NOMBRE_1').'
			 </td>
			 </tr>
					 			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>FECHA INICIO DE A CORDINACIÓN</label></td>
			 <td width="70%"><input type="date" name="FECHA_INICIO1" value="'.$row["FECHA_INICIO1"].'"></td>

			 </tr>
	
			 
			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>FECHA FINAL DE LA CORDINACIÓN</label></td>
			 <td width="70%"><input type="date" name="FECHA_FINAL1" value="'.$row["FECHA_FINAL1"].'"></td>

			 </tr>
			 
			 
			 			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>NÚMERO DE DIAS</label></td>
			 <td width="70%"><input type="text" name="NUMERO_DIAS1" value="'.$row["NUMERO_DIAS1"].'"></td>

			 </tr>
			 
			 
			 			 			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>MONTO DEL BONO</label></td>
			 <td width="70%"><input type="text" name="MONTO_BONO1" value="'.$row["MONTO_BONO1"].'"></td>

			 </tr>
			 
			 			 			 			 			 			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>TOTAL DEL BONO</label></td>
			 <td width="70%"><input type="text" name="MONTO_BONO_TOTAL1" value="'.$row["MONTO_BONO_TOTAL1"].'"></td>

			 </tr>
			 
				 
			 		 <tr>
			 <td width="30%" style="font-weight:bold;"><label> VIATICOS</label></td>
			 <td width="70%"><input type="text" name="VIATICOS_PERSONAL2" value="'.$row["VIATICOS_PERSONAL2"].'"></td>
			 </tr>
			 
			 
			 
			 
			 
			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>TOTAL BONO Y VIATICOS</label></td>
			 <td width="70%"><input type="text" name="TOTAL1" value="'.$row["TOTAL1"].'"></td>
			 </tr>
			 
			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>ÚLTIMO DÍA PARA COMPRAR VIATICOS</label></td>
			 <td width="70%"><input type="date" name="ULTIMO_DIA1" value="'.$row["ULTIMO_DIA1"].'"></td>
			 </tr>
			 
			 
			 
			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>MOTIVO DEL BONO</label></td>
			 <td width="70%"><input type="text" name="OBSERVACIONES_PERSONAL2" value="'.$row["OBSERVACIONES_PERSONAL2"].'"></td>

			 </tr> 

			 			 <tr>
			 <td width="30%" style="font-weight:bold;"><label>FECHA DE PROGRAMACIÓN DE PAGO</label></td>
			 <td width="70%"><input type="date" name="FECHA_PPAGO1" value="'.$row["FECHA_PPAGO1"].'"></td>
			 </tr>
			 
	<tr>
    <td width="30%" style="font-weight:bold;" ><label>FORMA DE PAGO</label></td>
    <td width="70%" class="form-control">
        <select name="FORMA_PAGO1" style="background:#daddf5">
            <option style="background:#f2b4f5" value="">SELECCIONA UNA OPCIÓN</option>  
            <option style="background:#f2b4f5" value="03" '.($row["FORMA_PAGO1"] == "03" ? "selected" : "").'>03 TRANSFERENCIA ELECTRÓNICA</option>
            <option style="background:#ddf5da" value="01" '.($row["FORMA_PAGO1"] == "01" ? "selected" : "").'>01 EFECTIVO</option>
            <option style="background:#fceade" value="02" '.($row["FORMA_PAGO1"] == "02" ? "selected" : "").'>02 CHEQUE NOMINATIVO</option>
            <option style="background:#dee6fc" value="04" '.($row["FORMA_PAGO1"] == "04" ? "selected" : "").'>04 TARJETA DE CRÉDITO</option>
            <option style="background:#f6fcde" value="05" '.($row["FORMA_PAGO1"] == "05" ? "selected" : "").'>05 MONEDERO ELECTRÓNICO</option>
            <option style="background:#dee2fc" value="06" '.($row["FORMA_PAGO1"] == "06" ? "selected" : "").'>06 DINERO ELECTRÓNICO</option>
            <option style="background:#f9e5fa" value="08" '.($row["FORMA_PAGO1"] == "08" ? "selected" : "").'>08 VALES DE DESPENSA</option>
            <option style="background:#eefcde" value="28" '.($row["FORMA_PAGO1"] == "28" ? "selected" : "").'>28 TARJETA DE DÉBITO</option>
            <option style="background:#fcfbde" value="29" '.($row["FORMA_PAGO1"] == "29" ? "selected" : "").'>29 TARJETA DE SERVICIO</option>
            <option style="background:#f9e5fa" value="99" '.($row["FORMA_PAGO1"] == "99" ? "selected" : "").'>99 OTRO</option>
        </select>
    </td>
</tr>
			 
			 			 <tr>
			 <td width="30%" style="background:#f48a81;font-weight:bold;"><label>FECHA EFECTIVA DE PAGO</label></td>
			 <td width="70%" style="background:#f48a81"><input type="date" name="FECHA_EFECTIVA1" value="'.$row["FECHA_EFECTIVA1"].'"></td>
			 </tr>
			 

			 
            <tr>
                 <td width="30%" style="background:#f48a81;font-weight:bold;"><label>DOCUMENTO:</label></td>
             <td width="70%" style="background:#f48a81"><div class="col-md-6"> 

<div id="drop_file_zone" ondrop="upload_file(event, \'ADJUNTO_COMPROBANTE\');" ondragover="return false" style="width:300px;"> <p>Suelta aquí o busca tu archivo</p> <p> <input class="form-control form-control-sm" id="ADJUNTO_COMPROBANTE" type="text" onkeydown="return false" onclick="file_explorer(\'ADJUNTO_COMPROBANTE\');" style="width:250px;" value="'.$valorADJUNTO_COMPROBANTE.'" required /> </p> <input type="file" name="ADJUNTO_COMPROBANTE" id="nono" multiple/> <div id="2ADJUNTO_COMPROBANTE"> "'.$urlADJUNTO_COMPROBANTE.'" </div> </div> 


</td>
</tr>
			 			 <tr>
			 <td width="30%"  style="background:#f48a81;font-weight:bold;"><label>PAX QUE COBRO</label></td>
			 <td width="70%" style="background:#f48a81"><input type="text" name="NOMBRE_RECIBIO" value="'.$row["NOMBRE_RECIBIO"].'"></td>
			 </tr> 			 
			 
			 
			 <tr>
			 <td width="30%"><label>FECHA DE ÚLTIMA CARGA</label></td>
			 <td width="70%"><input type="text" name="PERSONAL2_FECHA_ULTIMA_CARGA" value="'.$row["PERSONAL2_FECHA_ULTIMA_CARGA"].'"></td>
			 </tr>  
		

	';
	


	 $output .= '<tr>  
            <td width="30%"><label></label></td>  
            <td width="70%">
			
			<input type="hidden" value="'.$row["id"].'"  name="IPpersonal2"  id="IPpersonal2"/>
			
			<button class="btn btn-sm btn-outline-success px-5" type="button" id="clickpersonal2">GUARDAR</button>
			
			<input type="hidden" value="ENVIARpersonal2"  name="ENVIARpersonal2"/>

			</td>  
        </tr>
     ';
    //IPCIERRE
    $output .= '</table></div></form>';
    echo $output;
}
//
?>

<script>


var fileobj;
	function upload_file(e,name) {
	    e.preventDefault();
	    upload_files(e.dataTransfer.files, name);
	}

	function upload_files(files, name) {
	    if(!files || files.length === 0) {
	        return;
	    }
	    Array.from(files).forEach(function(file){
	        ajax_file_upload1(file, name);
	    });
	}
	 
	function file_explorer(name) {
	    document.getElementsByName(name)[0].click();
	    document.getElementsByName(name)[0].onchange = function() {
	        upload_files(document.getElementsByName(name)[0].files, name);
	    };
	}

	function normalizarAdjuntos(valor) {
	    return valor
	        .split(',')
	        .map(function(item){ return item.trim(); })
	        .filter(function(item){ return item !== '' && item !== '2'; });
	}

	function renderAdjuntos(nombre, adjuntos) {
	    if(adjuntos.length === 0) {
	        return '';
	    }
	    var html = '<ul class="list-unstyled mb-0">';
	    adjuntos.forEach(function(archivo){
	        html += '<li><a target="_blank" href="includes/archivos/' + archivo + '">Visualizar!</a></li>';
	    });
	    html += '</ul>';
	    return html;
	}

	function actualizarAdjuntos(nombre, nuevoAdjunto) {
	    var actuales = normalizarAdjuntos($('#'+nombre).val());
	    if(nuevoAdjunto && actuales.indexOf(nuevoAdjunto) === -1) {
	        actuales.push(nuevoAdjunto);
	    }
	    $('#'+nombre).val(actuales.join(','));
	    $('#2'+nombre).html(renderAdjuntos(nombre, actuales));
	}

	function ajax_file_upload1(file_obj,nombre) {
	    if(file_obj != undefined) {
	        var form_data = new FormData();                  
	        form_data.append(nombre, file_obj);
	        form_data.append("IPpersonal2",  $("#IPpersonal2").val());
	        $.ajax({
	            type: 'POST',
	            url: 'calendariodeeventos2/controladorAE.php',
				  dataType: "html",
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#2'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
    },				
	            success:function(response) {

if($.trim(response) == 2 ){

$('#2'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
var nuevoAdjunto = $.trim(response);
actualizarAdjuntos(nombre, nuevoAdjunto);
}

	            }
	        });
	    }
	}



    $(document).ready(function(){

$("#clickpersonal2").click(function(){
	
   $.ajax({  
    url:"calendariodeeventos2/controladorAE.php",
    method:"POST",  
    data:$('#listado_personal2form').serialize(),

    beforeSend:function(){  
    $('#mensajePERSONAL2').html('cargando'); 
    }, 	
	
    success:function(data){
		load2(1);
		//$("#reset_personal2").load(location.href + " #reset_personal2");
    $('#mensajePERSONAL2').html("<span id='ACTUALIZADO' >"+data+"</span>"); 

			$('#dataModal').modal('hide');

    }  
   });
   
});

		});
		
	</script>