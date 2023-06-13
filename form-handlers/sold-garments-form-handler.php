<?php 
require "../classes/clothing-model.php";
$pdo = require "../partials/connect.php";

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['id'])){


        $garmentId = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
        if(!filter_var($garmentId, FILTER_VALIDATE_INT)) {

        } else {
            $clothingModel = new ClothingModel($pdo);

            $clothingModel->markGarmentAsSold($garmentId);

            header("Location: ../soldGarments.php");
        }
    }
}
