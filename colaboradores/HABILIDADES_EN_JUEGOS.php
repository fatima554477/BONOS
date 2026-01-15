<div id="content">     
			<hr/>
		<strong><p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar81" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar81" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;HABILIDADES EN JUEGOS</p><div  id="mensajeHABILIDADES"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWfhabilidades1a1 ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWfhabilidades1a1 ; ?>%</div>
								</div></div></strong>  
	        <div id="target81" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
                      <form class="row g-3 needs-validation" id="HABILIDADESform" novalidate>
                   <?php if($conexion->variablespermisos('','HABILIDADES_EN_JUEGOSDIAS','ver')=='si'){ ?>
                <center> <strong> DIAS Y HORARIOS DISPONIBLES PARA ASISTIR A EVENTOS:</strong></center>
                 <div class="card">
                  <div class="card-body">
                   <br>
                   <table>  <tr>     
                   <th scope="col">&nbsp;&nbsp;&nbsp;&nbsp;DIAS </th>
                   <th style="text-align: center;" scope="col">DISPONIBILIDAD:</th>
                   <th style="text-align: center;" scope="col">HORARIOS:</th>
                   <th style="text-align: center;" scope="col">OBSERVACIONES:</th></tr>

                <tr>
                
                  <th style="background:#fef5e7" scope="row"> <label style="width:200px;"  for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;LUNES</label></th>
                  <td style="background:#fef5e7;width:200px;"><input  value="<?php echo 1; ?>"  name="LUNES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault"  <?php if($LUNES == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#fef5e7;width:440px;" " value="<?php echo $LHORARIOS; ?>"  name="LHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#fef5e7;width:440px;" " value="<?php echo $LOBSERBACIONES; ?>"  name="LOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
             
             
              
                </tr>
                <tr>
                  <th style="background:#ebedef" scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;MARTES</label></th>
                  <td style="background:#ebedef"><input value="<?php echo $MARTES; ?>"  name="MARTES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($MARTES == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#ebedef" value="<?php echo $MAHORARIOS; ?>"  name="MAHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#ebedef" value="<?php echo $MAOBSERBACIONES; ?>"  name="MAOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
      
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;MIERCOLES</label></th>
                  <td style="background:#fbeee6" ><input value="<?php echo $MIERCOLES; ?>"  name="MIERCOLES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($MIERCOLES == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#fbeee6" value="<?php echo $MIHORARIOS; ?>"  name="MIHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#fbeee6" value="<?php echo $MIOBSERBACIONES; ?>"  name="MIOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
          
                </tr>
           
                <tr>
                  <th style="background:#dafaf5" scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;JUEVES</label></th>
                  <td style="background:#dafaf5"><input value="<?php echo $JUEVES; ?>"  name="JUEVES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($JUEVES == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#dafaf5"value="<?php echo $JHORARIOS; ?>"  name="JHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#dafaf5" value="<?php echo $JOBSERBACIONES; ?>"  name="JOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  </tr>
                <tr>
                  <th style="background:#fef5e7"scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;VIERNES</label></th>
                  <td style="background:#fef5e7"><input value="<?php echo $VIERNES; ?>"  name="VIERNES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($VIERNES == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#fef5e7" value="<?php echo $VHORARIOS; ?>"  name="VHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#fef5e7"value="<?php echo $VOBSERBACIONES; ?>"  name="VOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
       
                </tr>
                <tr>
                  <th style="background:#ebedef" scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;SABADO</label></th>
                  <td style="background:#ebedef"><input value="<?php echo $SABADO; ?>"  name="SABADO"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($SABADO == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#ebedef" value="<?php echo $SHORARIOS; ?>"  name="SHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#ebedef" value="<?php echo $SOBSERBACIONES; ?>"  name="SOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
       
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;DOMINGO</label></th>
                  <td style="background:#fbeee6" ><input value="<?php echo $DOMINGO; ?>"  name="DOMINGO"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($DOMINGO == 1){echo 'checked'; }?>></td>
                  <td><input style="background:#fbeee6"value="<?php echo $DHORARIOS; ?>"  name="DHORARIOS"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
                  <td><input style="background:#fbeee6" value="<?php echo $DOBSERBACIONES; ?>"  name="DOBSERBACIONES"  style="width: 200px;" type="text" class="form-control" id="validationCustom03" required></td>
       
                </tr>

          </table>
		  <?php } ?>
                      <br></br>
                       <hr></hr>
            <!--<table  style="width:100%;">-->
			
			
                   <center>  <strong> <p>  TIENES EXPERIENCIA DE HABER ASISTIDO COMO GIO EN
                          ALGUNO DE LOS SIGUIENTES EVENTOS TEMA?</p></strong></center>			
			
            <table class="table mb-0 table-striped">

                <tr>
            


                 
                   <th scope="col">EVENTOS TEMA</th>
                   <th style="text-align: center;" scope="col">HABILIDADES:</th>
                   <th  style=" text-align: center;" "scope="col">PORCENTAJE DE DOMINIO</th> 
                   <th  style=" text-align: center;" scope="col">OBSERVACIONES</th></tr>
              

                <tr>
                
                  <th style="background:#fef5e7"scope="row"> <label style="width: 200px;"  for="validationCustom03" class="form-label">FIESTA MEXICANA</label></th>
                  <td style="background:#fef5e7"><input value="<?php echo $FIESTA_MEXICANA; ?>"  name="FIESTA_MEXICANA"  style="width: 30px;" class="form-check-input " type="checkbox" <?php if($FIESTA_MEXICANA == 1){echo 'checked'; }?> id="flexCheckDefault"></td>
                          <td style="background:#fef5e7" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fef5e7" type="text" class="form-control" id="validationCustom01" value="<?php echo  $EFIESTA_MEXICANA;?>" required="" name="EFIESTA_MEXICANA" >
                          </td>     
                  <td><input style="background:#fef5e7" value="<?php echo $OFIESTA_MEXICANA; ?>"  name="OFIESTA_MEXICANA"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
                  </tr>
                
                <tr>
                  <th  style="background:#ebedef"scope="row"> <label for="validationCustom03" class="form-label">JEOPARDY</label></th>
                  <td  style="background:#ebedef"><input value="<?php echo $JEOPARDY; ?>"  name="JEOPARDY"  style="width: 30px;" class="form-check-input " type="checkbox" <?php if($JEOPARDY == 1){echo 'checked'; }?> id="flexCheckDefault"></td>
                  <td style="background:#ebedef" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#ebedef" type="text" class="form-control" id="validationCustom01" value="<?php echo  $EJEOPARDY;?>" required="" name="EJEOPARDY" >
                          </td> 
                  <td><input  style="background:#ebedef"value="<?php echo $OJEOPARDY; ?>"  name="OJEOPARDY"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
      
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">RALLYS</label></th>
                  <td style="background:#fbeee6"><input value="<?php echo $RALLYS; ?>"  name="RALLYS"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($RALLYS == 1){echo 'checked'; }?>></td>
                  <td style="background:#fbeee6" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fbeee6" type="text" class="form-control" id="validationCustom01" value="<?php echo  $ERALLYS;?>" required="" name="ERALLYS" >
                          </td>
                  <td><input style="background:#fbeee6"  value="<?php echo $ORALLYS; ?>"  name="ORALLYS"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
          
                </tr>
           
                <tr>
                  <th style="background:#dafaf5"scope="row"> <label for="validationCustom03" class="form-label">100 MEXICANOS DIJIERON</label></th>
                  <td style="background:#dafaf5"><input value="<?php echo $a100_MEXICANOS_DIJIERON; ?>"  name="a100_MEXICANOS_DIJIERON"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault"  <?php if($a100_MEXICANOS_DIJIERON == 1){echo 'checked'; }?>></td>
                  <td style="background:#dafaf5" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#dafaf5" type="text" class="form-control" id="validationCustom01" value="<?php echo $E100_MEXICANOS_DIJIERON;?>" required="" name="E100_MEXICANOS_DIJIERON"" >
                          </td> 
                  <td><input style="background:#dafaf5" value="<?php echo $O100_MEXICANOS_DIJIERON; ?>"  name="O100_MEXICANOS_DIJIERON"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
                  </tr>
                <tr>
                  <th style="background:#fef5e7"scope="row"> <label for="validationCustom03" class="form-label">NOCHE DE LAS ESTRELLAS</label></th>
                  <td style="background:#fef5e7"><input value="<?php echo $NOCHE_DE_LAS_ESTRELLAS; ?>"  name="NOCHE_DE_LAS_ESTRELLAS"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($NOCHE_DE_LAS_ESTRELLAS == 1){echo 'checked'; }?>></td>
                  <td style="background:#fef5e7" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fef5e7" type="text" class="form-control" id="validationCustom01" value="<?php echo $ENOCHE_DE_LAS_ESTRELLAS;?>" required="" name="ENOCHE_DE_LAS_ESTRELLAS"  >
                          </td>
                  <td><input style="background:#fef5e7"value="<?php echo $ONOCHE_DE_LAS_ESTRELLAS; ?>"  name="ONOCHE_DE_LAS_ESTRELLAS"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
       
                </tr>
                <tr>
                  <th style="background:#ebedef"scope="row"> <label for="validationCustom03" class="form-label">HANDS UP</label></th>
                  <td style="background:#ebedef" ><input value="<?php echo $HANDS_UP; ?>"  name="HANDS_UP"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($HANDS_UP == 1){echo 'checked'; }?>></td>
                  <td style="background:#ebedef" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#ebedef" type="text" class="form-control" id="validationCustom01" value="<?php echo $EHANDS_UP;?>" required="" name="EHANDS_UP">
                          </td>
                  <td><input style="background:#ebedef" value="<?php echo $OHANDS_UP; ?>"  name="OHANDS_UP"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
           
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">EL CALAMAR</label></th>
                  <td style="background:#fbeee6"><input value="<?php echo $CALAMAR; ?>"  name="CALAMAR"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault"  <?php if($CALAMAR == 1){echo 'checked'; }?>></td>
                  <td style="background:#fbeee6" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fbeee6" type="text" class="form-control" id="validationCustom01" value="<?php echo $ECALAMAR;?>" required="" name="ECALAMAR">
                          </td>
                  <td><input style="background:#fbeee6"value="<?php echo $OCALAMAR; ?>"  name="OCALAMAR"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
               
                </tr>
                <tr>
                  <th style="background:#dafaf5"scope="row"> <label for="validationCustom03" class="form-label">CRUCERO</label></th>
                  <td style="background:#dafaf5"><input value="<?php echo $CRUCERO; ?>"  name="CRUCERO"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($CRUCERO == 1){echo 'checked'; }?>></td>
                  <td style="background:#dafaf5" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fbeee6" type="text" class="form-control" id="validationCustom01" value="<?php echo  $ECRUCERO;?>" required="" name="ECRUCERO" >
                   </td>
                  <td><input style="background:#dafaf5" value="<?php echo $OCRUCERO; ?>"  name="OCRUCERO"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
 
                </tr>
                <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">MAESTRO DE CEREMONIAS</label></th>
                  <td style="background:#fef5e7" ><input value="<?php echo $MAESTRO_DE_CEREMONIAS; ?>"  name="MAESTRO_DE_CEREMONIAS"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($MAESTRO_DE_CEREMONIAS == 1){echo 'checked'; }?>></td>
                  <td style="background:#fef5e7" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fef5e7" type="text" class="form-control" id="validationCustom01" value="<?php echo  $EMAESTRO_DE_CEREMONIAS;?>" required="" name="EMAESTRO_DE_CEREMONIAS">
                 </td>
                  <td><input style="background:#fef5e7"value="<?php echo $OMAESTRO_DE_CEREMONIAS; ?>"  name="OMAESTRO_DE_CEREMONIAS"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
         
                </tr>
                
                <tr>
                  <th style="background:#ebedef"scope="row"> <label for="validationCustom03" class="form-label">CASINO:</label></th>
                  <td style="background:#ebedef" ><input value="<?php echo $CASINO; ?>"  name="CASINO"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($CASINO == 1){echo 'checked'; }?>></td>
                  <td style="background:#ebedef"  class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#ebedef"  type="text" class="form-control" id="validationCustom01" value="<?php echo  $ECASINO;?>" required="" name="ECASINO">
                </td>
                  <td><input style="background:#ebedef" value="<?php echo $OCASINO; ?>"  name="OCASINO"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">CUBILETE</label></th>
                  <td style="background:#fbeee6" ><input value="<?php echo $CUBILETE; ?>"  name="CUBILETE"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($CUBILETE == 1){echo 'checked'; }?>></td>
                  <td style="background:#fbeee6" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fbeee6"  type="text" class="form-control" id="validationCustom01" value="<?php echo $ECUBILETE;?>" required="" name="ECUBILETE">
                  </td>
                  <td><input style="background:#fbeee6"value="<?php echo $OCUBILETE; ?>"  name="OCUBILETE"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
         
                </tr>
                <tr>
                  <th style="background:#dafaf5"scope="row"> <label for="validationCustom03" class="form-label">CRABS</label></th>
                  <td style="background:#dafaf5"><input value="<?php echo $CRABS; ?>"  name="CRABS"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($CRABS == 1){echo 'checked'; }?>></td>
                  <td style="background:#dafaf5" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#dafaf5"  type="text" class="form-control" id="validationCustom01" value="<?php echo $ECRABS;?>" required="" name="ECRABS">
                  </td>
                  <td><input style="background:#dafaf5" value="<?php echo $OCRABS; ?>"  name="OCRABS"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
         
                </tr>
                <tr>
                  <th style="background:#fef5e7"scope="row"> <label for="validationCustom03" class="form-label">RULETA</label></th>
                  <td style="background:#fef5e7" ><input value="<?php echo $RULETA; ?>"  name="RULETA"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($RULETA == 1){echo 'checked'; }?>></td>
                  <td style="background:#fef5e7" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fef5e7""  type="text" class="form-control" id="validationCustom01" value="<?php echo $ERULETA;?>" required="" name="ERULETA">
                   </td>
                  <td><input style="background:#fef5e7"value="<?php echo $ORULETA; ?>"  name="ORULETA"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
         
                </tr>
                <tr>
                  <th style="background:#ebedef"scope="row"> <label for="validationCustom03" class="form-label">BLACK JACK</label></th>
                  <td style="background:#ebedef"><input value="<?php echo $BLACK_JACK; ?>"  name="BLACK_JACK"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($BLACK_JACK == 1){echo 'checked'; }?>></td>
                  <td style="background:#ebedef" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#ebedef" type="text" class="form-control" id="validationCustom01" value="<?php echo $EBLACK_JACK;?>" required="" name="EBLACK_JACK">
                 </td>
                  <td><input style="background:#ebedef"value="<?php echo $OBLACK_JACK; ?>"  name="OBLACK_JACK"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
         
                </tr>
                <tr>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">INFLABLES</label></th>
                  <td style="background:#fbeee6"  ><input value="<?php echo $INFLABLES; ?>"  name="INFLABLES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault" <?php if($INFLABLES == 1){echo 'checked'; }?>></td>
                  <td style="background:#fbeee6" class="input-group"> <span class="input-group-text" id="inputGroupPrepend2">%</span>
                          <input style="background:#fbeee6"  type="text" class="form-control" id="validationCustom01" value="<?php echo $EINFLABLES;?>" required="" name="EINFLABLES">
                 </td>
                  <td><input style="background:#fbeee6"  value="<?php echo $OINFLABLES; ?>"  name="OINFLABLES"  style="width: 300px;" type="text" class="form-control" id="validationCustom03" required></td>
                  </tr>
             
				  
				  
                  <table>
                <tr>
                <th scope="row"> <label for="validationCustom03" class="form-label">TIENES OTRAS HABILIDADES?</label></th>
                                                            
                       <td ><textarea style="width: 800px;px;" name="OBSERVACIONES" class="form-control" aria-label="With textarea"><?php echo $OBSERVACIONES; ?></textarea></td>
                
                </tr>

            </table>
				
<input name="habilidades1" type="hidden" value="habilidades1">

 

<table class="table mb-0 table-striped">
               <tr>
            
                   
            <th>
            <?php if($conexion->variablespermisos('','HABILIDADES_EN_JUEGOS','guardar')=='si'){ ?>


	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarHABILIDADES1">GUARDAR</button >S</th>
                      
           
                 
                   </table>
             
                
                       
 
 
                         </form>   
						 
                          </div>
						   </div>
						 </div>
						 </div> 
						 </div> 
						 </div>