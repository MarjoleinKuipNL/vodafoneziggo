@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Voeg nieuwe planeten toe:
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planets')}}">
                    terug naar index van planeten
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
    <form action="{{ route('people.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Url</strong>
                    <input type="text" name="url" class="form-control" placeholder="url">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Climate</strong>
                    <input type="text" name="climate" class="form-control" placeholder="climate">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Diameter</strong>
                    <input type="text" name="diameter" class="form-control" placeholder="diameter">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gravity</strong>
                    <input type="text" name="gravity" class="form-control" placeholder="gravity">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Orbital Period</strong>

                    <input type="text" name="orbital_period" class="form-control" placeholder="orbital_period">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population</strong>

                    <input type="text" name="population" class="form-control" placeholder="population">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rotation Periods</strong>

                    <input type="text" name="rotation_period" class="form-control" placeholder="rotation_period">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surface water</strong>

                    <input type="text" name="surface_water" class="form-control" placeholder="surface_water">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Terrain</strong>

                    <input type="text" name="terrain" class="form-control" placeholder="terrain">
                </div>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
