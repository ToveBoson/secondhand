<?php


class SellersView {

    
    public function renderAllSellers(array $sellers){
        echo "<ul>";
        foreach($sellers as $seller) {
            $id = $seller['id'];
            $url = "extendedSeller.php?id=" . $id;

            echo "<li>";
            echo "<a href='$url'> {$seller["first_name"]} {$seller["last_name"]} {$seller["email"]} </a>";
            echo "</li>";
        }
        echo "</ul>";
    }
}