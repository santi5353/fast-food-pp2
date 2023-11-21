<?php

require '../model/productsModel.php';

$productsModel = new productsModel();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $respuesta = $productsModel->getNutrientsComparisonData();
        $respuestaJSON = json_encode($respuesta, JSON_PRETTY_PRINT);

        header('Content-Type: application/json');
        echo $respuestaJSON;
        break;
}

?>
