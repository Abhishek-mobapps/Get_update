  <aside>
	  <!-- Main Content with Sidebar -->
  <div class="flex-grow-1 container-fluid">
    <div class="row">
      
      <!-- Sidebar -->
      <div class="col-md-3 col-lg-2 bg-body-tertiary border-end p-3" class="bg-light border-end" style="width: 250px;"">
        <!-- SIDEBAR -->
        <!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset('assets/images/ged_logo.jpeg') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h3 class="logo-text" style="font-size: 20px" >GED Intermedia</h3>
				</div>
				<div class="toggle-icon ms-auto">
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{route('admin.dashboard')}}" class="">
						<div class="parent-icon">
						</div>
						<div class="menu-title fw-bold">Dashboard</div>
					</a>

				</li>
				<li class="menu-label"></li>
				<li>
					<a href="{{route('admin.category.index')}}">
                <div class="parent-icon ">
               <i class='bx bx-crown'></i>
               </div>
               <div class="menu-title fw-bold ">Category</div>
               </a>

				</li>
                <li>
					<a href="{{route('admin.type.index')}}">
						<div class="parent-icon"><i class='bx bx-cookie'></i>
						</div>
						<div class="menu-title fw-bold">Type</div>
					</a>
				</li>
                <li>
					<a href="{{route('admin.operation-status.index')}}">
						<div class="parent-icon"><i class='bx bx-repeat'></i>
						</div>
						<div class="menu-title fw-bold">Operation States</div>
					</a>
				</li>
                <li>
					<a href="{{route('admin.products.index')}}">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div  class="menu-title fw-bold">Product</div>
					</a>
				</li>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
      </div>
  </aside>