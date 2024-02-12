@extends('home.master')

@section('title', 'Midyear Convention')
@section('banner-name', 'PSA: Midyar Convention')

@section('content')
    @include('home.banner')

    <section id="main-container" class="pb-4 main-container text-center project-area solid-bg">
        <div class="container">
            <div class="row">     
                <div class="col-12">
                    <div class="row shuffle-wrapper">
                        @foreach ($pics as $pic)
                            <div class="col-lg-4 col-md-6 shuffle-item p-3">
                                <a class="gallery-popup" href="images/convention/{{ $pic }}.jpg">
                                    <img class="img-fluid" src="images/convention/{{ $pic }}.jpg" alt="project-image">
                                </a>    
                            </div>
                        @endforeach   
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Main container end -->
    
@endsection

