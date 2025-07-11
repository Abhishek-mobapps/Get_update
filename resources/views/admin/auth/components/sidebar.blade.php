<style>
    .metismenu a.active {
        background-color: #f3efff;
        /* Soft violet background */
        border-radius: 6px;
        color: #6f42c1 !important;
        /* Premium violet */
    }

    .metismenu a.active .parent-icon i {
        color: #6f42c1;
    }
</style>
<aside>
    <!-- Main Content with Sidebar -->
    <div class="flex-grow-1 container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 bg-body-tertiary border-end p-3" style="width: 250px;">
                <!-- SIDEBAR -->
                <div class="wrapper">
                    <!-- Sidebar wrapper -->
                    <div class="sidebar-wrapper" data-simplebar="true">

                        <!-- Sidebar header -->
                        <div class="sidebar-header d-flex align-items-center">
                            <div>
                                <img src="{{ asset('assets/images/ged_logo.jpeg') }}" class="logo-icon" alt="logo icon">
                            </div>
                            <div>
                                <h3 class="logo-text" style="font-size: 20px;">GED Intermedia</h3>
                            </div>
                            <div class="toggle-icon ms-auto"></div>
                        </div>

                        <!-- Navigation -->
                        <ul class="metismenu" id="menu">

                            <li>
                                <a href="{{ route('admin.dashboard') }}"
                                    class="{{ request()->routeIs('admin.dashboard') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-home'></i></div>
                                    <div class="menu-title">Dashboard</div>
                                </a>


                            </li>

                            <li>
                                <a href="{{ route('admin.category.index') }}"
                                    class="{{ request()->routeIs('admin.category.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-crown'></i></div>
                                    <div class="menu-title">Category</div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.type.index') }}"
                                    class="{{ request()->routeIs('admin.type.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                                    <div class="menu-title">Type</div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.operation-status.index') }}"
                                    class="{{ request()->routeIs('admin.operation-status.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-repeat'></i></div>
                                    <div class="menu-title">Operation States</div>
                                </a>
                            </li>

                            <li>
                                <a href="{{ route('admin.products.index') }}"
                                    class="{{ request()->routeIs('admin.products.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-cart'></i></div>
                                    <div class="menu-title">Product</div>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('admin.nations.index') }}"
                                    class="{{ request()->routeIs('admin.nations.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-cart'></i></div>
                                    <div class="menu-title">Nation</div>
                                </a>
                            </li>


                            <li>
                                <a href="{{ route('admin.products.index') }}"
                                    class="{{ request()->routeIs('admin.products.index') ? 'active fw-bold' : '' }}">
                                    <div class="parent-icon"><i class='bx bx-cart'></i></div>
                                    <div class="menu-title">Product</div>
                                </a>
                            </li>
                        </ul>
                        <!-- End navigation -->

                    </div>
                    <!-- End sidebar wrapper -->
                </div>
            </div>
        </div>
    </div>
</aside>
