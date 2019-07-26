<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
            <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    {{-- <div class="input-group col-md-12">
                        <select class="form-control select2-dashboard m-auto" data-placeholder="Why Look Look?"></select>
                    </div> --}}
                </div>
        
                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        @auth
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                {{-- <img src="assets/img/user/user.png" class="user-image" alt="User Image" /> --}}
                                <span class="d-none d-lg-inline-block">{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    {{-- <img src="assets/img/user/user.png" class="img-circle" alt="User Image" /> --}}
                                    <div class="d-inline-block">
                                        {{ Auth::user()->name }} <small class="pt-1">{{ Auth::user()->email }}</small>
                                    </div>
                                </li>
        
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
        
                                <li class="dropdown-footer">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="mdi mdi-logout"></i> Log Out </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    </ul>
                </div>
            </nav>
        
        
        </header>
