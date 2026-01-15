<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar2" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar2" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;INFORMACION PERSONAL
</p> <div  id="mensajeIPERSONAL"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWipersonala1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWipersonala1 ; ?>%</div>
								</div></div></strong>  
	        <div id="target2" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
                      <form class="row g-3 needs-validation was-validated" id="IPERSONALform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                       <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">GIRO DE LA EMPRESA:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_1; ?>" required="" name="NOMBRE_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                         <label for="validationCustom01" class="form-label">PROVEEDOR DE:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_2; ?>" required="" name="NOMBRE_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CALIFICACION DEL PRODUCTO O SERVICIO EN GENERAL ( DEL 1 AL 10) </label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_3; ?>" required="" name="NOMBRE_3">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">MOTIVO DE LA CALIFICACION:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_PATERNO; ?>" required="" name="APELLIDO_PATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">TIEMPO DE RESPUESTA:</label>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_MATERNO; ?>" required="" name="APELLIDO_MATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">:</label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $IPCORREO1; ?>" required="" name="IPCORREO1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CORREO 2:</label>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $IPCORREO2; ?>" required="" name="IPCORREO2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
						
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">FECHA DE NACIMIENTO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $FECHA_DE_NACIMIENTO; ?>" required="" name="FECHA_DE_NACIMIENTO">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">AÑOS:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $ANIOS; ?>" required="" name="ANIOS">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">LUGAR DE NACIMIENTO (ESTADO O PROVINCIA)</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA; ?>" required="" name="LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PAIS DE NACIMIENTO</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS_DE_NACIMIENTO; ?>" required="" name="PAIS_DE_NACIMIENTO">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">ESTADO CIVIL</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $ESTADO_CIVIL; ?>" required="" name="ESTADO_CIVIL">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">NUMERO DE FAMILIARES: (PADRES Y HERMANOS)</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_DE_FAMILIARES_PADRES_HERMANOS; ?>" required="" name="NUMERO_DE_FAMILIARES_PADRES_HERMANOS">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">NUMERO DE FAMILIARES:(ESPOSA (O) E HIJOS)</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NUMERO_DE_FAMILIARES_ESPOSA_HIJOS; ?>" required="" name="NUMERO_DE_FAMILIARES_ESPOSA_HIJOS">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CELULAR 1</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CELULAR_1; ?>" required="" name="CELULAR_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">CELULAR 2</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CELULAR_2; ?>" required="" name="CELULAR_2">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">TELEFONO DE CASA 1</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TELEFONO_DE_CASA_1; ?>" required="" name="TELEFONO_DE_CASA_1">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">TELEFONO DE CASA 2</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TELEFONO_DE_CASA_2; ?>" required="" name="TELEFONO_DE_CASA_2">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PORCENTAJE DE INGLES HABLADO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PORCENTAJE_DE_INGLES_HABLADO; ?>" required="" name="PORCENTAJE_DE_INGLES_HABLADO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PORCENTAJE DE INGLES ESCRITO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PORCENTAJE_DE_INGLES_ESCRITO; ?>" required="" name="PORCENTAJE_DE_INGLES_ESCRITO">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">DOMINIO DE OTRO IDIOMA Y PORCENTAJE:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE; ?>" required="" name="DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE">
                          <div class="valid-feedback">Bien!</div>
                          
                        
                        
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 1 PARA SEGURO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO; ?>" required="" name="BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 2 PARA SEGURO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO; ?>" required="" name="BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 3 PARA SEGURO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO; ?>" required="" name="BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">TELEGRAM:</label>
                          <input type="tel" class="form-control" id="validationCustom01" value="<?php echo $TELEGRAM; ?>" required="" name="TELEGRAM">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">TIPO DE SANGRE:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TIPO_DE_SANGRE; ?>" required="" name="TIPO_DE_SANGRE">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">TIENES AUTO PROPIO?</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $AUTO; ?>" required="" name="AUTO"> >
                         <option selected="">SELECCIONA UNA OPCION</option>
                         <option value="1">SI</option>
                         <option value="2">NO</option>
                        
                         </select> 
                          <div class="valid-feedback">Bien!</div>
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">MARCA DEL AUTO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MARCA_DEL_AUTO; ?>" required="" name="MARCA_DEL_AUTO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">SUB MARCA:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $SUB_MARCA; ?>" required="" name="SUB_MARCA">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">MODELO:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MODELO; ?>" required="" name="MODELO">
                          <div class="valid-feedback">Bien!</div>
						  
                           <input type="hidden" value="ipersonal1" name="ipersonal1">  
						   
                          </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">COLOR:</label>
                          <input type="tel" class="form-control" id="validationCustom01" value="<?php echo $COLOR; ?>" required="" name="COLOR">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4">
                          <label for="validationCustom01" class="form-label">PLACAS:</label>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PLACAS; ?>" required="" name="PLACAS">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        
						

 
                  <div> 
                          
	<div style="float:left;"border="solid 1px #000;">
	<button class="btn btn-primary" type="button" id="enviarIPERSONAL">ENVIAR</button>
	</div>
                         
	<div style="float:right">
	<div class="col-12">
	<button class="button" type="reset">BORRAR</button></div>
	</div>
	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div>