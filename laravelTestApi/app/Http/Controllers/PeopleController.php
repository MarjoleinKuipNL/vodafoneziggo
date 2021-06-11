<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Models\People;
use GuzzleHttp\Exception\RequestException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $client =  new Client();
        // try{
        //     $result = $client->request('GET', 'https://swapi.dev/api/people/', [
        //     'Content-Type'     => 'application/json',
        //     'Accept'           => 'application/json']);
        //     $result = $result->getBody();
        //     $jsonData = $result->json();
        //     return $result;
        // } catch(RequestException $exception) {
        //     dd($exception);
        // }
        $response = Http::get('https://swapi.dev/api/people/');
        return $response->getBody()->getContents();
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
