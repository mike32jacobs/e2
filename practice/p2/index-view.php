<!doctype html>
<html lang='en'>

<head>
    <title>Project 2: BlackJack</title>
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
</head>

<body>
    <div>
        <h2>Dealer's Hand</h2>
        <table>
            <tr>
                <?php foreach ($dealerHand as $cardNumber => $card) { ?>
                <th>Card <?php echo $cardNumber + 1 ?>
                </th>
                <?php } ?>
                <th>Total</th>
            </tr>
            <tr>
                <?php foreach ($dealerHand as $card) { ?>
                <td><?php echo $card[0].' '.$card[1] ?>
                </td>
                <?php } ?>

                <td>?
                </td>
            </tr>
        </table>
    </div>

    <div>
        <h2>Player's Hand</h2>
        <table>
            <tr>
                <?php foreach ($playerHand as $cardNumber => $card) { ?>
                <th>Card <?php echo $cardNumber + 1 ?>
                </th>
                <?php } ?>
                <th>Total</th>
            </tr>
            <tr>
                <?php foreach ($playerHand as $cardNumber => $card) { ?>
                <td><?php echo $card[0].' '.$card[1] ?>
                </td>
                <?php } ?>

                <td><?php echo $playerTotal; ?>
                </td>
            </tr>
        </table>
    </div>

    <?php if (isset($outcome)) { ?>
    <h2>Results</h2>
    <?php if ($outcome == 'over') { ?>
    You went over 21 and lost.

    <?php } elseif ($outcome == 'blackjack') { ?>
    Blackjack! You won

    <?php } else { ?>
    You’re under.
    <?php } ?>
    <?php }?>

    <?php if (!isset($outcome) or ($outcome == 'under' and $move != 'stay')) { ?>
    <form method='POST' action='process.php'>
        <label for="move">What would you like to do?</label>

        <input type='radio' id="stay" name='move' value="stay" checked><label for='stay'>Stay</label>
        <input type='radio' id="hit" name='move' value="hit"><label for='hit'>Hit</label>

        <button type='submit'>Play</button>
    </form>
    <?php } else { ?>
    <a href='index.php?reset=true'>Play again</a>
    <?php } ?>
</body>

</html>