@extends('templates/master')

@section('title')
    Game Details
@endsection

@section('content')
    <h2>Game Details</h2>
    <ul>
        <li>Game id: {{ $game['id'] }}</li>
        <li>Winning Score: <span test='winning-score'>{{ $game['winning_score'] }}</span></li>
        <li>Max Count: <span test='max-count'>{{ $game['max_count'] }}</span></li>
        <li>Winner: {{ $game['winner'] }}</li>
        <li>Time Stamp: {{ $game['timestamp'] }}</li>

    </ul>

    <h2>Game History: Choice By Choice</h2>
    <table>
        <tr>
            <th>Player ID</th>
            <th>Total Score Before Choice</th>
            <th>Choice (Add how many?)</th>
        </tr>
        <?php
        $i = 0;
        while ($i < count($choices)) {
            echo '<tr>' . PHP_EOL;
            echo '<td>' . $choices[$i]['player_id'] . '</td>' . PHP_EOL;
            echo '<td>' . $choices[$i]['total_before_choice'] . '</td>' . PHP_EOL;
            echo '<td>' . $choices[$i]['choice'] . '</td>' . PHP_EOL;
            echo '</tr>' . PHP_EOL;
            $i++;
        }
        ?>
    </table>

    <a href='/history'>Back to game history</a>
@endsection
