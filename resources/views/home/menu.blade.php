<div class="site-navigation" style="opacity: 88% !important ">
  <div class="container" >
    <div class="row">
      {{-- col-lg-16 --}}
      <div class="">
        {{-- mt-3 mt-sm-3  mt-lg-2 --}}
        <a href="{{route('home')}}">
          <img loading="lazy" style="width: 16%; object-fit: scale;" class="logo img-fluid icon-logo align-middle mt-3 mt-sm-2" src="images/ACA_LOGO_non.png" alt="">
        </a>
        
        <nav class="ml-3 py-1 p-0 navbar navbar-expand-lg navbar-dark">
          
          {{-- <img loading="lazy" style="width: 15%; object-fit: scale;" class="logo img-fluid" src="images/ACA_LOGO.png" alt=""> --}}
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="mr-auto nav navbar-nav" >
              <li class="nav-item"><a class="nav-link" href="{{route('home')}}" >HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="#">PROGRAM</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('orgCom') }}">ORGANIZING COMMITTEE</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('reg')}}">REGISTRATION</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('abstract') }}">ABSTRACT SUBMISSION</a></li>
              <li class="nav-item"><a class="nav-link" href="#">SPONSORSHIP & EXHIBITION</a></li>
              <li class="nav-item"><a class="nav-link" href="{{route('venue')}}">VENUE</a></li>
              <li class="nav-item"><a class="nav-link" href="#">ACCOMMODATIONS</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
              {{-- testing --}}
            </ul>
          </div >
        </nav>
      </div>
        <!--/ Col end -->
    </div>
        <!--/ Row end -->
  </div>
</div>
{{-- </div> --}}
