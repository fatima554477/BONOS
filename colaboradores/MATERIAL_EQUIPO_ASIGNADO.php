

<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar17" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar17" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;MATERIAL Y EQUIPO ASIGNADO</p><div  id="mensajeMEASIGNADO123"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWMATERIALEQUIPOPORCENTAJE; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWMATERIALEQUIPOPORCENTAJE; ?>%</div></div>
								</div></div></strong>
								
<div  id="mensajeMEASIGNADO123"></div>
								
	        <div id="target17" style="display:block;"  class="content2">
			
<?php 
if($fechaIngresoMATERIALEQUIPO==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoMATERIALEQUIPO.'</strong><BR/><BR/>';
}
?>			


			
			

           <div class="card">
           <div class="card-body">
           <?php if($conexion->variablespermisos('','MATERIAL_EQUIPO_ASIGNADO','guardar')=='si'){ ?>
	         <form class="row g-3 needs-validation was-validated" novalidate="" id="MEASIGNADO12form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
       
                    
                    <table class="table mb-0 table-striped">
                    <tr>
              
              <center> <strong> <h6 scope="col">MATERIAL Y EQUIPO ASIGNADO</h6></center></strong>
                 </tr>
                 <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">ARTÍCULO:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_ARTICULO; ?>" name="MA_ARTICULO"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">CANTIDAD:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_CANTIDAD; ?>" name="MA_CANTIDAD"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">MARCA:</label></th>
                  <td style="background:#fbeee6"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_MARCA; ?>" name="MA_MARCA"></td>
                
               
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">MODELO:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_MODELO; ?>" name="MA_MODELO"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">NÚMERO DE SERIE:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_NUMERO_SERIE; ?>" name="MA_NUMERO_SERIE"></td>
                  <th style="background:#fbeee6" scope="row"> 
				  
				  <label for="validationCustom03" class="form-label">FECHA DE ENTREGA:</label>
				  
				  </th>
                  <td style="background:#fbeee6">
				  
				  <input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_FECHA_ENTREGA; ?>" name="MA_FECHA_ENTREGA">
				  
				  
				  </td>
                
               
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE DEVOLUCIÓN:</label></th>
                  <td style="background:#fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_FECHA_DEVOLUCION; ?>" name="MA_FECHA_DEVOLUCION"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">OBSERVACIONES:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $MA_OBSERVACIONES; ?>" name="MA_OBSERVACIONES"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">CARGAR CARTA DE RECIBIDO FIRMADA:</label></th>
                  <td style="background:#fbeee6">
				  

<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,'MA_CARGAR_CARTA')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="MA_CARGAR_CARTA" type="text" onkeydown="return false" onclick="file_explorer('MA_CARGAR_CARTA');" style="width:250px;" VALUE="<?php echo $MA_CARGAR_CARTA; ?>" required /></p>
		<input type="file" name="MA_CARGAR_CARTA" id="nono"/>
		<div id="1MA_CARGAR_CARTA">
		<?php
		if($MA_CARGAR_CARTA!=""){echo "<a target='_blank' href='includes/archivos/".$MA_CARGAR_CARTA."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
				  
				  
				  
				  </td>
                
				<input type="hidden" value="IMATERIAL" name="IMATERIAL">

                  </tr>

                  <table class="table mb-0 table-striped">
               <tr>
             
	          </th>
           
                   
            <th>
              




	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarMEASIGNADO12">GUARDAR</button><div style="
    color:#31750d;
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


id="mensajeMEASIGNADO12"/></th>
                      
          
  </tr>   </table>  
     
  <?php if($conexion->variablespermisos('','MATERIAL_EQUIPO_ASIGNADO','email')=='si'){ ?>                               
                   <table>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="MA_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $MA_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarMEASIGNADO1">ENVIAR POR IMAIL</button></th>   <?php } ?>
                 
                  </tr>
                    </table> <?php } ?>
                            


                     
					     </form>
						 
						  <?php 
$querycontras = $conexion->listadoMaterialEquipo();

?>
 
   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
<table class="table table-striped table-bordered" style="width:100%"  id="reseteateMATERIALEQUIPO" name="reseteateMATERIALEQUIPO">
      <tr >
       <th style="background:#c9e8e8" width="30%"></th>  
       <th style="background:#c9e8e8"width="30%"></th>  
       <th style="background:#c9e8e8"width="30%"></th>  
       <th style="background:#c9e8e8"width="30%"></th>
       <th style="background:#c9e8e8"width="30%"></th>
	    </tr> <tr>
       <th style="background:#c9e8e8"width="10%"></th>
       <th style="background:#c9e8e8"width="10%"></th>	
       <th style="background:#c9e8e8"width="10%"></th>	   
       <th style="background:#c9e8e8"width="10%"></th>		   
       <th style="background:#c9e8e8"width="10%"></th>		   
	   
	 
      </tr>

<?php
$urlMA_CARGAR_CARTA ='';
while($row = mysqli_fetch_array($querycontras))
{	
	$urlMA_CARGAR_CARTA = $conexion->descargararchivo($row["MA_CARGAR_CARTA"]);
?>
		<tr>

       <th style="background:#c9e8e8" width="30%">ARTÍCULO</th>  
       <th style="background:#c9e8e8"width="30%">CANTIDAD</th>  
       <th style="background:#c9e8e8"width="30%">MARCA</th>  
       <th style="background:#c9e8e8"width="30%">MODELO</th>
       <th style="background:#c9e8e8"width="30%">CARTA DE RECIBIDO FIRMADA</th>
    
       
		</tr>
		<tr border="0" class="table mb-0 table-striped"  >
       <td><?php echo $row["MA_ARTICULO"]; ?></td>
       <td><?php echo $row["MA_CANTIDAD"]; ?></td>
       <td><?php echo $row["MA_MARCA"]; ?></td>
       <td><?php echo $row["MA_MODELO"]; ?></td>
       <td ><?php echo $urlMA_CARGAR_CARTA; ?></td>
		<tr >	   
	   
		<tr>
       <th style="background:#c9e8e8"width="10%">NÚMERO SERIE</th>
       <th style="background:#c9e8e8"width="10%">FECHA ENTREGA</th>	
       <th style="background:#c9e8e8"width="10%">FECHA DEVOLUCIÓN</th>	   
       <th style="background:#c9e8e8"width="10%">OBSERVACIONES</th>		   
       <th style="background:#c9e8e8"width="10%"></th>		   
		</tr>
	  
	  
	   	    </tr> 
			<tr  style="border-bottom: 1px solid red;  ">
       <td><?php echo $row["MA_NUMERO_SERIE"]; ?></td>
       <td><?php echo $row["MA_FECHA_ENTREGA"]; ?></td>	   
       <td><?php echo $row["MA_FECHA_DEVOLUCION"];?></td>		   
       <td><?php echo $row["MA_OBSERVACIONES"]; ?></td>	   
       <td></td>	   
	   
       <td><?php if($conexion->variablespermisos('','MATERIAL_EQUIPO_ASIGNADO','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataMEASIGNADO12" /><?php } ?></td>
	   
	   
       <td>
<?php if($conexion->variablespermisos('','MATERIAL_EQUIPO_ASIGNADO','borrar')=='si'){ ?>


<input type="button" name="view_databorraEASIGNADO12" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraEASIGNADO12" /><?php } ?></td>
	   
	   
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  
                   
               </div> 
                </div>
			       </div> 
                </div>