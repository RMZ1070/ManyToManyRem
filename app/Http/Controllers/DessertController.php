<?php

namespace App\Http\Controllers;

use App\Dessert;
use App\Ingredient;
use Illuminate\Http\Request;

class DessertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dessert = Dessert::all();
        return view('welcome', compact('dessert'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredient = Ingredient::all();
        return view('createdessert', compact('ingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desserts = new Dessert();
        $desserts->name = $request->input('name');
        $desserts->save();
        $desserts->ingredient()->attach($request->ingredient);
        

        return redirect()->route('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dessert  $dessert
     * @return \Illuminate\Http\Response
     */
    public function show(Dessert $dessert)
    {
        $dessert = Dessert::all();
        return view('showdessert',compact('dessert'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dessert  $dessert
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dessert = Dessert::find($id);
        $ingredient = Ingredient::all();
        return view('editdessert', compact('dessert','ingredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dessert  $dessert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dessert = Dessert::find($id);
        $dessert->name = $request->input('name');
        $dessert->save();
        $dessert->ingredient()->detach();
        $dessert->ingredient()->attach($request->ingredient);
        

        return redirect()->route('welcome');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dessert  $dessert
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dessert = Dessert::find($id);
        $dessert->delete();
        return redirect()->route('welcome');
    }
}
