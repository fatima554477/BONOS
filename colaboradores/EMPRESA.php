<div id="content">
			<hr/>
			
<strong> <P class="mb-0 text-uppercase">
<img src="includes/contraer51.png" id="mostrar9" style="cursor:pointer;"/>
<img src="includes/contraer61.png" id="ocultar9" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;EMPRESA</P><div  id="mensajeEMPRESA2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $empresaporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $empresaporcentaje ; ?>%</div>
								</div>
                               </div></strong>
 
	        <div id="target9" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
<?php 
if($fechaIngresoEmpresa==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoEmpresa.'</strong><BR/><BR/>';
}
?>
	<form class="row g-3 needs-validation was-validated" novalidate="" id="EMPRESAform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					  
                        <div class="col-md-4"style="background:#fef5e7">
                        <strong> <label for="validationCustom01" class="form-label">FECHA DE INGRESO:</label> </strong> <br></br>
                          <input  type="date" class="form-control" id="validationCustom01" required="" name="FECHA_INGRESO" value="<?php echo $FECHA_INGRESO; ?>"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong><label for="validationCustom01" class="form-label">FECHA DE ALTA EN IMSS:</label></strong> <br></br>
                          <input type="date" class="form-control" id="validationCustom01" required="" name="FECHA_INGRESO_IMSS" value="<?php echo $FECHA_INGRESO_IMSS; ?>"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>



                         <div class="col-md-4"style="background:#fbeee6">
                         <strong><label for="formFileSm"  class="form-label">  SUBIR ALTA SEGURO SOCIAL EPC   (FORMATO PDF)</label></strong> 
		                    <div id="drop_file_zone" ondrop="upload_file(event,'F_ALTA_SEGURO_SOCIAL_EPC')" ondragover="return false" >
		                    <p>Suelta aquí o busca tu archivo</p>
		                    <p><input class="form-control form-control-sm" id="F_ALTA_SEGURO_SOCIAL_EPC" type="text" onkeydown="return false" onclick="file_explorer('F_ALTA_SEGURO_SOCIAL_EPC');" style="width:300px;" VALUE="<?php echo $F_ALTA_SEGURO_SOCIAL_EPC; ?>" required /></p>
	                    	<input type="file" name="F_ALTA_SEGURO_SOCIAL_EPC" id="nono"/>
	                      <div id="1F_ALTA_SEGURO_SOCIAL_EPC">
		                         <?php
	                     	if($F_ALTA_SEGURO_SOCIAL_EPC!=""){echo "<a target='_blank' href='includes/archivos/".$F_ALTA_SEGURO_SOCIAL_EPC."'>Visualizar!</a>"; 
	                       	}?></div>
	                         </div>	
	                         </div>
                     
					 
					 
					 
					 
			
					 
					 
					 
					 
					 
					 
					 
					 
                    
                        <div class="col-md-4"style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label">USUARIO CRM:</label></strong> 
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $USUARIO_CRM; ?>" required="" name="USUARIO_CRM"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                     
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong><label for="validationCustom02" class="form-label">NIVEL DE ACCESO CRM:</label></strong> 
						<div class="input-group">
                        <select class="form-select" name="NIVEL_ACCESO_CRM" id="inputGroupSelect04" required="">
                          <option ></option>
                          <option <?php if($NIVEL_ACCESO_CRM=='MAXIMO'){echo "selected";}; ?> value="MAXIMO">MAXIMO</option>

                          <option <?php if($NIVEL_ACCESO_CRM=='BAJA'){echo "selected";}; ?> value="BAJA">BAJA</option>
                        </select>
                      </div>
                        </div>
						
						
                        <div class="col-md-4"style="background:#fbeee6">
                        <strong><label for="validationCustom02" class="form-label">CONTRASEÑA CRM:</label></strong> 
                          <input type="password" class="form-control" id="validationCustom02" value="<?php echo $CONTRASENIA_CRM; ?>" required="" name="CONTRASENIA_CRM">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
						
						
                        <div class="col-md-4"style="background:#fef5e7">
						
						
                        <strong><label for="validationCustom02" class="form-label">PUESTO:</label></strong> 
						  
                           <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="PUESTO"> 
						  
						  
						  
						  
<strong> <option selected="">SELECCIONA UNA OPCIÓN</option></strong> 
						 
<option style="background: #c9e8e8" <?php if($PUESTO=='TSA_TRAVEL_SERVICES_AUDIT'){echo "selected";}; ?> value="TSA_TRAVEL_SERVICES_AUDIT">TSA-TRAVEL SERVICES AUDIT</option>	  
<option style="background: #a3e4d7" <?php if($PUESTO=='BRA_BUDGET_RISK_AUDIT'){echo "selected";}; ?> value="BRA_BUDGET_RISK_AUDIT">BRA-BUDGET, RISK & AUDIT</option>						  
<option style="background: #e8f6f3" <?php if($PUESTO=='AM_AUDIT_MANAGER'){echo "selected";}; ?> value="AM_AUDIT_MANAGER">AM-AUDIT MANAGER </option>						  
<option style="background: #eaeded" <?php if($PUESTO=='HK_HOUSE_KEEPING'){echo "selected";}; ?> value="HK_HOUSE_KEEPING">HK-HOUSE KEEPING </option>						  
<option style="background: #fdebd0" <?php if($PUESTO=='ES_EXECUTIVE_SERVICES'){echo "selected";}; ?> value="ES_EXECUTIVE_SERVICES">ES-EXECUTIVE SERVICES </option>					  
<option style="background: #ebdef0" <?php if($PUESTO=='TCM_TALENT_AND_CULTURE_MANAGER'){echo "selected";}; ?> value="TCM_TALENT_AND_CULTURE_MANAGER">TCM-TALENT AND CULTURE MANAGER</option>
						  
<option style="background: #d6eaf8" <?php if($PUESTO=='IPM_IT_PROJECT_MANAGER'){echo "selected";}; ?> value="IPM_IT_PROJECT_MANAGER">IPM-IT PROJECT MANAGER </option>					  
<option style="background: #fef5e7" <?php if($PUESTO=='BANKING_MANAGER' ){echo "selected";}; ?> value="BANKING_MANAGER">CBM-CORPORATE BANKING MANAGER </option>					  
<option style="background: #ebedef" <?php if($PUESTO=='FINANCIAL_PLANNING'){echo "selected";}; ?> value="FINANCIAL_PLANNING">FP-FINANCIAL PLANNING </option>					  
<option style="background: #fbeee6" <?php if($PUESTO=='FAM_FINANCE_ACCOUTING'){echo "selected";}; ?> value="FAM_FINANCE_ACCOUTING">FAM-FINANCE & ACCOUTING MANAGER </option>
				  
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
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong> <label for="validationCustom02" class="form-label">DEPARTAMENTO:</label></strong> 
                            <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="DEPARTAMENTO">
						  
						  
						  <!--ADMINISTRACION -->
                            <strong><option selected="">SELECCIONA UNA OPCIÓN</option></strong>
                          <option style="background: #c9e8e8" <?php if($DEPARTAMENTOe=='DIRECCION'){echo "selected";} ?> value="DIRECCION">DIRECCIÓN</option>
                          <option style="background: #a3e4d7" <?php if($DEPARTAMENTOe=='VENTAS'){echo "selected";}; ?> value="VENTAS">VENTAS</option>
                          <option style="background: #e8f6f3" <?php if($DEPARTAMENTOe=='OPERACIONES'){echo "selected";} ?> value="OPERACIONES">OPERACIONES</option>
                          <option style="background: #fdf2e9" <?php if($DEPARTAMENTOe=='DISENO'){echo "selected";} ?> value="DISENO">DISEÑO</option>
                          <option style="background: #eaeded" <?php if($DEPARTAMENTOe=='VUELOS'){echo "selected";} ?> value="VUELOS">VUELOS</option>
                          <option style="background: #fdebd0" <?php if($DEPARTAMENTOe=='SISTEMAS'){echo "selected";} ?> value="SISTEMAS">SISTEMAS</option>
                          <option style="background: #ebdef0" <?php if($DEPARTAMENTOe=='BACK_STAGE'){echo "selected";} ?> value="BACK_STAGE">BACK STAGE</option>
                          <option style="background: #d6eaf8" <?php if($DEPARTAMENTOe=='ADMINISTRACION'){echo "selected";} ?> value="ADMINISTRACION">ADMINISTRACION</option>
                          <option style="background: #fef5e7" <?php if($DEPARTAMENTOe=='AUDITORIA'){echo "selected";} ?> value="AUDITORIA">AUDITORIA</option>
                          <option style="background: #ebedef" <?php if($DEPARTAMENTOe=='CONTABILIDAD'){echo "selected";} ?> value="CONTABILIDAD">CONTABILIDAD</option>
                          <option style="background: #fbeee6" <?php if($DEPARTAMENTOe=='CAPITAL_HUMANO'){echo "selected";} ?> value="CAPITAL_HUMAN">CAPITAL HUMANO</option>
                          <option style="background: #e8f6f3" <?php if($DEPARTAMENTOe=='RECEPCION'){echo "selected";} ?> value="RECEPCION">RECEPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($DEPARTAMENTOe=='LIMPIEZA'){echo "selected";} ?> value="LIMPIEZA">LIMPIEZA</option>
                        </select>
                      </div>
                      <div class="col-md-4"style="background:#fbeee6">
                      <strong><label for="validationCustom01" class="form-label"> NOMBRE DEL JEFE DIRECTO 1:</label></strong> 
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $JEFE_DIRECTO_1; ?>" required="" name="JEFE_DIRECTO_1"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label"> NOMBRE DEL JEFE DIRECTO 2:</label></strong> 
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $JEFE_DIRECTO_2; ?>" required="" name="JEFE_DIRECTO_2"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong> <label for="validationCustom01" class="form-label"> NOMBRE DEL JEFE DIRECTO 3:</label></strong> 
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $JEFE_DIRECTO_3; ?>" required="" name="JEFE_DIRECTO_3"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                     
                        <div class="col-md-4"style="background:#fbeee6">
                        <strong> <label for="validationCustom01" class="form-label">TELÉFONO DE OFICINA:</label></strong> 
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_3; ?>" required="" name="CORREO_3"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
						
						
                        <div class="col-md-4"style="background:#fef5e7">
                        <strong> <label for="validationCustom01" class="form-label">No.EXTENSIÓN:</label></strong> 
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_2; ?>" required="" name="CORREO_2"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong> <label for="validationCustom01" class="form-label">CORREO PERSONAL:</label></strong> 
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_1; ?>" required="" name="CORREO_1"/>
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        </div>						
						
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong> <label for="validationCustom01" class="form-label">CORREO LABORAL:</label></strong> 
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CORREO_4; ?>" required="" name="CORREO_4"/>
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        </div>
						
						<input type="hidden" value="empresa" name="empresa">                   
				

                        <div class="col-md-4"style="background:#fbeee6" >
                          <strong><label for="validationCustom01" class="form-label">FECHA DE SALIDA DE LA EMPRESA:</label></strong> 
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $FECHA_SALIDA_EMPRESA; ?>" required="" name="FECHA_SALIDA_EMPRESA"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                         <strong> <label for="validationCustom01" class="form-label">MOTIVO DE SALIDA DE LA EMPRESA:</label></strong> 
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MOTIVO_SALIDA_EMPRESA; ?>" required="" name="MOTIVO_SALIDA_EMPRESA"/>
                          <div class="valid-feedback">Bien!</div>
                        </div>
                       
                        <div class="col-md-4"style="background:#d4f6c8">
                        <strong> <label for="validationCustom02" class="form-label">PERMISOS DE:</label></strong>
						



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
						
						
                         <!--   <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="PERMISOS">
                            <strong><option selected="">SELECCIONA UNA OPCIÓN</option></strong>
                          <option style="background: #c9e8e8" <?php if($PERMISOS=='DIRECCION'){echo "selected";} ?> value="DIRECCION">DIRECCIÓN</option>
                          <option style="background: #a3e4d7" <?php if($PERMISOS=='VENTAS'){echo "selected";}; ?> value="VENTAS">VENTAS</option>
                          <option style="background: #e8f6f3" <?php if($PERMISOS=='OPERACIONES'){echo "selected";} ?> value="OPERACIONES">OPERACIONES</option>
                          <option style="background: #fdf2e9" <?php if($PERMISOS=='DISENO'){echo "selected";} ?> value="DISENO">DISEÑO</option>
                          <option style="background: #eaeded" <?php if($PERMISOS=='VUELOS'){echo "selected";} ?> value="VUELOS">VUELOS</option>
                          <option style="background: #fdebd0" <?php if($PERMISOS=='SISTEMAS'){echo "selected";} ?> value="SISTEMAS">SISTEMAS</option>
                          <option style="background: #ebdef0" <?php if($PERMISOS=='BACK_STAGE'){echo "selected";} ?> value="BACK_STAGE">BACK STAGE</option>
                          <option style="background: #d6eaf8" <?php if($PERMISOS=='ADMINISTRACION'){echo "selected";} ?> value="ADMINISTRACION">ADMINISTRACION</option>
                          <option style="background: #fef5e7" <?php if($PERMISOS=='AUDITORIA'){echo "selected";} ?> value="AUDITORIA">AUDITORIA</option>
                          <option style="background: #ebedef" <?php if($PERMISOS=='CONTABILIDAD'){echo "selected";} ?> value="CONTABILIDAD">CONTABILIDAD</option>
                          <option style="background: #fbeee6" <?php if($PERMISOS=='CAPITAL_HUMANO'){echo "selected";} ?> value="CAPITAL_HUMAN">CAPITAL HUMANO</option>
                          <option style="background: #e8f6f3" <?php if($PERMISOS=='RECEPCION'){echo "selected";} ?> value="RECEPCION">RECEPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($PERMISOS=='LIMPIEZA'){echo "selected";} ?> value="LIMPIEZA">LIMPIEZA</option>
                        </select>-->
                      </div>
					
					
					
                  <div> 
                          
	<div style="float:left;" border="solid 1px #000;">
  <?php if($conexion->variablespermisos('','EMPRESA','guardar')=='si'){ ?>


	<button class="btn btn-sm btn-outline-success px-5" type="button" id="enviarEMPRESA">GUARDAR</button><div style="
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


id="mensajeEMPRESA"/>

	</div><?php } ?>

	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div>