<script type="text/javascript">
	
	/*filtro */

/* iniciaB1*/

        $(function() {
                const triggerSearch = () => load2(1);

                $('#target4').on('keydown', 'thead input, thead select', function(event) {
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
var hDatosPERSONAL2=$("#hDatosPERSONAL2_2").val();

/*termina copiar y pegar*/
			
			var per_page=$("#per_page").val();
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
'hDatosPERSONAL2':hDatosPERSONAL2,
/*termina copiar y pegar*/

			'DEPARTAMENTO2':DEPARTAMENTO2
			};
			$("#loader2").fadeIn('slow');
			$.ajax({
				url:'BONOS/clasesPERSONAL2/controlador_filtro.php',
				type: 'POST',				
				data: parametros,
				 beforeSend: function(objeto){
				$("#loader2").html("Cargando...");
			  },
				success:function(data){
					$(".datos_ajax2").html(data).fadeIn('slow');
					$("#loader2").html("");
				}
			})
		}
/* terminaB1*/		
		
	</script>
