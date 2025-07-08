@extends('admin.auth.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container mt-4">
    @if($showWelcomeBox)
       @include('admin.auth.main-components.grid-box')
    @else
        
    @endif
</div>
@endsection
