
<?php

try {
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);
    $return = $client->consultaCuidadores();
    $array = json_decode($return->return);

    foreach ($array as $fila) {

      if($fila->id == $_POST['id'])
      {
        $datos = array('id' => $fila->id, 'nombre' => $fila->nombre, 'apellidos' => $fila->apellidos, 'nacionalidad' => $fila->nacionalidad,
                                'telefono' => $fila->telefono, 'estatus' => $fila->estatus, 'fecha_ingreso' => $fila->fecha_ingreso);
      }

    }

    $json = "[".json_encode($datos)."]";
    $params = array(
        'json' => $json,
    );
    $return = $client->eliminarCuidadores($params);
    print_r($return->return);
} catch (Exception $e) {
    echo "Exception occured: " . $e;
}
