@extends('home.master')

@section('title', 'Register')
@section('banner-name', 'REGISTRATION')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area solid-bg">
    <livewire:mem-reg/>
</section><!-- Main container end -->
@endsection