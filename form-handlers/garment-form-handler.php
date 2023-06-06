<?php 
require "../classes/clothing-model.php";
$pdo = require "../partials/connect.php";

$clothingModel = new ClothingModel($pdo);

if(isset($_POST['garment'], $_POST['size'], $_POST['price'], $_POST['seller_id'])) {
    $garment = filter_var($_POST['garment'], FILTER_SANITIZE_SPECIAL_CHARS);
    $size = filter_var($_POST['size'], FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_VALIDATE_INT);
    $sellerId = filter_var($_POST['seller_id'], FILTER_VALIDATE_INT);

    $clothingModel->addGarment($garment, $size, $price, $sellerId);

}

header("Location: ../clothes.php");
?>