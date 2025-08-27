@extends('home.master')

@section('title', 'Scientific Program')
{{-- @section('banner-name', 'Organizing Committee') --}}

@section('content')
    <section id="news" class="project-area">
        <div class="px-2 px-lg-5 mx-lg-5" >
            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle" src="images/sci program/sci1.png?v={{ time() }}" alt="Image is still in process.">
            </div>
            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/sci2.png?v={{ time() }}" alt="Image is still in process.">
            </div>
            <div class="d-flex justify-content-center">
                <img style="width: 100%;" class="align-middle mt-5 " src="images/sci program/sci3.png?v={{ time() }}" alt="Image is still in process.">
            </div> 
        </div>
    </section>
@endsection