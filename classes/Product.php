<?php

class Product {
    //Properties
    protected $name;
    protected $code;
    protected $price;
    protected $scountedPrice;

    //Constructor
    public function __construct($name, $price) {
        $this->name = $name;
        $this->code = $this->genCode();
        $this->price = $price;
    }
    
    //Methods
    private function genCode() {
        return rand(1,100000);
    }

    public function setScount($scount) {
        if($scount != 0) {
            $this->scountedPrice = $this->price - $this->price * $scount / 100;
        } else {
            $this->scountedPrice = $this->price;
        }
    }

    public function getCode() {
        return $this->code;
    }
    public function getName() {
        return $this->name;
    }

    public function getFullPrice() {
        return number_format($this->price, 2);
    }

    public function getPrice() {
        return number_format($this->scountedPrice, 2);
    }
}