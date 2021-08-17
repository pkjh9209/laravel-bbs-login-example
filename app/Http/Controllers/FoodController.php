<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function food(){
        $foods = [
            'chicken',
            'pie'
        ];
        return view('index',compact('foods'));
    }
}
