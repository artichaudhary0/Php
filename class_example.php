<?php
    class Person{
        public $name ;
        public $age ;

        public function __construct($name,$age)
        {
            $this->name = $name
            $this->age = $age
        }

        public function data(){
            return "Hello, my name is {this->name} and I am{this->age} year old." ;
        }

    }

    $person1 = new Person("Arti",25);
    echo $person1->data()



?>