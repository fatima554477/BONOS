<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar80" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar80" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;INFORMACION PERSONAL
</p> <div  id="mensajeIPERSONAL2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWipersonala1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWipersonala1 ; ?>%</div>
								</div></div></strong>  
	        <div id="target80" style="display:block;" class="content2" >
        <div class="card">
          <div class="card-body">
		  
		  
		  
<?php 
if($fechaIngresoIPERSONAL==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoIPERSONAL.'</strong><BR/><BR/>';
}
?>		  
		  
		  
                      <form class="row g-3 needs-validation was-validated" id="IPERSONALform"  novalidate="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
 
 
                       <div class="col-md-4"style="background:#fef5e7">
                         <strong><label for="validationCustom01"  class="form-label">NOMBRE 1:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $NOMBRE_1; ?>" required="" name="NOMBRE_1">
                          <div style="background:#fef5e7" class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label  for="validationCustom01" class="form-label">NOMBRE 2:</label></strong>
                          <input type="text" class="form-control"  value="<?php echo $NOMBRE_2; ?>"  name="NOMBRE_2">
                          <div style="background:#fef5e7"  class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong>  <label for="validationCustom01" class="form-label">NOMBRE 3:</label></strong>
                          <input  type="text" class="form-control" value="<?php echo $NOMBRE_3; ?>"  name="NOMBRE_3">
                          <div style="background:#fef5e7" class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong> <label  for="validationCustom01" class="form-label">APELLIDO PATERNO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_PATERNO; ?>" required="" name="APELLIDO_PATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div class="col-md-4"style="background:#fef5e7" >
                        <strong><label  for="validationCustom01" class="form-label">APELLIDO MATERNO:</label></strong>
                       
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $APELLIDO_MATERNO; ?>" required="" name="APELLIDO_MATERNO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
						
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">CORREO PERSONAL:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">@</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $IPCORREO1; ?>" required="" name="IPCORREO1">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
						

						
                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong> <label for="validationCustom01" class="form-label">FECHA DE NACIMIENTO:</label></strong>
                          <input type="date" class="form-control" id="validationCustom01" value="<?php echo $FECHA_DE_NACIMIENTO; ?>" required="" name="FECHA_DE_NACIMIENTO">
                          <div class="valid-feedback">Bien!</div>
                      
                        </div>
                        <div class="col-md-4"  style="background:#fef5e7" >
                        <strong> <label for="validationCustom01" class="form-label">AÑOS:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $ANIOS; ?>" required="" name="ANIOS">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label  for="validationCustom01" class="form-label">LUGAR DE NACIMIENTO (ESTADO O PROVINCIA)</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA; ?>" required="" name="LUGAR_DE_NACIMIENTO_ESTADO_PROVINCIA">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label  for="validationCustom01" class="form-label">PAÍS DE NACIMIENTO</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PAIS_DE_NACIMIENTO; ?>" required="" name="PAIS_DE_NACIMIENTO">
                          <div class="valid-feedback">Bien!</div>
                           </div>
                          <div class="col-md-4"  style="background:#fef5e7">
                          <strong><label for="validationCustom02" class="form-label">ESTADO CIVIL</label></strong>
						  
                          <select  class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="ESTADO_CIVIL"> >
                          <strong> <option selected="">SELECCIONA UNA OPCION</option></strong>
                         <option style="background:#e2f1fd" 
						             <?php if($ESTADO_CIVIL=='1'){echo 'selected';}?>
					                value="1">CASADO </option>
									 <option style="background:#e2f1fd" 
						             <?php if($ESTADO_CIVIL=='1'){echo 'selected';}?>
					                value="1">CASADA </option>
                         <option style="background:#fde7e2" 
						             <?php if($ESTADO_CIVIL=='2'){echo 'selected';}?> value="2" >UNION LIBRE</option>
                         <option style="background:#faf6ca"  
						            <?php if($ESTADO_CIVIL=='3'){echo 'selected';}?> value="3" >SOLTERO</option>
									<option style="background:#faf6ca"  
						            <?php if($ESTADO_CIVIL=='3'){echo 'selected';}?> value="3" >SOLTERA</option>
                         </select> </div>

                         <div class="col-md-4" style="background:#fef5e7">
                          <strong><label for="validationCustom02" class="form-label">NÚMERO DE FAMILIARES:(PADRES (O) HERMANOS)</label></strong>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02"  required="" name="NUMERO_DE_FAMILIARES_PADRES_HERMANOS"> >
                          <option selected="">SELECCIONA UNA OPCION</option>
                         <option style="background:#e2f1fd" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='1'){echo 'selected';}?> value="1">1</option>
                         <option style="background:#fde7e2" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='2'){echo 'selected';}?> value="2">2</option>
                         <option style="background:#faf6ca" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='3'){echo 'selected';}?> value="3">3</option>
                         <option style="background:#cafae9" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='4'){echo 'selected';}?> value="4">4</option>
                         <option style="background:#eadefd" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='5'){echo 'selected';}?> value="5">5</option>
                         <option style="background:#fddfde" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='6'){echo 'selected';}?> value="6">6</option>
                         <option style="background:#e5fdde" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='7'){echo 'selected';}?> value="7">7</option>
                         <option style="background:#dee8fd" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='8'){echo 'selected';}?> value="8">8</option>
                         <option style="background:#f7defd" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='9'){echo 'selected';}?> value="9">9</option>
                         <option style="background:#defbfd" <?php if($NUMERO_DE_FAMILIARES_PADRES_HERMANOS=='10'){echo 'selected';}?> value="10">10</option>
                          </select></div>
                      
                        <div class="col-md-4" style="background:#fef5e7" >
                          <strong><label for="validationCustom02" class="form-label">NÚMERO DE FAMILIARES:(ESPOSA (O) E HIJOS)</label></strong>
						  
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="NUMERO_DE_FAMILIARES_ESPOSA_HIJOS"> 
                         <option selected="">SELECCIONA UNA OPCION</option>
                         <option style="background:#e2f1fd" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='1'){echo 'selected';}?> value="1">1</option>
                         <option style="background:#fde7e2" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='2'){echo 'selected';}?> value="2">2</option>
                         <option style="background:#faf6ca" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='3'){echo 'selected';}?> value="3">3</option>
                         <option style="background:#cafae9" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='4'){echo 'selected';}?> value="4">4</option>
                         <option style="background:#eadefd" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='5'){echo 'selected';}?> value="5">5</option>
                         <option style="background:#fddfde" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='6'){echo 'selected';}?> value="6">6</option>
                         <option style="background:#e5fdde" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='7'){echo 'selected';}?> value="7">7</option>
                         <option style="background:#dee8fd" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='8'){echo 'selected';}?> value="8">8</option>
                         <option style="background:#f7defd" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='9'){echo 'selected';}?> value="9">9</option>
                         <option style="background:#defbfd" <?php if($NUMERO_DE_FAMILIARES_ESPOSA_HIJOS=='10'){echo 'selected';}?> value="10">10</option>
                         </select> </div>
                        
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label">CELULAR </label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $CELULAR_1; ?>" required="" name="CELULAR_1">
                          <div class="valid-feedback">Bien!</div>
                        </div>

                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong> <label for="validationCustom01" class="form-label">TELEFONO DE CASA 1</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TELEFONO_DE_CASA_1; ?>" name="TELEFONO_DE_CASA_1">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div class="col-md-4" style="background:#fef5e7">
                          <strong> <label for="validationCustom01" class="form-label">TELEFONO DE CASA 2</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TELEFONO_DE_CASA_2; ?>" name="TELEFONO_DE_CASA_2">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">PORCENTAJE DE INGLES HABLADO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PORCENTAJE_DE_INGLES_HABLADO; ?>" required="" name="PORCENTAJE_DE_INGLES_HABLADO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">PORCENTAJE DE INGLES ESCRITO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PORCENTAJE_DE_INGLES_ESCRITO; ?>" required="" name="PORCENTAJE_DE_INGLES_ESCRITO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">DOMINIO DE OTRO IDIOMA Y PORCENTAJE:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE; ?>" required="" name="DOMINIO_DE_OTRO_IDIOMA_Y_PORCENTAJE">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 1 PARA SEGURO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO;?>" required="" name="BENEFICIARIO_Y_PORCENTAJE_1_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 2 PARA SEGURO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO;?>" name="BENEFICIARIO_Y_PORCENTAJE_2_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div style="background:#fef5e7" class="col-md-4">
                        <strong><label  for="validationCustom01" class="form-label">BENEFICIARIO Y PORCENTAJE 3 PARA SEGURO:</label></strong>
                          <div class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO;?>" name="BENEFICIARIO_YPORCENTAJE_3_PARA_SEGURO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong> <label for="validationCustom01" class="form-label">RED SOCIAL TELEGRAM:</label></strong>
                          <input type="tel" class="form-control" id="validationCustom01" value="<?php echo $TELEGRAM; ?>" required="" name="TELEGRAM">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label">TIPO DE SANGRE:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $TIPO_DE_SANGRE; ?>" required="" name="TIPO_DE_SANGRE">
                          <div class="valid-feedback">Bien!</div>
                         </div>
                          <div class="col-md-4"  style="background:#fef5e7">
                          <strong><label for="validationCustom02" class="form-label">¿ERES PROPIETARIO O TIENES ALGÚN VEHICULO?</label></strong>
                          <select  class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $AUTO; ?>" required="" name="AUTO"> >
                       
						  <option selected="">SELECCIONA UNA OPCION</option>
						  
                         <option style="background: #c9e8e8" <?php if($AUTO=='1'){echo 'selected';}?>  value="1">SI</option>
                         <option style="background: #a3e4d7" <?php if($AUTO=='2'){echo 'selected';}?>  value="2" >NO</option>
						 
                         </select> </div>
                          <div class="valid-feedback">Bien!</div>
                          
                          <div class="col-md-4" style="background:#fef5e7">
                          <strong> <label for="validationCustom01" class="form-label">MARCA DEL AUTO:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $MARCA_DEL_AUTO; ?>" required="" name="MARCA_DEL_AUTO">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7" >
                        <strong> <label  for="validationCustom01" class="form-label">SUB MARCA:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $SUB_MARCA; ?>" required="" name="SUB_MARCA">
                          <div class="valid-feedback">Bien!</div>
                        
                          </div>
                          <div class="col-md-4" style="background:#fef5e7">
                          <strong> <label  for="validationCustom01" class="form-label">MODELO:</label></strong>
                          <input  type="text" class="form-control" id="validationCustom01" value="<?php echo $MODELO; ?>" required="" name="MODELO">
                          <div class="valid-feedback">Bien!</div>
						  
                           <input type="hidden" value="ipersonal1" name="ipersonal1">  
						   
                          </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label for="validationCustom01" class="form-label">COLOR:</label></strong>
                          <input type="tel" class="form-control" id="validationCustom01" value="<?php echo $COLOR; ?>" required="" name="COLOR">
                          <div class="valid-feedback">Bien!</div>
                        </div>
                        <div class="col-md-4" style="background:#fef5e7">
                        <strong><label  for="validationCustom01" class="form-label">PLACAS:</label></strong>
                          <input type="text" class="form-control" id="validationCustom01" value="<?php echo $PLACAS; ?>" required="" name="PLACAS">
                          <div class="valid-feedback">Bien!</div>
                        
                        </div>
                        
						

 
                  <div> <tr><td>

	<div style="float:left;"border="solid 1px #000;"><?php if($conexion->variablespermisos('','INFORMACION_PERSONAL','guardar')=='si'){ ?>

<button class="btn btn-sm btn-outline-success px-5" type="button" id="enviarIPERSONAL">GUARDAR</button><div style="
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


id="mensajeIPERSONAL"/></td><?php } ?></tr>
	</div>
                         
	</div>
                            
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div>