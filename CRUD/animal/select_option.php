<?php

try
{
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);
    $return = $client->consultaAnimales();
    $array = json_decode($return->return);
    $html = "";
    $bool = true;

    foreach ($array as $fila)
    {
      if($bool)
      {
        $html .= "<option value='".$fila->id."' selected>";
        $html .= $fila->nombre;
        $html .= "</option>";
        $bool = false;
      }
      else
      {
        $html .= "<option value='".$fila->id."'>";
        $html .= $fila->nombre;
        $html .= "</option>";
      }
    }
    echo $html;

} catch (Exception $e)
{
    echo "Exception occured: " . $e;
}
