<?php

class Person
{
    # Properties
    public $firstName;
    public $lastName;
    public $age;


    


    # Methods
    public function __construct($firstName,$lastName,$age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

    }

    public function getFullName()
    {
        return $this->firstName .' ' . $this->lastName;
    }

    public function getClassification()
    {
        if($this->age > 18){
            return 'adult';
        } else {
            return 'minor';
        }
    }
}