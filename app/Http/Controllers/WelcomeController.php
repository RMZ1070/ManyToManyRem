<?php

namespace App\Http\Controllers;

use App\Ingredient;
use App\Dessert;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
       $dessert = Dessert::all();
        $ingredient = Ingredient::all();
        return view('welcome', compact('ingredient','dessert'));

    }
}