<?php

class User {
    //Properties
    protected $first_name;
    protected $last_name;
    protected $age;
    protected $scount;

    //Constructor
    public function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }

    //Methods
    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
    protected function setScount() {
        if($this->age >= 65) {
            $this->scount = 15;
        }
    }
    public function getScount() {
        $this->setScount();
        return $this->scount . '%';
    }

}