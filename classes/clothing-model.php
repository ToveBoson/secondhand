<?php

require_once "db.php";

class ClothingModel extends DB {
    protected $table = "clothes";

    public function getAllClothes() {
        return $this->getAll($this->table);
    }

    public function addGarment(string $garment, string $size, int $price, int $sellerId) {
        $sql = "INSERT INTO {$this->table} (garment, size, price, seller_id) VALUES (?,?,?,?)";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$garment, $size, $price, $sellerId]);
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


public function getSoldGarmentCount() {
    $sql = "SELECT COUNT(*) AS count FROM clothes WHERE sold_date IS NOT NULL";
    $statement = $this->pdo->prepare($sql);
    $statement->execute();

    $result = $statement->fetch(PDO::FETCH_ASSOC);
    $count = $result['count'];

    return $count;
}

public function markGarmentAsSold($garmentId){
    $sql = "UPDATE clothes SET sold_date = CURRENT_DATE WHERE id = :garment_id";
    $statement = $this->pdo->prepare($sql);
    $statement->execute(['garment_id' => $garmentId]);
}


public function getSoldGarments() {
    $sql = "SELECT * FROM clothes WHERE sold_date IS NOT NULL";
    $statement = $this->pdo->query($sql);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}




}