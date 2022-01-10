<?php
require_once __DIR__ . '/../User.php';

class Premium_user extends User {
    //Properties


    //Constructor
    public function __construct($first_name, $last_name, $age) {
        //constructor of User
        parent::__construct($first_name, $last_name, $age);
    }

    //Methods 
    protected function setScount() {
        $this->scount = 10;
    }
}