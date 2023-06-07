<?php

require_once "classes/seller-model.php";
require_once "views/extendedSellerView.php";


$pdo = require "partials/connect.php";

$sellerModel = new SellersModel($pdo);
$extendedSellerView = new ExtendedSellerView($pdo);

include "partials/header.php";
include "partials/nav.php";


$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

if($id !== false) {
    $extendedSellerView->renderSelectedSeller($sellerModel->getSellerWithGarments($id));
} else{
    echo "Denna finns ej";
}


include "partials/footer.php";