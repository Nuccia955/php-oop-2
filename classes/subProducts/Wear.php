<?php
require_once __DIR__ . '/../Product.php';

class Wear extends Product {
    //Properties
    protected $type;
    protected $availableSizes;

    //constructor
    public function __construct($name, $price, $type) {
        //constructor of Product
        parent::__construct($name, $price);

        //add constructor of Wear
        $this->type = $type;
        $this->availableSizes = $this->getAvailableSizes();
    }

    //Methods
    private function getAvailableSizes() {
        $sizes = ['XXS', 'XS', 'S', 'SM', 'M', 'ML', 'L', 'XL', 'XXL' ];
        $available_sizes = [];
        while(count($available_sizes) <= 4) {
            $i = rand(0, count($sizes) - 1);
            if(!in_array($sizes[$i], $available_sizes)) {
                $available_sizes [] = $sizes[$i];
            }
        }
        return join(', ', $available_sizes);
    }

    public function getType() {
        return $this->type;
    }

    public function getSizes() {
        return $this->availableSizes;
    }
}