<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Planets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PlanetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/planets/');
        $response = $response->json();
        $planets =$response['results'];
        //dd($planets);
        foreach($planets as $planet){
            //dd( $planet);
            $planetExist = Planets::where('name', $planet['name'])->first();
            if(!$planetExist){
                //dd( $planet);
                $planeet = new Planets();
                $planeet->name = $planet['name'];
                $planeet->climate = $planet['climate'];
                $planeet->gravity = $planet['gravity'];
                $planeet->orbital_period = $planet['orbital_period'];
                if( $planet['population'] == "unknown"){
                    $planeet->population = 0;
                }else{
                    $planeet->population = $planet['population'];
                }

                $planeet->rotation_period = $planet['rotation_period'];
                if( $planet['surface_water'] == "unknown"){
                    $planeet->surface_water = 0;
                }else{
                    $planeet->surface_water = $planet['surface_water'];
                }


                $planeet->terrain = $planet['terrain'];
                $planeet->url = $planet['url'];
                $planeet->diameter = $planet['diameter'];
                $planeet->save();

            }
        }
        $planets = Planets::orderBy('id')->get();
        //dd($planets);
        return $planets->toJSON();
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
    public function show(Request $request)
    {
        $id = $request->route('id');
        $client =  new Client();
        $result = $client->request('GET', 'https://swapi.dev/api/planets/' . $id . '/');
        $result = $result->getBody();
        return $result;
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
