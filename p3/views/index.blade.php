@extends('templates/master')


@section('content')

    <h2>Welcome to Project 3: Nerd Count</h2>
    <h3>By: Michael Jacobs</h3>

    <p>This is the final project for DGMD E-2 WEB PROGRAMMING FOR BEGINNERS WITH PHP</p>
    <h3>Instructions</h3>
    <p>The goal of the game is to be the person to advance the count to 21. Each time it is your turn, you can advance the
        count by 1 or 2. You will take turns with the Nerd.</p>

    <h3>Start a new game</h3>
    <form method='POST' action='/new'>
        <label for="winning-number">Choose the winning number: It must be greater than 10</label>
        <input type="number" id="winning-number" name="winning-number" min="11">
        <label for="max-count">Choose how much each player can advance the count: It must be greater than 1 and less than
            5</label>
        <input type="number" id="max-count" name="max-count" min="2" max="5">
        <button type='submit'>start a new game!</button>
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
