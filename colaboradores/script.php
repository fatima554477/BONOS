	<div id="add_data_Modal" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles2">

   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   </div>
  </div>
 </div>
</div>



<div id="dataModal" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles">
    
   </div>
   <div class="modal-footer">
   
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>
	
	

<!--NUEVO CODIGO BORRAR-->
<div id="dataModal3" class="modal fade">
 <div class="modal-dialog modal-lg">
  <div class="modal-content">
   <div class="modal-header">

    <h4 class="modal-title">Detalles</h4>
   </div>
   <div class="modal-body" id="personal_detalles3">
    ¿ESTÁS SEGURO DE BORRAR ESTE REGISTRO?
   </div>
   <div class="modal-footer">
          <span id="btnYes" class="btn confirm">SI BORRAR</span>	  
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
   
   </div>
  </div>
 </div>
</div>


	<script type="text/javascript">



	var fileobj;
	function upload_file(e,name) {
	    e.preventDefault();
	    fileobj = e.dataTransfer.files[0];
	    ajax_file_upload1(fileobj,name);
	}
	 
	function file_explorer(name) {
	    document.getElementsByName(name)[0].click();
	    document.getElementsByName(name)[0].onchange = function() {
	        fileobj = document.getElementsByName(name)[0].files[0];
	        ajax_file_upload1(fileobj,name);
	    };
	}

	function ajax_file_upload1(file_obj,nombre) {
	    if(file_obj != undefined) {
	        var form_data = new FormData();                  
	        form_data.append(nombre, file_obj);
	        $.ajax({
	            type: 'POST',
	            url: 'colaboradores/controlador.php',
	            contentType: false,
	            processData: false,
	            data: form_data,
 beforeSend: function() {
$('#1'+nombre).html('<p style="color:green;">Cargando archivo!</p>');
$('#mensajeADJUNTOCOL').html('<p style="color:green;">Actualizado!</p>');
    },				
	            success:function(response) {
//alert(response);
if($.trim(response) == 2 ){

$('#1'+nombre).html('<p style="color:red;">Error, archivo diferente a PDF, JPG o GIF.</p>');
$('#'+nombre).val("");
}else{
$('#'+nombre).val(response);
$('#1'+nombre).html('<a target="_blank" href="includes/archivos/'+$.trim(response)+'">Visualizar!</a>');	
}

	            }
	        });
	    }
	}


function comasainput(name){
	
const numberNoCommas = (x) => {
  return x.toString().replace(/,/g, "");
}

    var total = document.getElementsByName(name)[0].value;
	 var total2 = numberNoCommas(total)
const numberWithCommas = (x) => {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}	
    document.getElementsByName(name)[0].value = numberWithCommas(total2);	
}

/*otra sección*/
function cuentaDver(pasarDID){

    $('.only-one').on('change', function() {
        $('.only-one').not(this).prop('checked', false);  
    });

	var checkBox = document.getElementById("cuentaD"+pasarDID);
	var pasarD_text = "";
	if (checkBox.checked == true){
	pasarD_text = "si";
	}else{
	pasarD_text = "no";
	}
	
	$.ajax({
	   url:"colaboradores/controlador.php",
		method:'POST',
		data:{pasarD_text:pasarD_text,pasarDID:pasarDID},
		beforeSend:function(){
			$('#mensajeDATOSBANCARIOS1').html('cargando');
		},
		success:function(data){
			
			
			$('#mensajeDATOSBANCARIOS1').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut(); 
			$("#resetBancario1p").load(location.href + " #resetBancario1p");
		}
	});

}



// Función reutilizable para todos los inputs
function formatearNumeros(input) {
    input.value = input.value
        .replace(/\D/g, '') // Eliminar no números
        .replace(/(\d{2})(?=\d)/g, '$1 '); // Formatear cada 2 dígitos
}

// Aplicar a todos los inputs con la clase 'formato-numero'
document.querySelectorAll('.formato-numero').forEach(input => {
    input.addEventListener('input', function(e) {
        formatearNumeros(e.target);
    });
});




	$(document).ready(function(){





$(document).ready(function(){
    $("#CP_MONTO_SOLICITADO").prettynumber();   
});











 $(document).on('click', '.view_data', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaContrasenia.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCONTRASENAS2').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles2')
    $('#add_data_Modal').modal('show');
   }
  });
 });

$(document).on('click', '.view_data2', function(){
  //$('#dataModal').modal();
  var borra_id_contrasenia = $(this).attr("id");
  var borrarContrasenia = "borrarContrasenia";
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_contrasenia:borra_id_contrasenia,borrarContrasenia:borrarContrasenia},
   
    beforeSend:function(){  
    $('#mensajeCONTRASENAS2').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR	   
			$("#mensajeCONTRASENAS2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteate1").load(location.href + " #reseteate1");
   }
  });
   //AGREGAR	
	});
  //AGREGAR   
 });


$("#enviarCONTRASENAS").click(function(){
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#CONTRASENASform').serialize(),

    beforeSend:function(){  
    $('#mensajeCONTRASENAS2').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$("#reseteate1").load(location.href + " #reseteate1");
			$("#mensajeCONTRASENAS2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

			}else{
				$("#reseteate1").load(location.href + " #reseteate1");
				
			$("#mensajeCONTRASENAS2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			
		}
    }  
   });
   
});




 $(document).on('click', '.view_dataMEASIGNADO12', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaMaterialEquipo.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeMEASIGNADO12').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('toggle');
   }
  });
 });

 $(document).on('click', '.view_databorraEASIGNADO12', function(){
  //$('#dataModal').modal();
  var borra_id_contrasenia = $(this).attr("id");
  var borrarMEASIGNADO12 = "borrarMEASIGNADO12";


  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_contrasenia:borra_id_contrasenia,borrarMEASIGNADO12:borrarMEASIGNADO12},
   
    beforeSend:function(){  
    $('#mensajeMEASIGNADO12').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR	
			$("#mensajeMEASIGNADO12").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteateMATERIALEQUIPO").load(location.href + " #reseteateMATERIALEQUIPO");
			$("#reset").load(location.href + " #reset");
   }
  });
   //AGREGAR	
	});
  //AGREGAR  
 });



$("#enviarMEASIGNADO12").click(function(){
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#MEASIGNADO12form').serialize(),

    beforeSend:function(){  
    $('#mensajeMEASIGNADO12').html('cargando'); 
    }, 	
	
    success:function(data){
		 $('#MEASIGNADO12form')[0].reset(); 
		 			$("#1MA_CARGAR_CARTA").load(location.href + " #1MA_CARGAR_CARTA");
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$("#reseteateMATERIALEQUIPO").load(location.href + " #reseteateMATERIALEQUIPO");
			$("#mensajeMEASIGNADO12").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

			}else{
					$("#reseteateMATERIALEQUIPO").load(location.href + " #reseteateMATERIALEQUIPO");
					$("#reset").load(location.href + " #reset");
				
			$("#mensajeMEASIGNADO12").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			
		}
    }  
   });
   
});








 $(document).on('click', '.view_dataUNIFORMES', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaUniformes.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeUNIFORMES2').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 });

 $(document).on('click', '.view_dataUNIFORMES2', function(){
  //$('#dataModal').modal();
  var borra_id_uniforme = $(this).attr("id");
  var borraraUniformes = "borraraUniformes"; 
  
   //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR 
  
  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_uniforme:borra_id_uniforme,borraraUniformes:borraraUniformes},
   
    beforeSend:function(){
    $('#mensajeUNIFORMES2').html('cargando'); 
    },    
   success:function(data){
	   
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR	

			$("#mensajeUNIFORMES2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteateUNIFORMES").load(location.href + " #reseteateUNIFORMES");
			$("#reset").load(location.href + " #reset");
   }
  });
   //AGREGAR	
	});
  //AGREGAR    
 });


$("#enviarUNIFORMES").click(function(){
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#UNIFORMESform').serialize(),

    beforeSend:function(){  
    $('#mensajeUNIFORMES2').html('cargando'); 
    }, 	
	
    success:function(data){
		$('#UNIFORMESform')[0].reset(); 
			
					$("#1U_FOTOS").load(location.href + " #1U_FOTOS");
		$("#1U_CARGAR_CARTA").load(location.href + " #1U_CARGAR_CARTA");	
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){


				
			$("#reseteateUNIFORMES").load(location.href + " #reseteateUNIFORMES");
			$("#mensajeUNIFORMES2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

			}else{
				$("#reseteateUNIFORMES").load(location.href + " #reseteateUNIFORMES");
				$("#reset").load(location.href + " #reset");
				
			$("#mensajeUNIFORMES2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			
		}
    }  
   });
   
});









 $(document).on('click', '.view_dataCONVENIOPAGO', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaConvenioPago.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCONVENIOPAGO').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 });


 $(document).on('click', '.view_databorraCONVENIOPAGO', function(){
  //$('#dataModal').modal();
  var borra_id_CONVENIOPAGO = $(this).attr("id");
  var borraraCONVENIOPAGO = "borraraCONVENIOPAGO";  
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_CONVENIOPAGO:borra_id_CONVENIOPAGO,borraraCONVENIOPAGO:borraraCONVENIOPAGO},
   
    beforeSend:function(){  
    $('#mensajeCONVENIOPAGO').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR	
			$("#mensajeCONVENIOPAGO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteateCONVENIOPAGO").load(location.href + " #reseteateCONVENIOPAGO");
   }
  });
   //AGREGAR	
	});
  //AGREGAR    
 });



$("#enviarCONVENIOPAGO").click(function(){
   $.ajax({  
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#CONVENIOPAGOform').serialize(),

    beforeSend:function(){  
    $('#mensajeCONVENIOPAGO').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
				
			$("#reseteateCONVENIOPAGO").load(location.href + " #reseteateCONVENIOPAGO");
			$("#mensajeCONVENIOPAGO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

			}else{
			$("#reseteateCONVENIOPAGO").load(location.href + " #reseteateCONVENIOPAGO");	
			$("#mensajeCONVENIOPAGO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			
		}
    }  
   });
   
});








///////////////////////////////////////////////////////////BANCOC//////////////////////////////////////////////////


     //DATOS BACANRIOS //mensajeDATOSBANCARIOS1




$("#enviarDATOS").click(function(){
	/*nuevo script pbajar archivos y datos*/
const formData = new FormData($('#DATOSBANCARIOS1form')[0]);

$.ajax({
    url:"colaboradores/controlador.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	
			//$('#target3').hide("linear");
			$("#resetBancario1p").load(location.href + " #resetBancario1p");
			$("#mensajeDATOSBANCARIOS1").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			}else{
			$("#mensajeDATOSBANCARIOS1").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			$("#resetBancario1p").load(location.href + " #resetBancario1p");
		}
})
.fail(function() {
    console.log("detect error");
});
});








$(document).on('click', '.view_dataBANCARIO', function(){
var personal_id = $(this).attr('id');
$.ajax({
url:'colaboradores/VistaPreviaDatosBancario1.php',
method:'POST',
data:{personal_id:personal_id},
beforeSend:function(){
$('#mensajeDATOSBANCARIOS1').html('CARGANDO');
},
success:function(data){
$('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
$('#dataModal').modal('toggle');
}
});
});


$(document).on('click', '.view_databancario1borrar', function(){
var borra_id_bancaP = $(this).attr('id');
var borra_datos_bancario1 = 'borra_datos_bancario1';
$('#personal_detalles3').html();
$('#dataModal3').modal('show');
$('#btnYes').click(function() {
$.ajax({
    url:"colaboradores/controlador.php",
method:'POST',
data:{borra_id_bancaP:borra_id_bancaP,borra_datos_bancario1:borra_datos_bancario1},
beforeSend:function(){
$('#mensajeDATOSBANCARIOS1').html('CARGANDO');
},
success:function(data){
$('#dataModal3').modal('hide');
$('#mensajeDATOSBANCARIOS1').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
$('#resetBancario1p').load(location.href + ' #resetBancario1p');
}
});
});
});


//SCRIPT enviar EMAIL
$(document).on('click', '#enviar_email_bancarios', function(){
var DAbancaPRO_ENVIAR_IMAIL = $('#DAbancaPRO_ENVIAR_IMAIL').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emai_DATOSBpro").serialize();  



$.ajax({
    url:"colaboradores/controlador.php",
method:'POST',
dataType: 'html',

data: dataString+{DAbancaPRO_ENVIAR_IMAIL:DAbancaPRO_ENVIAR_IMAIL},


beforeSend:function(){
$('#mensajeDATOSBANCARIOS1').html('CARGANDO');
},
success:function(data){
$('#mensajeDATOSBANCARIOS1').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

}
});
});



/////////////////////////////////////////////////////////////////////////////////



$("#enviarDIRECEP").click(function(){

const formData = new FormData($('#PDIRECEMPRE1form')[0]);

$.ajax({
    url:"colaboradores/controlador.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false
}).done(function(data) {

		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){	

			//$("#resetCONTACTOSP").load(location.href + " #resetCONTACTOSP");
			$("#mensajeDIRECEP").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			}else{
			$("#mensajeDIRECEP").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
		}
})
.fail(function() {
    console.log("detect error");
});
});



//SCRIPT enviar EMAIL
$(document).on('click', '#enviarPDirfiscal', function(){
var PDIRECCIONF_ENVIAR_IMAIL = $('#PDIRECCIONF_ENVIAR_IMAIL').val();

$.ajax({
    url:"colaboradores/controlador.php",
method:'POST',
data:{PDIRECCIONF_ENVIAR_IMAIL:PDIRECCIONF_ENVIAR_IMAIL},
beforeSend:function(){
$('#mensajeDIRECEP').html('CARGANDO');
},
success:function(data){
$('#mensajeDIRECEP').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

}
});
});

////////////////////////////////TARJETA EMPRESARIAL///////////////////////////////////////////





 
 
 $(document).on('click', '.view_dataTAREMPRESARIAL', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
    url:"colaboradores/VistaPreviaTAREMPRESARIAL.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeTEMPRESARIAL').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html(data);
    $('#dataModal').modal('show');
   }
  });
 });

 $(document).on('click', '.view_dataTAREMPRESARIAL2', function(){
  //$('#dataModal').modal();
  var borra_id_tempresarial = $(this).attr("id");
  var borraratempresarial = "borraratempresarial";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR
  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_id_tempresarial:borra_id_tempresarial,borraratempresarial:borraratempresarial},
   
    beforeSend:function(){  
    $('#mensajeTEMPRESARIAL').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR		   
			$("#mensajeTEMPRESARIAL").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$.getScript(load(1));
   }
  });
   //AGREGAR	
	});
  //AGREGAR   
 });










$("#enviarTEMPRESARIAL").click(function(){
   $.ajax({
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#TEMPRESARIALform').serialize(),
    beforeSend:function(){  
    $('#mensajeTEMPRESARIAL').html('cargando'); 
    }, 	
	
    success:function(data){
		$('#TEMPRESARIALform')[0].reset(); 

	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
			//$("#reseteateTAREMPRESARIAL").load(location.href + " #reseteateTAREMPRESARIAL");
			$("#mensajeTEMPRESARIAL").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			}else{
					//$("#reseteateTAREMPRESARIAL").load(location.href + " #reseteateTAREMPRESARIAL");
				
			$("#mensajeTEMPRESARIAL").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			$.getScript(load(1));
		}			
    }  
   });
   
});


////////////////////////////////////////////////////////////////////////////////////


 $(document).on('click', '.view_dataPOLIZAS', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaPolizas.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajePOLIZASYDOCU2').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 });

 $(document).on('click', '.view_databorraPOLIZAS', function(){
  //$('#dataModal').modal();
  var borra_id_polizas = $(this).attr("id");
  var borraraPolizas = "borraraPolizas";
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borraraPolizas:borraraPolizas,borra_id_polizas:borra_id_polizas},
   
    beforeSend:function(){ 
    $('#mensajePOLIZASYDOCU2').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR	   
			$("#mensajePOLIZASYDOCU2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteatePOLIZAS").load(location.href + " #reseteatePOLIZAS");
			$("#reset").load(location.href + " #reset");
   }
  });
   //AGREGAR	
	});
  //AGREGAR    
 });



$("#enviarPOLIZASYDOCU").click(function(){
   $.ajax({
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#POLIZASYDOCUform').serialize(),
    beforeSend:function(){  
    $('#mensajePOLIZASYDOCU2').html('cargando'); 
    }, 	
	
    success:function(data){
		$('#POLIZASYDOCUform')[0].reset(); 
					$("#1PD_CARGAR_DOCUMENTO").load(location.href + " #1PD_CARGAR_DOCUMENTO");
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
			$("#reseteatePOLIZAS").load(location.href + " #reseteatePOLIZAS");
			$("#mensajePOLIZASYDOCU2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			}else{
					$("#reseteatePOLIZAS").load(location.href + " #reseteatePOLIZAS");
					$("#reset").load(location.href + " #reset");
			$("#mensajePOLIZASYDOCU2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
		}			
    }  
   });
   
});


















 $(document).on('click', '.view_dataCONVENIOP', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaConvenioPrestamo.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeCONVENIO').html('cargando'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 });

 $(document).on('click', '.view_databorraCONVENIOP', function(){
  //$('#dataModal').modal();
  var borra_id_borraraCONVENIOP = $(this).attr("id");
  var borraraCONVENIOP = "borraraCONVENIOP"; 
  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR  
  $.ajax({
   url:"colaboradores/controlador.php",
   method:"POST",
   data:{borraraCONVENIOP:borraraCONVENIOP,borra_id_borraraCONVENIOP:borra_id_borraraCONVENIOP},
   
    beforeSend:function(){ 
    $('#mensajeCONVENIO').html('cargando'); 
    },    
   success:function(data){
   //AGREGAR	   
	$('#dataModal3').modal('hide');	
   //AGREGAR		   
			$("#mensajeCONVENIO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteateCONVENIOPRESTAMO").load(location.href + " #reseteateCONVENIOPRESTAMO");
   }
  });
   //AGREGAR	
	});
  //AGREGAR    
 });


$("#enviarCONVENIOP").click(function(){
   $.ajax({
    url:"colaboradores/controlador.php",
    method:"POST",  
    data:$('#CONVENIOPRESTAMOform').serialize(),
    beforeSend:function(){  
    $('#mensajeCONVENIO').html('cargando'); 
    }, 	
	
    success:function(data){
	
		if($.trim(data)=='Ingresado' || $.trim(data)=='Actualizado'){
			$("#reseteateCONVENIOPRESTAMO").load(location.href + " #reseteateCONVENIOPRESTAMO");
			$("#mensajeCONVENIO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
			}else{
			$("#reseteateCONVENIOPRESTAMO").load(location.href + " #reseteateCONVENIOPRESTAMO");
			$("#mensajeCONVENIO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
		}			
    }  
   });
   
});













	$("#enviarDATOSCOLABORADORES").click(function(){
const formData = new FormData($('#DATOSCOLABORADORESform')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeADJUNTOCOL').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeADJUNTOCOL").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});



$("#enviarIPERSONAL").click(function(){
const formData = new FormData($('#IPERSONALform')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeIPERSONAL').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeIPERSONAL").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();	
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});



	$("#enviarDIRCASA1").click(function(){
const formData = new FormData($('#DIRCASA1form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeDIRCASA1').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeDIRCASA1").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();		
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});







	$("#enviarDIRCASA2").click(function(){
const formData = new FormData($('#DIRCASA2form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeDIRCASA2').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeDIRCASA2").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();		
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});







	$("#enviarF1CERCANO1").click(function(){
const formData = new FormData($('#F1CERCANO1form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeF1CERCANO').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeF1CERCANO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();	
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});




	$("#enviarF2CERCANO2").click(function(){
const formData = new FormData($('#F2CERCANO2form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeF2CERCANO').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeF2CERCANO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();		
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});









	$("#enviarF3CERCANO3").click(function(){
const formData = new FormData($('#F3CERCANO3form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeF3CERCANO').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeF3CERCANO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();		
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});




	




	$("#enviarF4CERCANO4").click(function(){
const formData = new FormData($('#F4CERCANO4form')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeF4CERCANO').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeF4CERCANO").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();	
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});







	$("#enviarEMPRESA").click(function(){
const formData = new FormData($('#EMPRESAform')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeEMPRESA').html('cargando'); 
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeEMPRESA").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();		
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});





	$("#enviarMEASIGNADO1").click(function(){
		var formulario = $("#MEASIGNADO1form").serializeArray();
			$.ajax({
			type: "POST",
			url: "colaboradores/controlador.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeMEASIGNADO1").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target10').hide("linear");
			$("#mensajeMEASIGNADO1").load(location.href + " #mensajeMEASIGNADO1");
			}else{
			$("#mensajeMEASIGNADO1").html(respuesta);				
			}



			});
	});	
	


	$("#enviarMEASIGNADO2").click(function(){
		var formulario = $("#MEASIGNADO2form").serializeArray();
			$.ajax({
			type: "POST",
			url: "colaboradores/controlador.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeMEASIGNADO2").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target11').hide("linear");
			$("#mensajeMEASIGNADO2").load(location.href + " #mensajeMEASIGNADO2");
			}else{
			$("#mensajeMEASIGNADO2").html(respuesta);				
			}

			});
	});	


	$("#enviarMEASIGNADO3").click(function(){
		var formulario = $("#MEASIGNADO3form").serializeArray();
			$.ajax({
			type: "POST",
			url: "colaboradores/controlador.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeMEASIGNADO3").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target12').hide("linear");
			$("#mensajeMEASIGNADO3").load(location.href + " #mensajeMEASIGNADO3");
			}else{
			$("#mensajeMEASIGNADO3").html(respuesta);				
			}

			});
	});	


	$("#enviarHABILIDADES1").click(function(){
		var formulario = $("#HABILIDADESform").serializeArray();
			$.ajax({
			type: "POST",
			url: "colaboradores/controlador.php",
			data: formulario,
		}).done(function(respuesta){

			//$("#mensajeHABILIDADES").html(respuesta);
			if($.trim(respuesta)=='Ingresado' || $.trim(respuesta)=='Actualizado'){
			$('#target81').hide("linear");
			$("#mensajeHABILIDADES").load(location.href + " #mensajeHABILIDADES");
			}else{
			$("#mensajeHABILIDADES").html(respuesta);				
			}

			});
	});
	

////////////////////////////////////////////////////////////////////////////////////////////////////////////





$("#GUARDAR_DATOSCOLABORADOR").click(function(){
const formData = new FormData($('#DATOSCOLABORADORform')[0]);

$.ajax({
    url:"colaboradores/controlador.php",
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeDATOSCOLABORADOR').html('cargando'); 
    },    
   success:function(data){
	    $('#DATOSCOLABORADORform')[0].reset(); 
	
		$("#reset_DATOSCOLABORADOR").load(location.href + " #reset_DATOSCOLABORADOR");	
			$("#mensajeDATOSCOLABORADOR").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

   }
   
})
});


$(document).on('click', '.view_DATOSCOLABORADOR', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
  url:"colaboradores/VistaPreviaDATOSCOLABORADOR.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeDATOSCOLABORADOR').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 })



$(document).on('click', '.view_dataDATOSCOLABORADORborrar', function(){

  var borra_colaborador = $(this).attr("id");
  var borra_DATOSCOLABORADOR = "borra_DATOSCOLABORADOR";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
    url:"colaboradores/controlador.php",
   method:"POST",
   data:{borra_colaborador:borra_colaborador,borra_DATOSCOLABORADOR:borra_DATOSCOLABORADOR},
   
    beforeSend:function(){  
    $('#mensajeDATOSCOLABORADOR').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeDATOSCOLABORADOR").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();	
			$("#reset_DATOSCOLABORADOR").load(location.href + " #reset_DATOSCOLABORADOR");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });		

/////////////////////SCRIPT enviar EMAIL//////
$(document).on('click', '#BUTTON_DATOSCOLABORADOR', function(){
var EMAIL_DATOSCOLABORADOR = $('#EMAIL_DATOSCOLABORADOR').val();


        var myCheckboxes = new Array();
        $("input:checked").each(function() {
           myCheckboxes.push($(this).val());
        });
var dataString = $("#form_emil_DATOSCOLABORADOR").serialize();

$.ajax({
    url:"colaboradores/controlador.php",
method:'POST',
dataType: 'html',

data: dataString+{EMAIL_DATOSCOLABORADOR:EMAIL_DATOSCOLABORADOR},


beforeSend:function(){
$('#mensajeDATOSCOLABORADOR').html('cargando');
},
success:function(data){
$('#mensajeDATOSCOLABORADOR').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();

}
});
});	  





/////////////////////////////NUEVO ///////////////////////////////////////////////////////////


$("#enviardocu").click(function(){
const formData = new FormData($('#DOCUMENTONUEVOform')[0]);

$.ajax({
      url:'colaboradores/controlador.php',
    type: 'POST',
    dataType: 'html',
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
	
	 beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('cargando');    
    },    
   success:function(data){
	
		$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");	
			$("#mensajeDOCUnuevo").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
		$("#despleReset").load(location.href + " #despleReset");	

   }
   
})
});



$(document).on('click', '.view_dataNUEVOdocu', function(){
  //$('#dataModal').modal();
  var personal_id = $(this).attr("id");
  $.ajax({
   url:"colaboradores/VistaPreviaNUEVO.php",
   method:"POST",
   data:{personal_id:personal_id},
    beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('CARGANDO'); 
    },    
   success:function(data){
    $('#personal_detalles').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
    $('#dataModal').modal('show');
   }
  });
 });

$(document).on('click', '.view_databorraNUEVOdocu', function(){

  var borra_NUEVOD = $(this).attr("id");
  var BORRAREGISTRO_NUEVO = "BORRAREGISTRO_NUEVO";

  //AGREGAR
    $('#personal_detalles3').html();
    $('#dataModal3').modal('show');
  $('#btnYes').click(function() {
  //AGREGAR

  
  $.ajax({
    url:'colaboradores/controlador.php',
   method:"POST",
   data:{borra_NUEVOD:borra_NUEVOD,BORRAREGISTRO_NUEVO:BORRAREGISTRO_NUEVO},
   
    beforeSend:function(){  
    $('#mensajeDOCUnuevo').html('CARGANDO'); 
    },    
   success:function(data){
	   			$('#dataModal3').modal('hide');	   
			$("#mensajeDOCUnuevo").html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();			
			$("#reseteateNUEVO").load(location.href + " #reseteateNUEVO");
   }
  });
  
    //AGREGAR	
	});
  //AGREGAR	 
  
 });
	
	
			$('#target1').hide("linear");
			
			
			$('#target1a1').hide("linear");			
			
			$('#target2').hide("linear");
			$('#target3').hide("linear");
			$('#target4').hide("linear");
			$('#target5').hide("linear");
			$('#target6').hide("linear");
			$('#target7').hide("linear");
			$('#target8').hide("linear");
			$('#target9').hide("linear");
			$('#target10').hide("linear");
			$('#target101').hide("linear");
			$('#target11').hide("linear");
			$('#target111').hide("linear");
			$('#target12').hide("linear");
			$('#target121').hide("linear");
			$('#target13').hide("linear");
			$('#target14').hide("linear");
			$('#target15').hide("linear");
			$('#target16').hide("linear");
			$('#target17').hide("linear");
			$('#target18').hide("linear");
			$('#target19').hide("linear");
			$('#target20').hide("linear");
			$('#target21').hide("linear");
			$('#target22').hide("linear");
			$('#target23').hide("linear");
			$('#target24').hide("linear");
			$('#target25').hide("linear");
			$('#target26').hide("linear");
			$('#target27').hide("linear");
			$('#target28').hide("linear");
			$('#target29').hide("linear");
			$('#target30').hide("linear");
			$('#target31').hide("linear");
			$('#target32').hide("linear");
			$('#target33').hide("linear");
			$('#target34').hide("linear");
			$('#target35').hide("linear");
			$('#target35').hide("linear");
			$('#target37').hide("linear");
			$('#target38').hide("linear");
			$('#target39').hide("linear");
			$('#target40').hide("linear");
			$('#target41').hide("linear");
			$('#target42').hide("linear");
			$('#target43').hide("linear");
			$('#target44').hide("linear");
			$('#target45').hide("linear");
			$('#target80').hide("linear");
			$('#target81').hide("linear");
			$('#target82').hide("linear");
			$('#target83').hide("linear");
			$('#targetVIDEO').hide("linear");
			
			$("#mostrar1").click(function(){
				$('#target1').show("swing");
		 	});
			$("#ocultar1").click(function(){
				$('#target1').hide("linear");
			});
			
			$("#mostrar80").click(function(){
				$('#target80').show("swing");
		 	});
			$("#ocultar80").click(function(){
				$('#target80').hide("linear");
			});


			$("#mostrar81").click(function(){
				$('#target81').show("swing");
		 	});
			$("#ocultar81").click(function(){
				$('#target81').hide("linear");
			});


			$("#mostrar1a1").click(function(){
				$('#target1a1').show("swing");
		 	});
			$("#ocultar1a1").click(function(){
				$('#target1a1').hide("linear");
			});


			
			
			$("#mostrar2").click(function(){
				$('#target2').show("swing");
		 	});
			$("#ocultar2").click(function(){
				$('#target2').hide("linear");
			});
			$("#mostrar3").click(function(){
				$('#target3').show("swing");
		 	});
			$("#ocultar3").click(function(){
				$('#target3').hide("linear");
			});
			$("#mostrar4").click(function(){
				$('#target4').show("swing");
		 	});
			$("#ocultar4").click(function(){
				$('#target4').hide("linear");
			});
			$("#mostrar5").click(function(){
				$('#target5').show("swing");
		 	});
			$("#ocultar5").click(function(){
				$('#target5').hide("linear");
			});
			$("#mostrar6").click(function(){
				$('#target6').show("swing");
		 	});
			$("#ocultar6").click(function(){
				$('#target6').hide("linear");
			});
			$("#mostrar7").click(function(){
				$('#target7').show("swing");
		 	});
			$("#ocultar7").click(function(){
				$('#target7').hide("linear");
			});
			$("#mostrar8").click(function(){
				$('#target8').show("swing");
		 	});
			$("#ocultar8").click(function(){
				$('#target8').hide("linear");
			});
			$("#mostrar9").click(function(){
				$('#target9').show("swing");
		 	});
			$("#ocultar9").click(function(){
				$('#target9').hide("linear");
			});
			$("#mostrar10").click(function(){
				$('#target10').show("swing");
		 	});
			$("#ocultar10").click(function(){
				$('#target10').hide("linear");
			});
			
			$("#mostrar101").click(function(){
				$('#target101').show("swing");
		 	});
			$("#ocultar101").click(function(){
				$('#target101').hide("linear");
			});
			
			$("#mostrar11").click(function(){
				$('#target11').show("swing");
		 	});
			$("#ocultar11").click(function(){
				$('#target11').hide("linear");
			});
			
			$("#mostrar111").click(function(){
				$('#target111').show("swing");
		 	});
			$("#ocultar111").click(function(){
				$('#target111').hide("linear");
			});			
			
			
			$("#mostrar12").click(function(){
				$('#target12').show("swing");
		 	});
			$("#ocultar12").click(function(){
				$('#target12').hide("linear");
			});
			
			$("#mostrar121").click(function(){
				$('#target121').show("swing");
		 	});
			$("#ocultar121").click(function(){
				$('#target121').hide("linear");
			});			
			
			$("#mostrar13").click(function(){
				$('#target13').show("swing");
		 	});
			$("#ocultar13").click(function(){
				$('#target13').hide("linear");
			});
			
			$("#mostrar14").click(function(){
				$('#target14').show("swing");
		 	});
			$("#ocultar14").click(function(){
				$('#target14').hide("linear");
			});		


			$("#mostrar15").click(function(){
				$('#target15').show("swing");
		 	});
			$("#ocultar15").click(function(){
				$('#target15').hide("linear");
			});					

			$("#mostrar16").click(function(){
				$('#target16').show("swing");
		 	});
			$("#ocultar16").click(function(){
				$('#target16').hide("linear");
			});	

			$("#mostrar17").click(function(){
				$('#target17').show("swing");
		 	});
			$("#ocultar17").click(function(){
				$('#target17').hide("linear");
			});	

			$("#mostrar18").click(function(){
				$('#target18').show("swing");
		 	});
			$("#ocultar18").click(function(){
				$('#target18').hide("linear");
			});

			$("#mostrar19").click(function(){
				$('#target19').show("swing");
		 	});
			$("#ocultar19").click(function(){
				$('#target19').hide("linear");
			});

			$("#mostrar20").click(function(){
				$('#target20').show("swing");
		 	});
			$("#ocultar20").click(function(){
				$('#target20').hide("linear");
			});
			
			$("#mostrar21").click(function(){
				$('#target21').show("swing");
		 	});
			$("#ocultar21").click(function(){
				$('#target21').hide("linear");
			});
			
			$("#mostrar22").click(function(){
				$('#target22').show("swing");
		 	});
			$("#ocultar22").click(function(){
				$('#target22').hide("linear");
			});
			$("#mostrar23").click(function(){
				$('#target23').show("swing");
		 	});
			$("#ocultar23").click(function(){
				$('#target23').hide("linear");
			});
			$("#mostrar24").click(function(){
				$('#target24').show("swing");
		 	});
			$("#ocultar24").click(function(){
				$('#target24').hide("linear");
				
			});
					$("#mostrar25").click(function(){
				$('#target25').show("swing");
		 	});
			$("#ocultar25").click(function(){
				$('#target25').hide("linear");
				
			});
					$("#mostrar26").click(function(){
				$('#target26').show("swing");
		 	});
			$("#ocultar26").click(function(){
				$('#target26').hide("linear");
				
			});
					$("#mostrar27").click(function(){
				$('#target27').show("swing");
		 	});
			$("#ocultar27").click(function(){
				$('#target27').hide("linear");
				
			});
					$("#mostrar28").click(function(){
				$('#target28').show("swing");
		 	});
			$("#ocultar28").click(function(){
				$('#target28').hide("linear");
				
			});
					$("#mostrar29").click(function(){
				$('#target29').show("swing");
		 	});
			$("#ocultar29").click(function(){
				$('#target29').hide("linear");
				
			});
					$("#mostrar30").click(function(){
				$('#target30').show("swing");
		 	});
			$("#ocultar30").click(function(){
				$('#target30').hide("linear");
				
			});
					$("#mostrar31").click(function(){
				$('#target31').show("swing");
		 	});
			$("#ocultar31").click(function(){
				$('#target31').hide("linear");
				
			});
					$("#mostrar32").click(function(){
				$('#target32').show("swing");
		 	});
			$("#ocultar32").click(function(){
				$('#target32').hide("linear");
				
			});
					$("#mostrar303").click(function(){
				$('#target33').show("swing");
		 	});
			$("#ocultar33").click(function(){
				$('#target33').hide("linear");
				
			});
					$("#mostrar34").click(function(){
				$('#target34').show("swing");
		 	});
			$("#ocultar34").click(function(){
				$('#target34').hide("linear");
				
			});
					$("#mostrar35").click(function(){
				$('#target35').show("swing");
		 	});
			$("#ocultar35").click(function(){
				$('#target35').hide("linear");
				
			});
					$("#mostrar36").click(function(){
				$('#target36').show("swing");
		 	});
			$("#ocultar36").click(function(){
				$('#target36').hide("linear");
				
			});
					$("#mostrar37").click(function(){
				$('#target37').show("swing");
		 	});
			$("#ocultar37").click(function(){
				$('#target37').hide("linear");
				
			});
					$("#mostrar38").click(function(){
				$('#target38').show("swing");
		 	});
			$("#ocultar38").click(function(){
				$('#target38').hide("linear");
				
			});
					$("#mostrar39").click(function(){
				$('#target39').show("swing");
		 	});
			$("#ocultar39").click(function(){
				$('#target39').hide("linear");
				
			});
					$("#mostrar40").click(function(){
				$('#target40').show("swing");
		 	});
			$("#ocultar40").click(function(){
				$('#target40').hide("linear");
				
			});
  			$("#mostrar45").click(function(){
				$('#target45').show("swing");
		 	});
			$("#ocultar45").click(function(){
				$('#target45').hide("linear");
				
			}); 
  			$("#mostrar82").click(function(){
				$('#target82').show("swing");
		 	});
			$("#ocultar82").click(function(){
				$('#target82').hide("linear");
				
			});	

  			$("#mostrar83").click(function(){
				$('#target83').show("swing");
		 	});
			$("#ocultar83").click(function(){
				$('#target83').hide("linear");
				
			});			

			$("#mostrarVIDEO").click(function(){
				$('#targetVIDEO').show("swing");
		 	});
			$("#ocultarVIDEO").click(function(){
				$('#targetVIDEO').hide("linear");
			});

			$("#mostrartodos").click(function(){
				$('#target1').show("swing");
				$('#target1a1').show("linear");				
				$('#target2').show("swing");
				$('#target3').show("swing");
				$('#target4').show("swing");
				$('#target5').show("swing");
				$('#target6').show("swing");
				$('#target7').show("swing");
				$('#target8').show("swing");
				$('#target9').show("swing");
				$('#target10').show("swing");
				$('#target101').show("swing");
				$('#target11').show("swing");
				$('#target111').show("swing");
				$('#target12').show("swing");
				$('#target121').show("swing");
				$('#target13').show("swing");
				$('#target14').show("swing");
				$('#target15').show("swing");
				$('#target16').show("swing");
				$('#target17').show("swing");
				$('#target18').show("swing");
				$('#target19').show("swing");
				$('#target20').show("swing");
				$('#target21').show("swing");	
				$('#target22').show("swing");	
				$('#target23').show("swing");
                $('#target24').show("swing");
				$('#target25').show("swing");
				$('#target26').show("swing");
				$('#target27').show("swing");
				$('#target28').show("swing");
				$('#target29').show("swing");
				$('#target30').show("swing");
				$('#target31').show("swing");
				$('#target32').show("swing");
				$('#target33').show("swing");
				$('#target34').show("swing");
				$('#target35').show("swing");
				$('#target36').show("swing");
				$('#target37').show("swing");
				$('#target38').show("swing");
				$('#target39').show("swing");
				$('#target40').show("swing");
				$('#target41').show("swing");
				$('#target42').show("swing");
				$('#target43').show("swing");
				$('#target44').show("swing");
				$('#target45').show("swing");				
				$('#target80').show("swing");	
				$('#target81').show("swing");				
				$('#target82').show("swing");				
				$('#target83').show("swing");				
				$('#targetVIDEO').show("swing");
		 	});
			
			$("#ocultartodos").click(function(){
				$('#target1').hide("linear");
				$('#target1a1').hide("linear");				
				$('#target2').hide("linear");	
				$('#target3').hide("linear");
				$('#target4').hide("linear");
				$('#target5').hide("linear");
				$('#target6').hide("linear");
				$('#target7').hide("linear");
				$('#target8').hide("linear");
				$('#target9').hide("linear");
				$('#target10').hide("linear");
				$('#target101').hide("linear");
				$('#target11').hide("linear");
				$('#target111').hide("linear");
				$('#target12').hide("linear");
				$('#target121').hide("linear");
				$('#target13').hide("linear");
				$('#target14').hide("linear");
				$('#target15').hide("linear");
				$('#target16').hide("linear");
				$('#target17').hide("linear");
				$('#target18').hide("linear");
				$('#target19').hide("linear");
				$('#target20').hide("linear");
				$('#target21').hide("linear");
				$('#target22').hide("linear");
				$('#target23').hide("linear");
				$('#target24').hide("swing");
				$('#target25').hide("swing");
				$('#target26').hide("swing");
				$('#target27').hide("swing");
				$('#target28').hide("swing");
				$('#target29').hide("swing");
				$('#target30').hide("swing");
				$('#target31').hide("swing");
				$('#target32').hide("swing");
				$('#target33').hide("swing");
				$('#target34').hide("swing");
				$('#target35').hide("swing");
				$('#target36').hide("swing");
				$('#target37').hide("swing");
				$('#target38').hide("swing");
				$('#target39').hide("swing");
				$('#target40').hide("swing");
				$('#target41').hide("swing");
				$('#target42').hide("swing");
				$('#target43').hide("swing");
				$('#target44').hide("swing");
				$('#target45').hide("swing");
				$('#target80').hide("linear");
				$('#target81').hide("linear");				
				$('#target82').hide("linear");				
				$('#target83').hide("linear");				
				$('#targetVIDEO').hide("linear");
			});









			$("#mostrartodos2").click(function(){
				$('#target1').show("swing");
				$('#target1a1').show("linear");				
				$('#target2').show("swing");
				$('#target3').show("swing");
				$('#target4').show("swing");
				$('#target5').show("swing");
				$('#target6').show("swing");
				$('#target7').show("swing");
				$('#target8').show("swing");
				$('#target9').show("swing");
				$('#target10').show("swing");
				$('#target101').show("swing");
				$('#target11').show("swing");
				$('#target111').show("swing");
				$('#target12').show("swing");
				$('#target121').show("swing");
				$('#target13').show("swing");
				$('#target14').show("swing");
				$('#target15').show("swing");
				$('#target16').show("swing");
				$('#target17').show("swing");
				$('#target18').show("swing");
				$('#target19').show("swing");
				$('#target20').show("swing");
				$('#target21').show("swing");	
				$('#target22').show("swing");	
				$('#target23').show("swing");
				$('#target24').show("swing");
				$('#target25').show("swing");
				$('#target26').show("swing");
				$('#target27').show("swing");
				$('#target28').show("swing");
				$('#target29').show("swing");
				$('#target30').show("swing");
				$('#target31').show("swing");
				$('#target32').show("swing");
				$('#target33').show("swing");
				$('#target34').show("swing");
				$('#target35').show("swing");
				$('#target36').show("swing");
				$('#target37').show("swing");
				$('#target38').show("swing");
				$('#target39').show("swing");
				$('#target40').show("swing");
				$('#target41').show("swing");
				$('#target42').show("swing");
				$('#target43').show("swing");
				$('#target44').show("swing");
				$('#target45').show("swing");				
				$('#target80').show("swing");	
				$('#target81').show("swing");				
				$('#target82').show("swing");				
				$('#target83').show("swing");				
				$('#targetVIDEO').show("swing");
		 	});
			
			$("#ocultartodos2").click(function(){
				$('#target1').hide("linear");
				$('#target1a1').hide("linear");				
				$('#target2').hide("linear");	
				$('#target3').hide("linear");
				$('#target4').hide("linear");
				$('#target5').hide("linear");
				$('#target6').hide("linear");
				$('#target7').hide("linear");
				$('#target8').hide("linear");
				$('#target9').hide("linear");
				$('#target10').hide("linear");
				$('#target101').hide("linear");
				$('#target11').hide("linear");
				$('#target111').hide("linear");
				$('#target12').hide("linear");
				$('#target121').hide("linear");
				$('#target13').hide("linear");
				$('#target14').hide("linear");
				$('#target15').hide("linear");
				$('#target16').hide("linear");
				$('#target17').hide("linear");
				$('#target18').hide("linear");
				$('#target19').hide("linear");
				$('#target20').hide("linear");
				$('#target21').hide("linear");
				$('#target22').hide("linear");
				$('#target23').hide("linear");
			    $('#target24').hide("linear");
			    $('#target25').hide("linear");
			    $('#target26').hide("linear");
			    $('#target27').hide("linear");
			    $('#target28').hide("linear");
			    $('#target29').hide("linear");
			    $('#target30').hide("linear");
			    $('#target31').hide("linear");
			    $('#target32').hide("linear");
			    $('#target33').hide("linear");
			    $('#target34').hide("linear");
			    $('#target35').hide("linear");
			    $('#target35').hide("linear");
			    $('#target37').hide("linear");
			    $('#target38').hide("linear");
			    $('#target39').hide("linear");
			    $('#target40').hide("linear");
			    $('#target41').hide("linear");
			    $('#target42').hide("linear");
			    $('#target43').hide("linear");
			    $('#target44').hide("linear");
			    $('#target45').hide("linear");
				$('#target80').hide("linear");
				$('#target81').hide("linear");				
				$('#target82').hide("linear");				
				$('#target83').hide("linear");				
				$('#targetVIDEO').hide("linear");
			});

















		});
	</script>