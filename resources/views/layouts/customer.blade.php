<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Customer Home')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 shadow-sm">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">Medical Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCustomer" aria-controls="navbarCustomer" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCustomer">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ route('customer.home') }}" class="nav-link {{ request()->routeIs('customer.home') ? 'active fw-bold' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('customer.categories') }}" class="nav-link {{ request()->routeIs('customer.categories') ? 'active fw-bold' : '' }}">Categories</a>
                </li>
            </ul>
        </div>
    </nav>

    <main class="container my-5">
        @yield('content')
    </main>
</body>
</html>
