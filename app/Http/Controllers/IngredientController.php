<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredient = Ingredient::all();

        return view('ingredients.index')->with('ingredient', $ingredient);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ingredient = new Ingredient;

        $ingredient->name = $request->name;

        $ingredient->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ingredient  $ingredient
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //
    }

    public function edit(Ingredient $ingredient)
    {
        $ingredient = Ingredient::find($id);

        return view('ingredients.edit')->with('ingredient', $ingredient);
    }


    public function update(Request $request, Ingredient $ingredient)
    {
        //
    }

   
    public function destroy(Ingredient $ingredient)
    {
        $ingredient = Ingredient::find($id);
        $ingredient->delete();

        return redirect()->back();
    }
}
