<?php

class SellersView {
    public function renderAllSellers(array $sellers){
        echo "<ul>";
        foreach($sellers as $seller) {
            echo "<li> {$seller["first_name"]} {$seller["last_name"]} {$seller["email"]}</li>";
        }
        echo "</ul>";
    }
}