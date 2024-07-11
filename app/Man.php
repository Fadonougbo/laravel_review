<?php 

namespace App;

class Man {

    public function __construct(private int $age) {

    }

    public function getAge():int {
        return $this->age;
    }
}




?>