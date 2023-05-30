<?php

require "classes/seller-model.php";
require "views/sellersView.php";

$pdo = require "partials/connect.php";

$sellersModel = new SellersModel($pdo);
$sellersView = new SellersView();

include "partials/header.php";
include "partials/nav.php";

$sellersView->renderAllSellers($sellersModel->getAllSellers());

include "partials/seller-form.php";


include "partials/footer.php";
