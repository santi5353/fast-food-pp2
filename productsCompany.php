<?php


require 'productsModel.php';

$productsModel = new productsModel();

switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $companies = $productsModel->getCompanies();
        $responseJSON = json_encode($companies, JSON_PRETTY_PRINT);

        // Establecer encabezados para indicar que se envía JSON
        header('Content-Type: application/json');
        echo $responseJSON;
        break;
}
