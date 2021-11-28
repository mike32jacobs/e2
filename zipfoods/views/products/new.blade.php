@extends('templates/master')

@section('title')
    Add Product
@endsection

@if ($app->errorsExist())
    <div class='alert alert-danger'>Please correct the errors below</div>
@endif

@section('content')
    <h2>Add a new product</h2>
    <p> Fill in the form below.</p>
    <div>
        <form method='POST' id='add-product' action='/products/save'>
            <div class='form-group'>
                <label for='name'>Name</label>
                <input type='text' class='form-control' name='name' id='name' value='{{ $app->old('name') }}'>
            </div>
            <div class='form-group'>
                <label for='sku'>Sku</label>
                <input type='text' class='form-control' name='sku' id='sku' value='{{ $app->old('sku') }}'>
            </div>
            <div class='form-group'>
                <label for='description'>Description</label>
                <textarea name='description' id='description'
                    class='form-control'>{{ $app->old('description') }}</textarea>
            </div>
            <div class='form-group'>
                <label for='price'>Price</label>
                <input type="number" name="price" id="price" value='{{ $app->old('price') }}'>
                {{-- <input type="number" name="price" id="price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class='form-control'
                    value='{{ $app->old('price') }}' data-type="currency" placeholder="$0.00"> --}}
            </div>
            <div class='form-group'>
                <input type="radio" id="available" name="available" value="1">
                <label for="available">Available</label><br>
                <input type="radio" id="not-available" name="available" value="0">
                <label for="css">Not Available</label><br>
            </div>
            <div class='form-group'>
                <label for='weight'>Weight</label>
                <input type="number" name="weight" id="weight" value='{{ $app->old('weight') }}'>
            </div>
            <div class='form-group'>
                <input type="radio" id="perishable" name="perishable" value="1">
                <label for="available">Perishable</label><br>
                <input type="radio" id="not-nonperishable" name="perishable" value="0">
                <label for="css">Non-perishable</label><br>
            </div>

            <button type='submit' class='btn btn-primary'>Save To Database</button>
        </form>
        @if ($app->errorsExist())
            <ul class='error alert alert-danger'>
                @foreach ($app->errors() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <a href='/products'>
        Return to the products page
    </a>



@endsection
