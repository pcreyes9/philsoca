@extends('home.master')

@section('title', 'Organizing Committee')
{{-- @section('banner-name', 'Organizing Committee') --}}

@section('content')
    {{-- @include('home.banner') --}}
    <section id="main-container" class="main-container text-center project-area ">
        <div class="container" >
            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle "src="images/orgcom/ACA Scientific Committee Design.png?v={{ time() }}" alt="Image is still in process.">
            </div>    
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection