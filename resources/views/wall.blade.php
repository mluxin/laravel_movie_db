@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Wall</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="http://localhost:8888/laravel/public/savePost" method="post">
                        @csrf
                        <input type="text" name="post">
                        <input type="submit" value="poster">
                    </form>
                    <br/><br/>

                    The Wall :
                    <ul>
                    @foreach ($posts as $post)
                        <li>
                            {{$post->content}}
                        </li>
                    @endforeach
                    </ul
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
