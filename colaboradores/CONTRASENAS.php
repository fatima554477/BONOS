

<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar11" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar11" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;CONTRASEÑAS 2</p><div  id="mensajeCONTRASENAS22"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWPorcentajecontrasenias; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWPorcentajecontrasenias; ?>%</div>
								</div></div></strong>
			
<div  id="mensajeCONTRASENAS22"></div>

  
  
								
	        <div id="target11" style="display:block;"  class="content2"> 
 
 
 
 
 



<?php 
if($fechaIngresocontrasenias==true){
	echo "<strong>FECHA DE INGRESO: ".$fechaIngresocontrasenias.'</strong><BR/><BR/>';
}
?>



 
  
   <?php if($conexion->variablespermisos('','CONTRASENAS','guardar')=='si'){ ?>
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="CONTRASENASform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
 

 
 
 
              <table class="table mb-0 table-striped">

                <tr>
              
               <th style="text-align:center"scope="col">(CONCEPTO) CONTRASEÑA DE:</th>
                <th style="text-align:center" scope="col">USUARIO</th>
                <th style="text-align:center" scope="col">CONTRASEÑA</th>
               <th style="text-align:center" scope="col">OTRO</th>
               <th style="text-align:center" scope="col">OBSERVACIONES</th>
            
                 </tr>

              
                
              
                <tr>
                  <th style="background: #c9e8e8" scope="row">
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php //echo $CONTRASENA_DE1; ?>" name="CONTRASENA_DE1"> 
				  </th>
                  <td style="background: #c9e8e8" >
				  <input type="text" class="form-control" id="validationCustom03" required=""  value="<?php //echo $C_USUARIO1; ?>" name="C_USUARIO1">
				  </td>
                  <td  style="background: #c9e8e8">
				  <input type="tel" class="form-control" id="validationCustom03" required=""  value="<?php //echo $CONTRASENA1; ?>" name="CONTRASENA1">
				  </td>
                  <td style="background: #c9e8e8" >
				  <input type="text" class="form-control" id="validationCustom03"  value="<?php //echo $C_OTRO1; ?>" name="C_OTRO1">
				  </td>
                  <td style="background: #c9e8e8" >
				  <input type="text" class="form-control" id="validationCustom03" value="<?php //echo $C_OBSERVACIONES1; ?>" name="C_OBSERVACIONES1">
				  </td>
                </tr>
  
 	<input type="hidden" value="ICONTRASENAS"  name="ICONTRASENAS"/> 
                  </table>
  
  <table class="table mb-0 table-striped">
               <tr>
              <th>
	         </th>
           
                   
            <th>




	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarCONTRASENAS">GUARDAR</button><div style="
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


id="mensajeCONTRASENAS2"/> </th>
                      
                  
                    <tr>
                    </table>
                     
   <?php if($conexion->variablespermisos('','CONTRASENAS','email')=='si'){ ?>
                   <table>
                    <tr>
                
                    <td ><textarea style="width:400px;px;" name="C_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $C_ENVIAR_IMAIL; ?></textarea></td><br></br>
                      <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarIMAILCONTRASENAS">ENVIAR POR IMAIL</button></th> <?php } ?>  
                 
                  </tr>
                    </table>
                            
	              
                            
      
                     
					 </form>
           <?php } ?>
		    <?php 
$querycontras = $conexion->listadocontrasenias();

?>

   <br />  
   <div class="table-responsive">
    <div align="right">
    </div>
    <br />
    <div id="employee_table">
    <tbody= "font-style:italic;">
    <table class="table table-striped table-bordered" style="width:100%"  id="reseteate1" name="reseteate1">
    <tr style="text-align:center">
       <th width="20%"style="background:#c9e8e8">(CONCEPTO)<br/> CONTRASEÑA DE: 	</th>  
       <th width="20%"style="background:#c9e8e8">USUARIO</th>  
       <th width="20%"style="background:#c9e8e8">CONTRASEÑA</th>  
       <th width="20%"style="background:#c9e8e8">OTRO</th>  
       <th width="40%"style="background:#c9e8e8">OBSERVACIONES</th>
	   
       </tr>
       <?php
       while($row = mysqli_fetch_array($querycontras))
      {
      ?>
       <tr style="background:#f5f9fc;text-align:center">
       <td ><?php echo $row["CONTRASENA_DE1"]; ?></td>
       <td><?php echo $row["C_USUARIO1"]; ?></td>
       <td><?php echo $row["CONTRASENA1"]; ?></td>
       <td><?php echo $row["C_OTRO1"]; ?></td>
       <td><?php echo $row["C_OBSERVACIONES1"]; ?></td>
       <td>
       <?php if($conexion->variablespermisos('','CONTRASENAS','modificar')=='si'){ ?>


    <input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /><?php } ?></td>
	   
	   
       <td>
       <?php if($conexion->variablespermisos('','CONTRASENAS','borrar')=='si'){ ?>


<input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data2" /> <?php } ?></td>
	   
	   
      </tr>
      <?php
      }
      ?>
     </table>
     </tbody>
    </div>
   </div>  
                       </div>
                         </div>
                       
               </div>
         		  