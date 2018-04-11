
<?php

try {
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);
    $return = $client->consultaAnimales();
    $array = json_decode($return->return);

    foreach ($array as $fila) {

      if($fila->id == $_POST['id'])
      {
        $datos = array('id' => $fila->id, 'nombre' => $fila->nombre, 'especie' => $fila->especie, 'pais_origen' => $fila->pais_origen,
                      'estatus' => $fila->estatus, 'peso' => $fila->peso, 'altura' => $fila->altura, 'dieta' => $fila->dieta,
                      'sexo' => $fila->sexo, 'nivel_riesgo' => $fila->nivel_riesgo, 'id_habitad' => $fila->id_habitad, 'pres_prop' => $fila->pres_prop,
                      'img' => $fila->imagen);
      }

    }

    $json = "[".json_encode($datos)."]";
    $params = array(
        'json' => $json,
    );
    $return = $client->eliminarAnimales($params);
    print_r($return->return);
} catch (Exception $e) {
    echo "Exception occured: " . $e;
}
