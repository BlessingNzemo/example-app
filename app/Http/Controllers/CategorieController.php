<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Http\Requests\StoreCategorieRequest;
use App\Http\Requests\UpdateCategorieRequest;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::latest()->get();

        return view("categories.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategorieRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categorie $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategorieRequest $request, Categorie $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $category)
    {
        $category->delete();
        return back()->with("Success", "Suppression reussie");
    }
}
