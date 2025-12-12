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
var FECHA_INICIO=$("#FECHA_INICIO_1").val();
var FECHA_FINAL=$("#FECHA_FINAL_1").val();
var NUMERO_DIAS=$("#NUMERO_DIAS_1").val();
var MONTO_BONO=$("#MONTO_BONO_1").val();
var MONTO_BONO_TOTAL=$("#MONTO_BONO_TOTAL_1").val();
var VIATICOS_PERSONAL=$("#VIATICOS_PERSONAL_1").val();
var TOTAL=$("#TOTAL_1").val();
var ULTIMO_DIA=$("#ULTIMO_DIA_1").val();
var OBSERVACIONES_PERSONAL=$("#OBSERVACIONES_PERSONAL_1").val();
var PERSONAL_FECHA_ULTIMA_CARGA=$("#PERSONAL_FECHA_ULTIMA_CARGA_1").val();
var hDatosPERSONAL=$("#hDatosPERSONAL_1").val();

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
		
	</script>
