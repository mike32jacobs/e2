<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller 
{
    public function index()
    {

        $products = $this->app->db()->all('products');
        return $this->app->view('products/index',['products' => $products]);
    }

    public function add()
    {

        return $this->app->view('products/new');
    }

    public function show()
    {
        $sku = $this->app->param('sku');


        $productQuery = $this->app->db()->findByColumn('products', 'sku', '=', $sku);

        if (empty($productQuery)){
            return $this->app->view('products/missing');
        } else {
            $product =$productQuery[0];
        }

        $product_id = $productQuery[0]['id'];

        $reviewsQuery = $this->app->db()->findByColumn('reviews', 'product_id', '=', $product_id);

        // dd($reviewsQuery);
        

        $reviewSaved = $this->app->old('reviewSaved');

        return $this->app->view('products/show',[
            'product'=>$product,
            'reviewSaved'=> $reviewSaved,
            'productAdded'=> false,
            'reviews'=> $reviewsQuery
        ]);
    }

    public function addProduct()
    {

        $this->app->validate([
            'name' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'price' => 'required', 
            'available' => 'required',
            'weight' => 'required',
            'perishable' => 'required',
        ]);
        
        # If the above validation fails, the user is redirected from whence they came (/product)
        #None of the following code will be executed

        $name = $this->app->input('name');
        $sku = $this->app->input('sku');
        $description = $this->app->input('description');
        $price = $this->app->input('price');
        $available = $this->app->input('available');
        $weight = $this->app->input('weight');
        $perishable = $this->app->input('perishable');

        // dd($name, $sku, $description, $price, $availability,$weight, $perishability);
        #Todo: Persist product to the database

        $this->app->db()->insert('products', [
            'name' => $name,
            'sku'=> $sku,
            'description' => $description,
            'price' => $price, 
            'available' => $available,
            'weight' => $weight,
            'perishable' => $perishable
        ]);

        $productAdded = $this->app->old('productAdded');

        // dd($productAdded);
        // If the product is successfully added to the database, then set product added to true. If not, return the user to the new products page
    
        // return $this->app->redirect('/product?sku=' . $sku,['productAdded'=>$productAdded]);    
        return $this->app->redirect('/product?sku=' . $sku,[
            'reviewSaved'=>false,
            'productAdded'=>true
        ]);

        

    }

    public function saveReview()
    {
        $this->app->validate([
            'sku' => 'required',
            'product_id' => 'required',
            'name' => 'required',
            'review' => 'required|minLength:200' 
        ]);
        
        # If the above validation fails, the user is redirected from whence they came (/product)
        #None of the following code will be executed

        $sku = $this->app->input('sku');
        $product_id = $this->app->input('product_id');
        $name = $this->app->input('name');
        $review = $this->app->input('review');

        #Todo: Persist review to the database

        $this->app->db()->insert('reviews', [
            'product_id' => $product_id,
            'name' => $name,
            'review'=> $review
        ]);

        return $this->app->redirect('/product?sku=' . $sku,[
            'reviewSaved'=>true,
            'productAdded'=>false
        ]);
        // return $this->app->redirect('/product?sku=' . $sku,['reviewSaved'=>true]);
    }
}