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
}