<nav class="navbar header-navbar pcoded-header">
              <div class="navbar-wrapper">
                  <div class="navbar-logo">
                      <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                          <i class="ti-menu"></i>
                      </a>
                      <div class="mobile-search waves-effect waves-light">
                          <div class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control" placeholder="Enter Keyword">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <a href="index.html">
                          <img class="img-fluid" src="{{asset('images/auth/logo-sirba-rh.png')}}" alt="Theme-Logo" style="height: 60px" />
                      </a>
                      <a class="mobile-options waves-effect waves-light">
                          <i class="ti-more"></i>
                      </a>
                  </div>
                
                  <div class="navbar-container container-fluid">
                    
                      <ul class="nav-left">
                          <li>
                              <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                          </li>
                          <li class="header-search">
                              <div class="main-search morphsearch-search">
                                  <div class="input-group">
                                      <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                      <input type="text" class="form-control">
                                      <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                  <i class="ti-fullscreen"></i>
                              </a>
                          </li>
                      </ul>
                      <ul class="nav-right">
                          <li class="header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <i class="ti-bell"></i>
                                  <span class="badge bg-c-red"></span>
                              </a>
                         
                          <li class="user-profile header-notification">
                              <a href="#!" class="waves-effect waves-light">
                                  <img src="{{asset('images/avatar-4.jpg')}}" class="img-radius" alt="User-Profile-Image">
                                  <span></span>
                                  <i class="ti-angle-down"></i>
                              </a>
                              <ul class="show-notification profile-notification">
                              @guest
                              <!-- Authentication Links -->
                                  <li class="waves-effect waves-light">
                                      <a href="{{ route('login') }}">
                                          <i class="ti-layout-sidebar-left"></i> {{ __('Login') }}
                                      </a>
                                  </li>
                                  <li class="waves-effect waves-light">
                                      <a href="{{ route('register') }}">
                                          <i class="ti-layout-sidebar-left"></i> {{ __('Register') }}
                                      </a>
                                  </li>
                                  @else
                                  <li class="waves-effect waves-light">
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();

                                    document.getElementById('logout-form').submit();">

                                                {{ __('Logout') }}
                                </a>


                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                    @csrf

                            </form>
                                  </li>
                                 
                                 
                             
                            <li class="nav-item dropdown">

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('logout') }}"

                             onclick="event.preventDefault();

                     document.getElementById('logout-form').submit();">

        {{ __('Logout') }}

    </a>



    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

        @csrf

    </form>

</div>

</li>

@endguest

                              </ul>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
