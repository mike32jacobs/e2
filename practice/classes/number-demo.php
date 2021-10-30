<?php

require 'Number.php';
require 'EvenNumber.php';

$example1 = new Number(20);
$example2 = new EvenNumber(19);

var_dump($example1->isValid());
var_dump($example2->isValid());