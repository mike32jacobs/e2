<!doctype html>
<html lang='en'>

<head>
    <title>Project 1</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>
</head>

<body>
    <h1>Project 1...</h1>

    <h2>Mechanics</h2>
    <ul <li>...</li>
    </ul>

    <h2>Results</h2>
    <ul <li>...</li>
    </ul>
    <p>
        Player 1 Card is <?php echo $cardName; ?> of <?php echo $cardSuit; ?>.
        Player 1 has <?php echo $cardsRemainingP1; ?> cards remaining. Player 2 has <?php echo $cardsRemainingP2; ?>
        cards remaining.
        The winner is <?php echo $gameWinner; ?>.
        The game took <?php echo $roundsPlayed; ?> rounds to complete.

    </p>
    <table>
        <tr>
            <th>Round #</th>
            <th>Player 1 card</th>
            <th>Player 2 card</th>
            <th>Winner</th>
            <th>Player 1 cards left</th>
            <th>Player 2 cards left</th>
        </tr>
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