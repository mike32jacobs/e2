@extends('templates/master')

@section('title')
    Play Game
@endsection

@section('content')

    <h2>Nerd Count</h2>
    <h3>By: Michael Jacobs</h3>

    <div class=game_number> Game Number</div>
    <div class=game_total> The current total is: {{ $total }}</div>
    <div class=winning_score> The winning score is: {{ $winning_score }}</div>
    <div class=winning_score> The maximum amount by which a player can advance the count is: {{ $$max_count }}</div>

    <p>hello world</p>

    <form method='POST' action='/process'>

        <input type='radio' name="choice" value="1" id='count1'><label for='count1'>Add 1 to Count</label>
        <input type='radio' name="choice" value="2" id='count2'><label for='count2'>Add 2 to Count</label>

        <button type='submit'>Advance Count!</button>
    </form>

    {{-- <div>
        <p> This is a test to see if I can return data to this page.</p>
        <ol>
            <li>{{ $choice }}</li>
            <li>{{ $total }}</li>
            <li>{{ $winning_score }}</li>
            <li>{{ $max_count }}</li>
    </div> --}}

@endsection
