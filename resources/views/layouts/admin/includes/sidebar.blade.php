<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                    height="33" viewBox="0 0 30 33">
                    <g fill="none" fill-rule="evenodd">
                        <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Sistem Restaurant</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="#" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('employee.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Employee</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('member.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Member</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('menu.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Menu</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('category.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Category</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('role.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Position</span>
                    </a>
                </li>

                {{-- <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Profile</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">News</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="#">
                                    <span class="nav-text">Program</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li> --}}
                <hr class="separator" />

                <div class="sidebar-footer">
                    {{-- <div class="sidebar-footer-content">
                            <h6 class="text-uppercase">
                                Cpu Uses <span class="float-right">40%</span>
                            </h6>
                            <div class="progress progress-xs">
                                <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                            </div>
                            <h6 class="text-uppercase">
                                Memory Uses <span class="float-right">65%</span>
                            </h6>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar">
                                </div>
                            </div>
                        </div> --}}
                </div>
            </ul>
        </div>
</aside>
