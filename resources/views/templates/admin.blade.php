<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
    data-theme="theme-default" data-assets-path="{{ asset('assets/admin/') }}" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Pegasus - @yield('title')</title>
    <meta name="description"
        content="Most Powerful & Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Canonical SEO -->
    <link rel="canonical" href="{{ route('admin') }}">
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/PEGASUS-W.ico') }}" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/boxicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/flag-icons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('assets/admin/css/demo.css') }}" />
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <!-- Toastr CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/te2rfhgmvl2ihh4mvdp4f8ltjde6wgl76xxmiu5ukeceu3eb/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src = 'https://www.googletagmanager.com/gtag/js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    @stack('admin_style')
</head>

<body>

    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
        });
    </script>

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">


            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


                <div class="app-brand demo ">
                    <a href="/" class="app-brand-link">
                        <span class="app-brand-logo demo">

                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 402.53 247.18">
                                <defs>
                                    <style>
                                        .cls-1,
                                        .cls-2 {
                                            stroke-width: 0px;
                                        }

                                        .cls-2 {
                                            fill: #fff;
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="cls-2"
                                        d="m0,9.7c7.13,22.08,24.36,33.32,44.31,41.81,85.09,36.22,157.65,86.39,194.88,176.04,6.95,16.74,19.46,20.14,37.42,13.04-28.29-45.25-55.87-89.62-83.86-133.72-2.82-4.44-7.71-8.14-12.44-10.67C120.29,64.01,60.13,32.11,0,.13m324.07,53.84c15.64,33.36,29.57,63.07,44.46,94.84-39.86,12.27-33.52-31.05-56.32-39.41-4.07,2.47-9.84,5.97-17.15,10.41,11.48,18.71,21.7,36.52,33.28,53.41,2.77,4.05,10.5,7.68,15.17,6.89,19.94-3.38,39.59-8.5,59.03-12.91-13.64-55.69-66.43-97.41-40.53-167.2-53.72,34.6-100.6,64.79-148.11,95.38,28,45.24,55.02,87.41,80.31,130.59,9.09,15.52,19.11,22.1,38.69,15.04-28.32-46.06-56.39-91.71-84.79-137.9,25.46-16.47,49.35-31.93,75.97-49.15ZM26.5,74.07c-.16,23.93,9.6,36.05,27.31,43.75,55.33,24.06,104.97,54.42,130.87,113.54,3.46,7.9,18.57,10.67,28.28,15.82,1.88-2.38,3.76-4.77,5.64-7.15-20.61-31.69-35.44-70.47-63.26-93.32-36.95-30.34-84.03-48.26-128.83-72.64Zm21.95,75.16c1.89,20.15,9.6,32.34,26.75,42.06,15.67,8.88,29.57,22.5,41.17,36.59,13.9,16.89,12.48,18.06,34.87,12.43-15.72-50.04-56.72-71.74-102.79-91.08Z" />
                                    <path class="cls-1"
                                        d="m0,.13c60.13,31.98,120.29,63.89,180.3,96.07,4.73,2.54,9.63,6.24,12.44,10.67,27.99,44.1,55.57,88.46,83.86,133.72-17.96,7.1-30.47,3.7-37.42-13.04C201.95,137.9,129.4,87.73,44.31,51.51,24.36,43.02,7.13,31.78,0,9.7V.13Z" />
                                    <path class="cls-1"
                                        d="m324.07,53.96c-26.61,17.22-50.51,32.68-75.97,49.15,28.4,46.18,56.47,91.84,84.79,137.9-19.58,7.06-29.6.48-38.69-15.04-25.29-43.18-52.32-85.35-80.31-130.59,47.51-30.6,94.38-60.78,148.11-95.38-25.9,69.79,26.89,111.51,40.53,167.2-19.43,4.41-39.08,9.52-59.03,12.91-4.67.79-12.39-2.84-15.17-6.89-11.58-16.88-21.8-34.7-33.28-53.41,7.31-4.44,13.08-7.94,17.15-10.41,22.8,8.36,16.46,51.67,56.32,39.41-14.9-31.78-28.82-61.49-44.46-94.84Z" />
                                    <path class="cls-1"
                                        d="m26.5,74.07c44.8,24.38,91.89,42.29,128.83,72.64,27.82,22.85,42.65,61.63,63.26,93.32-1.88,2.38-3.76,4.77-5.64,7.15-9.71-5.15-24.82-7.92-28.28-15.82-25.9-59.12-75.54-89.48-130.87-113.54-17.71-7.7-27.47-19.83-27.31-43.75Z" />
                                    <path class="cls-1"
                                        d="m48.45,149.23c46.07,19.34,87.07,41.04,102.79,91.08-22.39,5.63-20.97,4.46-34.87-12.43-11.6-14.09-25.5-27.71-41.17-36.59-17.15-9.72-24.86-21.91-26.75-42.06Z" />
                                </g>
                            </svg>

                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">Pegasus</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <!-- Dashboards -->
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div class="text-truncate" data-i18n="Dashboards">
                                Dashboards
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('blog.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-news"></i> <!-- Ikon untuk Blog -->
                            <div class="text-truncate" data-i18n="Manage Blog">
                                Manage Blog
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('portfolio.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-briefcase-alt"></i> <!-- Ikon untuk Portofolio -->
                            <div class="text-truncate" data-i18n="Manage Portfolio">
                                Manage Portfolio
                            </div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('user.index') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-user"></i> <!-- Ikon untuk User -->
                            <div class="text-truncate" data-i18n="Manage User">
                                Manage User
                            </div>
                        </a>
                    </li>
                </ul>


            </aside>
            <!-- / Menu -->



            <!-- Layout container -->
            <div class="layout-page">





                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">




                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <i class='bx bx-user'></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    {{-- <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <i class='bx bx-user'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-medium d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li> --}}
                                    <li>
                                        <a class="dropdown-item" href="{{ route('profile.index') }}">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                            <i class='bx bx-power-off me-2'></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>


                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper  d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search...">
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>


                </nav>



                <!-- / Navbar -->
                <!-- Content wrapper -->
                @yield('content')
                <!-- Content wrapper -->

            </div>
            <!-- / Layout page -->
        </div>



        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>


        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>

    </div>
    <!-- / Layout wrapper -->
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/admin/vendor/js/bootstrap.bundle.js') }}"></script>
    <!-- Perfect Scrollbar -->
    <script src="{{ asset('assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <!-- DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#example').DataTable({
        responsive: true
        });
        });
    </script>

    <!-- Flatpickr JS -->
    <script src="{{ asset('assets/admin/vendor/libs/moment/moment.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/flatpickr/flatpickr.js') }}"></script>
    <!-- Form Validation JS -->
    <script src="{{ asset('assets/admin/vendor/libs/form-validation/popular.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/form-validation/bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/libs/form-validation/auto-focus.js') }}"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Main JS -->
    <script src="{{ asset('assets/admin/js/main.js') }}"></script>
    <!-- Page-specific JS -->
    <script src="{{ asset('assets/admin/js/tables-datatables-basic.js') }}"></script>
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- Your additional scripts -->
    @stack('admin_scripts')


    <script>
        $(document).on('click', '.delete-button', function(e) {
            e.preventDefault();
            var button = $(this);
            var id = button.data('id');

            if (id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        
                        $.ajax({
                            url: '/delete-user/' + id,
                            type: 'DELETE',
                            success: function(response) {
                                Swal.fire(
                                    'Deleted!',
                                    'Your file has been deleted.',
                                    'success'
                                );
                                window.location.reload();
                            },
                            error: function(xhr, status, error) {
                                console.log('Error deleting user: ' + error);
                            }
                        });
                    }
                });
            } else {
                console.log('No id value found');
            }
        });
    </script>


    @if (Session::has('status') && Session::has('message'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });

    Toast.fire({
        icon: "{{ Session::get('status') }}", // Mengambil status sebagai icon
        title: "{{ Session::get('message') }}" // Mengambil pesan sebagai title
    });
    </script>
    @endif


</body>

</html>
