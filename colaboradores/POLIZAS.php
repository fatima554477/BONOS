<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar19" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar19" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;POLIZAS Y DOCUMENTOS</p><div  id="mensajePOLIZASYDOCU22"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWporpoliza; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWporpoliza; ?>%</div></div>
								</div></div></strong>
								
								
								
	        <div id="target19" style="display:block;"  class="content2">
			
			
			
			
			
			
<?php 
if($fechaIngresopoliza==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresopoliza.'</strong><BR/><BR/>';
}
?>	
			
			
 

			
			
			
			
   <?php if($conexion->variablespermisos('','POLIZAS','guardar')=='si'){ ?>
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="POLIZASYDOCUform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
                    
                    <table class="table mb-0 table-striped">
                    <tr>
              
              <center> <strong> <h6 scope="col">POLIZAS Y DOCUMENTOS</h6></center></strong>
                 </tr>
                 <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">TIPO DE DOCUMENTO:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_TIPO_DOCUMENTO; ?>" name="PD_TIPO_DOCUMENTO"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE ENTREGA:</label></th>
                  <td style="background:#d4f6c8" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_FECHA_ENTREGA; ?>" name="PD_FECHA_ENTREGA"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE INICIO DE LA POLIZA:</label></th>
                  <td style="background:#fbeee6"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_FECHA_INICIO; ?>" name="PD_FECHA_INICIO"></td>
                
               
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA FINAL DE LA POLIZA:</label></th>
                  <td style="background:#fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_FECHA_FINAL; ?>" name="PD_FECHA_FINAL"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">EMPRESA A LA QUE SE LE CONTRATO:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_EMPRESA; ?>" name="PD_EMPRESA"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">TELEFONO DE EMERGENCIA DE LA EMPRESA A LA QUE SE LE CONTRATO:</label></th>
                  <td style="background:#fbeee6"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_TELEFONO_EMERGENCIA; ?>" name="PD_TELEFONO_EMERGENCIA"></td>
                
               
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">OBSERVACIONES:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PD_OBSERVACIONES; ?>" name="PD_OBSERVACIONES"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">CARGAR POLIZA O DOCUMENTO:</label></th>
                  <td style="background:#d4f6c8" >
				  

				  
                         <div class="col-md-4">
		                    <div id="drop_file_zone" ondrop="upload_file(event,'PD_CARGAR_DOCUMENTO')" ondragover="return false" style="width:300px;">
		                    <p>Suelta aquí o busca tu archivo</p>
		                    <p><input class="form-control form-control-sm" id="PD_CARGAR_DOCUMENTO" type="text" onkeydown="return false" onclick="file_explorer('PD_CARGAR_DOCUMENTO');" style="width:250px;" VALUE="<?php echo $PD_CARGAR_DOCUMENTO; ?>" required /></p>
	                    	<input type="file" name="PD_CARGAR_DOCUMENTO" id="nono"/>
	                      <div id="1PD_CARGAR_DOCUMENTO">
		                         <?php
	                     	if($PD_CARGAR_DOCUMENTO!=""){echo "<a target='_blank' href='includes/archivos/".$PD_CARGAR_DOCUMENTO."'>Visualizar!</a>"; 
	                       	}?></div>
	                         </div>	
						</div>				  
				  
				  
				  
				  
				  
				  
				  

<input type="hidden"  value="ipolias" name="ipolias"/>                
               
                  </tr>
                    </table>

                  <table class="table mb-0 table-striped">
               <tr>
              <th>

	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarPOLIZASYDOCU">GUARDAR</button><div style="
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


id="mensajePOLIZASYDOCU2"/></th>
                      
                  
                        </tr></table>


                        <?php if($conexion->variablespermisos('','POLIZAS','email')=='si'){ ?>
                   <table>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="PD_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $PD_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarPOLIZASYDOCUimal">ENVIAR POR IMAIL</button></th> <?php } ?>  
                 
                  </tr>
                    </table>   <?php } ?>
                            





                     
					     </form>
						 			
			
			
			
			
			

 <?php 
$queryPolizas = $conexion->listadoPolizas();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
   <table class="table table-striped table-bordered" style="width:100%" id="reseteatePOLIZAS" name="reseteatePOLIZAS">
   
	 
<?php
$urlPD_CARGAR_DOCUMENTO ='';
while($row = mysqli_fetch_array($queryPolizas))
{	
	$urlPD_CARGAR_DOCUMENTO = $conexion->descargararchivo($row["PD_CARGAR_DOCUMENTO"]);
?>
		<tr style="background:#c9e8e8">
       <th width="30%">TIPO DE DOCUMENTO</th>  
       <th width="30%">FECHA DE ENTREGA</th>  
       <th width="30%">FECHA DE INICIO DE LA POLIZA</th>  
       <th width="30%">FECHA FINAL DE LA POLIZA</th>
		</tr>
		<tr>
       <td><?php echo $row["PD_TIPO_DOCUMENTO"]; ?></td>
       <td><?php echo $row["PD_FECHA_ENTREGA"]; ?></td>
       <td><?php echo $row["PD_FECHA_INICIO"]; ?></td>
       <td><?php echo $row["PD_FECHA_FINAL"]; ?></td>
		<tr >	   
	   
		<tr style="background:#c9e8e8">
       <th width="30%">EMPRESA A LA QUE SE LE CONTRATO</th>
       <th width="30%">TELEFONO DE EMERGENCIA DE <br>LA EMPRESA A LA QUE SE LE CONTRATO</th>	
       <th width="30%">OBSERVACIONES</th>	   
       <th width="30%">POLIZA</th>		   
		</tr>
	  
	  
	   	    </tr> 
			<tr style="border-bottom: 1px solid red;  ">
       <td><?php echo $row["PD_EMPRESA"]; ?></td>
       <td><?php echo $row["PD_TELEFONO_EMERGENCIA"]; ?></td>	   
       <td><?php echo $row["PD_OBSERVACIONES"]; ?></td>		   
       <td ><?php echo $urlPD_CARGAR_DOCUMENTO; ?></td>	   
	   
       <td><?php if($conexion->variablespermisos('','POLIZAS','modificar')=='si'){ ?>


<input type="button" name="view" value="Modificar" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataPOLIZAS" /><?php } ?></td>
	   
	   
       <td><?php if($conexion->variablespermisos('','POLIZAS','borrar')=='si'){ ?>


<input type="button" name="view_databorraPOLIZAS" value="borrar" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraPOLIZAS" /><?php } ?></td>
	   
	   
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
				       
			           
					   