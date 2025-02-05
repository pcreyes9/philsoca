@extends('home.master')

@section('title', 'Speakers')
@section('banner-name', 'Program > Speakers')

@section('content')
@include('home.banner')
    <section id="main-container" class="main-container text-center project-area">
      <livewire:speaker-pic/> 
    </section>
@endsection