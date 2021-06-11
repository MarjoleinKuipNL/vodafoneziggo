@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit people</h2>
            </div>
            <a class="btn btn-primary" href="{{ route('people.index')}}">
                terug naar index van mensen
            </a>
        </div>
    </div>

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
    @endif

    <form action="{{ url('people/'. $people->id)}}" method="PUT">
        @csrf

        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name"  class="form-control" value="{{ $people->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Url</strong
                    <input type="text" name="url" class="form-control" value="{{ $people->url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Hair Color</strong>
                    <input type="text" name="hair_color" class="form-control"  value="{{ $people->hair_color }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Homeworld: </strong>
                    <input type="text" name="homeworld" class="form-control" value="{{ $people->homeworld }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Mass</strong>
                    <input type="number" name="mass" class="form-control" value="{{ $people->mass }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Gender</strong>
                    <input type="text" name="gender" class="form-control" value="{{ $people->gender }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Birth Year</strong>
                    <input type="text" name="birth_year" class="form-control" value="{{ $people->birth_year }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Eye Color</strong>
                    <input type="text" name="eye_color" class="form-control" value="{{ $people->eye_color }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Skin color</strong>
                    <input type="text" name="skin_color" class="form-control" value="{{ $people->skin_color }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <div class="form-group">
                    <strong>Height</strong>
                    <input type="number" name="height" class="form-control" value="{{ $people->height }}">
                </div>
            </div>

            <div class="text-center col-xs-12 col-sm-12 col-md-10 col-lg-6">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </div>
    </form>
@endsection
