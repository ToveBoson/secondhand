<?php

class ClothingView {
    public function renderAllGarments(array $garments){
        echo "<ul>";
        foreach($garments as $garment) {
            echo "<li> {$garment["garment"]} i storlek {$garment["size"]} för endast {$garment["price"]} kr. </li>";
            echo "<input type='checkbox' name='garment_checkbox[]' value='{$garment["garment"]}'>";
        }
        echo "</ul>";
    }
}