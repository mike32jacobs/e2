<?php

namespace App\Controllers;

use App\Products;

class ProductsController extends Controller {
    public function index()
    {
        $productsObj = new Products($this->app->path('/database/products.json'));
        // dump($this->app->path('/database/products.json'));
        // dump($productsObj);
        $products = $productsObj->getAll();
        // dd($products);
        return $this->app->view('products/index',['products' => $products]);
    }
}