@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Distributeur : {{$distributeur->nom}} - téléphone : {{$distributeur->telephone}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Autres films du même distributeur :
                    <ul>
                    @foreach ($distributeur->films as $film)
                        <li>
                            {{$film->titre}}
                        </li>
                    @endforeach
                    </ul
                </div>
            </div>
        </div>
    </div>
</div>
@endsection