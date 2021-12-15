@extends('templates/master')

@section('title')
    Play Game
@endsection

@if ($app->errorsExist())
    <div test='error-alert' class='alert alert-danger'>Please correct the errors below</div>
@endif

@section('content')

    <h2>Nerd Count</h2>
    <h3 test='my_name'>By: Michael Jacobs</h3>
    <img src="/images/scholnick.jpg" alt="Lewis Scholnick" width="25%">


    <div class=game_number> Game id: {{ $game['id'] }}</div>
    {{-- if ($choices[0]['total']is empty --}}
    @if (empty($choices))
        <div class=game_total> The current total is: 0</div>
    @else
        <div class=game_total> The current total is:
            <?php
            $num_choices = count($choices) - 1;
            echo $choices[$num_choices]['total'];
            ?>
        </div>
    @endif

    <div class=winning_score>
        The winning score is: <span test='winning-score'>{{ $game['winning_score'] }}</span></div>
    <div class=max_count> The maximum amount by which a player can advance the count is: <span
            test='max-count'>{{ $game['max_count'] }}</span></div>
    <div class=timestamp>Timestamp: {{ $game['timestamp'] }}</div>
    <div class=winner>winner: {{ $game['winner'] }}
        @if (is_null($game['winner']))
            no winner yet
        @endif
    </div>
    <ul>
        <li>Game id: {{ $game['id'] }}</li>
        <li>Winning Score: <span test='winning-score'>{{ $game['winning_score'] }}</span></li>
        <li>Max Count: <span test='max-count'>{{ $game['max_count'] }}</span></li>
        <li>Winner: @if (is_null($game['winner']))
                no winner yet
            @endif {{ $game['winner'] }}</li>
        <li>Time Stamp: {{ $game['timestamp'] }}</li>

    </ul>




    <p>Choose the amount by which you would like to advance the count.</p>

    <form method='POST' action='/process'>


        <input type='radio' name="choice" value="1" id='count1' checked='checked'><label for='count1'>Add 1 to Count</label>
        <input type='radio' name="choice" value="2" id='count2'><label for='count2'>Add 2 to Count</label>
        @if ($game['max_count'] > 2)
            <input type='radio' test='add-3-radio' name="choice" value="3" id='count3' checked='checked'><label
                for='count3'>Add 3 to
                Count</label>
        @endif
        @if ($game['max_count'] > 3)
            <input type='radio' test='add-4-radio' name="choice" value="4" id='count4' checked='checked'><label
                for='count4'>Add 4 to
                Count</label>
        @endif




        <input type="hidden" name="game_id" id="game_id" value="{{ $game['id'] }}">
        {{-- <input type="hidden" name="total" id="total" value="{{ $total }}"> --}}

        <button type='submit'>Advance Count!</button>
    </form>
    @if (is_null($choices))
        No Moves have been made yet
    @endif

    <table>
        <tr>
            <th>Player ID</th>
            <th>Total Count</th>
            <th>Choice (Add how many?)</th>
        </tr>
        <?php
        $i = count($choices) - 1;
        while ($i > 0) {
            echo '<tr>' . PHP_EOL;
            echo '<td>' . $choices[$i]['player_id'] . '</td>' . PHP_EOL;
            echo '<td>' . $choices[$i]['total'] . '</td>' . PHP_EOL;
            echo '<td>' . $choices[$i]['choice'] . '</td>' . PHP_EOL;
            echo '</tr>' . PHP_EOL;
            $i--;
        }
        ?>
    </table>

    @if ($app->errorsExist())
        <ul test='validation-errors-alert' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
