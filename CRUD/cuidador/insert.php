<?php

try {
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);

    $fecha = date("Y") . "-" . date("m") . "-" . date("d");

    $datos = array('nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'], 'nacionalidad' => $_POST['nacionalidad'],
                            'telefono' => $_POST['telefono'], 'estatus' => $_POST['estado'], 'fecha_ingreso' => $fecha);

    $json = "[".json_encode($datos)."]";
    $params = array(
        'json' => $json,
    );;
    $return = $client->insertarCuidadores($params);
    print_r($return->return);
} catch (Exception $e) {
    echo "Exception occured: " . $e;
}
