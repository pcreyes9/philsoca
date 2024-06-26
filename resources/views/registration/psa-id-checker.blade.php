@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'PSA ID Checker')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area solid-bg">
    <div class="container">
        <livewire:p-s-a-i-d-checker/>
    </div>
</section><!-- Main container end -->
@endsection