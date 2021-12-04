<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();

        return view('recipes.index')->with('recipes', $recipes);
    }

    
    public function create()
    {
        $recipe = Recipe::all();

        return view('recipes.create')->with('recipe', $recipe);
    }


    public function store(Request $request)
    {
        $recipe = new Recipe;
        

        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->country = $request->country;
        
        $recipe->save();

        $recipe->country = $request->country;

        return redirect()->route('recetas.index');
    }

    
    public function show(Recipe $id)
    {
        //
    }

 
    public function edit($id)
    {
        $recipe = Recipe::find($id);

        return view('recipes.edit')->with('recipe', $recipe);
    }

   
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $recipe->name = $request->name;
        
        $recipe->description = $request->description;

        $recipe->country = $request->country;

        $recipe->save();

        return redirect()->route('recetas.index');
    }


    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect()->back();
    }
}
