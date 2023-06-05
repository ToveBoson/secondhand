<?php

require_once "db.php";

class SellersModel extends DB {
    protected $table = "sellers";

    public function getAllSellers() {
        $query = "SELECT * FROM $this->table ORDER BY first_name ASC ";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addSeller(string $first_name, string $last_name, string $email) {
        $sql = "INSERT INTO {$this->table} (first_name, last_name, email) VALUES (?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$first_name, $last_name, $email]);
    }

    public function getSellerWithGarments(int $id){
        $query = "SELECT sellers.id, sellers.first_name, sellers.last_name, clothes.garment, clothes.size, clothes.price, clothes.seller_id FROM sellers 
        JOIN clothes ON sellers.id = clothes.seller_id 
        WHERE sellers.id = ?";
        $statement = $this->pdo->prepare($query);
        $statement->execute([$id]);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if($result) {
            $seller = [
                "id" => $result[0]["id"],
                "first_name" => $result[0]["first_name"],
                "last_name" => $result[0]["last_name"]
            ];

            foreach($result as $row) {
                $seller["garments"][] = [
                    "garment" => $row["garment"],
                    "size" => $row["size"], 
                    "price" => $row["price"]              
                ];
            }
                    return $seller;
        }

            return null;

    }

}