<div id="content">

			<hr/>
			 <strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar9" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar9" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;AGREGAR NUEVO USUARIO</P><div  id="mensajeLISTADO"></div></strong>
 
	        <div id="target9" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">

          <?php if($conexion->variablespermisos('','listado','guardar')=='si'){ ?>
   
	<form class="row g-3 needs-validation was-validated" novalidate="" id="LISTADOform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" >
					  
						
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">USUARIO CRM:</label>
                          <input type="text" class="form-control" id="validationCustom02" value="<?php echo $USUARIO_CRM; ?>" required="" name="USUARIO_CRM">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
						
						
						
						
						
						
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">CONTRASEÑA CRM:               <button class="btn btn-primary" type="button" onclick="genPass();">GENERA PASSWORD</button></label>
						  
						  
                          <input type="text" class="form-control" id="CONTRASENIA_CRM" value="<?php echo $CONTRASENIA_CRM; ?>" required="" name="CONTRASENIA_CRM">
						  
						  
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">EMPRESA A LA QUE PERTENECE:</label>
						<div class="input-group">
                    
                      
                          <option 				  <?php
						  $encabezado='';$option='';
	$queryper = $conexion->lista_empresacolaborador();
	$encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="NIVEL_ACCESO_CRM" required="" name="NIVEL_ACCESO_CRM"  onchange="getval();">
	<option value="">SELECCIONA UNA OPCIÓN</option>';	
	while($row1 = mysqli_fetch_array($queryper))
	{
	$select='';
	if($NIVEL_ACCESO_CRM==$row1['NCE_INFORMACION']){$select = "selected";};

	$option .= '<option style="background: #c9e8e8" '.$select.' value="'.$row1['NCE_INFORMACION'].'">'.$row1['NCE_INFORMACION'].'</option>';
	}
	echo $encabezado.$option.'</select>';			
	?>	</option>
                      
                      </div>
                        </div>
						
                
                      
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">DEPARTAMENTO:</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="DEPARTAMENTO">
                         <option selected="">SELECCIONA UNA OPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($DEPARTAMENTO=='DIRECCION'){echo "selected";}; ?> value="DIRECCION">DIRECCIÓN</option>
                          <option style="background: #a3e4d7" <?php if($DEPARTAMENTO=='VENTAS'){echo "selected";}; ?> value="VENTAS">VENTAS</option>
                          <option style="background: #e8f6f3" <?php if($DEPARTAMENTO=='OPERACIONES'){echo "selected";}; ?> value="OPERACIONES">OPERACIONES</option>
                          <option style="background: #fdf2e9" <?php if($DEPARTAMENTO=='DISENO'){echo "selected";}; ?> value="DISENO">DISEÑO</option>
                          <option style="background: #eaeded" <?php if($DEPARTAMENTO=='VUELOS'){echo "selected";}; ?> value="VUELOS">VUELOS</option>
                          <option style="background: #fdebd0" <?php if($DEPARTAMENTO=='SISTEMAS'){echo "selected";}; ?> value="SISTEMAS">SISTEMAS</option>
                          <option style="background: #ebdef0" <?php if($DEPARTAMENTO=='BACK_STAGE'){echo "selected";}; ?> value="BACK_STAGE">BACK STAGE</option>
                          <option style="background: #d6eaf8" <?php if($DEPARTAMENTO=='ADMINISTRACION'){echo "selected";}; ?> value="ADMINISTRACION">ADMINISTRACION</option>
                          <option style="background: #fef5e7" <?php if($DEPARTAMENTO=='AUDITORIA'){echo "selected";}; ?> value="AUDITORIA">AUDITORIA</option>
                          <option style="background: #ebedef" <?php if($DEPARTAMENTO=='CONTABILIDAD'){echo "selected";}; ?> value="CONTABILIDAD">CONTABILIDAD</option>
                          <option style="background: #fbeee6" <?php if($DEPARTAMENTO=='CAPITAL_HUMANO'){echo "selected";}; ?> value="CAPITAL_HUMAN">CAPITAL HUMANO</option>
                          <option style="background: #e8f6f3" <?php if($DEPARTAMENTO=='RECEPCION'){echo "selected";}; ?> value="RECEPCION">RECEPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($DEPARTAMENTO=='LIMPIEZA'){echo "selected";}; ?> value="LIMPIEZA">LIMPIEZA</option>
                        </select>
                      </div>
                        
                      <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">PUESTO:</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="PUESTO"> 
                         <option selected="">SELECCIONA UNA OPCIÓN</option>
						 
<option style="background: #c9e8e8" <?php if($PUESTO=='TSA_TRAVEL_SERVICES_AUDIT'){echo "selected";}; ?> value="TSA_TRAVEL_SERVICES_AUDIT">TSA-TRAVEL SERVICES AUDIT</option>	  
<option style="background: #a3e4d7" <?php if($PUESTO=='BRA_BUDGET_RISK_AUDIT'){echo "selected";}; ?> value="BRA_BUDGET_RISK_AUDIT">BRA-BUDGET, RISK & AUDIT</option>						  
<option style="background: #e8f6f3" <?php if($PUESTO=='AM_AUDIT_MANAGER'){echo "selected";}; ?> value="AM_AUDIT_MANAGER">AM-AUDIT MANAGER </option>						  
<option style="background: #eaeded" <?php if($PUESTO=='HK_HOUSE_KEEPING'){echo "selected";}; ?> value="HK_HOUSE_KEEPING">HK-HOUSE KEEPING </option>						  
<option style="background: #fdebd0" <?php if($PUESTO=='ES_EXECUTIVE_SERVICES'){echo "selected";}; ?> value="ES_EXECUTIVE_SERVICES">ES-EXECUTIVE SERVICES </option>					  
<option style="background: #ebdef0" <?php if($PUESTO=='TCM_TALENT_AND_CULTURE_MANAGER'){echo "selected";}; ?> value="TCM_TALENT_AND_CULTURE_MANAGER">TCM-TALENT AND CULTURE MANAGER</option>
						  
<option style="background: #d6eaf8" <?php if($PUESTO=='IPM_IT_PROJECT_MANAGER'){echo "selected";}; ?> value="IPM_IT_PROJECT_MANAGER">IPM-IT PROJECT MANAGER </option>					  
<option style="background: #fef5e7" <?php if($PUESTO=='BANKING_MANAGER' ){echo "selected";}; ?> value="BANKING_MANAGER">CBM-CORPORATE BANKING MANAGER </option>					  
<option style="background: #ebedef" <?php if($PUESTO=='FINANCIAL_PLANNING'){echo "selected";}; ?> value="FINANCIAL_PLANNING">FP-FINANCIAL PLANNING </option>					  
<option style="background: #fbeee6" <?php if($PUESTO=='FAM_FINANCE_ACCOUTING'){echo "selected";}; ?> value="ACCOUTING_MANAGER FAM_FINANCE_ACCOUTING">FAM-FINANCE & ACCOUTING MANAGER </option>
				  
<option style="background: #e8f6f3" <?php if($PUESTO=='CFO_CHIEF_FINANCIAL OFFICER'){echo "selected";}; ?> value="CFO_CHIEF_FINANCIAL">CFO-CHIEF FINANCIAL OFFICER </option>				  
<option style="background: #c9e8e8" <?php if($PUESTO=='BSS_BACK_STAGE_STAFF'){echo "selected";}; ?> value="BSS_BACK_STAGE_STAFF">BSS-BACK STAGE STAFF </option>					  
<option style="background: #c9e8e8" <?php if($PUESTO=='BSC_BACK_STAGE_COORDINATOR'){echo "selected";}; ?> value="BSC_BACK_STAGE_COORDINATOR">BSC-BACK STAGE COORDINATOR </option>					  
<option style="background: #a3e4d7" <?php if($PUESTO=='BSM_BACK_STAGE_MANAGER'){echo "selected";}; ?> value="BSM_BACK_STAGE_MANAGER">BSM-BACK STAGE MANAGER </option>					  
<option style="background: #e8f6f3" <?php if($PUESTO=='OSEC_ON_SITE_EVENT_COORDINATOR'){echo "selected";}; ?> value="OSEC_ON_SITE_EVENT_COORDINATOR">OSEC-ON SITE EVENT COORDINATOR</option>					  
<option style="background: #fdf2e9" <?php if($PUESTO=='CM_CREATIVE_MANAGER'){echo "selected";}; ?> value="CM_CREATIVE_MANAGER">CM-CREATIVE MANAGER </option>					  
<option style="background: #eaeded" <?php if($PUESTO=='CCL_CALL_CENTER'){echo "selected";}; ?> value="CCL_CALL_CENTER">CCL-CALL CENTER</option>					  
<option style="background: #fdebd0" <?php if($PUESTO=='JPM_JUNIOR_PROJECT_MANAGER'){echo "selected";}; ?> value="JPM_JUNIOR_PROJECT_MANAGER"> JPM-JUNIOR PROJECT MANAGER </option>					  
<option style="background: #c9e8e8" <?php if($PUESTO=='PM_PROJECT_MANAGER'){echo "selected";}; ?> value="PM_PROJECT_MANAGER">PM-PROJECT MANAGER  </option>					  
<option style="background: #a3e4d7" <?php if($PUESTO=='KAPM_KEY_ACCOUNTS_PROJECT_MANAGER'){echo "selected";}; ?> value="KAPM_KEY_ACCOUNTS_PROJECT_MANAGER">KAPM-KEY ACCOUNTS PROJECT MANAGER </option>				  
<option style="background: #e8f6f3" <?php if($PUESTO=='SPM_SENIOR_PROJECT_MANAGER'){echo "selected";}; ?> value="SPM_SENIOR_PROJECT_MANAGER">SPM-SENIOR PROJECT MANAGER </option>				  
<option style="background: #fdf2e9" <?php if($PUESTO=='CM_COMMERRCIAL_MANAGER'){echo "selected";}; ?> value="CM_COMMERRCIAL_MANAGER">CM-COMMERRCIAL MANAGER </option>				  
<option style="background: #eaeded" <?php if($PUESTO=='CBDO_CHIEF_BUSINESS_CCO_CHIEF'){echo "selected";}; ?> value="CBDO_CHIEF_BUSINESS_CCO_CHIEF">CBDO-CHIEF BUSINESS & CCO-CHIEF COMMERCIAL OFFICER </option>					  
<option style="background: #fdebd0" <?php if($PUESTO=='CO_FOUNDER_CEO'){echo "selected";}; ?> value="CO_FOUNDER_CEO">CO-FOUNDER & CEO </option>					  
<option style="background: #fdebd0" <?php if($PUESTO=='CEO_CHIEF_EXECUTIVE_OFFICER'){echo "selected";}; ?> value="CEO_CHIEF_EXECUTIVE_OFFICER">CEO-CHIEF EXECUTIVE OFFICER</option>
						  
                        </select>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">CORREO PERSONAL:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_1; ?>" required="" name="CORREO_1" STYLE="text-transform: NONE;">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">NOMBRE :</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_1; ?>" required="" name="NOMBRE_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>





                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">APELLIDO PATERNO :</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_PATERNO; ?>" required="" name="APELLIDO_PATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>						
 





                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">APELLIDO MATERNO :</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_MATERNO; ?>" required="" name="APELLIDO_MATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div> 
                        


					<input type="hidden" value="listado" name="listado">
					<input type="hidden" value=<?php echo $idrow; ?> name="idrow">
 
 
                         <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">STATUS DE CARGA DE INFORMACION:</label>
						<div class="input-group">
                        <select class="form-select" name="STATUS_CARGA_INFORMACION" id="inputGroupSelect04" required="">
	<option ></option>


	<option <?php if($STATUS_CARGA_INFORMACION=='ANIMADOR_COORDINADOR'){ echo "selected"; } ?> value="ANIMADOR_COORDINADOR">ANIMADOR/COORDINADOR</option>
	<option <?php if($STATUS_CARGA_INFORMACION=='COLABORADOR'){ echo "selected"; } ?> value="COLABORADOR">COLABORADOR</option>





                        </select>
                      </div>
                        </div>
 
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">PERMISO DE:</label>
						  <span id="desplegadoreset">
	<?php
	$queryper = $conexion->lista_plantillas2();
	$encabezado = '<select class="form-select mb-3" aria-label="Default select example" id="PERMISOS" required="" name="PERMISOS">
	<option value="">SELECCIONA UNA OPCIÓN</option>';	
	while($row1 = mysqli_fetch_array($queryper))
	{
	$select='';
	if($PERMISOS==$row1['nombreplantilla']){$select = "selected";};

	$option .= '<option style="background: #c9e8e8" '.$select.' value="'.$row1['nombreplantilla'].'">'.$row1['nombreplantilla'].'</option>';
	}
	echo $encabezado.$option.'</select>';			
	?>
			</span>
                      </div>
 
 
 
 
                  <div> 
                          
	<div style="float:left;" border="solid 1px #000;">



	<button class="btn btn-primary" type="button" id="enviarLISTADO">ENVIAR</button><?php } ?>
	</div>
                         
	<div style="float:right">
	<div class="col-12">
    
<?php if($conexion->variablespermisos('','listado','borrar')=='si'){ ?>


	<button class="button" type="reset">BORRAR</button>
<?php } ?></div>
	</div>
	</div>
                            
 
 
                         </form>  
						 
                          </div>
						   </div>
						 </div>
						 </div>