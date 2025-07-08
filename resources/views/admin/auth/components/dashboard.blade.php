@extends('admin.auth.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    @if($showWelcomeBox)
        <div class="row g-3">
            {{-- Dashboard boxes here --}}
            <div class="col-md-3">
                <div class="card text-white bg-teal shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h4 class="mb-0">900k+</h4>
                                <small>Total Visitors</small>
                            </div>
                            <i class="bi bi-people-fill fs-2"></i>
                        </div>
                        <div class="mt-2">
                            <small>Page Views: 7,809</small><br>
                            <small>Growth: 76.4%</small>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Add other 3 boxes --}}
        </div>
    @endif
</div>
@endsection
