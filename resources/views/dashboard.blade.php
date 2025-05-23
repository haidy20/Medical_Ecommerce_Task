@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-secondary text-white text-center py-3">
        <h3 class="mb-0">Welcome Admin {{ Auth::user()->name }}</h3>
    </div>
    <div class="card-body text-center">
        <a href="{{ route('profile.edit') }}"
            class="btn btn-warning text-dark fw-semibold px-4 py-2"
            style="background-color: #f5c518; border: none; box-shadow: 0 4px 8px rgba(245, 197, 24, 0.4); transition: background-color 0.3s ease;">
            Edit Your Profile
        </a>
    </div>
    @if (session('success'))
    <div class="alert alert-success mt-3 text-center">
        {{ session('success') }}
    </div>
    @endif

</div>
@endsection