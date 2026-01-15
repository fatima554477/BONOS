
<div id="content">  
			<hr/>
 
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar13" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar13" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;VACACIONES</p><div  id="mensajeVACACIONES"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWVACACIONES; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWVACACIONES; ?>%</div></div>
								</div></div></strong>
	        <div id="target13" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="VACACIONESform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                   <p>LAS VACACIONES QUE NO SEAN SOLICITADAS POR ESTE MEDIO NO SERÁN VALIDAS.		
                    LAS VACACIONES DEBERÁN DE SER SOLICITADAS POR LO MENOS 15 DÍAS ANTES DE LA		
                   FECHA SOLICITADA.		
                   EL FORMATO DEBERÁ DE ESTAR FIRMADO POR EL JEFE DIRECTO AUTORIZANDO LOS DÍAS SOLICITADOS.		
                     EL HECHO DE SOLICITAR LAS VACACIONES NO SIGNIFICA QUE ESTÉN AUTORIZADAS.		
                     EN CASO DE NO ESTAR AUTORIZADAS Y GOZASTE DE ESTOS DÍAS SE TE DESCONTARÁN DE NÓMINA.		
                     ENTREGAR EL FORMATO DEBIDAMENTE LLENO, FIRMADO Y AUTORIZADO A CAPITAL HUMANO O RECEPCIÓN POR LO		
                     MENOS 15 DÍAS ANTES DE LA FECHA SOLICITADA.		
                        EN CASO NO ENTREGAR A CAPITAL HUMANO EL FORMATO DE SOLICITUD DE VACIONES DEBIDAMENTE		
                     LLENO Y AUTORIZADO POR EL JEFE DIRECTO SE TOMARA COMO SOLICITUD NO AUTORIZADA.		
                     EN CASO DE NO ENTREGAR EL FORMATO DE SOLICITUD DE VACACIONES A CAPITAL HUMANO		
                     SE TOMARA COMO SOLICITUD NO AUTORIZADA.		</p>

                     <script src="html2pdf.bundle.min.js"></script>
                     <script src="script.js"></script> 
                 <script src="assets/js/jquery.min.js"></script>
                     <table id="table1" class="table mb-0 table-striped"> 
                <tr>
              
                <th style="text-align:center" scope="col"></th>
                <th style="text-align:center" scope="col">PERIODO</th>
                <th style="text-align:center" scope="col">DÍAS DE PERIODO</th>
               <th style="text-align:center" scope="col">DÍAS DISFRUTADOS</th>
               <th style="text-align:center" scope="col">DÍAS POR DISFRUTAR</th>
                 </tr>

              
                
              
                <tr>
                  <th style="background: #c9e8e8" scope="row"> <label for="validationCustom03" class="form-label">TOTAL DE DÍAS QUE LE CORRESPONDEN DEL PERIODO:</label></th>
                  <td style="background: #c9e8e8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_PERIODO; ?>" name="V_PERIODO"></td>
                  <td  style="background: #c9e8e8"><input type="tel" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_DIAS_PERIODO; ?>" name="V_DIAS_PERIODO"></td>
                  <td style="background: #c9e8e8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_DIAS_DISFRUTADOS; ?>" name="V_DIAS_DISFRUTADOS"></td>
                  <td style="background: #c9e8e8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_DIAS_PORDISFRUTAR; ?>" name="V_DIAS_PORDISFRUTAR"></td>
                </tr>
               
                  </table>
                  <table class="table mb-1 table-striped">
              
              <tr>
              <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE SOLICITUD:</label></th>
                 <td style="background:#fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_SOLICITUD; ?>" name="V_FECHA_SOLICITUD"></td>
                 <th style="background:#d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">TOTAL DE DÍAS SOLICITADOS:</label></th>
                 <td style="background:#d4f6c8"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_TOTAL_DIAS_SOLICITADOS; ?>" name="V_TOTAL_DIAS_SOLICITADOS"></td>
                 <th style="background:#fbeee6"scope="row"> <label for="validationCustom03" class="form-label">FECHA DE INICIO DEL PERIODO VACACIONAL:</label></th>
                 <td style="background:#fbeee6"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_DEL_PERIODO; ?>" name="V_FECHA_DEL_PERIODO"></td>
                 </tr>
                 <tr>
              <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA FINAL DEL PERIODO VACACIONAL:</label></th>
                 <td style="background:#fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_FINAL_PERIODO; ?>" name="V_FECHA_FINAL_PERIODO"></td>
                 <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">FECHA EN LA ESTARE DE REGRESO EN OFICINA LABORANDO:</label></th>
                 <td style="background:#d4f6c8" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_REGRESO; ?>" name="V_FECHA_REGRESO"></td>
                 <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">AUTORIZADO POR :</label></th>
                 <td style="background:#fbeee6"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_AUTORIZADO_POR; ?>" name="V_AUTORIZADO_POR"></td>
                 </tr>
                 <tr>
              <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">AUTORIZADO POR :</label></th>
                 <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_AUTORIZADO_POR2; ?>" name="V_AUTORIZADO_POR2"></td>
                 <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE AUTORIZACIÓN 1:</label></th>
                 <td style="background:#d4f6c8" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_AUTORIZACION; ?>" name="V_FECHA_AUTORIZACION"></td>
                 <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE AUTIZACIÓN 2:</label></th>
                 <td style="background:#fbeee6"><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_FECHA_AUTORIZACION2; ?>" name="V_FECHA_AUTORIZACION2"></td>
                 </tr>
                 <tr>
                 <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">SUBIR SOLICITUD FIRMADA:</label></th>
                 <td style="background:#fbeee6"><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_SUBIR_SOLICITUD; ?>" name="V_SUBIR_SOLICITUD"></td>
                 <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">MOTIVO DE VACACIONES:</label></th>
                 <td style="background:#d4f6c8 "><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $V_MOTIVO_VACACIONES; ?>" name="V_MOTIVO_VACACIONES"></td>




                  <table class="table mb-0 table-striped">
               <tr>
             
                   
            <th>
              
<?php if($conexion->variablespermisos('','VACACIONES','guardar')=='si'){ ?>



	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="previewHtml">GUARDAR</button> <?php } ?></th></tr>
                      
                      
              <?php if($conexion->variablespermisos('','VACACIONES','email')=='si'){ ?>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="V_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $V_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarimailVACACIONES">ENVIAR POR IMAIL</button></th>    <?php } ?>
                 
                  </tr>
                    </table>
                            
	             
    
	               
                  
          
                     
					     </form>
               </div> 
                </div>
			           	</div>


