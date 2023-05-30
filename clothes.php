<?php

require "classes/clothing-model.php";
require "views/clothesView.php";


$pdo = require "partials/connect.php";

$clothingModel = new ClothingModel($pdo);
$clothingView = new ClothingView();

include "partials/header.php";
include "partials/nav.php";


$clothingView->renderAllGarments($clothingModel->getAllClothes());
include "partials/garment-form.php";




include "partials/footer.php";

