<div class="site-navigation">
  <div class="container">
      <div class="row">
        <div class="col-lg-16">
          <a href="{{route('home')}}">
            <img loading="lazy" style="width: 16%; object-fit: scale;" class="logo img-fluid icon-logo align-middle mt-3 mt-sm-2" src="images/ACA_LOGO_non.png" alt="">
          </a>
            <nav class="ml-3 py-1 p-0 navbar navbar-expand-lg navbar-dark p-0">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              
              <div id="navbar-collapse" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}" >HOME</a></li>

                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Program </a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Program at a Glance</a></li>
                          <li><a href="#">Full Scientific Program</a></li>
                          <li><a href="{{ route('speakers') }}">Speakers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orgCom') }}">ORGANIZING COMMITTEE</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reg') }}">REGISTRATION</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ABSTRACT SUBMISSION</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">SPONSORSHIP & EXHIBITION</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('venue')}}">VENUE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">ACCOMMODATIONS</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('login') }}">MY PAGE</a></li>
                  </ul>
              </div>
            </nav>
        </div>
        <!--/ Col end -->
      </div>
      <!--/ Row end -->
  </div>
  <!--/ Container end -->
</div>