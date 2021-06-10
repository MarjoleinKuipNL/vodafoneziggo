@extends('layout.app')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                Voeg nieuwe mensen toe:
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('')}}">
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
                    <strong>Average weight</strong>
                    <input type="text" name="average_height" class="form-control" placeholder="average_height">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Average Lifespan</strong>
                    <input type="text" name="average_lifespan" class="form-control" placeholder="average_lifespan">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Classification</strong
                    <input type="text" name="classification" class="form-control" placeholder="classification">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Designation</strong>
                    <input type="text" name="designation" class="form-control" placeholder="designation">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Eye Color</strong>
                    <input type="text" name="eye_colors" class="form-control" placeholder="eye_colors">
                </div>
            </div>  <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hair Color</strong>
                    <input type="text" name="hair_colors" class="form-control" placeholder="hair_colors">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>HomeWorld</strong>
                    <input type="text" name="homeworld" class="form-control" placeholder="homeworld">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Language</strong>
                    <input type="text" name="language" class="form-control" placeholder="language">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Skin colors</strong>
                    <input type="text" name="skin_colors" class="form-control" placeholder="skin_colors">
                </div>
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
