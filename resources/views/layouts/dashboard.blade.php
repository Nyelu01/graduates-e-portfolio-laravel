<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS files -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/boxicons-2.1.4/css/boxicons.min.css') }}" rel="stylesheet">

    <title>Dashboard</title>
</head>

<body>
    <!-- Sidebar -->
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img"
                    style="background-image: url('{{ asset('../assets/images/user-avatar/user-avatar.png') }}')"
                    alt="Profile Image"></div>
                <div>
                    <small>{{ Auth::user()->name }}</small>
                </div>
            </div>
            <div class="side-menu">
                <ul>
                    <li>
                        <a href="{{ route('projects.index') }}" class="active">
                            <span class="bx bxs-dashboard"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Navigation bar -->
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="bx bx-menu"></span>
                </label>
                <div class="header-menu">
                    <div class="user">
                        <span class="bx bx-exit"></span>
                        <a href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main>
            <div class="page-header">
                @if(Request::is('projects/*/edit'))
                <h1>Edit Project</h1>
                <small>Home / Edit Project</small>
                @elseif(Request::is('projects/show/*'))
                <h1>Project Details</h1>
                <small>Home / Project Details</small>
                @elseif (Request::is('projects'))
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
                @endif
            </div>
            <div class="page-content">
                @yield('content')
            </div>
        </main>
    </div>
</body>

</html>
