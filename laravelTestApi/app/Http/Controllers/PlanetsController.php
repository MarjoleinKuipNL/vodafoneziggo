<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Planets;
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
        $client =  new Client();
        $result = $client->request('GET', 'https://swapi.dev/api/planets');
        $result = $result->getBody();
        return $result;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function show(Planets $planets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function edit(Planets $planets)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planets  $planets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planets $planets)
    {
        //
    }
}
