<?php

require_once "db.php";

class ClothingModel extends DB {
    protected $table = "clothes";

    public function getAllClothes() {
        return $this->getAll($this->table);
    }

    public function addGarment(string $garment, string $size, int $price) {
        $sql = "INSERT INTO {$this->table} (garment, size, price) VALUES (?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$garment, $size, $price]);
    }

    public function totalCostPerSeller($sellerId){
        $sql = "SELECT SUM(price) AS totalCost FROM {$this->table} WHERE seller_id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$sellerId]);

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result['totalCost'];

    }

    public function getNumberOfGarments($sellerId){
        $sql = "SELECT COUNT(*) AS total FROM {$this->table} WHERE seller_id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$sellerId]);

        $result = $statement->fetch(PDO::FETCH_ASSOC);

         if($result && isset($result['total'])){
        return $result['total'];
     }
     return 0;

    }




}