@extends('templates/master')

@section('title')
    Game History
@endsection

@section('content')
    <h2>Game History</h2>
    @foreach ($games as $game)
        <li><a href='/game?id={{ $game['id'] }}'>{{ $game['timestamp'] }}</a></li>
    @endforeach
    <a href='/'>Home</a>
@endsection
