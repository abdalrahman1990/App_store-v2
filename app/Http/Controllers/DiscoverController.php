<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Product;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{

    public function index()
    {
        $stories = Story::all();
         //$products = Product::all();
        $productsLove = Product::inRandomOrder()->limit(4)->get();
        $productsPaid = Product::where('price', '>', 0)->orderBy('price', 'desc')->limit(6)->get();

        return [
            'stories' => $stories,
            'productsLove' => $productsLove,
            'productsPaid' => $productsPaid,
        ];
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
