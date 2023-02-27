<?php

namespace App\Http\Controllers;
use App\Models\livre;
use App\Models\favori;
use Illuminate\Http\Request;


class livreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = favori::with('Users','livres')->get();
        return view('/favoris',
        ['data'=>$data]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {

        $livrefavoris = livre::find($id);
         favori::create([
            'livre_id'=>$livrefavoris->id,
            'user_id'=>auth()->user()->id
        ]);
        return redirect()->route('favorisT');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
