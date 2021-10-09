<?php
var_dump($_POST);
var_dump($_POST['answer1']);
var_dump($_POST['answer2']);

if(($_POST['answer1'] == '')&&($_POST['answer2'] == '') ) {
    var_dump('You didn’t enter a guess');
}
else if($_POST['answer1'] == 'pumpkin') {
    var_dump('Correct!');
}
else if($_POST['answer2'] == 'pumpkin') {
    var_dump('Correct!');
}
else {
    var_dump('Incorrect');
}