<?php

  try
  {
      $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
      $client = new SOAPClient($wsdl_url);
      $return = $client->consultaHabitad();
      $array = json_decode($return->return);
      $html = "";
      $bool = true;

      foreach ($array as $fila)
      {
        if($bool)
        {
          $html .= "<option value='" . $fila->id ."' selected>" . $fila->descripcion . "</option>";
          $bool = false;
        }
        else
          $html .= "<option value='" . $fila->id ."'>" . $fila->descripcion . "</option>";
      }

      echo $html;

  } catch (Exception $e) {
      echo "Exception occured: " . $e;
  }
