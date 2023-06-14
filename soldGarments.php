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

$garments = $clothingModel->getAllClothes();
$soldGarments = $clothingModel->getSoldGarments();

include "partials/sold-garment-form.php";

echo "<h2> Sålda plagg: </h2>";
$clothingView->renderAllGarments($soldGarments);



include "partials/footer.php";

