<?php
require '../model/productsModel.php';

$productsModel = new productsModel();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $itemsData = $productsModel->getItemsByCaloriesDescending();
        $responseJSON = json_encode($itemsData, JSON_PRETTY_PRINT);

        // Establecer encabezados para indicar que se envía JSON
        header('Content-Type: application/json');
        echo $responseJSON;
        break;
}
