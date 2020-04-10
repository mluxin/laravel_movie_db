@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Films</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    @foreach ($films as $film)
                        <li>
                            @if (!empty($film->genre))
                                <a href="{{route('genre', ['id_genre' => $film->genre->id_genre])}}">{{$film->genre->nom}}</a> :
                            @endif
                            {{$film->titre}}
                            @if (!empty($film->distributeur))
                                (distrb : <a href="{{route('distributeur', ['id_distributeur' => $film->distributeur->id_distributeur])}}">{{$film->distributeur->nom}}</a>)
                            @endif
                        </li>
                    @endforeach
                    </ul>
                    {{$films->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection