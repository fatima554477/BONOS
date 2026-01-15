<?php
define('__ROOT1__', dirname(dirname(__FILE__)));
include_once (__ROOT1__."/includes/error_reporting.php");
include_once (__ROOT1__."/includes/class.epcinn.php");

$conexion = NEW colaboradores();
$querycontras = $conexion->listadocontrasenias();
if(!empty($_POST))
{
 $output = '';
 $nombres = mysqli_real_escape_string($connect, $_POST["nombres"]);  
    $direccion = mysqli_real_escape_string($connect, $_POST["direccion"]);  
    $genero = mysqli_real_escape_string($connect, $_POST["genero"]);  
    $designado = mysqli_real_escape_string($connect, $_POST["designado"]);  
    $edad = mysqli_real_escape_string($connect, $_POST["edad"]);
    $query = " INSERT INTO personal (nombres, direccion, genero, designado, edad)  
     VALUES('$nombres', '$direccion', '$genero', '$designado', '$edad')";
    if(mysqli_query($connect, $query))
    {
     $output.= '<label class="text-success">Registro Insertado Correctamente</label>';

     $output.='
      <table class="table table-bordered">  
         <tr>  
       <th width="30%">Personal Nombres</th>  
       <th width="10%">Genero</th>  
       <th width="10%">Edad</th>  
       <th width="30%">Area</th>  
       <th width="10%">Vista</th> 
        </tr>';
     while($row = mysqli_fetch_array($querycontras))
     {
      $output .= '<tr>  
       <td>'.$row["nombres"].'</td>
       <td>'.$row["genero"].'</td>
       <td>'.$row["edad"].'</td>
       <td>'.$row["designado"].'</td>
       <td><input type="button" name="view" value="Vista Previa" id="' . $row["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
        </tr>';
     }
     $output.= '</table>';
    }
    echo $output;
}
?>