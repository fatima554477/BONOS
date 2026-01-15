<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar21" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar21" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CARGA MASIVA DE MATERIAL Y EQUIPO ASIGNADO</p><div  id="mensajeMEASIGNADO1"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWRESUMENMYE; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWRESUMENMYE; ?>%</div></div>
								</div></div></strong>
	        <div id="target21" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="RESUMENMYEform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    </table>
    <div style="width: 400px;" class="mobile-menu-button">
    <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control" type="text" placeholder="BURCAR">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div></div>
             </form>
             <hr>
                    <table class="table mb-0 table-striped">
                    <tr>
              
              <center> <strong> <h6 scope="col">CARGA MASIVA DE MATERIAL Y EQUIPO  ASIGNADO</h6></center></strong>
			  <table>
				<tr>
					<td>  <div class="col-md-4">
                          <label for="validationCustom02" class="form-label">DEPARTAMENTO:</label>
                          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="DEPARTAMENTO"> >
                         <option selected="">SELECCIONA UNA OPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($DIRECCION){echo "selected";}; ?> value="">DIRECCIÓN</option>
                          <option style="background: #a3e4d7" <?php if($VENTAS){echo "selected";}; ?> value="">VENTAS</option>
                          <option style="background: #e8f6f3" <?php if($OPERACIONES){echo "selected";}; ?> value="">OPERACIONES</option>
                          <option style="background: #fdf2e9" <?php if($DISENO){echo "selected";}; ?> value="">DISEÑO</option>
                          <option style="background: #eaeded" <?php if($VUELOS){echo "selected";}; ?> value="">VUELOS</option>
                          <option style="background: #fdebd0" <?php if($SISTEMAS){echo "selected";}; ?> value="">SISTEMAS</option>
                          <option style="background: #ebdef0" <?php if($BACK_STAGE){echo "selected";}; ?> value="">BACK STAGE</option>
                          <option style="background: #d6eaf8" <?php if($ADMINISTRACION){echo "selected";}; ?> value="">ADMINISTRACION</option>
                          <option style="background: #fef5e7" <?php if($AUDITORIA){echo "selected";}; ?> value="">AUDITORIA</option>
                          <option style="background: #ebedef" <?php if($CONTABILIDAD){echo "selected";}; ?> value="">CONTABILIDAD</option>
                          <option style="background: #fbeee6" <?php if($CAPITAL_HUMANO){echo "selected";}; ?> value="">CAPITAL HUMANO</option>
                          <option style="background: #e8f6f3" <?php if($RECEPCION){echo "selected";}; ?> value="">RECEPCIÓN</option>
                          <option style="background: #c9e8e8" <?php if($LIMPIEZA){echo "selected";}; ?> value="">LIMPIEZA</option>
                        </select></div>
             
			
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>No</th>
										<th>NOMBRE(S)</th>
										<th>APELLIDO</th>
										<th>APELLIDO</th>
										<th>ARTÍCULO</th>
										<th>CANTIDAD</th>
                                        <th>MARCA</th>
										<th>MODELO</th>
										<th>N0. DE SERIE</th>
                                        <th>FECHA ENTREGA</th>
                                        <th>FECHA DEVOLUCIÓN</th>
                                        <th>OBSERVACIONES</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO; ?>" name="CM_NO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NOMBRE; ?>" name="CM_NOMBRE"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_1; ?>" name=CM_APELLIDO_1""></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_2; ?>" name="CM_APELLIDO_2"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_ARTICULO; ?>" name="CM_ARTICULO"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_CANTIDAD; ?>" name="CM_CANTIDAD"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_MARCA; ?>" name="CM_MARCA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NODELO; ?>" name="CM_NODELO"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO_SERIE; ?>" name="CM_NO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_ENTREGA; ?>" name="CM_FECHA_ENTREGA"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_DEVOLUCION; ?>" name="CM_FECHA_DEVOLUCION"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_OBSERVACIONES; ?>" name="CM_OBSERVACIONES"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO; ?>" name="CM_NO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NOMBRE; ?>" name="CM_NOMBRE"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_1; ?>" name=CM_APELLIDO_1""></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_2; ?>" name="CM_APELLIDO_2"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_ARTICULO; ?>" name="CM_ARTICULO"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_CANTIDAD; ?>" name="CM_CANTIDAD"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_MARCA; ?>" name="CM_MARCA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NODELO; ?>" name="CM_NODELO"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO_SERIE; ?>" name="CM_NO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_ENTREGA; ?>" name="CM_FECHA_ENTREGA"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_DEVOLUCION; ?>" name="CM_FECHA_DEVOLUCION"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_OBSERVACIONES; ?>" name="CM_OBSERVACIONES"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO; ?>" name="CM_NO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NOMBRE; ?>" name="CM_NOMBRE"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_1; ?>" name=CM_APELLIDO_1""></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_2; ?>" name="CM_APELLIDO_2"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_ARTICULO; ?>" name="CM_ARTICULO"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_CANTIDAD; ?>" name="CM_CANTIDAD"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_MARCA; ?>" name="CM_MARCA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NODELO; ?>" name="CM_NODELO"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO_SERIE; ?>" name="CM_NO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_ENTREGA; ?>" name="CM_FECHA_ENTREGA"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_DEVOLUCION; ?>" name="CM_FECHA_DEVOLUCION"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_OBSERVACIONES; ?>" name="CM_OBSERVACIONES"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO; ?>" name="CM_NO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NOMBRE; ?>" name="CM_NOMBRE"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_1; ?>" name=CM_APELLIDO_1""></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_APELLIDO_2; ?>" name="CM_APELLIDO_2"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_ARTICULO; ?>" name="CM_ARTICULO"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_CANTIDAD; ?>" name="CM_CANTIDAD"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_MARCA; ?>" name="CM_MARCA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NODELO; ?>" name="CM_NODELO"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_NO_SERIE; ?>" name="CM_NO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_ENTREGA; ?>" name="CM_FECHA_ENTREGA"></td>
                                        <td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_FECHA_DEVOLUCION; ?>" name="CM_FECHA_DEVOLUCION"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $CM_OBSERVACIONES; ?>" name="CM_OBSERVACIONES"></td>
									</tr>
                                    </table>
                                    <table>
                                    <th>
	                <button class="btn btn-sm btn-outline-primary px-5" type="button" id="exportahabilidades1r">EXPORTAR</button></th>
                  
                    <th>
	                <button class="btn btn-sm btn-outline-primary px-5"  type="button" id="imprimirhabilidades1">IMPRIMIR</button></th></tr>
                   </tr>
                   </table>
                   <table>
                    <tr>
                
                    <td ><textarea style="width: 800px;px;" name="ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarMEASIGNADO1">ENVIAR POR IMAIL</button></th>   
                 
                  </tr>
                    </table>
                            
 
 
                         </form>   
						 
								</tfoot>
							</table>
						</div>
					</div>



                     
					     </form>
               </div> 
                </div>
			           	</div>