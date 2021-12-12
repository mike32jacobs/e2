@extends('templates/master')

@section('title')
    Game Details
@endsection

@section('content')
    <h2>Game Details</h2>
    <ul>
        <li>Game id: {{ $game['id'] }}</li>
        <li>Winning Score: {{ $game['winning_score'] }}</li>
        <li>Max Count: {{ $game['max_count'] }}</li>
        <li>Winner: {{ $game['winner'] }}</li>
        <li>Time Stamp: {{ $game['timestamp'] }}</li>

    </ul>

    <a href='/history'>Back to game history</a>
@endsection
