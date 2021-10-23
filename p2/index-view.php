<!doctype html>
<html lang='en'>

<head>
    <title>Project 2: BlackJack</title>
    <meta charset='utf-8'>
    <link href=data: , rel=icon>
</head>

<body>

    <h1>Project 2: Blackjack - By Michael Jacobs</h1>

    <h2>Mechanics</h2>
    <ul>
        <li>All players are playing against the dealer.</li>
        <li>other</li>
    </ul>

    <form method='POST' action='process.php'>
        <label for="move">What would you like to do?</label>
        <input type='radio' id="stay" name='move' value="stay" checked><label for='stay'>Stay</label>
        <input type='radio' id="hit" name='move' value="hit"><label for='hit'>Hit</label>
        <!-- Add code to make split and double down only appear when certain condition are met -->
        <!-- if cards[0] == cards[1], then split is an option -->
        <input type='radio' id="split" name='move' value="split"><label for='split'>Split</label>

        <!-- If cards sum is 9, 10, or 11, double down is an option-->
        <input type='radio' id="double_down" name='move' value="double_down"><label for='double_down'>Double
            Down</label>
        <button type='submit'>Play</button>

        <!-- 
        <label for="actions">What would you like to do?
            <select id="move">
                <option id="hit" value="hit">Hit</option>
                <option id="split" value="split">Split</option>
                <option id="double_down" value="double down">Double Down</option>
            </select>
            <input type="submit"> -->
    </form>
</body>

</html>