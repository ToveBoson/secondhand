<?php 
require "../classes/clothing-model.php";

$clothingModel = new ClothingModel(require "../partials/connect.php");

if(isset($_POST['garment'], $_POST['size'], $_POST['price'])) {
    $garment = filter_var($_POST['garment'], FILTER_SANITIZE_SPECIAL_CHARS);
    $size = filter_var($_POST['size'], FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);

    $clothingModel->addGarment($garment, $size, $price);
}

header("Location: ../clothes.php");
?>