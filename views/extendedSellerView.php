<?php

require_once "classes/seller-model.php";
require_once "classes/clothing-model.php";

class ExtendedSellerView  {

    private $clothingModel;

    public function __construct(PDO $pdo)
    {
       $this->clothingModel = new CLothingModel($pdo); 
    }
    
    public function renderSelectedSeller(array $seller){
        echo "<div>";
        echo "<h1> {$seller["first_name"]} {$seller["last_name"]} </h1>";
        echo "<ul>";

        $sellerId = $seller['id'];
        $garmentCost = $seller['id'];
        $numberOfGarments = $this->clothingModel->getNumberOfGarments($sellerId);

        foreach($seller["garments"] as $garment) {
            echo "<li> {$garment["garment"]} i storlek {$garment["size"]} för {$garment["price"]} kr.</li>";
            $totalCost = $this->clothingModel->totalCostPerSeller($garmentCost);
        }
        echo "</ul>";
        echo "<p> Totala kostnaden av $numberOfGarments plagg är: $totalCost kr. </p>";
        echo "</div>";

    }
}