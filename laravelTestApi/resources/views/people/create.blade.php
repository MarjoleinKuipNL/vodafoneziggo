@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Voeg nieuwe mensen toe:
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('people.index')}}">
                    terug naar index van mensen
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
            <div class="col-xs-12 col-sm-12 offset-md-1 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>name</strong>
                    <input type="text" name="name" class="form-control" placeholder="name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 offset-md-1 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>Hair color</strong>
                    <input type="text" name="hair_color" class="form-control" placeholder="hair_color">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5">
                <div class="form-group">
                    <strong>Homeworld</strong>
                    <input type="text" name="homeworld" class="form-control" placeholder="homeworld">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 offset-md-1 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>mass</strong>
                    <input type="number" name="mass" class="form-control" placeholder="mass">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5">
                <div class="form-group">
                    <strong>gender</strong>
                    <input type="text" name="gender" class="form-control" placeholder="gender">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 offset-md-1 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>Birth Year</strong>
                    <input type="text" name="birth_year" class="form-control" placeholder="birth_year">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5">
                <div class="form-group">
                    <strong>Eye Color</strong>
                    <input type="text" name="eye_color" class="form-control" placeholder="eye_color">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5">
                <div class="form-group">
                    <strong>skincolor</strong>
                    <input type="text" name="skin_color" class="form-control" placeholder="skin_color">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>Url</strong>
                    <input type="text" name="url" class="form-control" placeholder="url">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-5 offset-lg-1">
                <div class="form-group">
                    <strong>Height</strong>
                    <input type="number" name="height" class="form-control" placeholder="height">
                </div>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-10 col-lg-5">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
