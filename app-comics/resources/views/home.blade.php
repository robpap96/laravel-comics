@extends('layouts.main')

@section('page-title')
    Home
@endsection

@section('page-content')
    <section class="jumbo image-fluid">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="jumbotron" width="100%" height="400px" style="object-fit: cover; object-position: top;  ">
    </section>
    <section class="all-comics">
        <div class="container py-5">
            <div class="row">
                @foreach ($comics as $comic)             
                    <div class="col-xl-2 col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="thumb">
                           <img class="image-fluid" src="{{$comic['thumb']}}" alt="{{$comic['title']}}" width="180px" height="180px">
                        </div>
                        <div class="thumb-title mt-2">
                            {{$comic['title']}}
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-12 d-flex justify-content-center py-3">
                <div class="load-more-btn">
                    <button class="btn px-5">LOAD MORE</button>
                </div>
            </div>
        </div>
    </section>
    <section class="other">
        <div class="container py-5">
            <div class="row justify-content-between align-items-center">
                @foreach ($others as $item)
                    <div class="col-2 d-flex">
                        <div class="serice-icon me-3">
                            <img src="{{Vite::asset($item['image'])}}" alt="" width="50px" height="50px">
                        </div>
                        <div class="service-name d-flex align-items-center">
                            {{$item['service']}}
                        </div>
                    </div>                    
                @endforeach
            </div>
        </div>
    </section>
@endsection