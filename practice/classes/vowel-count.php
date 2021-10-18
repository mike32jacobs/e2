<?php

require 'Catalog.php';

$catalog = new Catalog('products.json');

$product = $catalog->getById(9);

// var_dump($catalog->searchByName('he'));

$example1 = vowelCount('apple'); # Should yield 2
$example2 = vowelCount('lynx'); # Should yield 0
$example3 = vowelCount('hi'); # Should yield 1
$example4 = vowelCount('mississippi'); # Should yield 4

function vowelCount($word)
{
    $vowelCount=0;
    $vowels = ['a','e','i','o','u'];
    $wordArray = str_split($word,1);
    foreach ($wordArray as $letter){
        // echo "the letter is " . $letter;
        // echo $vowelCount;
        if(in_array($letter,$vowels)){
            $vowelCount++;
        }
    }
    return $vowelCount;
}
var_dump($example1);
var_dump($example2);
var_dump($example3);
var_dump($example4);

require 'index-view.php';