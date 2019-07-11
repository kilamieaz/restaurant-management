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
                <span class="brand-name">Sistem Akademik</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">
            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="{{ route('dashboard.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Admin Area</span>
                    </a>
                </li>

                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{url('profile')}}">
                                    <span class="nav-text">Profile</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{url('dashboard_news')}}">
                                    <span class="nav-text">News</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{url('dashboard_program')}}">
                                    <span class="nav-text">Program</span>

                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#master_data" aria-expanded="false" aria-controls="master_data">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Master Data</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse " id="master_data" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li>
                                <a class="sidenav-item-link" href="{{route('staff.index')}}">
                                    <span class="nav-text">Kepegaiwan</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('student.index')}}">
                                    <span class="nav-text">Kesiswaaan</span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{url('master_parent')}}">
                                    <span class="nav-text"> Parent </span>
                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{route('subject.index')}}">
                                    <span class="nav-text">Mata Pelajaran</span>

                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{url('master_absen')}}">
                                    <span class="nav-text">Absensi Siswa</span>

                                </a>
                            </li>
                            <li class="active">
                                <a class="sidenav-item-link" href="{{url('master_guru')}}">
                                    <span class="nav-text">Absensi Guru</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>
                <li class="has-sub active expand">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Akademik</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li>
                                <a class="sidenav-item-link" href="{{url('akademik_jadwal_guru')}}">
                                    <span class="nav-text">Jadwal Guru</span>

                                </a>
                            </li>
                            <li>
                                <a class="sidenav-item-link" href="{{url('akademik_materi')}}">
                                    <span class="nav-text">Materi</span>

                                </a>
                            </li>
                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#management" aria-expanded="false" aria-controls="management">
                                    <span class="nav-text">Management Kelas</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="management">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{route('class.index')}}">Kelola kelas</a>
                                        </li>

                                        <li>
                                            <a href="{{url('akademik_tambah_siswa')}}">Tambah Siswa</a>
                                        </li>
                                    </div>
                                </ul>


                            <li class="has-sub">
                                <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                                    data-target="#components" aria-expanded="false" aria-controls="components">
                                    <span class="nav-text">Nilai</span> <b class="caret"></b>
                                </a>
                                <ul class="collapse" id="components">
                                    <div class="sub-menu">

                                        <li>
                                            <a href="{{url('akademik_kelola_nilai')}}">Kelola Nilai Siswa</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>

                        </div>

                    </ul>


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
                    <div class="progress-bar progress-bar-warning" style="width: 65%;" role="progressbar"></div>
                </div>
            </div> --}}
                    </div>
        </div>
</aside>
