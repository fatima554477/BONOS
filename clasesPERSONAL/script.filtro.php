<script type="text/javascript">
	
	/*filtro */

/* iniciaB1*/

        $(function() {
                const triggerSearch = () => load(1);

                $('#target3').on('keydown', 'thead input, thead select', function(event) {
                        if (event.key === 'Enter' || event.which === 13) {
                                event.preventDefault();
                                triggerSearch();
                        }
                });

                load(1);
        });
		function load(page){

			
var query=$("#NOMBRE_EVENTO").val();
var NUMERO_EVENTO=$("#NUMERO_EVENTO_1").val();
var NOMBRE_EVENTO=$("#NOMBRE_EVENTO_1").val();
var NOMBRE_COMERCIAL_EVENTO=$("#NOMBRE_COMERCIAL_EVENTO_1").val();
var NOMBRE_FISCAL_EVENTO=$("#NOMBRE_FISCAL_EVENTO_1").val();
var PUESTO_PERSONAL2=$("#PUESTO_PERSONAL2_1").val();
var EMAIL_PERSONAL2=$("#EMAIL_PERSONAL2_1").val();
var WHAT_PERSONAL=$("#WHAT_PERSONAL_1").val();
var FECHA_INICIO_EVENTO=$("#FECHA_INICIO_EVENTO_1").val();
var PAIS_DEL_EVENTO=$("#PAIS_DEL_EVENTO_1").val();
var CIUDAD_DEL_EVENTO=$("#CIUDAD_DEL_EVENTO_1").val();
var DEPARTAMENTO2=$("#DEPARTAMENTO2WE").val();
var NOMBRE_PERSONAL=$("#NOMBRE_PERSONAL_1").val();
var TIPO_DE_MONEDA_1=$("#TIPO_DE_MONEDA_1_1").val();
var INSTITUCION_FINANCIERA_1=$("#INSTITUCION_FINANCIERA_1_1").val();
var NUMERO_DE_CUENTA_DB_1=$("#NUMERO_DE_CUENTA_DB_1_1").val();
var NUMERO_CLABE_1=$("#NUMERO_CLABE_1_1").val();
var FOTO_ESTADO_PROVEE=$("#FOTO_ESTADO_PROVEE_1").val();
var FECHA_INICIO=$("#FECHA_INICIO_1").val();
var FECHA_FINAL=$("#FECHA_FINAL_1").val();
var NUMERO_DIAS=$("#NUMERO_DIAS_1").val();
var MONTO_BONO=$("#MONTO_BONO_1").val();
var FOTO_ESTADO_PROVEE=$("#FOTO_ESTADO_PROVEE_1").val();
var FECHA_INICIO=$("#FECHA_INICIO_1").val();
var FECHA_FINAL=$("#FECHA_FINAL_1").val();
var NUMERO_DIAS=$("#NUMERO_DIAS_1").val();
var MONTO_BONO=$("#MONTO_BONO_1").val();
var MONTO_BONO_TOTAL=$("#MONTO_BONO_TOTAL_1").val();
var VIATICOS_PERSONAL=$("#VIATICOS_PERSONAL_1").val();
var TOTAL=$("#TOTAL_1").val();
var ULTIMO_DIA=$("#ULTIMO_DIA_1").val();
var OBSERVACIONES_PERSONAL=$("#OBSERVACIONES_PERSONAL_1").val();
var FECHA_PPAGO=$("#FECHA_PPAGO_1").val();
var FORMA_PAGO=$("#FORMA_PAGO_1").val();
var FECHA_EFECTIVA=$("#FECHA_EFECTIVA_1").val();
var ADJUNTO_COMPROBANTEP=$("#ADJUNTO_COMPROBANTEP_1").val();
var NOMBRE_RECIBIO=$("#NOMBRE_RECIBIO_1").val();
var hDatosPERSONAL=$("#hDatosPERSONAL_1").val();
var PERSONAL_FECHA_ULTIMA_CARGA=$("#PERSONAL_FECHA_ULTIMA_CARGA_1").val();



/*termina copiar y pegar*/
			
			var per_page=$("#per_page").val();
			var parametros = {
			"action":"ajax",
			"page":page,
			'query':query,
			'per_page':per_page,

/*inicia copiar y pegar*/
'NUMERO_EVENTO':NUMERO_EVENTO,
'NOMBRE_EVENTO':NOMBRE_EVENTO,
'NOMBRE_COMERCIAL_EVENTO':NOMBRE_COMERCIAL_EVENTO,
'NOMBRE_FISCAL_EVENTO':NOMBRE_FISCAL_EVENTO,
'FECHA_INICIO_EVENTO':FECHA_INICIO_EVENTO,
'PUESTO_PERSONAL2':PUESTO_PERSONAL2,
'WHAT_PERSONAL':WHAT_PERSONAL,
'EMAIL_PERSONAL2':EMAIL_PERSONAL2,
'PAIS_DEL_EVENTO':PAIS_DEL_EVENTO,
'CIUDAD_DEL_EVENTO':CIUDAD_DEL_EVENTO,
'NOMBRE_PERSONAL':NOMBRE_PERSONAL,
'TIPO_DE_MONEDA_1':TIPO_DE_MONEDA_1,
'INSTITUCION_FINANCIERA_1':INSTITUCION_FINANCIERA_1,
'NUMERO_DE_CUENTA_DB_1':NUMERO_DE_CUENTA_DB_1,
'NUMERO_CLABE_1':NUMERO_CLABE_1,
'FOTO_ESTADO_PROVEE':FOTO_ESTADO_PROVEE,
'FECHA_INICIO':FECHA_INICIO,
'FECHA_FINAL':FECHA_FINAL,
'NUMERO_DIAS':NUMERO_DIAS,
'MONTO_BONO':MONTO_BONO,

'MONTO_BONO_TOTAL':MONTO_BONO_TOTAL,

'VIATICOS_PERSONAL':VIATICOS_PERSONAL,

'TOTAL':TOTAL,

'ULTIMO_DIA':ULTIMO_DIA,

'OBSERVACIONES_PERSONAL':OBSERVACIONES_PERSONAL,

'PERSONAL_FECHA_ULTIMA_CARGA':PERSONAL_FECHA_ULTIMA_CARGA,

'FECHA_PPAGO':FECHA_PPAGO,
'FORMA_PAGO':FORMA_PAGO,
'FECHA_EFECTIVA':FECHA_EFECTIVA,
'ADJUNTO_COMPROBANTEP':ADJUNTO_COMPROBANTEP,
'NOMBRE_RECIBIO':NOMBRE_RECIBIO,

'hDatosPERSONAL':hDatosPERSONAL,


/*termina copiar y pegar*/

			'DEPARTAMENTO2':DEPARTAMENTO2
			};
			$("#loader").fadeIn('slow');
					$.ajax({
				url:'BONOS/clasesPERSONAL/controlador_filtro.php',
				type: 'POST',				
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader").html("Cargando...");
			  },
				success:function(data){
					$(".datos_ajax").html(data).fadeIn('slow');
					$("#loader").html("");
				}
			})
		}
/* terminaB1*/		

function pasara1_personal(pasara1_personal_id){
	var checkBox = document.getElementById("pasarapersonal"+pasara1_personal_id);
	var pasapersonal_text = "";
	if (checkBox.checked == true){
		pasapersonal_text = "si";
	}else{
		pasapersonal_text = "no";
	}
	  $.ajax({
		url:'calendariodeeventos2/controladorAE.php',
		method:'POST',
		data:{pasara1_personal_id:pasara1_personal_id,pasapersonal_text:pasapersonal_text},
		beforeSend:function(){
		$('#mensajefiltro').html('cargando');
	},
		success:function(data){
		load(1);			
		$('#mensajefiltro').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
	}
	});
}

function pasara1_personalAUT(pasara1_personalAUT_id){
	var checkBox = document.getElementById("pasarapersonalAUT"+pasara1_personalAUT_id);
	var pasapersonalAUT_text = "";
	if (checkBox.checked == true){
		pasapersonalAUT_text = "si";
	}else{
		pasapersonalAUT_text = "no";
	}
	  $.ajax({
		url:'calendariodeeventos2/controladorAE.php',
		method:'POST',
		data:{pasara1_personalAUT_id:pasara1_personalAUT_id,pasapersonalAUT_text:pasapersonalAUT_text},
		beforeSend:function(){
		$('#mensajefiltro').html('cargando');
	},
		success:function(data){
		load(1);			
		$('#mensajefiltro').html("<span id='ACTUALIZADO' >"+data+"</span>").fadeIn().delay(2000).fadeOut();
	}
	});
}
	</script>