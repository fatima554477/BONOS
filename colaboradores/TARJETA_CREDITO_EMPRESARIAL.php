<div id="content">     
			<hr/>
			<strong>  <p class="mb-0 text-uppercase">
<img src="includes/contraer31.png" id="mostrar111" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar111" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;TARJETA DE CREDITO EMPRESARIAL</p><div  id="mensajeTEMPRESARIAL2"><div class="progress" style="width: 25%;">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $ROWPorcentajeTCredito; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $ROWPorcentajeTCredito; ?>%</div>
								</div></div></strong>
	        <div id="target111" style="display:block;"  class="content2">
			
					
   <?php if($conexion->variablespermisos('','TARJETA_CREDITO_EMPRESARIAL','guardar')=='si'){ ?>
        <div class="card">
          <div class="card-body">
	<form class="row g-3 needs-validation was-validated" novalidate="" id="TEMPRESARIALform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  enctype="multipart/form-data" >
 
              <table class="table mb-0 table-striped">

                <tr>
              
              <center> <strong> <h6 scope="col">TARJETA DE CREDITO EMPRESARIAL</h6></center></strong>
                 </tr>

                  <tr>
                
                  <th style="background: #fef5e7"scope="row"> <label for="validationCustom03" class="form-label">FECHA DE ENTREGA DE TARJETA:</label></th>
                  <td style="background: #fef5e7"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $FECHA_ENTREGA_TARJETA; ?>" name="FECHA_ENTREGA_TARJETA"></td>
                  <th style="background: #d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE DEVOLUCIÓN DE TARJETA:</label></th>
                  <td style="background: #d4f6c8"><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $FECHA_DEVOLUCION_TARJETA; ?>" name="FECHA_DEVOLUCION_TARJETA"></td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">TARJETA:</label></th>
                   <td style="background: #fbeee6" >   
				   <select class="form-select mb-3" aria-label="Default select example" id="validationCustom02" value="<?php echo $TTARJETA; ?>" required="" name="TTARJETA"> 
                         <option selected="">SELECCIONA UNA OPCIÓN</option>
                         <option style="background:#d9f9fa " <?php if($TTARJETA=='1'){echo "selected";} ?> value="ACTIVADA">ACTIVADA</option>
                         <option style="background:#e1f5de " <?php if($TTARJETA=='2'){echo "selected";} ?> value="DESACTIVADA">DESACTIVADA</option></td>
                
                  </tr>
                  <tr>
                  <th style="background:#fef5e7" scope="row"> <label for="validationCustom03" class="form-label">BANCO:</label></th>
                  <td style="background:#fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $TBANCO; ?>" name="TBANCO"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">TIPO DE TARJETA:</label></th>
                  <td style="background:#d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_TIPO_TARJETA; ?>" name="T_TIPO_TARJETA"></td>
                  <th style="background:#fbeee6" scope="row"> <label for="validationCustom03" class="form-label">NÚMERO DE TARJETA:</label></th>
                  <td style="background:#fbeee6"><input type="text" class="form-control formato-numero" maxlength="29"  id="validationCustom03" required=""  value="<?php echo $T_NUMERO_TARJETA; ?>" name="T_NUMERO_TARJETA"></td>
                
               
                  </tr>
                  <tr>
                  <th style="background: #fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE VENCIMIENTO:</label></th>
                  <td style="background: #fef5e7" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_FECHA_VENCIMIENTO; ?>" name="T_FECHA_VENCIMIENTO"></td>
                  <th style="background: #d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">CODIGO DE SEGURIDAD:</label></th>
                  <td style="background: #d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_CODIGO_SEGURIDAD; ?>" name="T_CODIGO_SEGURIDAD"></td>
                 


<th style="background: #fbeee6" scope="row">
  <label for="validationCustom03" class="form-label">LÍMITE DE CRÉDITO:</label>
</th>
  <td style="background: #fbeee6">
    <div class="input-group mb-3">
      <span class="input-group-text">$</span>
      <input type="text" style="width:200px;height:40px;"id="T_LIMITE_CREDITO"
             required value="<?php echo $T_LIMITE_CREDITO; ?>"
             name="T_LIMITE_CREDITO"
             onkeyup="comasainput('T_LIMITE_CREDITO')"></td>

				  
				  
				  
                  </tr>
                  <tr>
                  <th style="background: #fef5e7" scope="row"> <label for="validationCustom03" class="form-label">FECHA DE CORTE:</label></th>
                  <td style="background: #fef5e7" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_FECHA_CORTE; ?>" name="T_FECHA_CORTE"></td>
                  <th style="background: #d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">FECHA LÍMITE DE PAGO:</label></th>
                  <td style="background: #d4f6c8" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_FECHA_LIMITE; ?>" name="T_FECHA_LIMITE"></td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">NIP:</label></th>
                  <td style="background: #fbeee6" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_NIP; ?>" name="T_NIP" disabled></td>
                  </tr>
                  <tr>
                  <th style="background: #fef5e7" scope="row"> <label for="validationCustom03" class="form-label">USUARIO DE LA APP:</label></th>
                  <td style="background: #fef5e7" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_USUARIO; ?>" name="T_USUARIO"></td>
                  <th style="background: #d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">CONTRASEÑA DE LA APP:</label></th>
                  <td style="background: #d4f6c8"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_CONTRASENA; ?>" name="T_CONTRASENA"></td>
				  
				  
				  
                  <th style="background: #fbeee6" scope="row"> <label for="validationCustom03" class="form-label">TELÉFONO PARA REPORTE DE ROBO O EXTRAVIÍO 1:</label></th>
                  <td style="background: #fbeee6" ><input type="text" class="form-control formato-numero" maxlength="23"  id="validationCustom03" required=""  value="<?php echo $T_TELEFONO_EXTRAVIO; ?>" name="T_TELEFONO_EXTRAVIO"></td>
                  </tr><tr>
                  <th style="background: #fbeee6" scope="row"> <label for="validationCustom03" class="form-label">TELÉFONO PARA REPORTE DE ROBO O EXTRAVIÍO 2:</label></th>
                  <td style="background: #fbeee6" ><input type="text" class="form-control formato-numero" maxlength="23"  id="validationCustom03" required=""  value="<?php echo $T_TELEFONO_EXTRAVIO1; ?>" name="T_TELEFONO_EXTRAVIO1"></td>
                  <th style="background: #d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">TELÉFONO PARA REPORTE DE ROBO O EXTRAVIÍO 3:</label></th>
                  <td style="background: #fbeee6" ><input type="text" class="form-control formato-numero" maxlength="23"  id="validationCustom03" required=""  value="<?php echo $T_TELEFONO_EXTRAVIO2; ?>" name="T_TELEFONO_EXTRAVIO2"></td>
                  <th style="background: #fbeee6" scope="row"> <label for="validationCustom03" class="form-label">TELÉFONO PARA REPORTE DE ROBO O EXTRAVIÍO 4:</label></th>
                  <td style="background: #fbeee6" ><input type="text" class="form-control formato-numero" maxlength="23"  id="validationCustom03" required=""  value="<?php echo $T_TELEFONO_EXTRAVIO3; ?>" name="T_TELEFONO_EXTRAVIO3"></td>	</tr>			  
				  
				  
                  <tr>
                  <th style="background: #fef5e7"scope="row"> <label for="validationCustom03" class="form-label">FOTO DE LA TARJETA POR DELANTE:</label></th>
                  <td style="background: #fef5e7" >
				  
				  

				  
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,'T_FOTO_TARJETA')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_FOTO_TARJETA" type="text" onkeydown="return false" onclick="file_explorer('T_FOTO_TARJETA');" style="width:250px;" VALUE="<?php echo $T_FOTO_TARJETA; ?>" required /></p>
		<input type="file" name="T_FOTO_TARJETA" id="nono"/>
		<div id="1T_FOTO_TARJETA">
		<?php
		if($T_FOTO_TARJETA!=""){echo "<a target='_blank' href='includes/archivos/".$T_FOTO_TARJETA."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>








				  </td>
                  <th style="background: #d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">FOTO DE LA TARJETA POR DETRÁS:</label></th>
                  <td style="background: #d4f6c8" >
				  
				  
<div class="col-md-6">

		<div id="drop_file_zone" ondrop="upload_file(event,'T_FOTO_TARJETA_ATRAS')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_FOTO_TARJETA_ATRAS" type="text" onkeydown="return false" onclick="file_explorer('T_FOTO_TARJETA_ATRAS');" style="width:250px;" VALUE="<?php echo $T_FOTO_TARJETA_ATRAS; ?>" required /></p>
		<input type="file" name="T_FOTO_TARJETA_ATRAS" id="nono"/>
		<div id="1T_FOTO_TARJETA_ATRAS">
		<?php
		if($T_FOTO_TARJETA_ATRAS!=""){echo "<a target='_blank' href='includes/archivos/".$T_FOTO_TARJETA_ATRAS."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
				  </td>
                  <th style="background: #fbeee6" scope="row"> <label for="validationCustom03" class="form-label">DIRECCIÓN COMPLETA DE ALTA DE TARJETA:</label></th>
                  <td style="background: #fbeee6"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_DIRECCION_COMPLETA; ?>" name="T_DIRECCION_COMPLETA"></td>
                  </tr>
                  <tr>
                  <th style="background: #fef5e7"scope="row"> <label for="validationCustom03" class="form-label">TELÉFONO DE ALTA DE TARJETA:</label></th>
                  <td style="background: #fef5e7"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_TELEFONO_TARJETA; ?>" name="T_TELEFONO_TARJETA"></td>
                  <th style="background: #d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">CORREO ELECTRÓNICO PARA ALTA:</label></th>
                  <td style="background: #d4f6c8" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_CORREO_ALTA; ?>" name="T_CORREO_ALTA"></td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">FECHA DE BAJA DE TARJETA:</label></th>
                  <td style="background: #fbeee6"" ><input type="date" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_FECHA_BAJA; ?>" name="T_FECHA_BAJA"></td>
                  </tr>
                  <tr>
                  <th style="background: #fef5e7"scope="row"> <label for="validationCustom03" class="form-label">NÚMERO DE REPORTE DE BAJA:</label></th>
                  <td style="background: #fef5e7" ><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_NUMERO_REPORTE; ?>" name="T_NUMERO_REPORTE"></td>
                  <th style="background: #d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">NOMBRE DEL OPERADOR DEL BANCO:</label></th>
                  <td style="background: #d4f6c8"><input type="text" class="form-control" id="validationCustom03" required=""  value="<?php echo $T_NOMBRE_OPERADOR; ?>" name="T_NOMBRE_OPERADOR"></td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">SUBIR COMPROBANTE DE DOMICILIO PARA EL ALTA:</label></th>
                  <td style="background: #fbeee6" >
				  

				  
<div class="col-md-6">
		<div id="drop_file_zone" ondrop="upload_file(event,'T_SUBIR_COMPROBABTE')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_COMPROBABTE" type="text" onkeydown="return false" onclick="file_explorer('T_SUBIR_COMPROBABTE');" style="width:250;" VALUE="<?php echo $T_SUBIR_COMPROBABTE; ?>" required /></p>
		<input type="file" name="T_SUBIR_COMPROBABTE" id="nono"/>
		<div id="1T_SUBIR_COMPROBABTE">
		<?php
		if($T_SUBIR_COMPROBABTE!=""){echo "<a target='_blank' href='includes/archivos/".$T_SUBIR_COMPROBABTE."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>				  



				  
				  </td>
                  </tr>
                  <tr>
                  <th style="background: #fef5e7"  scope="row"> <label for="validationCustom03" class="form-label">SUBIR INE O PASAPORTE POR DELANTE:</label></th>
                  <td style="background: #fef5e7" >
				  
				  
<div class="col-md-6">
		<div id="drop_file_zone" ondrop="upload_file(event,'T_SUBIR_INE')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_INE" type="text" onkeydown="return false" onclick="file_explorer('T_SUBIR_INE');" style="width:250;" VALUE="<?php echo $T_SUBIR_INE; ?>" required /></p>
		<input type="file" name="T_SUBIR_INE" id="nono"/>
		<div id="1T_SUBIR_INE">
		<?php
		if($T_SUBIR_INE!=""){echo "<a target='_blank' href='includes/archivos/".$T_SUBIR_INE."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>	
				  
				  
				  </td>
                  <th style="background: #d4f6c8"scope="row"> <label for="validationCustom03" class="form-label">SUBIR INE O PASAPORTE POR DE DETRÁS:</label></th>
                  <td style="background: #d4f6c8" >
				  
				  
<div class="col-md-6">
		<div id="drop_file_zone" ondrop="upload_file(event,'T_SUBIR_INE_ATRAS')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_INE_ATRAS" type="text" onkeydown="return false" onclick="file_explorer('T_SUBIR_INE_ATRAS');" style="width:250;" VALUE="<?php echo $T_SUBIR_INE_ATRAS; ?>" required /></p>
		<input type="file" name="T_SUBIR_INE_ATRAS" id="nono"/>
		<div id="1T_SUBIR_INE_ATRAS">
		<?php
		if($T_SUBIR_INE_ATRAS!=""){echo "<a target='_blank' href='includes/archivos/".$T_SUBIR_INE_ATRAS."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
				  
				  
				  </td>
                  <th style="background: #fbeee6"scope="row"> <label for="validationCustom03" class="form-label">SUBIR ALGÚN ARCHIVO RELACIONADO CON ESTA TARJETA:</label></th>
                  <td style="background: #fbeee6" >
				  
				  
<div class="col-md-6">
		<div id="drop_file_zone" ondrop="upload_file(event,'T_SUBIR_ARCHIVO_RELACIONADO')" ondragover="return false" style="width:300px;">
		<p>Suelta aquí o busca tu archivo</p>
		<p><input class="form-control form-control-sm" id="T_SUBIR_ARCHIVO_RELACIONADO" type="text" onkeydown="return false" onclick="file_explorer('T_SUBIR_ARCHIVO_RELACIONADO');" style="width:250;" VALUE="<?php echo $T_SUBIR_ARCHIVO_RELACIONADO; ?>" required /></p>
		<input type="file" name="T_SUBIR_ARCHIVO_RELACIONADO" id="nono"/>
		<div id="1T_SUBIR_ARCHIVO_RELACIONADO">
		<?php
		if($T_SUBIR_ARCHIVO_RELACIONADO!=""){echo "<a target='_blank' href='includes/archivos/".$T_SUBIR_ARCHIVO_RELACIONADO."'>Visualizar!</a>"; 
		}?></div>
	</div>	
	</div>
	
				  </td>
                  </tr>
                  </table>
                  <table>
                  <tr>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">OBSERVACIONES:</label></th>
                  <td style="background:#d4f6c8"  ><input style="width: 500px;px; type="text" class="form-control" id="validationCustom03"  value="<?php echo $T_OBSERVACIONES_1; ?>" name="T_OBSERVACIONES_1"></td>
                  <th style="background:#d4f6c8" scope="row"> <label for="validationCustom03" class="form-label">OBSERVACIONES:</label></th>
                  <td style="background:#d4f6c8 "><input style="width: 500px; px; type="text" class="form-control" id="validationCustom03"  value="<?php echo $T_OBSERVACIONES_2; ?>" name="T_OBSERVACIONES_2"></td>
                
                  </tr>
                  </table>
                  <input name="iTempresarial" type="hidden" value="iTempresarial">
                  <table class="table mb-0 table-striped">
               <tr>
              <th>
	          </th>
           
                   
            <th>
     


	          <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarTEMPRESARIAL">GUARDAR</button> <div style="
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


id="mensajeTEMPRESARIAL"/> </th><?php } ?>
                   </tr>
                  
                     </table>
                     <?php if($conexion->variablespermisos('','TARJETA_CREDITO_EMPRESARIAL','email')=='si'){ ?>
                     <table>
                     <tr>
                
                <td ><textarea style="width: 400px;px;" name="T_ENVIAR_IMAIL" class="form-control" aria-label="With textarea"><?php echo $T_ENVIAR_IMAIL; ?></textarea></td>
                  <th> <button class="btn btn-sm btn-outline-success px-5"  type="button" id="enviarTempresarial">ENVIAR POR IMAIL</button></th>
             
              
                  
               </tr>
               </table>     
					    </form>
              <?php } ?>
			  
	
    </div>
   </div> 
              </div>
              </div>           
              </div>
            