@extends('layouts.admin')

@section('title', 'Edit Profile')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Edit Profile</h1>

    {{-- Profile Information --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white">
            Update Profile Information
        </div>
        <div class="card-body">
            @include('profile.partials.update-profile-information-form')
        </div>
    </div>

    {{-- Update Password --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning text-dark">
            Update Password
        </div>
        <div class="card-body">
            @include('profile.partials.update-password-form')
        </div>
    </div>

    {{-- Delete User --}}
    <div class="card mb-4 shadow-sm border-danger">
        <div class="card-header bg-danger text-white">
            Delete Account
        </div>
        <div class="card-body">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</div>
@endsection
