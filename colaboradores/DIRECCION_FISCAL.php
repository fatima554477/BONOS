<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar2" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar2" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;DIRECCIÓN FISCAL DE  LA EMPRESA</p><div  id="mensajeDEDIRECCIONF"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWDIRECCIONFISCAL; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWDIRECCIONFISCAL; ?>%</div>
								</div></div></strong>
	        <div id="target2" style="display:block;"  class="content2">
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="DEDIRECCIONFform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
 
              <table class="table mb-0 table-striped">

                <tr>
            
                <th style="text-align:center" scope="col">  DIRECCIÓN FISCAL</th>
                 </tr>

                            

                 
            
            


      <table class="table mb-0 table-striped">
      <tr>
               
               <th style="text-align:center" scope="col">DIRECCIÓN FISCAL</th>
               <th style="text-align:center" scope="col">INFORMACIÓN O ARCHIVO</th>
           
               </tr>


    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">EDIFICIO:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $ED_INFORMACION; ?>" name="ED_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">CALLE:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CA_INFORMACION; ?>" name="CA_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO EXTERIOR:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NE_INFORMACION; ?>" name="NE_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO INTERIOR:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NI_INFORMACION; ?>" name="NI_INFORMACION"></td>
    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NÚMERO DE OFICINA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NDO_INFORMACION; ?>" name="NDO_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">COLONIA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $COL_INFORMACION; ?>" name="COL_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">ALCALDÍA:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $AL_INFORMACION; ?>" name="AL_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">C.P:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CP_INFORMACION; ?>" name="CP_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">CIUDAD:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $CIU_INFORMACION; ?>" name="CIU_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">ESTADO:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $ES_INFORMACION; ?>" name="ES_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">PAÍS:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PA_INFORMACION; ?>" name="PA_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">UBICACIÓN EN EL MAPA (COPÍA EL LINK)  <a href="https://www.google.com.gt/maps/@<?php echo $valor1 ?>,<?php echo $valor2 ?>,15z" target="_blank">(GOOGLE MAPS)</a></th>
    <td  style="background:#ebf8fa"> <input type= text id="search_location" class="form-control" placeholder="Search location"  name="P_UBICACION_MAPA_EPC" value="<?php echo $P_UBICACION_MAPA_EPC; ?>"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELÉFONO 1:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $TEL_INFORMACION; ?>" name="TEL_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">TELÉFONO 2:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $TEL2_INFORMACION; ?>" name="TEL2_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">WHATSAPP:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $WHA_INFORMACION; ?>" name="WHA_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">PÁGINA WEB:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $PAG_INFORMACION; ?>" name="PAG_INFORMACION"></td>

    </tr>
    <tr>
    <th style="background:#ebf8fa; text-align:left" scope="col">NOMBRE DE LA APP:</th>
    <td  style="background:#ebf8fa"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $NAP_INFORMACION; ?>" name="NAP_INFORMACION"></td>

    </tr>



    </table>
    <table class="table mb-0 table-striped">
                    <tr style="background:#fefac0;">
                    <th style="text-align:center" scope="col">OBSERVACIONES</th>
                    <td ><textarea style="width:500px;" name="ED_OBSERVACIONES" class="form-control" aria-label="With textarea"><?php echo $ED_OBSERVACIONES; ?></textarea></td><br></br>
                               <th style="text-align:center;background:#faebee;" scope="col">FECHA DE ÚLTIMA CARGA</th>
							   
							   
                               <td  style="background:#faebee">
							   <strong>
							   <?php echo date('Y-m-d'); ?>
							   </strong>
							   <input type="hidden" style="width:200px;"  class="form-control" id="validationCustom03"   value="<?php echo date('Y-m-d'); ?>" name="ED_FECHA_ULTIMA_CARGA">
							   
							   </td>
                               </tr>
                              </table>                      
 
     
    <input type="hidden" value="hDatosCorpfiscal" name="hDatosCorpfiscal"/>


<table>
  <tr>       
<th>
          <button class="btn btn-sm btn-outline-success px-5"   type="button" id="guardarDATOSCORPFISCAL">GUARDAR</button></th></tr>
           </tr>
            <tr>
            </table>
           <table>
            <tr>
        
            <td ><textarea style="width: 800px;px;" name="DDirfiscala1_ENVIAR_IMAIL" id="DDirfiscala1_ENVIAR_IMAIL"  class="form-control" aria-label="With textarea"><?php echo $DCOPF_ENVIAR_IMAIL; ?></textarea></td><br></br>
              <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarimailDirfiscal">ENVIAR POR EMAIL</button></th>   
         
          </tr>
            </table>
  </form>
     
                  </div>
             
                  
                 </div>








<?php
$querycontras = $conexion->listado_DATOSCORPFISCAL1();
?>

<br />
<div class='table-responsive'>
<div align='right'>
</div>
<br />
<div id='employee_table'>
<tbody= 'font-style:italic;'>
<table  class="table table-striped table-bordered" style="width:100%"  id='resetDATOSCORPFISCAL1' name='resetDATOSCORPFISCAL1'>
<tr style="text-align:center">
<th width="35%"style="background:#c9e8e8">ENVIAR POR EMAIL</th>
<th width="35%"style="background:#c9e8e8">EDIFICIO</th>
<th width="35%"style="background:#c9e8e8">CALLE</th>
<th width="35%"style="background:#c9e8e8">NÚMERO EXTERIOR</th>
<th width="35%"style="background:#c9e8e8">NÚMERO INTERIOR</th>
<th width="35%"style="background:#c9e8e8">NÚMERO DE OFICINA</th>
<th width="35%"style="background:#c9e8e8">COLONIA</th>
<th width="35%"style="background:#c9e8e8">ALCALDÍA</th>
<th width="35%"style="background:#c9e8e8">C.P</th>
<th width="35%"style="background:#c9e8e8">CIUDAD</th>
<th width="35%"style="background:#c9e8e8">ESTADO</th>
<th width="35%"style="background:#c9e8e8">PAÍS</th>
<th width="35%"style="background:#c9e8e8">UBICACIÓN EN EL MAPA</th>
<th width="35%"style="background:#c9e8e8">TELÉFONO 1</th>
<th width="35%"style="background:#c9e8e8">TELÉFONO 2</th>
<th width="35%"style="background:#c9e8e8">WHATSAPP</th>
<th width="35%"style="background:#c9e8e8">PÁGINA WEB</th>
<th width="35%"style="background:#c9e8e8">NOMBRE DE LA APP</th>
<th width="35%"style="background:#c9e8e8">OBSERVACIONES</th>
<th width="35%"style="background:#c9e8e8">FECHA DE ÚLTIMA CARGA</th>

</tr>
<?php
while($row = mysqli_fetch_array($querycontras))
{
?>
<tr style='background:#f5f9fc;'>
<td style="text-align:center"><?php echo $row["DDirfiscala1_ENVIAR_IMAIL"]; ?></td>

<td style="text-align:center"><?php echo $row["ED_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["CA_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["NE_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["NI_INFORMACION"]; ?></td>

<td style="text-align:center" ><?php echo $row["NDO_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["COL_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["AL_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["CP_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["CIU_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["ES_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["PA_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["P_UBICACION_MAPA_EPC"]; ?></td>

<td style="text-align:center"><?php echo $row["TEL_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["TEL2_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["WHA_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["PAG_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["NAP_INFORMACION"]; ?></td>

<td style="text-align:center"><?php echo $row["ED_OBSERVACIONES"]; ?></td>

<td style="text-align:center"><?php echo $row["ED_FECHA_ULTIMA_CARGA"]; ?></td>


<td><input type="button" name="view" value="MODIFICAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataDATOSCORPFISCAL1modifica" /></td>
<td><input type="button" name="view2" value="BORRAR" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_dataDATOSCORPFISCAL1borrar" /></td>
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
     
	  
	  
	  
	  
	  
	  
	  
	  