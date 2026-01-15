<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar20" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar20" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;RESUMEN DE MATERIALES, EQUIPO, UNIFORMES Y POLIZAS ASIGNADOS</p><div  id="mensajeMEASIGNADO1"><div class="progress" style="width: 25%;">
									</div>
								</div></div></strong>
	        <div id="target20" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
		  <div id="reset">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="RESUMENMYEform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
    </table>
    <div style="width: 400px;" class="mobile-menu-button">
    <form class="searchbar">
                <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><ion-icon name="search-sharp"></ion-icon></div>
                <input class="form-control" type="text" placeholder="BURCAR">
                <div class="position-absolute top-50 translate-middle-y search-close-icon"><ion-icon name="close-sharp"></ion-icon></div></div>
             </form>
             <hr>
                    <table class="table table-striped table-bordered" style="width:100%" >
                    <tr>
              

             
			
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
						
						
						
	<center> <strong> <h6 scope="col">RESUMEN DE MATERIALES, EQUIPO, UNIFORMES Y POLIZAS ASIGNADOS</h6></strong></center>	



				 
		<table id="example2"  class="table table-striped table-bordered" style="width:100%" >
	<tr ><td colspan="9" style="text-align: center;"><strong>RESUMEN DE UNIFORMES</strong></td></tr>

				<tr style="background:#c9e8e8;text-align:center">
						<td>ARTICULO</td>
						<td>CANTIDAD</td>
						<td>MARCA</td>
						<td>TALLA O MODELO</td>

						<td>FOTOS</td>
						<td>FECHA DE ENTREGA</td>
						<td>FECHA DEVOLUCIÓN</td>
						<td>OBSERVACIONES</td>
						<td>CARTA RECIBIDO FIRMADA</td>
					</tr>

			
 <?php 
$querycontras = $conexion->listadouniformes();

      while($row = mysqli_fetch_array($querycontras))
      {
		  		  if($row["U_CARGAR_CARTA"]!=''){
			$U_CARGAR_CARTA = "  <a target='_blank' href='includes/archivos/". $row["U_CARGAR_CARTA"]."'>Visualizar!</a>";
		  }
		  
		  		  if($row["U_FOTOS"]!=''){
			$U_FOTOS = "  <a target='_blank' href='includes/archivos/". $row["U_FOTOS"]."'>Visualizar!</a>";
		  }		  
		  
		  ?>
	  
	<tr style="background:#f5f9fc;text-align:center"">

	<td><?php echo $row["U_ARTICULO"]; ?></td>
	<td><?php echo $row["U_CANTIDAD"]; ?></td>
	<td><?php echo $row["U_MARCA"]; ?></td>
	<td><?php echo $row["U_TALLA"]; ?></td>

	<td><?php echo $U_FOTOS; ?></td>
	<td><?php echo $row["U_FECHA_ENTREGA"]; ?></td>
	<td><?php echo $row["U_FECHA_DEVOLUCION"]; ?></td>
	<td><?php echo $row["U_OBSERVACIONES"]; ?></td>
	<td><?php echo $U_CARGAR_CARTA; ?></td>

	
	</tr>	  
      <?php
      }
      ?>

 	<tr class="table table-striped table-bordered" style="width:100%" >
	<td style=" padding: 20px;text-align:center "></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>									
	</table>
									

							
			<table id="example2" class="table table-striped table-bordered" style="width:100%" >
	<tr ><td colspan="9" style="text-align: center;"><strong>RESUMEN DE MATERIAL Y EQUIPO</strong></td></tr>
				<tr  style="background:#c9e8e8;text-align:center"">
						<td>ARTICULO</td>
						<td>CANTIDAD</td>
						<td>MARCA</td>
						<td>TALLA O MODELO</td>
						<td>NUMERO DE SERIE</td>

						<td>FECHA DE ENTREGA</td>
						<td>FECHA DEVOLUCIÓN</td>
						<td>OBSERVACIONES</td>
						<td>CARTA RECIBIDO FIRMADA</td>
					</tr>
								
 <?php 
$queryMaterialEquipo = $conexion->listadoMaterialEquipo();

      while($row = mysqli_fetch_array($queryMaterialEquipo))
      {
		  if($row["MA_CARGAR_CARTA"]!=''){
			$MA_CARGAR_CARTA = "  <a target='_blank' href='includes/archivos/". $row["MA_CARGAR_CARTA"]."'>Visualizar!</a>";
		  }
		  ?>
	  
	<tr style="background:#f5f9fc;text-align:center">
	<td><?php echo $row["MA_ARTICULO"]; ?></td>
	<td><?php echo $row["MA_CANTIDAD"]; ?></td>
	<td><?php echo $row["MA_MARCA"]; ?></td>
	<td><?php echo $row["MA_MODELO"]; ?></td>
	<td><?php echo $row["MA_NUMERO_SERIE"]; ?></td>

	<td><?php echo $row["MA_FECHA_ENTREGA"]; ?></td>
	<td><?php echo $row["MA_FECHA_DEVOLUCION"]; ?></td>
	<td><?php echo $row["MA_OBSERVACIONES"]; ?></td>
	<td><?php echo $MA_CARGAR_CARTA; ?></td>
	</tr>	  
      <?php
      }
      ?>

 	<tr class="table table-striped table-bordered" style="width:100%"   >
	<td style=" padding: 20px;text-align:center" "></td>
	<td></td>
	<td></td>
	<td></td>

	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>									
	</table>	
									
									
									
					
			<table id="example2" class="table table-striped table-bordered" style="width:100%" >
	<tr ><td colspan="8" style="text-align: center;"><strong>RESUMEN DE  POLIZAS Y DOCUMENTOS</strong></td></tr>
				<tr  style="background:#c9e8e8;text-align:center">
						<td>TIPO DOCUMENTO</td>
						<td>FECHA ENTREGA</td>
						<td>FECHA INICIO</td>
						<td>FECHA FINAL</td>
						<td>EMPRESA</td>

						<td>TELEFONO EMERGENCIA</td>
						<td>OBSERVACIONES</td>
						<td>CARGAR CARTA</td>

					</tr>
								
 <?php 
$queryMaterialEquipo = $conexion->listadoPolizas();

      while($row = mysqli_fetch_array($queryMaterialEquipo))
      {
		  if($row["PD_CARGAR_DOCUMENTO"]!=''){
			$PD_CARGAR_DOCUMENTO = "  <a target='_blank' href='includes/archivos/". $row["PD_CARGAR_DOCUMENTO"]."'>Visualizar!</a>";
		  }
  
		  ?>
	  
	<tr style="background:#f5f9fc;text-align:center">
	<td><?php echo $row["PD_TIPO_DOCUMENTO"]; ?></td>
	<td><?php echo $row["PD_FECHA_ENTREGA"]; ?></td>
	<td><?php echo $row["PD_FECHA_INICIO"]; ?></td>
	<td><?php echo $row["PD_FECHA_FINAL"]; ?></td>
	<td><?php echo $row["PD_EMPRESA"]; ?></td>
	<td><?php echo $row["PD_TELEFONO_EMERGENCIA"]; ?></td>
	<td><?php echo $row["PD_OBSERVACIONES"]; ?></td>
	<td><?php echo $PD_CARGAR_DOCUMENTO; ?></td>
	</tr>	  
      <?php
      }
      ?>

 	<tr class="table table-striped table-bordered" style="width:100%"  >
	<td style=" padding: 20px;text-align:center "></td>
	<td></td>
	<td></td>
	<td></td>

	<td></td>
	<td></td>
	<td></td>
	<td></td>

	</tr>									
	</table>	
				
									
									
									
									
									
									
									
									
									
									
									
									
                                    <table>
                                    <th>
	                <button class="btn btn-sm btn-outline-primary px-5" type="button" id="exportahabilidades1r">EXPORTAR</button></th>
                  
                    <th>
	                <button class="btn btn-sm btn-outline-primary px-5"  type="button" id="imprimirhabilidades1">IMPRIMIR</button></th></tr>
                   </tr>
                   </table>
				   <?php if($conexion->variablespermisos('','RESUMEN_DE_MATERIALES','email')=='si'){ ?>
                   <table>
                    <tr>
                
                    <td ><textarea style="width: 800px;px;" name="ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarMEASIGNADO1">ENVIAR POR IMAIL</button></th>   <?php } ?>
                 
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