<style>
/* Loader2 con animación */
.loader2 {
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
.msg-actualizando2 {
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

.autorizacion-cell2 {
  transition: background-color 0.2s ease-in-out;
}

.autorizacion-cell2.autorizacion-checked {
  background-color: #d7f5dc;
}
</style>

<script type="text/javascript">
	
	/*filtro */

/* iniciaB1*/

        $(function() {
                const triggerSearch = () => load2(1);

                $('#target3').on('keydown', 'thead input, thead select', function(event) {
                        if (event.key === 'Enter' || event.which === 13) {
                                event.preventDefault();
                                triggerSearch();
                        }
                });

                load2(1);
        });
		function load2(page){
var query=$("#NOMBRE_EVENTO").val();
var NUMERO_EVENTO=$("#NUMERO_EVENTO_2").val();
var NOMBRE_EVENTO=$("#NOMBRE_EVENTO_2").val();
var FECHA_INICIO_EVENTO=$("#FECHA_INICIO_EVENTO_2").val();
var PAIS_DEL_EVENTO=$("#PAIS_DEL_EVENTO_2").val();
var CIUDAD_DEL_EVENTO=$("#CIUDAD_DEL_EVENTO_2").val();
var DEPARTAMENTO2=$("#DEPARTAMENTO2WE").val();

var NOMBRE_PERSONAL2=$("#NOMBRE_PERSONAL2_2").val();
var PUESTO_PERSONAL2=$("#PUESTO_PERSONAL2_1").val();
var EMAIL_PERSONAL2=$("#EMAIL_PERSONAL2_1").val();
var WHAT_PERSONAL2=$("#WHAT_PERSONAL2_1").val();
var FECHA_INICIO1=$("#FECHA_INICIO1_2").val();
var FECHA_FINAL1=$("#FECHA_FINAL1_2").val();
var NUMERO_DIAS1=$("#NUMERO_DIAS1_2").val();
var MONTO_BONO1=$("#MONTO_BONO1_2").val();
var MONTO_BONO_TOTAL1=$("#MONTO_BONO_TOTAL1_2").val();
var VIATICOS_PERSONAL2=$("#VIATICOS_PERSONAL2_2").val();
var TOTAL1=$("#TOTAL1_2").val();
var ULTIMO_DIA1=$("#ULTIMO_DIA1_2").val();
var OBSERVACIONES_PERSONAL2=$("#OBSERVACIONES_PERSONAL2_2").val();
var PERSONAL2_FECHA_ULTIMA_CARGA=$("#PERSONAL2_FECHA_ULTIMA_CARGA_2").val();
var TIPO_DE_MONEDA_1=$("#TIPO_DE_MONEDA_1_1").val();
var INSTITUCION_FINANCIERA_1=$("#INSTITUCION_FINANCIERA_1_1").val();
var NUMERO_DE_CUENTA_DB_1=$("#NUMERO_DE_CUENTA_DB_1_1").val();
var NUMERO_CLABE_1=$("#NUMERO_CLABE_1_1").val();
var FOTO_ESTADO_PROVEE=$("#FOTO_ESTADO_PROVEE_1").val();
var FECHA_PPAGO1=$("#FECHA_PPAGO1_2").val();
var FORMA_PAGO1=$("#FORMA_PAGO1_2").val();
var FECHA_EFECTIVA1=$("#FECHA_EFECTIVA1_2").val();
var ADJUNTO_COMPROBANTE=$("#ADJUNTO_COMPROBANTE_2").val();
var NOMBRE_RECIBIO1=$("#NOMBRE_RECIBIO1_2").val();
var FECHA_INICIO=$("#FECHA_INICIO_1").val();
var FECHA_FINAL=$("#FECHA_FINAL_1").val();
var NUMERO_DIAS=$("#NUMERO_DIAS_1").val();
var MONTO_BONO=$("#MONTO_BONO_1").val();
var FOTO_ESTADO_PROVEE=$("#FOTO_ESTADO_PROVEE_1").val();
var hDatosPERSONAL2=$("#hDatosPERSONAL2_2").val();
var VYO=$("#VYO_2").val();
var DIRECCION=$("#DIRECCION_2").val();
var admin=$("#admin_2").val();

/*termina copiar y pegar*/
			
			var per_page=$("#per_page2").val();
			var parametros = {
			"action2":"ajax2",
			"page":page,
			'query':query,
			'per_page':per_page,
			
			
'NUMERO_EVENTO':NUMERO_EVENTO,
'NOMBRE_EVENTO':NOMBRE_EVENTO,
'FECHA_INICIO_EVENTO':FECHA_INICIO_EVENTO,
'PAIS_DEL_EVENTO':PAIS_DEL_EVENTO,
'CIUDAD_DEL_EVENTO':CIUDAD_DEL_EVENTO,
'NOMBRE_PERSONAL2':NOMBRE_PERSONAL2,
'FECHA_INICIO1':FECHA_INICIO1,
'FECHA_FINAL1':FECHA_FINAL1,
'NUMERO_DIAS1':NUMERO_DIAS1,
'MONTO_BONO1':MONTO_BONO1,
'MONTO_BONO_TOTAL1':MONTO_BONO_TOTAL1,
'VIATICOS_PERSONAL2':VIATICOS_PERSONAL2,
'TOTAL1':TOTAL1,
'ULTIMO_DIA1':ULTIMO_DIA1,
'OBSERVACIONES_PERSONAL2':OBSERVACIONES_PERSONAL2,
'PERSONAL2_FECHA_ULTIMA_CARGA':PERSONAL2_FECHA_ULTIMA_CARGA,
'PUESTO_PERSONAL2':PUESTO_PERSONAL2,
'WHAT_PERSONAL2':WHAT_PERSONAL2,
'EMAIL_PERSONAL2':EMAIL_PERSONAL2,
'TIPO_DE_MONEDA_1':TIPO_DE_MONEDA_1,
'INSTITUCION_FINANCIERA_1':INSTITUCION_FINANCIERA_1,
'NUMERO_DE_CUENTA_DB_1':NUMERO_DE_CUENTA_DB_1,
'NUMERO_CLABE_1':NUMERO_CLABE_1,
'FOTO_ESTADO_PROVEE':FOTO_ESTADO_PROVEE,
'FECHA_PPAGO1':FECHA_PPAGO1,
'FORMA_PAGO1':FORMA_PAGO1,
'FECHA_EFECTIVA1':FECHA_EFECTIVA1,
'ADJUNTO_COMPROBANTE':ADJUNTO_COMPROBANTE,
'NOMBRE_RECIBIO1':NOMBRE_RECIBIO1,
'VYO':VYO,
'DIRECCION':DIRECCION,
'admin':admin,
'hDatosPERSONAL2':hDatosPERSONAL2,
/*termina copiar y pegar*/
/*termina copiar y pegar*/

		'DEPARTAMENTO2':DEPARTAMENTO2
			};
			$("#loader2").fadeIn('slow');
					$.ajax({
				url:'BONOS/clasesPERSONAL2/controlador_filtro.php',
				type: 'POST',				
				data: parametros,
beforeSend: function(objeto){
  $("#loader2").html(
    '<div class="msg-actualizando2">' +
      '<span class="loader2"></span> ⏳ ACTUALIZADO...' +
    '</div>'
  ).fadeIn();

  // Quitar el mensaje después de 3 segundos
  setTimeout(function(){
    $("#loader2").fadeOut("slow", function(){
      $(this).html(""); // limpia el contenido después de ocultarlo
    });
  }, 1000);
},
	success:function(data){
					$(".datos_ajax2").html(data).fadeIn('slow');
					restoreRowSelections2();
					syncAutorizacionCells2();
					$("#loader2").html("");
				}
			})
	}
	/* terminaB1*/		

	function restoreRowSelections2(){
		$(".datos_ajax2 input.checkbox[data-id]").each(function(){
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

	function updateAutorizacionCell2(checkBox){
		if (!checkBox) {
			return;
		}
		var cell = checkBox.closest("td");
		if (cell) {
			cell.classList.toggle("autorizacion-checked", checkBox.checked);
		}
	}

	function syncAutorizacionCells2(){
		document.querySelectorAll(".autorizacion-cell2 input[type='checkbox']").forEach(function(checkBox){
			updateAutorizacionCell2(checkBox);
		});
	}

	function mostrarActualizado2(mensaje){
		var texto = mensaje || 'ACTUALIZADO';
		$("#loader2").html(
			'<div class="msg-actualizando2">' +
			  '<span class="loader2"></span> ' + texto +
			'</div>'
		).fadeIn();

		setTimeout(function(){
			$("#loader2").fadeOut("slow", function(){
				$(this).html("");
			});
		}, 1200);
	}

function pasara1_personal2VYO_filtro(pasara1_personal2VYO_id){
		var checkBox = document.getElementById("VYO"+pasara1_personal2VYO_id);
		var pasapersonal2VYO_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell2(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personal2VYO_id:pasara1_personal2VYO_id,pasapersonal2VYO_text:pasapersonal2VYO_text},
			success:function(){
				mostrarActualizado2('✅ ACTUALIZADO');
			}
		});
	}

function pasara1_personal2DIRECCION_filtro(pasara1_personal2DIRECCION_id){
		var checkBox = document.getElementById("DIRECCION"+pasara1_personal2DIRECCION_id);
		var pasapersonal2DIRECCION_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell2(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personal2DIRECCION_id:pasara1_personal2DIRECCION_id,pasapersonal2DIRECCION_text:pasapersonal2DIRECCION_text},
			success:function(){
				mostrarActualizado2('✅ ACTUALIZADO');
			}
		});
	}

function pasara1_personal2ADMIN_filtro(pasara1_personal2ADMIN_id){
		var checkBox = document.getElementById("admin"+pasara1_personal2ADMIN_id);
		var pasapersonal2ADMIN_text = (checkBox && checkBox.checked) ? "si" : "no";
		updateAutorizacionCell2(checkBox);
		$.ajax({
			url:'BONOS/controladorAE.php',
			method:'POST',
			data:{pasara1_personal2ADMIN_id:pasara1_personal2ADMIN_id,pasapersonal2ADMIN_text:pasapersonal2ADMIN_text},
			success:function(){
				mostrarActualizado2('✅ ACTUALIZADO');
			}
		});
	}


	</script>