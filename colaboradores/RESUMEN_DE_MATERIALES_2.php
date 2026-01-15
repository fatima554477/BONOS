<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar20" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar20" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;RESUMEN DE MATERIALES, EQUIPO, UNIFORMES Y POLIZAS ASIGANADOS</p><div  id="mensajeMEASIGNADO1"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo 100; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo 100; ?>%</div></div>
								</div></div></strong>
	        <div id="target20" style="display:block;"  class="content2">
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
              
              <center> <strong> <h6 scope="col">RESUMEN DE MATERIALES, EQUIPO, UNIFORMES Y POLIZAS ASIGANADOS</h6></center></strong>
             
			
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>UNIFORME, EQUIPO O POLIZA</th>
										<th>CANTIDAD</th>
										<th>MARCA</th>
										<th>TALLA O MODELO</th>
										<th>NUMERO DE SERIE</th>
										<th>FOTOS</th>
                                        <th>FECHA DE ENTREGA</th>
										<th>FECHA DEVOLUCIÓN</th>
										<th>OBSERVACIONES</th>
                                        <th>CARTA RECIBIDO FIRMADA</th>
									</tr>
								</thead>
								<tbody>
									<tr>
									
									
									

 
 <?php 
$querycontras = $conexion->listadouniformes();

?>

      <?php
      while($row = mysqli_fetch_array($querycontras))
      {
		  /*U_ARTICULO
		  U_CANTIDAD 	varchar(100) 	YES 		NULL 	
U_TALLA 	varchar(100) 	YES 		NULL 	
U_MARCA 	varchar(100) 	YES 		NULL 	
U_FECHA_ENTREGA 	varchar(100) 	YES 		NULL 	
iunifores 	varchar(100) 	YES 		NULL 	
U_FECHA_DEVOLUCION 	varchar(100) 	YES 		NULL 	
U_OBSERVACIONES 	varchar(100) 	YES 		NULL 	
U_ENVIAR_IMAIL 	varchar(100) 	YES 		NULL 	
idRelacion 	int(15) 	YES 		NULL 	
U_CARGAR_CARTA 	varchar(100) 	YES 		NULL 	
U_FOTOS 	varchar(100) 	YE*/
      ?>
	  
	<tr>
	<th><?php echo $row["U_ARTICULO"]; ?></th>
	<th><?php echo $row["U_CANTIDAD"]; ?></th>
	<th><?php echo $row["U_MARCA"]; ?></th>
	<th><?php echo $row["U_TALLA"]; ?></th>
	<th><?php echo $row["U_ARTICULO"]; ?></th>
	<th><?php echo $row["U_FOTOS"]; ?></th>
	<th><?php echo $row["U_FECHA_ENTREGA"]; ?></th>
	<th><?php echo $row["U_FECHA_DEVOLUCION"]; ?></th>
	<th><?php echo $row["U_OBSERVACIONES"]; ?></th>
	<th><?php echo $row["U_CARGAR_CARTA"]; ?></th>
	</tr>	  
      <?php
      }
      ?>

 											
									
									
										<!--<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>
                                    <tr>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_ARTICULO; ?>" name="RE_ARTICULO"></td></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CANTIDAD; ?>" name="RE_CANTIDAD"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_MARCA; ?>" name="RE_MARCA"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_TALLA_MODELO; ?>" name="RE_TALLA_MODELO"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_NUMERO_SERIE; ?>" name="RE_NUMERO_SERIE"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FOTOS; ?>" name="RE_FOTOS"></td>
                                        <td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_ENTREGA; ?>" name="RE_FECHA_ENTREGA"></td>
										<td><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_FECHA_DEVOLUCION; ?>" name="RE_FECHA_DEVOLUCION"></td>
										<td><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_OBSERVACIONES; ?>" name="RE_OBSERVACIONES"></td>
										<td><input type="file" class="form-control" id="validationCustom03" required=""  value="<?php echo $RE_CARTA_RECIBIDO; ?>" name="CARTA_RECIBIDO"></td>
									</tr>-->
                                    
									
									</tr>
									</tbody>
									
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