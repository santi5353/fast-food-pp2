<?php
require '../model/productsModel.php';


$productsModel = new productsModel();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $respuesta = $productsModel->getProducts();
        $respuestaJSON = json_encode($respuesta, JSON_PRETTY_PRINT); // Agregar JSON_PRETTY_PRINT

        // Establecer encabezados para indicar que se envía JSON
        header('Content-Type: application/json');
        echo $respuestaJSON;
        break;
}
