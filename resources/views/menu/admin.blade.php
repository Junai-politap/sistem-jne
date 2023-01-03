
<div class="main-icon-menu">
    <a href="index.html" class="logo logo-metrica d-block text-center">
        <span>
            <img src="{{ url('public') }}/assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
        </span>
    </a>
    <div class="main-icon-menu-body">
        <div class="position-reletive h-100" data-simplebar style="overflow-x: hidden;">
            <ul class="nav nav-tabs" role="tablist" id="tab-menu">
                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Master Data"
                    data-bs-trigger="hover">
                    <a href="#MetricaDashboard" id="dashboard-tab" class="nav-link">
                        <i class="ti ti-folder menu-icon"></i>
                    </a>

                </li>

                <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="right" title="Barang"
                    data-bs-trigger="hover">
                    <a href="#MetricaApps" id="apps-tab" class="nav-link">
                        <i class="ti ti-apps menu-icon"></i>
                    </a>

                </li>

            </ul>

        </div>

    </div>

    <div class="pro-metrica-end">
        <a href="" class="profile">
            <img src="{{ url('public') }}/assets/images/users/user-4.jpg" alt="profile-user"
                class="rounded-circle thumb-sm">
        </a>
    </div>

</div>


<div class="main-menu-inner">
    
    <div class="topbar-left">
        <a href="index.html" class="logo">
            <span>
                <img src="{{ url('public') }}/assets/images/logo-dark.png" alt="logo-large"
                    class="logo-lg logo-dark">
                <img src="{{ url('public') }}/assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
            </span>
        </a>

    </div>


    <div class="menu-body navbar-vertical tab-content" data-simplebar>
        <div id="MetricaDashboard" class="main-icon-menu-pane tab-pane" role="tabpanel"
            aria-labelledby="dasboard-tab">
            <div class="title-box">
                <h6 class="menu-title">Master Data</h6>
            </div>

            <ul class="nav flex-column">
                <li class="nav-item">
                    
                    <a class="nav-link" href="{{ url('admin') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    
                    <a class="nav-link" href="{{ url('admin/pegawai') }}">Data Pegawai</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/kurir') }}">Data Kurir</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/module') }}">Module</a>
                </li>

            </ul>

        </div>

        <div id="MetricaApps" class="main-icon-menu-pane tab-pane" role="tabpanel" aria-labelledby="apps-tab">
            <div class="title-box">
                <h6 class="menu-title">Barang</h6>
            </div>

            <div class="collapse navbar-collapse" id="sidebarCollapse">
                
                <ul class="navbar-nav">
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                            aria-expanded="false" aria-controls="sidebarAnalytics">
                            Analytics
                        </a>
                        <div class="collapse " id="sidebarAnalytics">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="analytics-customers.html" class="nav-link ">Customers</a>
                                </li>

                                <li class="nav-item">
                                    <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                </li>

                            </ul>

                        </div>

                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#">Barang COD</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"> Barang Paylater</a>
                    </li>

                    

                </ul>

            </div>

        </div>
    </div>

</div>