<?php
require_once __DIR__ . '/../Product.php';

class Wear extends Product {
    //Properties
    protected $type;
    protected $availableSizes;
    protected $availableColors;

    //constructor
    public function __construct($name, $price, $type) {
        //constructor of Product
        parent::__construct($name, $price);

        //add constructor of Wear
        $this->type = $type;
        $this->availableSizes = $this->getAvailableSizes();
        $this->availableColors = $this->getAvailableColors();
    }

    //Methods
    private function getAvailableSizes() {
        $sizes = ['XXS', 'XS', 'S', 'SM', 'M', 'ML', 'L', 'XL', 'XXL' ];
        $shoes_sizes = ['36', '37', '38', '39', '40', '41', '42', '43'];
        $available_sizes = [];
        while(count($available_sizes) <= 4) {
            if($this->type == 'top-wear') {
                $i = rand(0, count($sizes) - 1);
                if(!in_array($sizes[$i], $available_sizes)) {
                    $available_sizes [] = $sizes[$i];
                    sort($available_sizes);
                }
            } elseif($this->type == 'shoes') {
                $i = rand(0, count($shoes_sizes) - 1);
                if(!in_array($shoes_sizes[$i], $available_sizes)) {
                    $available_sizes [] = $shoes_sizes[$i];
                    sort($available_sizes);
                }
            }
        }
        return join(', ', $available_sizes);
    }

    private function getAvailableColors() {
        $colors = ['blue', 'red', 'orange', 'white', 'black', 'purple', 'yellow', 'green'];
        $available_colors = [];
        while(count($available_colors) <= 4) {
            $i = rand(0, count($colors) - 1);
            if(!in_array($colors[$i], $available_colors)) {
                $available_colors [] = $colors[$i];
                sort($available_colors);
            }
        }
        return join(', ', $available_colors);

    }

    public function getType() {
        return $this->type;
    }

    public function getSizes() {
        return $this->availableSizes;
    }

    public function getColors() {
        return $this->availableColors;
    }
}