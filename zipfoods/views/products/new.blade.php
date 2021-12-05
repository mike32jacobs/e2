@extends('templates/master')

@section('title')
    Add Product
@endsection

@if ($app->errorsExist())
    <div class='alert alert-danger'>Please correct the errors below</div>
@endif

@section('content')
    <h2 test='instructions'>Add a new product</h2>
    <p> Fill in the form below.</p>
    <div>
        <form method='POST' id='add-product' action='/products/save'>
            <div class='form-group'>
                <label for='name'>Name</label>
                <input test='name-input' type='text' class='form-control' name='name' id='name'
                    value='{{ $app->old('name') }}'>
            </div>
            <div class='form-group'>
                <label for='sku'>Sku</label>
                <input test='sku-input' type='text' class='form-control' name='sku' id='sku'
                    value='{{ $app->old('sku') }}'>
            </div>
            <div class='form-group'>
                <label for='description'>Description</label>
                <textarea test='description-textarea' name='description' id='description'
                    class='form-control'>{{ $app->old('description') }}</textarea>
            </div>
            <div class='form-group'>
                <label for='price'>Price</label>
                <input test='price-input' type="number" name="price" id="price" value='{{ $app->old('price') }}'>
                {{-- <input type="number" name="price" id="price" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class='form-control'
                    value='{{ $app->old('price') }}' data-type="currency" placeholder="$0.00"> --}}
            </div>
            <div class='form-group'>
                <input test='radio-available' type="radio" id="available" name="available" value="1" checked>
                <label for="available">Available</label><br>
                <input type="radio" id="not-available" name="available" value="0">
                <label for="css">Not Available</label><br>
            </div>
            <div class='form-group'>
                <label for='weight'>Weight</label>
                <input test='weight-input' type="number" name="weight" id="weight" value='{{ $app->old('weight') }}'>
            </div>
            <div class='form-group'>
                <input test='radio-perishable' type="radio" id="perishable" name="perishable" value="1" checked>
                <label for="available">Perishable</label><br>
                <input type="radio" id="not-nonperishable" name="perishable" value="0">
                <label for="css">Non-perishable</label><br>
            </div>

            <button test='new-product-submit-button' type='submit' class='btn btn-primary'>Save To Database</button>
        </form>
        @if ($app->errorsExist())
            <ul test='new-product-errors' class='error alert alert-danger'>
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
