@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'PSA MEMBERS REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <livewire:mem-reg/>
    </div>
</section><!-- Main container end -->
@endsection