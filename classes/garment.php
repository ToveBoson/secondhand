<?php

class Garment {

    private string $garment;
    private string $size;
    private int $price;

    public function __construct($garment, $size, $price) {

        $this->garment = $garment;
        $this->size = $size;
        $this->price = $price;
    }

    public function getGarment():string {
        return $this->garment;
    }

    public function getSize(): string {
        return $this->size;
    }

    public function getPrice(): int {
        return $this->price;
    }

}