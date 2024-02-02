<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $comicses = Comic::all();
       
        return view('comicses.list', compact('comicses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
                return view('comicses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $comic = new Comic(); 
 
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
         $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
      



        $comic->save();

        return redirect()->route('comicses.show', $comic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $comic = Comic::find($id);

    
        return view('comicses.show' , compact('comic'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) 
    {
        //

        $comic = Comic::findOrFail ($id);
 
        return view('comicses.edit' , compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
        
            $data = $request->all();
         $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->price = $data['price'];
         $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->type = $data['type'];
      



        $comic->save();
                return redirect()->route('comicses.show', $comic->id);
    
        //  $comic = Comic::findOrFail ($id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
