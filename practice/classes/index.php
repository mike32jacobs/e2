<?php

require 'Catalog.php';
require'Person.php';

// $catalog = new Catalog('products.json');

// $product = $catalog->getById(9);

// var_dump($catalog->searchByName('he'));

// $person = new Person('mike', 'jacobs', 45);

$person = new Person('John', 'Harvard', 45);
// var_dump($person);

echo $person->firstName; # Should print "John"

echo $person->getFullName(); # Should print "John Harvard"

echo $person->getClassification(); # Should print "adult"
require 'index-view.php';