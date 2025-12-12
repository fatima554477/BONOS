<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<div id="content">     
			<hr/>
		<strong>	  <p class="mb-0 text-uppercase" ><img src="includes/contraer31.png" id="mostrar4" style="cursor:pointer;"/>
<img src="includes/contraer41.png" id="ocultar4" style="cursor:pointer;"/>&nbsp;&nbsp;&nbsp;REPORTE DE BONOS PERSONAL QUE ASISTE AL EVENTO</p></strong></div>


<div  id="mensajefiltro">
<div class="progress" style="width: 25%;">
<div class="progress-bar" role="progressbar" style="width: <?php echo $Aeventosporcentaje ; ?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><?php echo $Aeventosporcentaje ; ?>%</div></div>
 </div>
							
	        <div id="target4" style="display:block;" class="content2">
        <div class="card">
          <div class="card-body">
      
<!--aqui inicia filtro-->

            <div class="row text-center" id="loader2" style="position: absolute;top: 140px;left: 50%"></div>
<table width="100%" border="0">
<tr>
<td width="30%" align="center">
	<span>Mostrar</span>
	<select  class="form-select mb-3" id="per_page" onchange="load2(1);">
		<option value="50" <?php if(!empty($_REQUEST['per_page'])){echo 'selected';} ?>>50</option>
		<option value="100" <?php if($_REQUEST['per_page']=='100'){echo 'selected';} ?>>100</option>
		<option value="150" <?php if($_REQUEST['per_page']=='150'){echo 'selected';} ?>>15</option>
		<option value="200000" <?php if($_REQUEST['per_page']=='200000'){echo 'selected';} ?>>TODOS</option>
	</select>
</td>

<td width="30%" align="center">					
	<button  class="btn btn-sm btn-outline-success px-5" type="button" onclick="load2(1);" >BUSCAR</button>
</td>

<td width="30%" align="center">
	<span>PLANTILLA</span>
	
	<!--<select  class="form-select mb-3" id="DEPARTAMENTO2WE" onchange="load(1);">
	
	<option value="DEFAULT" <?php if($_SESSION['DEPARTAMENTO']=='DEFAULT'){echo 'selected';} ?>>DEFAULT</option>
	
	<option value="SANDOR" <?php if($_SESSION['DEPARTAMENTO']=='SANDOR'){echo 'selected';} ?>>SANDOR</option>
	
	<option value="SANDOR3" <?php if($_SESSION['DEPARTAMENTO']=='SANDOR3'){echo 'selected';} ?>>SANDOR3</option>

	</select>-->




</td>

</tr>
</table>
		<div class="datos_ajax2">
		</div>
  
<!--aqui termina filtro-->


</div>
</div>
</div>

<?php 
require "clasesPERSONAL2/script.filtro.php";
?>