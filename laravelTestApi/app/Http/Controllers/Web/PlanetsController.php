<?php

namespace App\Http\Controllers\Web;

use App\Models\Planets;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanetsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $planets = Planets::all();

        return view('planets.index', compact('planets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('planets.create');
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

        Planets::create($request->all());

        return redirect()->route('planets.index')->with('success','planets created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function show(Planets $planets)
    {
      return view('Planetss.show', compact('Planets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function edit(Planets $planets)
    {
        return view('planets.edit',compact('planets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planets $planets)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $planets->update($request->all());

        return redirect()->route('planets.index')->with('success','planets updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planets  $Planets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planets $planets)
    {
      $planets->delete();

       return redirect()->route('planets.index')
                       ->with('success','planets deleted successfully');
    }

}
