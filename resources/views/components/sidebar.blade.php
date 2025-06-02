<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo position-relative d-flex flex-column align-items-center justify-content-center pt-2 pb-1;">
            <a href="./index.html" class="logo-img mb-1">
                <img src="{{ asset('assets/images/logos/Polisi.png.jpeg') }}" alt="Police App Logo" width="85">
            </a>
            <h4 class="mb-1 mt-1  text-center">Police App</h4>

            <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer position-absolute end-0 top-50 translate-middle-y pe-3"
                id="sidebarCollapse">
                <i class="ti ti-x fs-6"></i>
            </div>
        </div>


        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Home</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('index') }}" aria-expanded="false">
                        <i class="ti ti-atom"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('vehicles') }}" aria-expanded="false">
                        <i class="ti ti-car"></i>
                        <span class="hide-menu">Vehicles</span>
                    </a>
                </li>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
