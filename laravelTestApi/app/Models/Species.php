<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Species extends Model
{
    use HasFactory;
    //   "average_height": "2.1",
    // "average_lifespan": "400",
    // "classification": "Mammal",
    // "created": "2014-12-10T16:44:31.486000Z",
    // "designation": "Sentient",
    // "edited": "2014-12-10T16:44:31.486000Z",
    // "eye_colors": "blue, green, yellow, brown, golden, red",
    // "hair_colors": "black, brown",
    // "homeworld": "https://swapi.dev/api/planets/14/",
    // "language": "Shyriiwook",
    // "name": "Wookie",
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'language',
        'homeworld',
        'hair_colors',
        'eye_colors',
        'edited',
        'designation',
        'classification',
        'created',        'average_lifespan',
        'average_height',
    ];
    protected $casts = [
        'eye_colors' => 'array',
        'hair_colors' => 'array',
    ];

    public function people(){
        return $this->hasMany(People::class);
    }
}
