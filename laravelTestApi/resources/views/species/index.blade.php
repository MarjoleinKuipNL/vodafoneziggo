@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>species index</h2>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('species.create') }}">
            Create new species
        </a>
    </div>
    <table class="table table-bordered">
        <tr>

        </tr>
        <tr>
            @foreach($species as $species)
            <td>
                {{ $species->id  }}
            </td>
            <td>
                {{ $species->name }}
            </td>
            <td>
                {{ $species->classification  }}
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('species.show', $species->id)}}">
                    Show
                </a>
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('species.edit', $species->id)}}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('species.destroy', $species->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit " class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
