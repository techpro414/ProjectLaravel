@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <i class="bi bi-grid-fill me-2"></i>Dashboard
            </a>
        </div>
    </nav>

    {{-- Main Content --}}
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body text-center py-5">
                        <h1 class="display-4 fw-bold text-primary">TEST GITHUB PROJECT LARAVELL</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
