<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 1: War - By Michael Jacobs</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>Each player starts with half the deck (26 cards), shuffled in a random order.</li>
        <li>For each round, a card is picked from the “top” of each player’s cards.</li>
        <li>Whoevers card is highest wins that round and keeps both cards.</li>
        <li>If the two cards are of the same value, it’s a tie and those cards are discarded.</li>
        <li>The player who ends up with 0 cards is the loser.</li>
    </ul>

    <h2>Results</h2>
    <ul>
        <li>Rounds Played: <?php echo $roundsPlayed; ?> </li>
        <li>Winner: <?php echo $gameWinner; ?></li>
    </ul>

    <table>
        <tr>
            <th>Round #</th>
            <th>Player 1 card</th>
            <th>Player 2 card</th>
            <th>Winner</th>
            <th>Player 1 cards left</th>
            <th>Player 2 cards left</th>
        </tr>
        <!-- Create a for loop to dynamically generate the table-->
        <?php
        $i = 0;
        while ($i < ($roundsPlayed - 1)){
            echo "<tr>" .PHP_EOL;
            echo "<td>" .($i + 1)."</td>".PHP_EOL;
            echo "<td>" .$p1CardsPlayedData[$i]['name']." of ".$p1CardsPlayedData[$i]['suit']."</td>".PHP_EOL;
            echo "<td>" .$p2CardsPlayedData[$i]['name']." of ".$p2CardsPlayedData[$i]['suit']."</td>".PHP_EOL;
            echo "<td>" .$roundWinnersData[$i]."</td>".PHP_EOL;
            echo "<td>" .$cardsRemainingP1Data[$i]."</td>".PHP_EOL;
            echo "<td>" .$cardsRemainingP2Data[$i]."</td>".PHP_EOL;
            echo "</tr>" .PHP_EOL;
            $i++; 
        }
        ?>

        <tr>
            <td><?php echo $roundsPlayed; ?></td>
            <td><?php echo $p1Card['name']; ?> of <?php echo $p1Card['suit']; ?></td>
            <td><?php echo $p2Card['name']; ?> of <?php echo $p2Card['suit']; ?></td>
            <td><?php echo $roundWinner; ?></td>
            <td><?php echo $cardsRemainingP1; ?></td>
            <td><?php echo $cardsRemainingP2; ?></td>
        </tr>
    </table>
</body>

</html>