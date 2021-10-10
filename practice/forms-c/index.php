<?php

session_start();

$results = $_SESSION['results'];

if(!is_null($_SESSION['results'])){
    $haveAnswer = $results['haveAnswer'];
    $correct = $results['correct'];

    $_SESSION['results'] = null;
}


require 'index-view.php';