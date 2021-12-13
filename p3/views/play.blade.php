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

    <div class=game_number> Game id: {{ $game['id'] }}</div>
    <div class=game_total> The current total is: {{ $total }}</div>
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




    <p>Choose the amount by which you would like to advance the count.</p>

    <form method='POST' action='/process'>

        <input type='radio' name="choice" value="1" id='count1'><label for='count1'>Add 1 to Count</label>
        <input type='radio' name="choice" value="2" id='count2'><label for='count2'>Add 2 to Count</label>
        <input type="hidden" name="game_id" id="game_id" value="{{ $game['id'] }}">
        <input type="hidden" name="total" id="total" value="{{ $total }}">

        <button type='submit'>Advance Count!</button>
    </form>

    @if ($app->errorsExist())
        <ul test='validation-errors-alert' class='error alert alert-danger'>
            @foreach ($app->errors() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection
