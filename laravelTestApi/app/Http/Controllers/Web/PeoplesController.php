<?php

namespace App\Http\Controllers\Web;

use App\Models\People;
use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class PeoplesController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // $client =  new \GuzzleHttp\Client();
        // // $response = $client->request('GET', 'https://swapi.dev/api/people/');
        // $request = $client->get('https://swapi.dev/api/people/');
        // $peoples = $request->getBody();
        // return $result;
        // $peoples = People::all();
        // if($response->getBody()){
        //     $peoples = $response->getBody();
        // }
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
       return view('people.create');
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
            'name' => 'required',
            'hair_color' => 'required',
            'homeworld' => 'required',
            'mass' => 'required',
            'gender' => 'required',
            'birth_year' => 'required',
            'eye_color' => 'required',
            'skin_color' => 'required',
            'url' => 'required',
            'height' => 'required'
        ]);

        People::create($request->all());

        return redirect()->route('people.index')->with('success','People created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $people = People::findOrFail($id);
        //dd($people);
      return view('people.show',compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $people = People::findOrFail($id);
        return view('people.edit',compact('people'));
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

        $request->validate([
            'name' => 'required',
            'hair_color' => 'required',
            'homeworld' => 'required',
            'mass' => 'required|integer',
            'gender' => 'required',
            'birth_year' => 'required',
            'eye_color' => 'required',
            'skin_color' => 'required',
            'url' => 'required',
            'height' => 'required|integer'
        ]);


        $people->update($request->all());

        return redirect()->route('people.index')->with('success','people updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy(People $people)
    {
      $people->delete();

       return redirect()->route('people.index')
                       ->with('success','people deleted successfully');
    }

}
