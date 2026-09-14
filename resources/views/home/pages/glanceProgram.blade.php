@extends('home.master')

@section('title', 'Program at a Glance')
@section('banner-name', 'Venue')

@section('content')
{{-- @include('home.banner') --}}
<section id="news" class="project-area">
    <div class="px-2 px-lg-5 mx-lg-5" >

        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle" src="images/sci program/glanceProgram 1.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/glanceProgram 2.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        <div class="d-flex justify-content-center">
            <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/glanceProgram 3.png?v={{ time() }}" alt="Image is still in process.">
        </div>
        
    </div>
</section>
@endsection