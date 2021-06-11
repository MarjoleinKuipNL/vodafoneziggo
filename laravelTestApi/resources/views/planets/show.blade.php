@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Show Planet:
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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    {{ $planet->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Url</strong>

                    {{ $planet->url }}
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Climate</strong>

                    {{ $planet->climate }}
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Diameter</strong>

                    {{ $planet->diameter }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gravity</strong>

                    <input type="text" name="gravity" class="form-control" value="{{ $planet->gravity }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Orbital Period</strong>

                    {{ $planet->orbital_period }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Population</strong>

                    {{ $planet->population }}
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>rotation Period</strong>

                    {{ $planet->rotation_period }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surface water</strong>

                    {{ $planet->surface_water }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Terrain</strong>

                    {{ $planet->terrain }}
                </div>
            </div>
        </div>
@endsection
