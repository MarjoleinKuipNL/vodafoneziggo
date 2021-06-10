@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>peoples index</h2>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('people.create') }}">
            Create new people
        </a>
    </div>
    <table class="table table-bordered">
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>BirthYear</td>
        </tr>
        @foreach($peoples as $people)
        <tr>

            <td>
                {{ $people->id  }}
            </td>
            <td>
                {{ $people->name }}
            </td>
            <td>
                {{ $people->birth_year  }}
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('people.show', $people->id)}}">
                    Show
                </a>
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('people.edit', $people->id)}}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('people.destroy', $people->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit " class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
