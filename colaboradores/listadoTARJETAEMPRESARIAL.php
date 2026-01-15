<?php
if (!isset($conexion) || !is_object($conexion) || !method_exists($conexion, 'listadoTARJETAEMPRESARIAL')) {
    if (!isset($_SESSION)) {
        session_start();
    }
    if (!defined('__ROOT1__')) {
        define('__ROOT1__', dirname(__DIR__));
    }
    $errorReportingPath = __ROOT1__ . '/includes/error_reporting.php';
    if (file_exists($errorReportingPath)) {
        require_once $errorReportingPath;
    }

    $classPath = __ROOT1__ . '/includes/class.epcinn.php';
    if (!file_exists($classPath)) {
        $classPath = __ROOT1__ . '/class.epcinn.php';
    }
    require_once $classPath;
    $conexion = new colaboradores();
}

if (!function_exists('colaboradores_listado_tempresarial_escape')) {
    function colaboradores_listado_tempresarial_escape($value)
    {
        return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
    }
}

$querycontras = $conexion->listadoTARJETAEMPRESARIAL();

if (!$querycontras instanceof mysqli_result || mysqli_num_rows($querycontras) === 0) {
    echo '<tr><td colspan="6" style="text-align:center;color:#6c757d;">NO HAY TARJETAS EMPRESARIALES REGISTRADAS</td></tr>';
    return;
}

while ($row = mysqli_fetch_array($querycontras, MYSQLI_ASSOC)) {
    $fechaEntrega = colaboradores_listado_tempresarial_escape($row['FECHA_ENTREGA_TARJETA'] ?? '');
    $fechaDevolucion = colaboradores_listado_tempresarial_escape($row['FECHA_DEVOLUCION_TARJETA'] ?? '');
    $tarjeta = colaboradores_listado_tempresarial_escape($row['TTARJETA'] ?? '');
    $banco = colaboradores_listado_tempresarial_escape($row['TBANCO'] ?? '');
    $tipoTarjeta = colaboradores_listado_tempresarial_escape($row['T_TIPO_TARJETA'] ?? '');
    $numeroTarjeta = colaboradores_listado_tempresarial_escape($row['T_NUMERO_TARJETA'] ?? '');
    $fechaVencimiento = colaboradores_listado_tempresarial_escape($row['T_FECHA_VENCIMIENTO'] ?? '');
    $codigoSeguridad = colaboradores_listado_tempresarial_escape($row['T_CODIGO_SEGURIDAD'] ?? '');

    $limiteCredito = $row['T_LIMITE_CREDITO'] ?? '';
    if ($limiteCredito !== '' && is_numeric(str_replace([',', '$'], '', (string)$limiteCredito))) {
        $limiteCredito = '$' . number_format((float)str_replace([',', '$'], '', (string)$limiteCredito), 2, '.', ',');
    } else {
        $limiteCredito = colaboradores_listado_tempresarial_escape($limiteCredito);
    }

    $fechaCorte = colaboradores_listado_tempresarial_escape($row['T_FECHA_CORTE'] ?? '');
    $fechaLimite = colaboradores_listado_tempresarial_escape($row['T_FECHA_LIMITE'] ?? '');
    $nip = colaboradores_listado_tempresarial_escape($row['T_NIP'] ?? '');

    $id = colaboradores_listado_tempresarial_escape($row['id'] ?? '');

    $permiteModificar = $conexion->variablespermisos('', 'TARJETA_CREDITO_EMPRESARIAL', 'modificar') === 'si';
    $permiteBorrar = $conexion->variablespermisos('', 'TARJETA_CREDITO_EMPRESARIAL', 'borrar') === 'si';

    $botonModificar = $permiteModificar
        ? '<input type="button" name="view" value="MODIFICAR" id="' . $id . '" class="btn btn-info btn-xs view_dataTAREMPRESARIAL" />'
        : '';

    $botonBorrar = $permiteBorrar
        ? '<input type="button" name="view_dataTAREMPRESARIAL2" value="BORRAR" id="' . $id . '" class="btn btn-info btn-xs view_dataTAREMPRESARIAL2" />'
        : '';

    echo "        <tr style='background:#f5f9fc;text-align:center'>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">FECHA ENTREGA DE TARJETA</th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">FECHA DEVOLUCIÓN DE TARJETA</th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\"> TARJETA </th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\"> BANCO</th>\n";
    echo "                </tr>\n";
    echo "                <tr style=\"background:#f5f9fc;text-align:center\">\n";
    echo "       <td>{$fechaEntrega}</td>\n";
    echo "       <td>{$fechaDevolucion}</td>\n";
    echo "       <td>{$tarjeta}</td>\n";
    echo "       <td>{$banco}</td>\n";
    echo "                </tr>\n";

    echo "                <tr style=\"background:#c9e8e8;text-align:center\">\n";
    echo "       <th style=\"background:#c9e8e8\"width=\"30%\">TIPO DE TARJETA</th>\n";
    echo "       <th style=\"background:#c9e8e8\"width=\"30%\">NÚMERO DE TARJETA</th>\n";
    echo "       <th style=\"background:#c9e8e8\"width=\"30%\">FECHA DE VENCIMIENTO DE TARJETA</th>\n";
    echo "       <th style=\"background:#c9e8e8\"width=\"30%\">CODIGO DE SEGURIDAD</th>\n";
    echo "                </tr>\n";
    echo "                <tr style=\"background:#f5f9fc;text-align:center\" >\n";
    echo "       <td>{$tipoTarjeta}</td>\n";
    echo "       <td>{$numeroTarjeta}</td>\n";
    echo "       <td>{$fechaVencimiento}</td>\n";
    echo "       <td>{$codigoSeguridad}</td>\n";
    echo "                </tr>\n";

    echo "                <tr style=\"background:#c9e8e8;text-align:center\" >\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">LIMITE DE CREDITO</th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">FECHA DE CORTE</th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">FECHA  LIMITE</th>\n";
    echo "       <th style=\"background:#c9e8e8\" width=\"30%\">NIP</th>\n";
    echo "                </tr>\n";
    echo "                    <tr style=\"border-bottom: 2px solid red;text-align:center\">\n";
    echo "       <td>{$limiteCredito}</td>\n";
    echo "       <td>{$fechaCorte}</td>\n";
    echo "       <td>{$fechaLimite}</td>\n";
    echo "       <td>{$nip}</td>\n";
    echo "       <td>{$botonModificar}</td>\n";
    echo "       <td>{$botonBorrar}</td>\n";
    echo "      </tr>\n";
}