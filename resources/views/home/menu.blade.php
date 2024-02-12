<div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="p-0 navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="mr-auto nav navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('home')}}">HOME</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">ABOUT US <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-submenu">
                                <a href="#!" class="dropdown-toggle" data-toggle="dropdown">LEGACY</a>
                                <ul class="dropdown-menu">
                                  <li><a href="{{route('pres')}}">PAST PRESIDENTS</a></li>
                                  <li><a href="{{ route('QJG') }}">QUINTIN J. GOMEZ AWARDEE</a></li>
                                  <li><a href="{{ route('sidao') }}">MANUEL SILAO LEADERSHIP AWARDEE</a></li>
                                  <li><a href="{{route('hymn')}}">PSA HYMN</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('offBoards') }}">OFFICERS & BOARDS</a></li>
                            <li><a href="{{ route('subspecialty') }}">SUBSPECIALTY & SIG</a></li>
                            <li><a href="{{ route('chapPres') }}">CHAPTER PRESIDENTS</a></li>
                          </ul>
                      </li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">CME ACTIVITIES <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="projects.html">CONVENTION</a></li>
                            <li><a href="projects-single.html">TAGISAN NG TALINO</a></li>
                            <li><a href="projects-single.html">INTERESTING CASE CONTEST</a></li>

                          </ul>
                      </li>

                      <li class="nav-item"><a class="nav-link" href="{{route('links')}}">Link</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">GALLERY <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="typography.html">MIDYEAR CONVENTION 2023: VIGAN CITY</a></li>
                            <li><a href="">ANNUAL CONVENTION 2023: MARRIOT GRAND BALLROOM</a></li>
                          </ul>
                      </li>

                      {{-- <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                            <li><a href="news-right-sidebar.html">News Right Sidebar</a></li>
                            <li><a href="news-single.html">News Single</a></li>
                          </ul>
                      </li> --}}

                      {{-- <li class="nav-item"><a class="nav-link" href="contact.html">LOGIN</a></li>
                      <li class="nav-item"><a class="nav-link" href="contact.html">REGISTER</a></li> --}}

                      @if (Route::has('login'))
                        @auth
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Hello, Dr. {{ Auth::user()->name }} <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ route('profile.show') }}">Profile</a></li>
                                    {{-- <li><a href="service-single.html">Logout</a></li> --}}
                                    {{-- <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <li><a href="{{ route('logout') }}" @click.prevent="$root.submit();">Logout</a></li>
                                    </form> --}}
                                </ul>
                            </li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">LOGIN</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">REGISTER</a></li>
                            @endif
                        @endauth
                    @endif
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="mb-0 w-100">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
