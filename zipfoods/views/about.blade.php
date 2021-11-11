@extends('templates/master')

@section('title')
About
@endsection

@section('head')
<link href='/css/about.css' rel='stylesheet'>
@endsection

@section('content')

<h2>About</h2>

{{ $aboutMessage }}.

@endsection