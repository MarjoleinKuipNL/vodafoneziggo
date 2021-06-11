<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\People;
use Illuminate\Http\Request;

class PeoplesController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('https://swapi.dev/api/people/');
        $response = $response->json();
        $peoples =$response['results'];
        foreach($peoples as $people){
            //dd( $people['name']);
            $personExist = People::where('name', $people['name'])->first();

            if(!$personExist){
                //dd("Hallo");
                $person = new People();
                $person->name = $people['name'];
                $person->height = $people['height'];
                $person->mass = $people['mass'];
                $person->hair_color = $people['hair_color'];
                $person->gender = $people['gender'];
                $person->birth_year = $people['birth_year'];
                $person->eye_color = $people['eye_color'];
                $person->homeworld = $people['homeworld'];
                $person->skin_color = $people['skin_color'];
                $person->url = $people['url'];
                $person->save();

            }

        }
        $persons = People::orderBy('id')->get();
        return view('people.index', ['peoples' => $persons]);
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
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->route('id');
        $client =  new Client();
        $result = $client->request('GET', 'https://swapi.dev/api/people/' . $id . '/');
        $result = $result->getBody();
        return $result;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit(People $people)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, People $people)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
        //
    }
}
