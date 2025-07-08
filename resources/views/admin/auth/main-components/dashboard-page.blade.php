@extends('admin.auth.dashboard')


@section('content')
<div class="container-fluid px-4">

<!-- Large, Equal-Size, Animated Cards -->
<div class="container px-2">
  <div class="row justify-content-center g-4 equal-height">
    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
      <div class="card radius-10 bg-gradient-cosmic text-white text-center">
        <div class="card-body">
          <p class="mb-2">Total Orders</p>
          <h4 class="my-2">4,805</h4>
          <p class="mb-0">+2.5% from last week</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
      <div class="card radius-10 bg-gradient-ibiza text-white text-center">
        <div class="card-body">
          <p class="mb-2">Total Revenue</p>
          <h4 class="my-2">$84,245</h4>
          <p class="mb-0">+5.4% from last week</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
      <div class="card radius-10 bg-gradient-ohhappiness text-white text-center">
        <div class="card-body">
          <p class="mb-2">Bounce Rate</p>
          <h4 class="my-2">34.6%</h4>
          <p class="mb-0">-4.5% from last week</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-6 col-md-4 col-xl-3">
      <div class="card radius-10 bg-gradient-kyoto text-dark text-center">
        <div class="card-body">
          <p class="mb-2">Total Customers</p>
          <h4 class="my-2">8.4K</h4>
          <p class="mb-0">+8.4% from last week</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection