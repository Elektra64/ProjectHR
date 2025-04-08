<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Add FontAwesome 6.4.0 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />

    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css' rel='stylesheet' />
    <!-- Bootstrap 5 CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
      crossorigin="anonymous"> -->
    <!-- Add Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @livewireStyles
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        @auth
        <div class="wrapper">
            <aside id="sidebar">
                <div class="sidebar-overlay"></div>
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">HR_Manager</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="/home" class="sidebar-link">
                            <i class="lni lni-grid-alt"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-bookmark"></i>
                            <span>Attendance/Leave</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-money-protection"></i>
                            <span>Payroll/Benefits</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#emanage" aria-expanded="false" aria-controls="auth">
                            <i class="lni lni-users"></i>
                            <span>Manage Employee</span>
                        </a>
                        <ul id="emanage" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Profiles</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Directory</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Contracts</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                            <i class="lni lni-bar-chart"></i>  
                            <span>Performance</span>
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#multi-two" aria-expanded="false" aria-controls="multi-two">
                                    Two Links
                                </a>
                                <ul id="multi-two" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Appraisals</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">KPI Tracking</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#recruit" aria-expanded="false" aria-controls="auth">
                            <i class="lni lni-briefcase"></i>
                            <span>Recruitment</span>
                        </a>
                        <ul id="recruit" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Job Postings</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Candidates</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-graduation"></i>
                            <span>Training/Development</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Notification</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span>Setting</span>
                        </a>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
            <div class="main">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container-fluid">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav me-auto">
                                
                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ms-auto">
                                <form class="d-flex me-auto ms-3" style="max-width: 400px;">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." aria-label="Search">
                                        <button class="btn btn-outline-secondary" type="button">
                                            <i class="bi bi-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- Notification Button -->
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link" data-bs-toggle="tooltip" title="Notifications">
                                        <i class="bi bi-bell fs-5"></i>
                                        <span class="visually-hidden">Notifications</span>
                                    </a>
                                </li>

                                <!-- Messages Button -->
                                <li class="nav-item mx-2">
                                    <a href="#" class="nav-link" data-bs-toggle="tooltip" title="Messages">
                                        <i class="bi bi-chat-dots fs-5"></i>
                                        <span class="visually-hidden">Messages</span>
                                    </a>
                                </li>

                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="profileDropdown" class="nav-link dropdown-toggle p-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <!-- Use user's profile photo or a default image -->
                                            <img src="{{ Auth::user()->profile_photo_url ?? asset('/logo_012.jpg') }}" alt="Profile" class="rounded-circle" style="width:40px; height:40px;">
                                        </a>

                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                            <li class="dropdown-head">{{ Auth::user()->name }}</li>  
                                            <li class="dropdown-head">{{ Auth::user()->email }}</li>
                                            <li><hr class="dropdown-divider"></li>  
                                            <li><a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class="lni lni-user me-3 fs-5"></i>
                                                Profile</a>
                                            </li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="/calendar">
                                                <i class="lni lni-calendar me-3 fs-5"></i>
                                                Calendar</a>
                                            </li>
                                            <li><a class="dropdown-item d-flex align-items-center" href="#">
                                                <i class="lni lni-cog me-3 fs-5"></i>
                                                Settings</a>
                                            </li>
                                            <li><hr class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="lni lni-exit m-3 fs-5"></i>
                                                    {{ __('Logout') }}
                                                </a>
                                            </li>
                                        </ul>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>
                <main class="mainPage">
                    @yield('content')
                </main>
            </div>
        </div>
        @else
        <main class="guestPage">
            @yield('content')
        </main>
        @endauth
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js">
    </script>

    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js'>
    </script>
    @livewireScripts
</body>
</html>
