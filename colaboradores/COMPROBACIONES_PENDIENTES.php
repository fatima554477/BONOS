<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar15" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar15" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;COMPROBACIONES PENDIENTES</p><div  id="mensajeCOMPROBACIONESP"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo 0; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="0"><?php echo 0; ?>%</div></div>
								</div></div></strong>
	        <div id="target15" style="display:block;"  class="content2">
			
			
			
			
<?php 
if($fechaIngresoPendientes==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoPendientes.'</strong><BR/><BR/>';
}
?>
			
			
			
			
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="MEASIGNADO1form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

              <table class="table mb-0 table-striped">

                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">JALAR POR NÚMERO DE TARJETA LOS CARGOS NO COMPROBADOS:</label></th>
                  <th style="background:#fef5e7">
                         <div class="col-md-4">

		                    <div id="drop_file_zone" ondrop="upload_file(event,'JALAR_NUMERO_TARJETA')" ondragover="return false" style="width:400px;">
		                    <p>Suelta aquí o busca tu archivo</p>
		                    <p><input class="form-control form-control-sm" id="JALAR_NUMERO_TARJETA" type="text" onkeydown="return false" onclick="file_explorer('JALAR_NUMERO_TARJETA');" style="width:350px;" VALUE="<?php echo $JALAR_NUMERO_TARJETA; ?>" required /></p>
	                    	<input type="file" name="JALAR_NUMERO_TARJETA" id="nono"/>
	                      <div id="1JALAR_NUMERO_TARJETA">
		                         <?php
	                     	if($JALAR_NUMERO_TARJETA!=""){echo "<a target='_blank' href='includes/archivos/".$JALAR_NUMERO_TARJETA."'>Visualizar!</a>"; 
	                       	}?></div>
	                         </div>	
	                         </div>


				  </th>
            
                  <th><?php if($conexion->variablespermisos('','COMPROBACIONES_PENDIENTES','guardar')=='si'){ ?>


	                <button class="btn btn-sm btn-outline-primary px-5" type="button" id="exportarCOMPROBACIONESP">GUARDAR</button><?php } ?>
				</th>
                  
                <?php if($conexion->variablespermisos('','COMPROBACIONES_PENDIENTES','email')=='si'){ ?>
                    <td ><textarea style="width:500px;px;" name="COMPROBAENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $COMPROBAENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCOMPROBACIONESP">ENVIAR POR IMAIL</button></th>   <?php } ?>
                 
                  </tr>
                    </table>
                            



                     
					     </form>
               </div> 
                </div>
			           	</div>