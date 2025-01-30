@extends('home.master')

@section('title', 'Speakers Page')
@section('banner-name', 'Speaker Page')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
  <livewire:speaker-page/> 
</section><!-- Main container end -->
@endsection
