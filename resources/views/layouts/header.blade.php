<header id="page-topbar">
    <!-- <div class="bg-header"></div> -->
    <div class="navbar-header">
        <div class="d-flex align-items-center">
            <!-- LOGO -->
            <div class="navbar-brand-box text-center">
                <div href="#" class="logo">
                    <span class="logo-sm">
                        NGN
                    </span>
                    <span class="logo-lg">
                         NAVIGATION
                    </span>
                </div>
            </div>

            <x-button type="button" class="btn-sm fs-2 header-item waves-effect" id="vertical-menu-btn">
                <i class="bi bi-list"></i> 
            </x-button>
        </div>

        <div class="d-flex">
                          
            
            <div class="dropdown d-inline-block user-dropdown">
                <!-- Mode Dark / Light -->
                <x-button type="button" id="button-mode" class="text-light">
                    <i class="bi-sun-fill" id="icon-mode"></i>
                </x-button>

                <!-- Dropdown User -->
                <x-button type="button" class="header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="d-none d-xl-inline-block ms-1">Super Administrator</span>
                    <i class="mdi mdi-chevron-down d-xl-inline-block"></i>
                </x-button>

                <div class="dropdown-menu dropdown-menu-end" style="width: 280px">
                    <div class="user-profile">
                        <img src="{{ asset('themes/options/no-image.webp') }}" class="rounded" width="100px" height="100px">
                        <div class="user-detail">
                            <div class="user-name">
                                Super Administrator
                            </div>
                            <div class="user-role">
                                Admin Aplikasi
                            </div>
                        </div>
                    </div>
                    <div class="row user-modul d-flex justify-content-between">
                        <div class="col-md-4">
                            <div class="user-modul-3">
                                <a href="#" class="btn btn-sm btn-default border-1">Profil</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="user-modul-3">
                                <a href="#" class="btn btn-sm btn-default">Password</a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="user-modul-3">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf                   
                                    <x-button class="dropdown-item text-danger" type="submit">
                                        Keluar
                                    </x-button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</header>