<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="{{ asset('assets/') }}/img/favicon.png" rel="icon">
    <link href="{{ asset('assets/') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('assets/') }}/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('assets/') }}/css/style.css">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">NiceAdmin</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-primary badge-number">4</span>
                    </a><!-- End Notification Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
                        <li class="dropdown-header">
                            You have 4 new notifications
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-exclamation-circle text-warning"></i>
                            <div>
                                <h4>Lorem Ipsum</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>30 min. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-x-circle text-danger"></i>
                            <div>
                                <h4>Atque rerum nesciunt</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>1 hr. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-check-circle text-success"></i>
                            <div>
                                <h4>Sit rerum fuga</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>2 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="notification-item">
                            <i class="bi bi-info-circle text-primary"></i>
                            <div>
                                <h4>Dicta reprehenderit</h4>
                                <p>Quae dolorem earum veritatis oditseno</p>
                                <p>4 hrs. ago</p>
                            </div>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="dropdown-footer">
                            <a href="#">Show all notifications</a>
                        </li>

                    </ul><!-- End Notification Dropdown Items -->

                </li><!-- End Notification Nav -->

                <li class="nav-item dropdown">

                    <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-chat-left-text"></i>
                        <span class="badge bg-success badge-number">3</span>
                    </a><!-- End Messages Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
                        <li class="dropdown-header">
                            You have 3 new messages
                            <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Maria Hudson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>4 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>Anna Nelson</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>6 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="message-item">
                            <a href="#">
                                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                                <div>
                                    <h4>David Muldon</h4>
                                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                                    <p>8 hrs. ago</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li class="dropdown-footer">
                            <a href="#">Show all messages</a>
                        </li>

                    </ul><!-- End Messages Dropdown Items -->

                </li><!-- End Messages Nav -->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="/">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link" data-bs-target="#courses-nav" href="/dash">
                    <i class="bi bi-menu-button-wide"></i><span>Courses</span>
                </a>
            </li><!-- End Courses Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#forms-nav" href="/class">
                    <i class="bi bi-journal-text"></i><span>Classes</span>
                </a>
            </li><!-- End Schedule Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>General Tables</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Data Tables</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Tables Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Chart.js</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>ApexCharts</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>ECharts</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Charts Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="icons-bootstrap.html">
                            <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Remix Icons</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Boxicons</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Icons Nav -->
        </ul>

    </aside><!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Users</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard profile">
            <div class="row">
                <div class="col-xl-12">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered">

                                <li class="nav-item">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview">Absent</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-edit">Storage</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-settings">Quiz</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password">Discussion</button>
                                </li>

                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <div class="bg-surface-secondary">
                                        <div class="card-header">
                                            <h6>Bootstrap 5 Table</h6>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-nowrap">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Job Title</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Lead Score</th>
                                                        <th scope="col">Company</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td data-label="Job Title"> <img alt="..."
                                                                src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                Robert Fox </a>
                                                        </td>
                                                        <td data-label="Email"> <span>Web Designer</span> </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                        </td>
                                                        <td data-label="Lead Score"> <a class="text-current"
                                                                href="tel:202-555-0152">202-555-0152</a> </td>
                                                        <td data-label="Company"> <span
                                                                class="badge bg-soft-success text-success">7/10</span>
                                                        </td>
                                                        <td data-label=""> <a class="text-current"
                                                                href="#">Dribbble</a> </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Job Title"> <img alt="..."
                                                                src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                Darlene Robertson </a>
                                                        </td>
                                                        <td data-label="Email"> <span>Developer</span> </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="mailto:darlene@example.com">darlene@example.com</a>
                                                        </td>
                                                        <td data-label="Lead Score"> <a class="text-current"
                                                                href="tel:224-567-2662">224-567-2662</a> </td>
                                                        <td data-label="Company"> <span
                                                                class="badge bg-soft-warning text-warning">5/10</span>
                                                        </td>
                                                        <td data-label=""> <a class="text-current"
                                                                href="#">Netguru</a> </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Job Title"> <img alt="..."
                                                                src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                Theresa Webb </a>
                                                        </td>
                                                        <td data-label="Email"> <span>Marketing
                                                                Specialist</span> </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="mailto:theresa.webb@example.com">theresa.webb@example.com</a>
                                                        </td>
                                                        <td data-label="Lead Score"> <a class="text-current"
                                                                href="tel:401-505-6800">401-505-6800</a> </td>
                                                        <td data-label="Company"> <span
                                                                class="badge bg-soft-danger text-danger">2/10</span>
                                                        </td>
                                                        <td data-label=""> <a class="text-current" href="#">Figma</a>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Job Title"> <img alt="..."
                                                                src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                Kristin Watson </a>
                                                        </td>
                                                        <td data-label="Email"> <span>Sales Manager</span> </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="mailto:cody.fisher@example.com">cody.fisher@example.com</a>
                                                        </td>
                                                        <td data-label="Lead Score"> <a class="text-current"
                                                                href="tel:307-560-8817">307-560-8817</a> </td>
                                                        <td data-label="Company"> <span
                                                                class="badge bg-soft-success text-success">9/10</span>
                                                        </td>
                                                        <td data-label=""> <a class="text-current"
                                                                href="#">Mailchimp</a> </td>

                                                    </tr>
                                                    <tr>
                                                        <td data-label="Job Title"> <img alt="..."
                                                                src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                                class="avatar avatar-sm rounded-circle me-2">
                                                            <a class="text-heading font-semibold" href="#">
                                                                Robert Fox </a>
                                                        </td>
                                                        <td data-label="Email"> <span>Web Designer</span> </td>
                                                        <td data-label="Phone"> <a class="text-current"
                                                                href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                        </td>
                                                        <td data-label="Lead Score"> <a class="text-current"
                                                                href="tel:202-555-0152">202-555-0152</a> </td>
                                                        <td data-label="Company"> <span
                                                                class="badge bg-soft-success text-success">7/10</span>
                                                        </td>
                                                        <td data-label=""> <a class="text-current"
                                                                href="#">Dribbble</a> </td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade pt-3" id="profile-edit">
                                    <!-- Storage -->
                                    <div class="row">
                                        <div class="col mb-3 pb-3">
                                            <div class="col-xxl-3">
                                                <div class="class storage-card">
                                                    <div class="row pt-2 ps-5 d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-folder-fill"></i>
                                                        </div>
                                                        <div class="pt-2 pb-2">
                                                            <h4>Math</h4>
                                                            <span class="text-muted small pt-2">12 Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-3 pb-3">
                                            <div class="col-xxl-3">
                                                <div class="class storage-card">
                                                    <div class="row pt-2 ps-5 d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-folder-fill"></i>
                                                        </div>
                                                        <div class="pt-2 pb-2">
                                                            <h4>History</h4>
                                                            <span class="text-muted small pt-2">10 Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-3 pb-3">
                                            <div class="col-xxl-3">
                                                <div class="class storage-card">
                                                    <div class="row pt-2 ps-5 d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-folder-fill"></i>
                                                        </div>
                                                        <div class="pt-2 pb-2">
                                                            <h4>Science</h4>
                                                            <span class="text-muted small pt-2">15 Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col mb-3 pb-3">
                                            <div class="col-xxl-3">
                                                <div class="class storage-card">
                                                    <div class="row pt-2 ps-5 d-flex align-items-center">
                                                        <div
                                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                            <i class="bi bi-folder-fill"></i>
                                                        </div>
                                                        <div class="pt-2 pb-2">
                                                            <h4>Islamic</h4>
                                                            <span class="text-muted small pt-2">20 Files</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Lead Score</th>
                                                    <th scope="col">Company</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Robert Fox </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Web Designer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:202-555-0152">202-555-0152</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">7/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Darlene Robertson </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Developer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:darlene@example.com">darlene@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:224-567-2662">224-567-2662</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-warning text-warning">5/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Netguru</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Theresa Webb </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Marketing
                                                            Specialist</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:theresa.webb@example.com">theresa.webb@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:401-505-6800">401-505-6800</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-danger text-danger">2/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Figma</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Kristin Watson </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Sales Manager</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:cody.fisher@example.com">cody.fisher@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:307-560-8817">307-560-8817</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">9/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Mailchimp</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Robert Fox </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Web Designer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:202-555-0152">202-555-0152</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">7/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!--Storage Quiz -->
                                </div>

                                <div class="tab-pane fade" id="profile-settings">
                                    <!-- Quiz Page -->

                                    <div class="card-header">
                                        <h6>Bootstrap 5 Table</h6>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-nowrap">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Job Title</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Lead Score</th>
                                                    <th scope="col">Company</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Robert Fox </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Web Designer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:202-555-0152">202-555-0152</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">7/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Darlene Robertson </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Developer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:darlene@example.com">darlene@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:224-567-2662">224-567-2662</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-warning text-warning">5/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Netguru</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Theresa Webb </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Marketing
                                                            Specialist</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:theresa.webb@example.com">theresa.webb@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:401-505-6800">401-505-6800</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-danger text-danger">2/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Figma</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Kristin Watson </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Sales Manager</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:cody.fisher@example.com">cody.fisher@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:307-560-8817">307-560-8817</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">9/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Mailchimp</a>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td data-label="Job Title"> <img alt="..."
                                                            src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80"
                                                            class="avatar avatar-sm rounded-circle me-2">
                                                        <a class="text-heading font-semibold" href="#">
                                                            Robert Fox </a>
                                                    </td>
                                                    <td data-label="Email"> <span>Web Designer</span> </td>
                                                    <td data-label="Phone"> <a class="text-current"
                                                            href="mailto:robert.fox@example.com">robert.fox@example.com</a>
                                                    </td>
                                                    <td data-label="Lead Score"> <a class="text-current"
                                                            href="tel:202-555-0152">202-555-0152</a> </td>
                                                    <td data-label="Company"> <span
                                                            class="badge bg-soft-success text-success">7/10</span>
                                                    </td>
                                                    <td data-label=""> <a class="text-current" href="#">Dribbble</a>
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- End Quiz Page -->

                                </div>

                                <div class="tab-pane fade pt-3" id="profile-change-password">
                                    <!-- Change Password Form -->
                                    <form>

                                        <div class="row mb-3">
                                            <label for="currentPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="password" type="password" class="form-control"
                                                    id="currentPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="newpassword" type="password" class="form-control"
                                                    id="newPassword">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="renewPassword"
                                                class="col-md-4 col-lg-3 col-form-label">Re-enter New
                                                Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renewpassword" type="password" class="form-control"
                                                    id="renewPassword">
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form><!-- End Change Password Form -->

                                </div>
                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/') }}/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/chart.js/chart.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/echarts/echarts.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/quill/quill.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="{{ asset('assets/') }}/vendor/tinymce/tinymce.min.js"></script>
    <script src="{{ asset('assets/') }}/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/') }}/js/main.js"></script>
</body>

</html>
