@extends('home.master')

@section('title', 'PSA Hymn')
@section('banner-name', 'PSA Hymn')

@section('content')
    @include('home.banner')

    <div class="container">
        <div class="py-5">
            <div class="border border-white rounded embed-responsive embed-responsive-16by9">
                <iframe width="1300" height="731" src="https://www.youtube.com/embed/Nwhfn3C2BuI"
                title="2023 PSA Hymn (updated as of Oct. 3, 2023)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection


