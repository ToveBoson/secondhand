<?php

require "classes/clothing-model.php";
require "views/clothesView.php";
require_once "classes/seller-model.php";

$pdo = require "partials/connect.php";

$clothingModel = new ClothingModel($pdo);
$clothingView = new ClothingView();
$sellerModel = new SellersModel($pdo);


include "partials/header.php";
include "partials/nav.php";

if(isset($_POST['garment_checkbox'])){
    foreach($_POST['garment_checkbox'] as $garmentId) {
        $clothingModel->markGarmentAsSold($garmentId);
    }
}


$clothingView->renderAllGarments($clothingModel->getAllClothes());

$sellers = $sellerModel->getAllSellers();
include "partials/garment-form.php";

$count = $clothingModel->getSoldGarmentCount();
echo "Antal sålda plagg: " . $count;



include "partials/footer.php";

