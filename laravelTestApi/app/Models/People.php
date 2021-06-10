<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    //  "birth_year": "19 BBY",
    // "eye_color": "Blue",
    // "films": [
    //     "https://swapi.dev/api/films/1/",
    //     ...
    // ],
    // "gender": "Male",
    // "hair_color": "Blond",
    // "height": "172",
    // "homeworld": "https://swapi.dev/api/planets/1/",
    // "mass": "77",
    // "name": "Luke Skywalker",
    // "skin_color": "Fair",
    // "created": "2014-12-09T13:50:51.644000Z",
    // "edited": "2014-12-10T13:52:43.172000Z",
    // "species": [
    //     "https://swapi.dev/api/species/1/"
    // ],
    // "starships": [
    //     "https://swapi.dev/api/starships/12/",
    //     ...
    // ],
    // "url": "https://swapi.dev/api/people/1/",
    // "vehicles": [
    //     "https://swapi.dev/api/vehicles/14/"
    //     ...
    // ]
            /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'birth_year',
        'eye_color',
        'gender',
        'hair_color',
        'height',
        'homeworld',
        'mass',
        'name',
        'skin_color',
        'url'
    ];

    public function species(){
        return $this->belongsTo(Species::class);
    }
}
