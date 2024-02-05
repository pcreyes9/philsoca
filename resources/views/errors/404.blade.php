@extends('home.master')

@section('title', '404 Page Not Found')
@section('banner-name', 'ERROR')

@section('content')
    @include('home.banner')

    <div class="container py-5 ">
        <div class="row">
          <div class="col-12">
            <div class="text-center error-page">
              <div class="error-code">
                <h2><strong>404</strong></h2>
              </div>
              <div class="error-message">
                <h3>Oops... Page Not Found!</h3>
              </div>
              <div class="error-body">
                Try using the button below to go to main page of the site <br>
                <a href="{{route('home')}}" class="btn btn-primary">Back to Home Page</a>
              </div>
            </div>
          </div>
        </div><!-- Content row -->
    </div><!-- Conatiner end -->
@endsection














