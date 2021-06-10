@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Voeg wijzig species toe:
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('species')}}">
                    terug naar index van species
                </a>

            </div>
        </div>

    </div>
    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </div>
    @endif
    <form action="{{ route('planets.update') }}" method="POST">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" value="{{ $specy->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Url</strong>

                    <input type="text" name="url" class="form-control" value="{{ $specy->url }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Average Height</strong>

                    <input type="text" name="average_height" class="form-control" value="{{ $specy->average_height }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Average Lifespan</strong>

                    <input type="text" name="average_lifespan" class="form-control" value="{{ $specy->average_lifespan }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Classification</strong>

                    <input type="text" name="classification" class="form-control" value="{{ $specy->classification }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation</strong>

                    <input type="text" name="designation" class="form-control" value="{{ $specy->designation }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Eye Colors</strong>

                    <input type="text" name="eye_colors" class="form-control" value="{{ $specy->eye_colors }}">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hair Colors</strong>

                    <input type="text" name="hair_colors" class="form-control" value="{{ $specy->hair_colors }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Homeworld</strong>

                    <input type="text" name="homeworld" class="form-control" value="{{ $specy->homeworld }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Language</strong>

                    <input type="text" name="language" class="form-control" value="{{ $specy->language }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skin Colors</strong>

                    <input type="text" name="skin_colors" class="form-control" value="{{ $specy->skin_colors }}">
                </div>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
