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

    <h1>Project 2: Blackjack - By Michael Jacobs</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>All players are playing against the dealer.</li>
        <li>other</li>
    </ul>

    <div>
        <h2>Dealer's Hand</h2>
        <table>
            <tr>
                <?php
                    for ($i=0; $i<(count($dealerHand));$i++) {
                        echo "<th> Card " .($i+1) . "</th>".PHP_EOL;
                    }
                        ?>
                <th>Total</th>
            </tr>
            <tr>
                <td>? <?php $dealerTotal; ?></td>
                <?php
                    for ($i=1; $i<(count($dealerHand));$i++) {
                        echo "<td>" .$dealerHand[$i][0]." ".$dealerHand[$i][1] . "</td>".PHP_EOL;
                    }
                ?>
                <td>? </td>
            </tr>
        </table>
    </div>
    <div>
        <h2>Player's Hand</h2>
        <table>
            <tr>
                <?php
                    for ($i=0; $i<(count($playerHand));$i++) {
                        echo "<th> Card " .($i+1) . "</th>".PHP_EOL;
                    }
                        ?>
                <th>Total</th>
            </tr>
            <tr><?php
                    for ($i=0; $i<(count($playerHand));$i++) {
                        echo "<td>" .$playerHand[$i][0]." ".$playerHand[$i][1] . "</td>".PHP_EOL;
                    }
                ?>
                <td><?php echo $playerTotal; ?></td>
            </tr>
        </table>
    </div>

    <form method='POST' action='process.php'>
        <label for="move">What would you like to do?</label>
        <input type='radio' id="new_game" name='move' value="new_game"><label for='new_game'>Start a new
            game</label>
        <input type='radio' id="stay" name='move' value="stay" checked><label for='stay'>Stay</label>
        <input type='radio' id="hit" name='move' value="hit"><label for='hit'>Hit</label>
        <!-- Add code to make split and double down only appear when certain condition are met -->
        <!-- if cards[0] == cards[1], then split is an option -->
        <!-- <input type='radio' id="split" name='move' value="split"><label for='split'>Split</label> -->

        <!-- If cards sum is 9, 10, or 11, double down is an option-->
        <!-- <input type='radio' id="double_down" name='move' value="double_down"><label for='double_down'>Double
            Down</label> -->
        <button type='submit'>Play</button>


    </form>
</body>

</html>