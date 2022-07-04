<nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="{{asset('images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">John Doe<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="active">
                                  <a href="{{ route('home') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Gestion des utilisateurs</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="{{ route('users.index') }}" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>GU</b></span>
                                      <span class="pcoded-mtext" >Listes des utilisateurs</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="{{ route('users.create') }} class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>GU</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Ajouter un utilisateur</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                               @hasrole('Admin')
                              <li class="pcoded-hasmenu">
                                  <a href="javascript:void(0)" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layout-file-alt"></i></span>
                                      <span class="pcoded-mtext"  >Administrateur</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                                  <ul class="pcoded-submenu">
                                      <li class=" ">
                                          <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" >role</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      <li class=" ">
                                          <a href="{{ route('employes.index') }}" class="waves-effect waves-dark">
                                              <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                              <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Gestion des employes</span>
                                              <span class="pcoded-mcaret"></span>
                                          </a>
                                      </li>
                                      
                                  </ul>
                              </li>
                              @endhasrole
                          </ul>
      
                      </div>
                  </nav>