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
        $Planetss = Planets::all();

        return view('Planetss.index', compact('Planetss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Planetss.create');
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

        return redirect()->route('Planetss.index')->with('success','Planets created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planets  $Planets
     * @return \Illuminate\Http\Response
     */
    public function show(Planets $Planets)
    {
      return view('Planetss.show',compact('Planets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planets  $Planets
     * @return \Illuminate\Http\Response
     */
    public function edit(Planets $Planets)
    {
        return view('Planetss.edit',compact('Planets'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planets  $Planets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planets $Planets)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $Planets->update($request->all());

        return redirect()->route('Planetss.index')->with('success','Planets updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planets  $Planets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planets $Planets)
    {
      $Planets->delete();

       return redirect()->route('Planetss.index')
                       ->with('success','Planets deleted successfully');
    }

}
