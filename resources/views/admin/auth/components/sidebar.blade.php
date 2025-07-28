<style>
    /* Sidebar Styling */
    .sidebar-wrapper {
        height: 100vh;
        background: linear-gradient(to bottom, #f8f9fa, #f1f3f8);
        border-right: 1px solid #dee2e6;
        padding: 0 1rem;
    }

    .sidebar-header {
        padding: 1rem 0;
        border-bottom: 1px solid #e0e0e0;
    }

    .sidebar-header .logo-icon {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        margin-right: 10px;
    }

    .sidebar-header .logo-text {
        font-weight: 600;
        color: #6f42c1;
        margin-bottom: 0;
    }

    .metismenu {
        list-style: none;
        padding-left: 0;
        margin-top: 1.5rem;
    }

    .metismenu li {
        margin-bottom: 0.5rem;
    }

    .metismenu a {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 0.65rem 1rem;
        border-radius: 8px;
        color: #495057;
        font-weight: 500;
        transition: all 0.2s ease;
        text-decoration: none;
    }

    .metismenu a:hover {
        background-color: #f3efff;
        color: #6f42c1;
    }

    .metismenu a.active {
        background-color: #e9dfff;
        border-left: 4px solid #6f42c1;
        font-weight: 600;
        color: #6f42c1 !important;
    }

    .metismenu a .parent-icon i {
        font-size: 1.2rem;
        color: #6c757d;
    }

    .metismenu a.active .parent-icon i {
        color: #6f42c1;
    }
</style>

<aside>
    <div class="sidebar-wrapper" data-simplebar>
        <!-- Sidebar header -->
        <div class="sidebar-header d-flex align-items-center px-3 py-3">
    <img src="{{ asset('assets/images/ged_logo.jpeg') }}"
         alt="logo"
         class="rounded-circle me-3"
         style="width: 50px; height: 50px; object-fit: cover;">

    <div class="d-flex flex-column">
        <span class="fw-semibold fst-italic" style="font-size: 1.25rem;">GED Intermedia</span>
        {{-- <small class="text-muted" style="opacity: 0.5; font-size: 0.85rem;">GED Media</small> --}}
    </div>
</div>


        <!-- Navigation -->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{ route('admin.dashboard') }}"
                    class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bx bx-home'></i></div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.category.index') }}"
                    class="{{ request()->routeIs('admin.category.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bx bx-crown'></i></div>
                    <div class="menu-title">Category</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.type.index') }}"
                    class="{{ request()->routeIs('admin.type.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                    <div class="menu-title">Type</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.operation-status.index') }}"
                    class="{{ request()->routeIs('admin.operation-status.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bx bx-repeat'></i></div>
                    <div class="menu-title">Operation States</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.nations.index') }}"
                    class="{{ request()->routeIs('admin.nations.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bi bi-globe2'></i></div>
                    <div class="menu-title">Nation</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.regions.index') }}"
                    class="{{ request()->routeIs('admin.regions.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bi bi-map'></i></div>
                    <div class="menu-title">Region</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.sectors.index') }}"
                    class="{{ request()->routeIs('admin.sectors.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bi bi-bar-chart'></i></div>
                    <div class="menu-title">Sector</div>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.products.index') }}"
                    class="{{ request()->routeIs('admin.products.index') ? 'active' : '' }}">
                    <div class="parent-icon"><i class='bx bx-cart'></i></div>
                    <div class="menu-title">Product</div>
                </a>
            </li>
        </ul>
    </div>
</aside>
