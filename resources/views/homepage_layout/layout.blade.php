<!DOCTYPE html>
<html lang="en">
{{-- data-bs-theme="dark" --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <!-- Contents for Sidebar-->
            <div class="h-100">
                <div class="row brand-logo">
                    <div class="image-logo">
                        <img src="images/uf_logo.png" alt="">
                    </div>
                    <div class="sidebar-logo" >
                        <p >HEI PORTAL
                        </p>
                    </div>
                </div>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="href sidebar-link">
                            <i class="bi bi-list-ul"></i></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#posts"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="bi bi-tablet"></i></i>
                            TES
                        </a>
                        <ul id="posts" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Manage TES Applicants</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Generate Billing Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="bi bi-tablet"></i>
                            Pages
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">pages 1</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"> Pages 2</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#auth"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="bi bi-person-circle"></i>
                            Authentication
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Log Out </a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Home</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-header">
                        Multi Level Menu
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#multi"
                            data-bs-toggle="collapse" aria-expanded="false"><i class="bi bi-arrow-down-circle-fill"></i>
                            Multi Dropdown
                        </a>
                        <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link collapsed" data-bs-target="#Level-1"
                                    data-bs-toggle="collapse" aria-expanded="false"> Level 1 </a>
                                <ul id="Level-1" class="sidebar-dropdown list-unstyled collapse">
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Level 1.1</a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="#" class="sidebar-link">Level 1.2</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id ="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon">
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0" >
                                <img src="images/uf_logo.png" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                </span>
            </nav>
            <main class="content px-3 py-2">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h4> Admin Dashboard</h4>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0 illustration">
                                <div class="card-body p-0 d-flex flex-fill">
                                    <div class="row g-0 w-100">
                                        <div class="col-6">
                                            <div class="p-3 m-1">
                                                <h4> Welcome Back, Admin </h4>
                                                <p class="mp-0"> Admin Dashboard</p>
                                            </div>
                                        </div>
                                        <div class="col-6align-self-end text-end">
                                            <img src="image/customer-support.jpg" class="img-fluid illustration"
                                                alt="">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 d-flex">
                            <div class="card flex-fill border-0">
                                <div class="card-body py-4">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1">
                                            <h4 class="mb-2"></h4>
                                            <p class="mb-2">
                                            </p>
                                            <div class="mb-0">
                                                <span class="badge text-success me-2">
                                                </span>
                                                <span class="text-muted"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Table Elements
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Basic Table
                            </h5>
                            <h6 class="card-subtitle text-muted">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perspiciatis ipsum harum
                                earum tempore perferendis iste vitae aliquid nam, voluptates excepturi aliquam,
                                explicabo blanditiis
                                quo eius? Ducimus maxime harum minus dolores?
                            </h6>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div> --}}
            </main>
            <a href="#" class="theme-toggle">
                <i class="bi bi-moon"></i>
                <i class="bi bi-brightness-high"> </i>
            </a>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a href="#" class="text-muted">
                                    <strong>HEI PORTAL</strong>
                                </a>
                            </p>
                        </div>
                        <div class="col-6 text-end">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-muted">About Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
