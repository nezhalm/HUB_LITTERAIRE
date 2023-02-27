<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            return view('forme_add_cat');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $flag = "new";
        $route = "/categorieController/create";
        return view('/forme_add_cat',['route'=>$route,'flag'=>$flag]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'nom'=>'required|unique:categories|max:100',
            'description'=>'required|min:6'

        ]);
        //  return $valid;
        $categorie = categorie::create([
            'nom'=>$request->nom,
            'description'=>$request->description
        ]);
        return redirect('/categoriesaffichage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie = categorie::find($id);
         return view('single',['categorie'=>$categorie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat = categorie::find($id);
        return view('/forme_edit_data',['cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $categorie = categorie::find($id);
       $categorie->nom = $request->nom;
       $categorie->description = $request->description;
       $categorie->update();
        return redirect('/categoriesaffichage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat = categorie::find($id);
        $cat->delete();
        return redirect('/categoriesaffichage');
    }
}
