@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h2>planets index</h2>
        </div>
    </div>
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('planets.create') }}">
            Create new planet
        </a>
    </div>
    <table class="table table-bordered">
        <tr>

        </tr>
        <tr>
            @foreach($planets as $planet)
            <td>
                {{ $planet->id  }}
            </td>
            <td>
                {{ $planet->name }}
            </td>
            <td>
                {{ $planet->climate  }}
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('planet.show', $planet->id)}}">
                    Show
                </a>
            </td>
            <td>
                <a class="btn btn-info" href="{{ route('planet.edit', $planet->id)}}">
                    Edit
                </a>
            </td>
            <td>
                <form action="{{ route('planet.destroy', $planet->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit " class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
