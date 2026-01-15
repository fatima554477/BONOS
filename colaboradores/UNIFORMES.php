<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar18" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar18" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;UNIFORMES</p><div  id="mensajeUNIFORMES22"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWUNIFORES; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWUNIFORES; ?>%</div></div>
								</div></div></strong>
								
								
								
<div  id="mensajeUNIFORMES22"></div>
								
								
								
								
								
	        <div id="target18" style="display:block;"  class="content2">
			
			
			
			
			
<?php 
if($fechaIngresoUNIFORM==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoUNIFORM.'</strong><BR/><BR/>';
}
?>	
			
			
			
	
 

 
			
			
			
   <th><?php if($conexion->variablespermisos('','UNIFORMES','guardar')=='si'){ ?>
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="UNIFORMESform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    
                    <table class="table mb-0 table-striped">
                    <tr>
              
              <center> <strong> <h6 scope="col">UNIFORMES</h6></center></strong>
                 </tr>
                 <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">ARTICULO:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_ARTICULO; ?>" name="U_ARTICULO"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">CANTIDAD:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_CANTIDAD; ?>" name="U_CANTIDAD"></td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">TALLA:</label></th>
				  
				  
                   <td style="background: #fbeee6" > 
				   
				          <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" required="" name="U_TALLA"> 
                         <option selected="" value="">SELECCIONA UNA OPCIÓN</option>
                         <option style="background:#d9f9fa" <?php if($U_TALLA=='XXS'){echo "selected";} ?> value="XXS">XXS</option>
                         <option style="background:#e1f5de" <?php if($U_TALLA=='XS'){echo "selected";} ?> value="XS">XS</option>
                         <option style="background:#f4d4d3" <?php if($U_TALLA=='S'){echo "selected";} ?> value="S">S</option>
                         <option style="background:#edf996" <?php if($U_TALLA=='M'){echo "selected";} ?> value="M">M</option>
                         <option style="background:#c3c6f4" <?php if($U_TALLA=='L'){echo "selected";} ?> value="L">L</option>
                         <option style="background:#f4c3f3" <?php if($U_TALLA=='XL'){echo "selected";} ?> value="XL">XL</option> 
                         <option style="background:#d9f9fa" <?php if($U_TALLA=='XXL'){echo "selected";} ?> value="XXL">XXL</option>
                         <option style="background:#f4c3d5" <?php if($U_TALLA=='3XL'){echo "selected";} ?> value="3XL">3XL</option>
                         <option style="background:#e1f5de" <?php if($U_TALLA=='4XL'){echo "selected";} ?> value="4XL">4XL</option>
						 </select>
						 </td> 
                
                  </tr>
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">MARCA:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_MARCA; ?>" name="U_MARCA"></td>
				  
				  
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">MODELO (FOTOS DE UNIFORMES Y EQUIPO A ESCOGER):</label></th>
				  
				  
                  <td style="background:#d4f6c8" >
				  
				  

				  
		
                         <div class="col-md-4">

		                    <div id="drop_file_zone" ondrop="upload_file(event,'U_FOTOS')" ondragover="return false" style="width:300px;">
		                    <p>Suelta aquí o busca tu archivo</p>
		                    <p><input class="form-control form-control-sm" id="U_FOTOS" type="text" onkeydown="return false" onclick="file_explorer('U_FOTOS');" style="width:250px;" VALUE="<?php echo $U_FOTOS; ?>" required /></p>
	                    	<input type="file" name="U_FOTOS" id="nono"/>
	                      <div id="1U_FOTOS">
		                         <?php
	                     	if($U_FOTOS!=""){echo "<a target='_blank' href='includes/archivos/".$U_FOTOS."'>Visualizar!</a>"; 
	                       	}?></div>
	                         </div>	
	                         </div>

		
				  
				  </td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE ENTREGA:</label></th>
                  <td style="background:#fbeee6"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_FECHA_ENTREGA; ?>" name="U_FECHA_ENTREGA"></td>
                
<input type="hidden" value="iunifores" name="iunifores"/>

                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE DEVOLUCIÓN:</label></th>
                  <td style="background:#fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_FECHA_DEVOLUCION; ?>" name="U_FECHA_DEVOLUCION"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">OBSERVACIONES:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $U_OBSERVACIONES; ?>" name="U_OBSERVACIONES"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">CARGAR CARTA DE RECIBIDO FIRMADA:</label></th>
                  <td style="background:#fbeee6">
				  
				  

                         <div class="col-md-4">

		                    <div id="drop_file_zone" ondrop="upload_file(event,'U_CARGAR_CARTA')" ondragover="return false" style="width:300px;">
		                    <p>Suelta aquí o busca tu archivo</p>
		                    <p><input class="form-control form-control-sm" id="U_CARGAR_CARTA" type="text" onkeydown="return false" onclick="file_explorer('U_CARGAR_CARTA');" style="width:250px;" VALUE="<?php echo $U_CARGAR_CARTA; ?>" required /></p>
	                    	<input type="file" name="U_CARGAR_CARTA" id="nono"/>
	                      <div id="1U_CARGAR_CARTA">
		                         <?php
	                     	if($U_CARGAR_CARTA!=""){echo "<a target='_blank' href='includes/archivos/".$U_CARGAR_CARTA."'>Visualizar!</a>"; 
	                       	}?></div>
	                         </div>	
	                         </div>				  
				  
				  </td>
                
               
                  </tr>
                     </table>
                  <table class="table mb-0 table-striped">
               <tr>
              <th>

	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarUNIFORMES">GUARDAR</button><div style="
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


id="mensajeUNIFORMES2"/> </th>
                      
                  
                        </tr></table>
                        <?php if($conexion->variablespermisos('','UNIFORMES','email')=='si'){ ?>
                   <table>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="U_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $U_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarUNIFORMES">ENVIAR POR IMAIL</button></th>     <?php } ?>  
                 
                  </tr>
                    </table>      
                    <?php } ?>
                            



            


                     
					     </form>
						  
 <?php 
$querycontras = $conexion->listadouniformes();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
    <table class="table table-striped table-bordered" style="width:100%"  id="reseteateUNIFORMES" name="reseteateUNIFORMES">
      <tr style="background:#c9e8e8;text-align:center">
       <th width="20%">ARTÍCULO</th>
       <th width="10%">CANTIDAD</th>  
       <th width="10%">TALLA</th> 
       <th width="10%">MARCA</th>	   
       <th width="10%">FOTO</th> 	   
  	   
        
       <th width="20%">FECHA ENTREGA</th>  
       <th width="20%">FECHA DEVOLUCIÓN</th>
       <th width="20%">CARGAR CARTA DE<br> RECIBIDO FIRMADA:</th>
	
      </tr>
<?php
while($row = mysqli_fetch_array($querycontras)) {	
    $urlU_CARGAR_CARTA = $conexion->descargararchivo($row["U_CARGAR_CARTA"]);
    $urlU_FOTOS = $conexion->descargararchivo($row["U_FOTOS"]);
?>
<tr style='background:#f5f9fc;text-align:center'>
	<td><?php echo $row["U_ARTICULO"]; ?></td>
       <td><?php echo $row["U_CANTIDAD"]; ?></td>
       <td><?php echo $row["U_TALLA"]; ?></td>
       <td><?php echo $row["U_MARCA"]; ?></td>
       
       <td><?php echo $urlU_FOTOS; ?></td>
       <td><?php echo $row["U_FECHA_ENTREGA"]; ?></td>
       <td><?php echo $row["U_FECHA_DEVOLUCION"]; ?></td>
      <td ><?php echo $urlU_CARGAR_CARTA; ?></td>
       <td><?php if($conexion->variablespermisos('','UNIFORMES','modificar')=='si'){ ?>
<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataUNIFORMES" />
<?php } ?></td>
	   
	   
       <td>
<?php if($conexion->variablespermisos('','UNIFORMES','borrar')=='si'){ ?>


<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataUNIFORMES2" /> <?php } ?></td>
	   
	   
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
					  </div>
				    </div>
              
              