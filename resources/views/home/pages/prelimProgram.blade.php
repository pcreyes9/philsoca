@extends('home.master')

@section('title', 'Scientific Program')
{{-- @section('banner-name', 'Organizing Committee') --}}

@section('content')
    <section id="news" class="project-area">
    <div class="container" >

        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle" src="images/sci program/sci program 1.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/sci program 2.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/sci program 3.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        
    </div>
</section>
@endsection