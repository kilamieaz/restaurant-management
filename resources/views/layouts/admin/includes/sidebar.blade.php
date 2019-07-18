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
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#kitchen" aria-expanded="false" aria-controls="kitchen">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">KITCHEN</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="kitchen" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('menu.index') }}">
                                    <span class="nav-text">Menus</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('category.index') }}">
                                    <span class="nav-text">Categories</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('table.index') }}">
                                    <span class="nav-text">Tables</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#users" aria-expanded="false" aria-controls="users">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">USERS</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="users" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{ route('employee.index') }}">
                                    <span class="nav-text">Employees</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{ route('member.index') }}">
                                    <span class="nav-text">Members</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('role.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Manage Position</span>
                    </a>
                </li>

                <hr class="separator" />
            </ul>
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
        </div>
</aside>
