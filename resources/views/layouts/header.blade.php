<header id="page-topbar">
    <div class="bg-header"></div>
    <div class="navbar-header">
        <div class="d-flex align-items-center">
            <!-- LOGO -->
            <div class="navbar-brand-box text-center">
                <div href="#" class="logo">
                    <span class="logo-sm">
                        <img src="https://testing.unmerpas.ac.id/img/Universitas%20Merdeka%20Pasuruan.webp" width="45px" height="45px">
                    </span>
                    <span class="logo-lg">
                         {{-- <img src="https://static.vecteezy.com/system/resources/thumbnails/022/721/714/small/youtube-logo-for-popular-online-media-content-creation-website-and-application-free-png.png" width="145px" height="80px"> --}}
                         TEMPLATE
                    </span>
                </div>
            </div>

            <button type="button" class="btn btn-sm fs-2 header-item waves-effect" id="vertical-menu-btn">
                <i class="bi bi-list"></i> 
            </button>
        </div>

        <div class="d-flex">
                          
           
            <div class="dropdown d-inline-block">
                <button class="btn btn-default dropdown-toggle  header-item waves-effect" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi-sun-fill" id="icon-mode"></i>
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <button id="lightToggle" class="dropdown-item btn btn-default">
                            <i class="bi bi-sun-fill"></i> <span class="ms-2">Light Mode</span>
                        </button>    
                    </li>
                  <li>
                    <button id="darkToggle" class="dropdown-item btn btn-default">
                        <i class="bi bi-moon-stars-fill"></i> <span class="ms-2">Dark Mode</span>
                    </button>    
                </li>
                </ul>
            </div>

            <div class="dropdown d-inline-block user-dropdown">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                    <span class="d-none d-xl-inline-block ms-1">Super Administrator</span>
                    <i class="mdi mdi-chevron-down d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end" style="width: 280px">
                    <div class="user-profile">
                        <img src="https://testing.unmerpas.ac.id/img/Universitas%20Merdeka%20Pasuruan.webp" width="100px" height="100px">
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
                                <form action="https://testing.unmerpas.ac.id/logout" method="POST">
                                    <input type="hidden" name="_token" value="pkCCBSqjOov2i09q6LBvqd5iUSVCjupg4OnBkEHk">                        
                                    <button class="dropdown-item text-danger" type="submit">
                                        Keluar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</header>