<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar24" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar24" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CONVENIO DE SOLICITUD DE PRESTAMO</p><div  id="mensajeCONVENIO2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWCPRESTAPORCENTAJE; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWCPRESTAPORCENTAJE; ?>%</div>
								</div></div></strong>
	        <div id="target24" style="display:block;"  class="content2">
			
	<?php 
if($fechaIngresoCPRESTA==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresoCPRESTA.'</strong>';
}
?>		
		 			
			
   <?php if($conexion->variablespermisos('','CONVENIO_PRESTAMO','guardar')=='si'){ ?>
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="CONVENIOPRESTAMOform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
              <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col">  CONVENIO DE SOLICITUD DE PRESTAMO</th>
         
                 </tr>
              
                <tr>
               <td style="width: 500px;background: #c9e8e8"><p><a href="colaboradores/VistaPreviaPdf.php" class="form-control form-control-sm" id="F_CONVENIO_PRESTAMO" type="text"  style="width:300px;" target="_blank" /><strong>DESCARGAR CONVENIO AQUÍ<strong></a>
	
		<div id="1F_CONVENIO_PRESTAMO">
		<?php
		if($F_CONVENIO_PRESTAMO!=""){echo "<a target='_blank' href='includes/archivos/".$F_CONVENIO_PRESTAMO."'>Visualizar!</a>"; 
		}?></td>
                
               
                  </table>  
                
                  <table class="table mb-1 table-striped">
              
               <tr>
               <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE SOLICITUD:</label></th>
                  <td style="background:#fef5e7"> <input type=type=»text» readonly=»readonly»    class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="CP_FECHA_SOLICITUD">
                          <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">MONTO SOLICITADO:</label></th>
                  <td style="background:#d4f6c8" class="input-group mb-3" > <span  class="input-group-text">$</span>
           <input type="text" aria-label="Dollar amount (with dot and two decimal places)" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_MONTO_SOLICITADO; ?>" name="CP_MONTO_SOLICITADO"></td>
                            <th style="background:#fbeee6"scope="row"> <label for="validationCustom03" class="form-label">DESCUENTO QUINCENAL:</label></th>
                  <td style="background:#fbeee6"class="input-group mb-3" > <span  class="input-group-text">$</span>
           <input type="text" aria-label="Dollar amount (with dot and two decimal places)" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_DESCUENTO_QUINCENA; ?>" name="CP_DESCUENTO_QUINCENA"></td>
                  </tr>
                  <tr>
            
                    
                    <strong> <th style="background:#fef5e7"class="mb-0">CONDICIONES DE PAGO:</th></strong>&nbsp;
                               <div style="background:#fef5e7" class="form-check"> 
                     
             <!--<input value="<?php echo 1; ?>"  name="LUNES"  style="width: 30px;" class="form-check-input " type="checkbox"  id="flexCheckDefault"  <?php if($LUNES == 1){echo 'checked'; }?>>-->
             
             
        <td style="background:#fef5e7">  <input  class="form-check-input" type="checkbox"  checked  value="<?php echo 1; ?>" id="flexCheckIndeterminate"  name="CP_NOMINA_QUINCENAL" <?php if($CP_NOMINA_QUINCENAL == 1){echo 'checked'; }?> >&nbsp;
                      
                                  <label style="background:#CEF6EC" class="form-check-label" for="flexCheckDefault">&nbsp;&nbsp;NOMINA QUINCENAL</label>
                               </div>
                               <div   class="form-check">
							   						   
							   
          <input class="form-check-input" type="checkbox" id="flexCheckChecked  value="<?php echo 1; ?>"  name="CP_NOMINA_MENSUAL" <?php if($CP_NOMINA_MENSUAL == 1){echo 'checked'; }?> >&nbsp;
                                  <label style="background:#b5ecab" class="form-check-label" for="flexCheckChecked">NOMINA MENSUAL</label>
       
                               </div>
                               <div    class="form-check">
          <input class="form-check-input" type="checkbox" checked id="flexCheckIndeterminate"  value="<?php echo 1; ?>" required="" name="CP_AGUINALDO" <?php if($CP_AGUINALDO == 1){echo 'checked'; }?> >&nbsp;
                                  <label style="background:#F8E0E0"  class="form-check-label" for="flexCheckIndeterminate">AGUINALDO</label></div>
                               </div>
                               <div    class="form-check">
          <input class="form-check-input" type="checkbox" checked id="flexCheckIndeterminate"  value="<?php echo 1; ?>" required="" name="CP_BONO" <?php if($CP_BONO == 1){echo 'checked'; }?> >&nbsp;
                                  <label style="background:#F8E0E0"  class="form-check-label" for="flexCheckIndeterminate">BONO</label></div></div>
                                  <div    class="form-check">
          <input class="form-check-input" type="checkbox"  checked id="flexCheckIndeterminate"  value="<?php echo 1; ?>" required="" name="CP_REPARTO_UTILIDADES" <?php if($CP_REPARTO_UTILIDADES == 1){echo 'checked'; }?> >&nbsp;
                                  <label style="background:#F8E0E0"  class="form-check-label" for="flexCheckIndeterminate">REPARTO UTILIDADES</label></div></div></td>


                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">AUTORIZADO POR:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_AUTORIZADO_POR; ?>" name="CP_AUTORIZADO_POR"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE AUTORIZACIÓN:</label></th>
                  <td style="background:#fbeee6"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_FECHA_AUTORIZACION; ?>" name="CP_FECHA_AUTORIZACION"></td>
                  </tr>
                  <tr>
               <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE DEPOSITO:</label></th>
                  <td style="background:#fef5e7">
				  
				  <input type="date" class="form-control" id="validationCustom03"  value="<?php echo $CP_FECHA_DEPOSITO; ?>" name="CP_FECHA_DEPOSITO">
				  
				  </td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">CARGAR CONVENIO DE SOLICITUD DE PRESTAMO FIRMADO:</label></th>
                  <td style="background:#d4f6c8" ><input type="file" class="form-control" id="validationCustom03"  value="<?php echo $CP_CARGAR_CONVENIO; ?>" name="CP_CARGAR_CONVENIO"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">CARGAR FICHA DE DEPOSITO:</label></th>
                  <td style="background:#fbeee6"><input type="file" class="form-control" id="validationCustom03"  value="<?php echo $CP_CARGAR_FICHA; ?>" name="CP_CARGAR_FICHA"></td>
                  </tr>
                    
                     

                    </table>
					
					
			
					
                    <table class="table mb-0 table-striped">
               <tr>
           
                   
            <th>
	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCONVENIOP">GUARDAR</button><div style="
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


id="mensajeCONVENIO"/> </th>
                      
             <input type="hidden" value="iCONVENIOPRESTAMO"  name="iCONVENIOPRESTAMO"/>     

                   </tr>
                    
                
                    </table>
                   <table>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="CP_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $CP_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCONVENIOP">ENVIAR POR IMAIL</button></th>   
               	                    
                  </tr>
                    </table>
                       </form>  
                       <?php } ?>  

 <?php 
$querycontras = $conexion->listadoCONVENIOPRESTAMO();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
     <table class="table table-striped table-bordered" style="width:100%"  class="table mb-0 table-striped"  id="reseteateCONVENIOPRESTAMO" name="reseteateCONVENIOPRESTAMO">
      <tr >
       <th width="30%"></th>  
       <th width="30%"></th>  
       <th width="30%"></th>  

	    </tr> <tr>

       <th width="30%"></th>	
       <th width="30%"></th>	   
       <th width="30%"></th>		   
	
      </tr>
      <?php

      while($row = mysqli_fetch_array($querycontras))
      {
		  
		if($row["CP_CARGAR_CONVENIO"]!=""){$CP_CARGAR_CONVENIO =  "<a target='_blank' href='includes/archivos/".$row["CP_CARGAR_CONVENIO"]."'>Visualizar!</a>"; 
		}	else{
			
			$CP_CARGAR_CONVENIO = "";
			
		}
		
		if($row["CP_CARGAR_FICHA"]!=""){$CP_CARGAR_FICHA =  "<a target='_blank' href='includes/archivos/".$row["CP_CARGAR_FICHA"]."'>Visualizar!</a>"; 
		}	else{
			
			$CP_CARGAR_FICHA = "";
			
		}		  
		  
      ?>
		<tr style="background:#c9e8e8">
       <th width="30%">FECHA SOLICITUD</th>  
       <th width="30%">MONTO SOLICITADO</th>  
       <th width="30%">DESCUENTO QUINCENAL</th>
		</tr>
		
		<tr style="background:#f5f9fc" >
       <td><?php echo $row["CP_FECHA_SOLICITUD"]; ?></td>
       <td>$ <?php echo $row["CP_MONTO_SOLICITADO"]; ?></td>
       <td>$ <?php echo $row["CP_DESCUENTO_QUINCENA"]; ?></td>
		</tr >	   
	   
		<tr style="background:#c9e8e8">
      <th width="30%">FECHA DEPOSITO</th>  
      <th width="30%">AUTORIZADO POR</th>
       <th width="30%">FECHA AUTORIZACION</th>	    
	   

		</tr>
			<tr style="background:#f5f9fc">
		   <td><?php echo $row["CP_FECHA_DEPOSITO"]; ?></td>

       <td><?php echo $row["CP_FECHA_AUTORIZACION"]; ?></td>	   
        </tr>
		
		







<?php
$CP_REPARTO_UTILIDADES =  ISSET($row['CP_REPARTO_UTILIDADES'])?$row['CP_REPARTO_UTILIDADES']:'';
$CP_BONO =  ISSET($row['CP_BONO'])?$row['CP_BONO']:'';
$CP_AGUINALDO =  ISSET($row['CP_AGUINALDO'])?$row['CP_AGUINALDO']:'';
$CP_NOMINA_MENSUAL =  ISSET($row['CP_NOMINA_MENSUAL'])?$row['CP_NOMINA_MENSUAL']:'';
$CP_NOMINA_QUINCENAL =  ISSET($row['CP_NOMINA_QUINCENAL'])?$row['CP_NOMINA_QUINCENAL']:'';
IF($row['CP_REPARTO_UTILIDADES']=='1'){
	$REPARTO1 = 'REPARTO UTILIDADES  <br/>';
}
IF($row['CP_BONO']=='1'){
	$BONO1 = 'BONO  <br/>';
}
IF($row['CP_AGUINALDO']=='1'){
	$CP_AGUINALDO1 = 'AGUINALDO  <br/>';
}
IF($row['CP_NOMINA_MENSUAL']=='1'){
	$CP_NOMINA_MENSUAL1 = 'NOMINA MENSUAL  <br/>';
}
IF($row['CP_NOMINA_QUINCENAL']=='1'){
	$CP_NOMINA_QUINCENAL1 = 'NOMINA QUINCENAL  <br/>';
}

?>
<!--CP_REPARTO_UTILIDADES, CP_BONO, CP_AGUINALDO , CP_NOMINA_MENSUAL, CP_NOMINA_QUINCENA-->
		<tr style="background:#c9e8e8">
       <th width="30%">CONDICIONES PAGO</th>  
       <th width="30%">CARGAR CONVENIO</th>  
       <th width="30%">CARGAR FICHA</th>  
		</tr>
				
		<tr style="background:#f5f9fc">
      <td><?php echo $CP_CONDICIONES_PAGO; ?></td>
       <td><?php echo $CP_CARGAR_CONVENIO; ?></td>
       <td><?php echo $CP_CARGAR_FICHA; ?></td>
	   </tr>
		<tr  style="border-bottom: 1px solid red;" style="background:#c9e8e8" >
       <td COLSPAN="3"><?php echo $REPARTO1.'
'.$BONO1.'
'.$CP_AGUINALDO1.'
'.$CP_NOMINA_MENSUAL1.'
'.$CP_NOMINA_QUINCENAL1; ?></td>
    
	   











		
       <td>
         
<?php if($conexion->variablespermisos('','CONVENIO_PRESTAMO','modificar')=='si'){ ?>

<input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataCONVENIOP" /><?php } ?></td>
	   
	   
       <td>
         
<?php if($conexion->variablespermisos('','CONVENIO_PRESTAMO','borrar')=='si'){ ?>


<input type="button" name="view_databorraCONVENIOP" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraCONVENIOP" /><?php } ?></td>
	   
	   
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  					   
			


<div id="mensajeCONVENIOPAGO2"></div>

 <?php 
$querycontras = $conexion->listadoCONVENIOPAGO();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
    <table class="table table-striped table-bordered" style="width:100%"   id="reseteateCONVENIOPAGO" name="reseteateCONVENIOPAGO">
      <tr style="background:#c9e8e8;text-align:center">
       <th width="30%"></th>  
       <th width="30%"></th>  
       <th width="30%"></th>  

	    </tr> <tr style="background:#c9e8e8;text-align:center">

       <th width="30%"></th>	
       <th width="30%"></th>	   
       <th width="30%"></th>		   
      </tr>
      <?php

      while($row = mysqli_fetch_array($querycontras))
      {	  
		  
      ?>
		<tr style="background:#c9e8e8;text-align:center">
       <th width="30%">FECHA PAGO</th>  
       <th width="30%">MONTO PAGADO</th>  
       <th width="30%">CONCEPTO</th>  
		</tr>
  		
		<tr style="background:#f5f9fc;text-align:center" >
       <td><?php echo $row["CP_FECHA_PAGO"]; ?></td>
       <td>$ <?php echo $row["CP_MONTO_PAGADO1"]; ?></td>
       <td><?php echo $row["CP_CONCEPTO"]; ?></td>
		</tr >	   
	   
		<tr style="background:#c9e8e8;text-align:center">
		<th width="30%">NUMERO EVENTO</th>
       <th width="30%">OBSERVACIONES</th>
       <th width="30%">MONTO A PAGAR</th>	
	   

		</tr>

			<tr style="background:#f5f9fc;text-align:center">
			<td><?php echo $row["CP_NUMERO_EVENTO"]; ?></td>
       <td><?php echo $row["CP_OBSERVACIONES"]; ?></td>
       <td>$ <?php echo $row["CP_MONTO_A_PAGAR1"]; ?></td>	   
		   
        </tr>

		 <tr style="background:#c9e8e8;text-align:center" >
       <th width="30%">TOTAL PAGADO</th>  
       <th width="30%">MONTO A PAGAR</th>  
       <th width="30%"></th>  
		</tr>
		
		<tr style="background:#f5f9fc;text-align:center;border-bottom: 1px solid red;">
       <td>$ <?php echo $row["CP_TOTAL_PAGADO"]; ?></td>
       <td>$ <?php echo $row["CP_MONTO_A_PAGAR"]; ?></td>
       <td></td>

		
       <td><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataCONVENIOPAGO" /></td>
	   
	   
       <td><input type="button" name="view_databorraCONVENIOPAGO" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_databorraCONVENIOPAGO" /></td>
	   
	   
      </tr>
      <?php
      }
      ?>
     </table>
    </div>
   </div>  

 
 
 
 
 
 
 
 
 
 
 
 
 
   <?php if($conexion->variablespermisos('','PAGOS_PRESTAMO','guardar')=='si'){ ?>
 	<form class="row g-3 needs-validation was-validated" novalidate="" id="CONVENIOPAGOform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
              <table class="table mb-0 table-striped">
                    <tr>
                               
                               <th style="text-align:center" scope="col">FECHA DE PAGO</th>
                               <th style="text-align:center" scope="col">MONTO PAGADO</th>
                               <th style="text-align:center" scope="col">CONCEPTO</th>
                               <th style="text-align:center" scope="col">No. DE EVENTO</th>
                               <th style="text-align:center" scope="col">OBSERBACIONES</th>
                              <th style="text-align:center" scope="col">MONTO A PAGAR</th>
                            
                               </tr>
                

                    <tr>
                 <td style="background: #c9e8e8"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_FECHA_PAGO; ?>" name="CP_FECHA_PAGO"></td>
                 <td style="background:#c9e8e8" class="input-group mb-3"> <span class="input-group-text">$</span>
				 
                 <input type="text" class="form-control" id="validationCustom03" required=""   value="<?php echo $CP_MONTO_PAGADO1; ?>" name="CP_MONTO_PAGADO1">  
				 
				 </td>
                  <td style="background:#c9e8e8" >
				  
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_CONCEPTO; ?>" name="CP_CONCEPTO">
				  
				  </td>
                  <td style="background:#c9e8e8" >
				  
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_NUMERO_EVENTO; ?>" name="CP_NUMERO_EVENTO">
				  
				  </td>
                  <td style="background:#c9e8e8" >
				  
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_OBSERVACIONES; ?>" name="CP_OBSERVACIONES">
				  
				  </td>
                  <td style="background:#c9e8e8" class="input-group mb-3"> <span  class="input-group-text">$</span>
				  
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_MONTO_A_PAGAR1; ?>" name="CP_MONTO_A_PAGAR1">
				  
				  </td>

                  </tr>
                                  
                  <tr>
              
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">TOTAL PAGADO:</label></th>
                  <td style="background:#c9e8e8" class="input-group mb-3"> <span  class="input-group-text">$</span>
                  <input type="text" class="form-control"   value="<?php echo $CP_TOTAL_PAGADO; ?>" name="CP_TOTAL_PAGADO">  </td>
                  <td style="background:#fef5e7"></td>
                  <td style="background:#fef5e7"></td>
                  <td style="background:#fef5e7"></td>
                  <td style="background:#c9e8e8" class="input-group mb-3"> <span class="input-group-text">$</span>
                  <input type="text" class="form-control"   value="<?php echo $CP_MONTO_A_PAGAR; ?>" name="CP_MONTO_A_PAGAR">  </td>
                 </table>
                
       
   
	                <input type="hidden" value="iCONVENIOPAGO"  name="iCONVENIOPAGO"/>         
                    <table class="table mb-0 table-striped">
               <tr>
           
                   
            <th>
	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCONVENIOPAGO">GUARDAR</button><div style="
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


id="mensajeCONVENIOPAGO"/> </th>
             </tr></table>    <?php } ?> 
       
<?php if($conexion->variablespermisos('','referencias_cliente','email')=='si'){ ?>
                  <table>
        
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="CP_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $CP_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCONVENIOP">ENVIAR POR IMAIL</button></th>   <?php } ?>
                 
                  </tr>
                    </table>
                            
                  
                            
                     
					 </form>
              
                         </div>
                    
<?php 
//echo 'Total a pagar '.$conexion->variablesTOTALAPAGAR();


?>

<a href="colaboradores/VistaPreviaPdf.php" target="_blank">pdf</a>



</table>

					
               </div>
               </div>
         
  