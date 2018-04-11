<?php

try {
    $wsdl_url = 'http://localhost:8080/Examen/Zoo?WSDL';
    $client = new SOAPClient($wsdl_url);

    $datos = array('nombre' => $_POST['nombre'], 'especie' => $_POST['especie'], 'pais_origen' => $_POST['pais'],
                  'estatus' => $_POST['estado'], 'peso' => $_POST['peso'], 'altura' => $_POST['altura'], 'dieta' => $_POST['dieta'],
                  'sexo' => $_POST['sexo'], 'nivel_riesgo' => $_POST['riesgo'], 'id_habitad' => $_POST['habitad'], 'pres_pro' => null, 'img' => '1.png');

    $json = "[".json_encode($datos)."]";
    $params = array(
        'json' => $json,
    );
    $return = $client->insertarAnimales($params);
    print_r($return->return);
} catch (Exception $e) {
    echo "Exception occured: " . $e;
}
