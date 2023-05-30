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

}