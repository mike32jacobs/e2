<?php

// session_start();


// Create an array of words and hints

$words = [
    'evidence' => 'A discovery that helps solve a crime',
    'ponder' => 'To think carefully about something',
    'locate' => 'Discover the exact place or position of something or someone',
    'abridge' => 'to shorten by leaving out some parts',
    'regulate' => 'to make rules or laws that control something',
    'modest' => 'not overly proud or confident',
    'impromptu' => 'not prepared ahead of time',
    'stint' => 'a period of time spent at a particular activity',
    'tranquil' => 'free from disturbance or turmoil',
    'mutiny' => 'a turning of a group against a person in charge'
];

// If a new mystery word is needed Choose a mystery word

if (is_null($mysteryWord)){
    $mysteryWord = array_rand($words, 1);
    $mysteryWordHint = $words[$mysteryWord];

    // Scramble the mystery word
    $scrambledWord = str_shuffle($mysteryWord);
}


// Compare submitted answer to the mystery word
// Get the answer from the form
$answer = $_POST['answer'];

// are there already results from the session? If so, get those variables.
$results = $_SESSION['results'];





// $results = $_SESSION['results'];
// var_dump($results);
// if(!is_null($_SESSION['results'])){
//     $haveAnswer = $results['haveAnswer'];
//     $correct = $results['correct'];
//     $mysteryWord = $results['mysteryWord'];
//     $mysteryWordHint = $results['mysteryWordHint'];
//     $scrambledWord = $results['scrambledWord'];
//     $words = $results['words'];

//     $_SESSION['results'] = null;
// }
// var_dump($mysteryWord);
// var_dump($mysteryWordHint);
// var_dump($scrambledWord);


require 'index-view.php';