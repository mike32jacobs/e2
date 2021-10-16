<?php

session_start();

// Get the answer from the form
$answer = $_POST['answer'];

// are there already results from the session? If so, get those variables.
$results = $_SESSION['results'];

if(!is_null($_SESSION['results'])){
    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];
    $mysteryWord = $results['mysteryWord'];
    $mysteryWordHint = $results['mysteryWordHint'];
    $scrambledWord = $results['scrambledWord'];
    $words = $results['words'];

    // $_SESSION['results'] = null;
}
// var_dump($mysteryWord);
// var_dump($mysteryWordHint);
// var_dump($scrambledWord);

// Pass the variables back to the session

$_SESSION['results']=[
    'haveAnswer' => $haveAnswer,
    'correct'=> $correct,
    'mysteryWord'=> $mysteryWord,
    'mysteryWordHint'=> $mysteryWordHint,
    'scrambledWord'=> $scrambledWord,
    'words'=>$words
];

var_dump($answer);
var_dump($mysteryWord);
echo 'This is a test';
$haveAnswer = true;

// Test to see if the answer was correct

if($answer ==''){
    $haveAnswer = false;
} else if($answer == $mysteryWord) {
    $correct = true;
} else {
    $correct = false;
}

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

$mysteryWord = array_rand($words, 1);
$mysteryWordHint = $words[$mysteryWord];
var_dump($mysteryWord);
var_dump($mysteryWordHint);

$scrambledWord = str_shuffle($mysteryWord);
var_dump($scrambledWord);





header('Location: index.php');
// require 'index-view.php';