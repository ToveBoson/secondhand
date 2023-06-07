<?php

class ClothingView {
    public function renderAllGarments(array $garments){
        echo "<ul>";
        foreach($garments as $garment) {
            echo "<li> {$garment["garment"]} i storlek {$garment["size"]} för endast {$garment["price"]} kr. ";

            if($garment['sold_date'] !== null) {
                echo "<span class='sold-label'>Sålt</span>";
            }

            echo "</li>";

        }
        echo "</ul>";
    }
}