<div class="site-navigation">
  <div class="container">
      <div class="row">
        <div class="col-lg-16">
          <a href="{{route('home')}}">                                                                                             
            <img loading="lazy" style="width: 16%; object-fit: scale;" class="logo img-fluid icon-logo align-middle mt-3 mt-sm-2" src="{{asset("images/ACA_LOGO_non.png")}}" alt="">
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
                        <ul class="dropdown-menu" role="menu" >
                          <li><a href="{{route('glance')}}" style="font-size: 14px;">Program at a Glance</a></li>
                          <li><a href="{{route('prelim')}}" style="font-size: 14px;">Scientific Program</a></li>
                          <!-- Submenu -->
                          <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle" href="#">Hands on Workshops</a>
                            <ul class="dropdown-menu">
                              <li><a href="{{route('reganes')}}" class="dropdown-item">RA Workshop</a></li>
                              <li><a href="{{route('airway')}}" class="dropdown-item">Airway Workshop</a></li>
                              <li><a href="{{route('pocus')}}" class="dropdown-item">POCUS Workshop</a></li>
                            </ul>
                          </li>
                          <li><a href="{{route('pbld')}}" style="font-size: 14px;">PBLD Sessions</a></li>
                          {{-- <li ><a href="{{ route('speakers') }}" style="font-size: 14px;">Speakers</a></li> --}}
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('orgCom') }}">ORGANIZING COMMITTEE</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('reg') }}">REGISTRATION</a></li>
                    {{-- <li class="nav-item"><a class="nav-link" href="#">ABSTRACT SUBMISSION</a></li> --}}
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ABSTRACT SUBMISSION </a>
                      <ul class="dropdown-menu" role="menu">
                        {{-- <li><a href="{{route('abstract')}}" style="font-size: 14px;">Important Dates</a></li> --}}
                        <li><a href="{{route('rules')}}" style="font-size: 14px;">Submission Guidelines </a></li>
                        {{-- <li><a href="{{route('instruction')}}" style="font-size: 14px;">Presentation Guidelines </a></li> --}}
                        <li><a href="{{route('prizes')}}" style="font-size: 14px;">competition prizes </a></li>
                        <li><a href="{{route('regabs')}}" style="font-size: 14px;">Submit Now! </a></li>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SPONSORSHIP & EXHIBITION </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('sponsors')}}" style="font-size: 14px;">List of Exhibitors</a></li>
                        <li><a href="{{route('boothcheck')}}" style="font-size: 14px;">Booth Checker</a></li>
                      </ul>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{route('sponsors')}}">SPONSORSHIP & EXHIBITION</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{route('venue')}}">VENUE</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('accommodations')}}">Accommodation & Tours </a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">CONTACT</a></li>
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Gallery </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{route('gallery')}}" style="font-size: 14px;">Day 1</a></li>
                        {{-- <li><a href="{{route('gallery', ['day' => 'day2'])}}" style="font-size: 14px;">Day 2</a></li>
                        <li><a href="{{route('gallery', ['day' => 'day3'])}}" style="font-size: 14px;">Day 3</a></li> --}}

                        {{-- <li><a href="{{route('gallery', ['day' => 'day1'])}}" style="font-size: 14px;">Day 1</a></li>
                        <li><a href="{{route('gallery', ['day' => 'day2'])}}" style="font-size: 14px;">Day 2</a></li>
                        <li><a href="{{route('gallery', ['day' => 'day3'])}}" style="font-size: 14px;">Day 3</a></li> --}}

                        {{-- <li><a href="{{route('boothcheck')}}" style="font-size: 14px;">Booth Checker</a></li> --}}
                      </ul>
                    </li>
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