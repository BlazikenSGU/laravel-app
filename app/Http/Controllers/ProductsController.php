<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        // $title = 'LARAVEL COURSE FRROM NGUYEN DUC HOANG';

        // return view('products.index', compact('title'));

        // $myphone = [
        //     'name' => 'iphone 14',
        //     'year' => 2022,
        //     'isFavorite' => true,
        // ];

        // return view('products.index', [
        //     'myphone' => $myphone
        // ]);

        print_r(route('products'));
        return view('products.index');
    }

    public function about()
    {
        return 'this is page About';
    }

    public function detail($id)
    {
        return "product's id = " . $id;
        // return view('products.index', $id);

        // $phones = [
        //     'iphone 15' => 'iphone 15',
        //     'samsung' => 'samsung'
        // ];

        // return view('products.index', [
        //     'product' => $phones[$productName] ?? 'unknown product',
        // ]);
    }


}
