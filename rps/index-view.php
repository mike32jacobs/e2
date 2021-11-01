<!doctype html>
<html lang='en'>

<head>
    <title></title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>
    <style>
    table {
        width: 100%
    }

    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 15px;
        text-align: center;
        vertical-align: middle;
    }

    tr:nth-child(even) {
        background-color: #D6EEEE;
    }
    </style>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Rock Paper Scissors:</h1>
    <h2>Part of the homework on week 9</h2>

    <div>
        <h3>Mechanics</h3>
        <ul>
            <li>Rock beats scissors</li>
            <li>Paper beats rock</li>
            <li>Scissors beats paper</li>
        </ul>
    </div>
    <div>
        <h3>Results</h3>
        <ul>
            <li>The Player 1 threw: <?php echo $playerMove; ?></li>
            <li>The computer threw: <?php echo $computerMove; ?></li>
            <li>You <?php echo $outcome; ?>.</li>
        </ul>
        <table>
            <tr>
                <th>Round #</th>
                <th>Player Move</th>
                <th>Computer Move</th>
                <th>Result</th>
            </tr>
            <!-- Create a for loop to dynamically generate the table-->
            <?php
            $i = 0;
            while ($i < (count($results))){
                echo "<tr>" .PHP_EOL;
                echo "<td>" .($i + 1)."</td>".PHP_EOL;
                echo "<td>" .$results[$i]['player']. "</td>".PHP_EOL;
                echo "<td>" .$results[$i]['computer']. "</td>".PHP_EOL;
                echo "<td>" .$results[$i]['outcome']. "</td>".PHP_EOL;
                echo "</tr>" .PHP_EOL;
                $i++;
            }
            ?>

    </div>
</body>

</html>