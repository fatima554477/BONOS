<div id="content">     
			<hr/>
	<STRONG>		  <P class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar1" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar1" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp; STATUS 
</P><div  id="mensajeADJUNTOCOL2">							                  
						<div class="progress" style="width: 25%;">
		<div class="progress-bar" role="progressbar" style="width: <?php echo 100 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo 100; ?>%</div>
								</div>
                               </div></STRONG>
	        <div id="target1" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">

     		  
	<form class="row g-3 needs-validation was-validated" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate="" enctype="multipart/form-data" id="DATOSCOLABORADORESform">
	
	

	<table><tr><td>
	<input type="hidden" name="DATOS_COLABORADORES" value="DATOS_COLABORADORES" />
	
	
    

    
		 
 
 
<div class="col-md-6 mb-3"> 
  <label class="form-label fw-bold text-uppercase text-secondary">ESTATUS ACTUAL</label>
  <div class="input-group">
    <select
      class="form-select form-select-sm"
      id="estatusSelect"
      name="ESTATUS_CRM_ACTIVOBAJA"
      required
    >
      <option value="ACTIVO" <?php if($ESTATUS_CRM_ACTIVOBAJA=='ACTIVO'){ echo "selected"; } ?>>ACTIVO</option>
      <option value="BAJA" <?php if($ESTATUS_CRM_ACTIVOBAJA=='BAJA'){ echo "selected"; } ?>>BAJA</option>
    </select>
  </div>
</div>

<script>
  // Al cargar la página y cada vez que cambie el select
  function actualizarColorEstatus() {
    const select = document.getElementById('estatusSelect');
    const valor = select.value;

    // Limpiar clases anteriores
    select.classList.remove('bg-success', 'text-white', 'bg-danger');

    // Asignar clase según valor
    if (valor === 'ACTIVO') {
      select.classList.add('bg-success', 'text-white');
    } else if (valor === 'BAJA') {
      select.classList.add('bg-danger', 'text-white');
    }
  }

  // Ejecutar al cargar
  actualizarColorEstatus();

  // Ejecutar cuando se cambie el valor
  document.getElementById('estatusSelect').addEventListener('change', actualizarColorEstatus);
</script>


<div class="col-md-6 mb-3"> 


  <label for="statusCargaInfo" class="form-label fw-bold text-uppercase text-muted">
    STATUS DE CARGA DE INFORMACIÓN:
  </label>
  <div class="input-group shadow-sm rounded-4 bg-white">

    <select
      class="form-select form-select-sm border-start-0 text-dark transition"
      name="STATUS_CARGA_INFORMACION"
      id="statusCargaInfo"
      required
    >
      <option value="COLABORADOR" <?php if($STATUS_CARGA_INFORMACION=='COLABORADOR'){ echo "selected"; } ?>>
        COLABORADOR
      </option>
      <option value="ANIMADOR_COORDINADOR" <?php if($STATUS_CARGA_INFORMACION=='ANIMADOR_COORDINADOR'){ echo "selected"; } ?>>
        ANIMADOR / COORDINADOR
      </option>
    </select>
  </div>
</div>

<style>
  /* Transición suave */
  .transition {
    transition: background-color 0.4s ease, color 0.4s ease;
  }

  /* Verde más definido */
  .bg-colaborador {
    background-color: #c6f0d6 !important; /* verde pastel pero más visible */
    color:  #357e55 !important; /* verde Bootstrap fuerte */
  }

  /* Azul más definido */
  .bg-animador {
    background-color:  #aab1ea !important; /* azul claro más notorio */
    color:  #0b0b0b !important; /* azul fuerte */
  }
</style>

<script>
  function actualizarColorStatusCarga() {
    const select = document.getElementById('statusCargaInfo');
    select.classList.remove('bg-colaborador', 'bg-animador');

    if (select.value === 'COLABORADOR') {
      select.classList.add('bg-colaborador');
    } else if (select.value === 'ANIMADOR_COORDINADOR') {
      select.classList.add('bg-animador');
    }
  }

  // Ejecutar al cargar y al cambiar
  document.addEventListener('DOMContentLoaded', actualizarColorStatusCarga);
  document.getElementById('statusCargaInfo').addEventListener('change', actualizarColorStatusCarga);
</script>




                <hr>


                    </div></td></tr></table>
 
					 
					 
					 

             
								

	



<table>

<?php if($conexion->variablespermisos('','ESTATUS_BAJA_ALTA','guardar')=='si'){ ?><tr>
<td>

	<button
  id="enviarDATOSCOLABORADORES"
  type="button"
  class="btn btn-sm btn-outline-success px-5" 
>
  GUARDAR
</button><div style="
    color: #f5f5f5;
    text-shadow: 1px 1px 1px #919191,
        1px 2px 1px #919191,
        1px 3px 1px #919191,
        1px 4px 1px #919191,
        1px 5px 1px #919191,
        1px 6px 1px #919191,
        1px 7px 1px #919191,
        1px 8px 1px #919191,
        1px 9px 1px #919191,
        1px 10px 1px #919191,
    1px 18px 6px rgba(16,16,16,0.4),
    1px 22px 10px rgba(16,16,16,0.2),
    1px 25px 35px rgba(16,16,16,0.2),
    1px 30px 60px rgba(16,16,16,0.4);
	@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 100; }
}"


id="mensajeADJUNTOCOL"/>
	</div>
	</div></td></tr> <?php } ?></table>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div>