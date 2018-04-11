<?php

try {
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);
    $return = $client->consultaCuidadores();

    $array = json_decode($return->return);

    $content = "<table class='table table-hover table-bordered table-condensed'>";
    $content .=	"<thead>";
    $content .=	"<tr>";
    $content .= "<th style='text-align: center;'>Nombre</th>";
    $content .= "<th style='text-align: center;'>Apellidos</th>";
    $content .= "<th style='text-align: center;'>Nacionalidad</th>";
    $content .= "<th style='text-align: center;'>Telefono</th>";
    $content .= "<th style='text-align: center;'>Status</th>";
    $content .=	"</tr>";
    $content .=	"</thead>";
    $content .=	"<tbody>";
    foreach ($array as $fila)
    {
      $content .= "<tr>";

      $content .= "<td style='text-align: center;'>" . $fila->nombre  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->apellidos  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->nacionalidad  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->telefono  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->estatus  . "</td>";

      $content .= "</tr>";
    }
    $content .=	"</tbody>";
    $content .=	"</table>";
    $content .= "</div>";

    echo $content;

} catch (Exception $e) {
    echo "Exception occured: " . $e;
}
