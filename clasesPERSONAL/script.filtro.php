<style>
/* Loader con animación */
.loader {
  border: 4px solid #f3f3f3;
  border-top: 4px solid #6a0dad; /* Morado elegante */
  border-radius: 50%;
  width: 22px;
  height: 22px;
  animation: spin 1s linear infinite;
  display: inline-block;
  vertical-align: middle;
  margin-right: 8px;
}

@keyframes spin {
  0%   { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Texto estilizado */
.msg-actualizando {
  font-weight: bold;
  font-size: 20px;
  color: #6a0dad;
  background: #f3e9fb;
  border-radius: 6px;
  padding: 6px 12px;
  display: inline-flex;
  align-items: center;
  box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
}

.autorizacion-cell {
  transition: background-color 0.2s ease-in-out;
}

.autorizacion-cell.autorizacion-checked {
  background-color: #d7f5dc;
}
</style>


<script type="text/javascript">
	


        $(function() {
                const triggerSearch = () => load(1);

                $('#target300').on('keydown', 'thead input, thead select', function(event) {
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
  $("#loader").html(
    '<div class="msg-actualizando">' +
      '<span class="loader"></span> ⏳ ACTUALIZADO...' +
    '</div>'
  ).fadeIn();

  // Quitar el mensaje después de 3 segundos
  setTimeout(function(){
    $("#loader").fadeOut("slow", function(){
      $(this).html(""); // limpia el contenido después de ocultarlo
    });
  }, 1000);
},
	success:function(data){
					$(".datos_ajax").html(data).fadeIn('slow');
					restoreRowSelections();
					syncAutorizacionCells();
					$("#loader").html("");
				}
			})
	}
	/* terminaB1*/		

	function restoreRowSelections(){
		$(".datos_ajax input.checkbox[data-id]").each(function(){
			var id = $(this).data("id");
			var fila = this.closest("tr");
			if (localStorage.getItem("checkbox_" + id) === "checked") {
				this.checked = true;
				if (fila) {
					fila.style.filter = "brightness(65%) sepia(100%) saturate(200%) hue-rotate(0deg)";
				}
			} else {
				this.checked = false;
				if (fila) {
					fila.style.filter = "none";
				}
			}
});
	}

	function updateAutorizacionCell(checkBox){
		if (!checkBox) {
			return;
		}
		var cell = checkBox.closest("td");
		if (cell) {
			cell.classList.toggle("autorizacion-checked", checkBox.checked);
		}
	}

	function syncAutorizacionCells(){
		document.querySelectorAll(".autorizacion-cell input[type='checkbox']").forEach(function(checkBox){
			updateAutorizacionCell(checkBox);
		});
	}

	function mostrarActualizado(mensaje){
		var texto = mensaje || 'ACTUALIZADO';
		$("#loader").html(
			'<div class="msg-actualizando">' +
			  '<span class="loader"></span> ' + texto +
			'</div>'
		).fadeIn();

		setTimeout(function(){
			$("#loader").fadeOut("slow", function(){
				$(this).html("");
			});
		}, 1200);
	}

function pasara1_personalVYO_filtro(pasara1_personalVYO_id){
		var checkBox = document.getElementById("VYO"+pasara1_personalVYO_id);
		var pasapersonalVYO_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personalVYO_id:pasara1_personalVYO_id,pasapersonalVYO_text:pasapersonalVYO_text},
			success:function(){
				mostrarActualizado('✅ ACTUALIZADO');
			}
		});
	}

function pasara1_personalDIRECCION_filtro(pasara1_personalDIRECCION_id){
		var checkBox = document.getElementById("DIRECCION"+pasara1_personalDIRECCION_id);
		var pasapersonalDIRECCION_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personalDIRECCION_id:pasara1_personalDIRECCION_id,pasapersonalDIRECCION_text:pasapersonalDIRECCION_text},
			success:function(){
				mostrarActualizado('✅ ACTUALIZADO');
			}
		});
	}

function pasara1_personalADMIN_filtro(pasara1_personalADMIN_id){
		var checkBox = document.getElementById("admin"+pasara1_personalADMIN_id);
		var pasapersonalADMIN_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personalADMIN_id:pasara1_personalADMIN_id,pasapersonalADMIN_text:pasapersonalADMIN_text},
			success:function(){
				mostrarActualizado('✅ ACTUALIZADO');
			}
		});
	}


	</script>