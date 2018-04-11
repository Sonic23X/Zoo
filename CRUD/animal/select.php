<?php

try
{
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);
    $return = $client->consultaAnimales();
    $array = json_decode($return->return);

    $content = "<table class='table table-hover table-bordered table-condensed'>";
    $content .=	"<thead>";
    $content .=	"<tr>";
    $content .= "<th style='text-align: center;'>Nombre</th>";
    $content .= "<th style='text-align: center;'>Especie</th>";
    $content .= "<th style='text-align: center;'>Pais de origen</th>";
    $content .= "<th style='text-align: center;'>Estado</th>";
    $content .= "<th style='text-align: center;'>Sexo</th>";
    $content .= "<th style='text-align: center;'>Habitad</th>";
    $content .= "<th style='text-align: center;'>Imagen</th>";
    $content .=	"</tr>";
    $content .=	"</thead>";
    $content .=	"<tbody>";
    foreach ($array as $fila)
    {
      $content .= "<tr>";

      $content .= "<td style='text-align: center;'>" . $fila->nombre  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->especie  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->pais_origen  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->estatus  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->sexo  . "</td>";
      $content .= "<td style='text-align: center;'>" . $fila->id_habitad  . "</td>";
      $content .= "<td style='text-align: center;'>";
      $content .= "<button onclick=set('".$fila->imagen."') type='button' class='btn btn-secondary' data-toggle='modal' data-target='#IMG'>Ver Imagen</button>";
      $content .= "</td>";

      $content .= "</tr>";
    }
    $content .=	"</tbody>";
    $content .=	"</table>";
    $content .= "</div>";

    echo $content;

} catch (Exception $e)
{
    echo "Exception occured: " . $e;
}
