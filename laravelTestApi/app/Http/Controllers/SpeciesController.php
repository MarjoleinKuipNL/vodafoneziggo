<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\Species;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class SpeciesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/species/');
        $response = $response->json();

        $species =$response['results'];

        foreach($species as $specie){
            $specieExist = Species::where('name', $specie['name'])->first();

            if(!$specieExist ){
                //dd($specie);

                //dd($result);

                $specy = new Species();
                $specy->name = $specie['name'];
                $specy->url = $specie['url'];
                $specy->language = $specie['language'];
                $homeworld = explode(',', $specie['homeworld']);
                $result = explode('/', end($homeworld));

                if($result == null || $result['0'] == ""|| $result == "undefined"){

                    //dd($result);
                    $specy->homeworld = 0;
                }else{

                    $specy->homeworld = $result['5'];
                }
                $specy->hair_colors = $specie['hair_colors'];
                $specy->eye_colors = $specie['eye_colors'];
                $specy->skin_colors = $specie['skin_colors'];
                $specy->designation = $specie['designation'];
                $specy->classification = $specie['classification'];
                if($specie['average_height'] == 'n/a'){
                    $specy->average_height = 0;
                }else{
                    $specy->average_height = $specie['average_height'];
                }
                if($specie['average_lifespan'] == 'n/a' ||
                    $specie['average_lifespan'] == 'indefinite' ||
                    $specie['average_lifespan'] == 'unknown'){
                    $specy->average_lifespan = 0;
                }else{
                    $specy->average_lifespan = $specie['average_lifespan'];
                }
                $specy->save();

            }
        }
        $species = Species::orderBy('id')->get();
        // dd($species);
        return $species->toJSON();
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
     * @param  \App\Models\Species  $species
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->route('id');
        $client =  new Client();
        $result = $client->request('GET', 'https://swapi.dev/api/species/' . $id . '/');
        $result = $result->getBody();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Species  $species
     * @return \Illuminate\Http\Response
     */
    public function edit(Species $species)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Species  $species
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Species $species)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Species  $species
     * @return \Illuminate\Http\Response
     */
    public function destroy(Species $species)
    {
        //
    }
}
