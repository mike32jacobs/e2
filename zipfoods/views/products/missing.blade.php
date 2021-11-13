@extends('templates/master')

@section('title')
    Product Not Found
@endsection

@section('content')
    <h2>Product Not Found</h2>
    <p> Sorry, we were unable to find the product you were looking for.</p>
    <a href='/products'>
        Return to the products page
    </a>

@endsection
