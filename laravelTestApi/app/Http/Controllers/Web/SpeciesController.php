<?php

namespace App\Http\Controllers\Web;

use App\Models\Species;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SpeciesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $species = Species::all();

        return view('species.index', compact('species'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('species.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        Species::create($request->all());

        return redirect()->route('species.index')->with('success','Species created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Species  $Species
     * @return \Illuminate\Http\Response
     */
    public function show(Species $Species)
    {
      return view('species.show',compact('Species'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Species  $Species
     * @return \Illuminate\Http\Response
     */
    public function edit(Species $Species)
    {
        return view('species.edit',compact('Species'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Species  $Species
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Species $Species)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $Species->update($request->all());

        return redirect()->route('species.index')->with('success','Species updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Species  $Species
     * @return \Illuminate\Http\Response
     */
    public function destroy(Species $species)
    {
      $Species->delete();

       return redirect()->route('species.index')
                       ->with('success','Species deleted successfully');
    }
}
