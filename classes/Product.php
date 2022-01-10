<?php

class Product {
    //Properties
    protected $name;
    protected $code;
    protected $price;

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

    public function getCode() {
        return $this->code;
    }
    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}