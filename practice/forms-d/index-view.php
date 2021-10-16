<!doctype html>
<html lang='en'>

<head>
    <title>Mystery Word Scramble</title>
    <meta charset='utf-8'>
    <style>
    .correct {
        color: green;
    }

    .incorrect {
        color: red;
    }
    </style>
</head>

<body>

    <form method='POST' action='index.php'>
        <h1>Mystery Word Scramble</h1>

        <p>Mystery word: <?php echo $scrambledWord ?></p>
        <p>Hint: <?php echo $mysteryWordHint ?></p>

        <label for='answer'>Your guess:</label>
        <input type='text' name='answer' id='answer'>

        <button type='submit'>Check answer</button>
    </form>

    <?php if(isset($results)) { ?>

    <h1>Results</h1>

    <?php if($haveAnswer == false) {?>
    Please enter an answer.
    <?php } else if($correct) {?>
    <div class='correct'>You got it correct! </div>
    <?php } else{ ?>
    <div class='incorrect'>Incorrect. </div>
    <?php } ?>
    <?php } ?>

</body>

</html>