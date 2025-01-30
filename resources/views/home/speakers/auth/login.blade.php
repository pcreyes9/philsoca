@extends('home.master')

@section('title', 'Speakers Page')
@section('banner-name', 'Speakers Login')

@section('content')
@include('home.banner')

<section id="main-container" class="pb-4 main-container text-center project-area ">
   <div class="container col col-md-6 col-lg-4 mx-auto" >
        <form action="{{ route('login_post') }}" method="POST" class="p-5" style="background: #000066;">
            <div class="mb-3">
                <label style=" font-weight: 750; font-size: medium; color:white;">Email Address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" style="background: white; color: black">
                <div id="emailHelp" class="form-text" style="color: white">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label style=" font-weight: 750; font-size: medium; color:white;" >Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password" style="background: white; color: black">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color: white">Check me out</label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" style="background: #f2de02; color: black">Login</button>
            <br>
            <a href="{{ route('speaker_register') }}" >
                <label class="mt-4" style=" font-weight: 750; font-size: medium; color:white; text-decoration: underline;" >Don't have account yet? Create Account</label>
            </a> 
      </form>
   </div>
</section><!-- Main container end -->
@endsection
