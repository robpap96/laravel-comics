@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')
    <section class="jumbo image-fluid">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron" width="100%" height="400px" style="object-fit: cover; object-position: top;  ">
    </section>
    <section class="all-comics">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)             
                    <div class="col-2">
                        {{$comic['title']}}
                    </div>
                @endforeach
            </div>
        </div>

    </section>
@endsection