<!DOCTYPE html>
<html lang="en" class="light-style layout-wide  customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="assets/admin/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Pegasus - @yield('title')</title>


  <meta name="description"
    content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">


  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');</script>
  <!-- End Google Tag Manager -->

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/PEGASUS-W.ico') }}" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
    rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="assets/admin/vendor/fonts/boxicons.css" />
  <link rel="stylesheet" href="assets/admin/vendor/fonts/fontawesome.css" />
  <!-- <link rel="stylesheet" href="assets/admin/vendor/fonts/flag-icons.css" /> -->

  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/admin/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/admin/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/admin/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/admin/vendor/libs/typeahead-js/typeahead.css" />
  <!-- Vendor -->
  <link rel="stylesheet" href="assets/admin/vendor/libs/%40form-validation/form-validation.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="assets/admin/vendor/css/pages/page-auth.css">

  <!-- Helpers -->
  <script src="assets/admin/vendor/js/helpers.js"></script>
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <script src="assets/admin/vendor/js/template-customizer.js"></script>
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/admin/js/config.js"></script>

</head>

<body>


  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
      style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="/" class="app-brand-link gap-2">
                <span class="app-brand-logo-login">

                  <svg>
                    @php echo file_get_contents(public_path('assets/pegasusFullLogo.svg')); @endphp
                  </svg>

                </span>

              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-2">Welcome to Pegasus! 👋</h4>
            <p class="mb-4">Please sign-in to your account</p>

            {{ $slot }}

          </div>
        </div>
      </div>
      <!-- /Register -->
    </div>
  </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->

  <script src="assets/admin/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/admin/vendor/libs/popper/popper.js"></script>
  <script src="assets/admin/vendor/js/bootstrap.js"></script>
  <script src="assets/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/admin/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/admin/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/admin/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/admin/vendor/js/menu.js"></script>

  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="assets/admin/vendor/libs/%40form-validation/popular.js"></script>
  <script src="assets/admin/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="assets/admin/vendor/libs/%40form-validation/auto-focus.js"></script>

  <!-- Main JS -->
  <script src="assets/admin/js/main.js"></script>


  <!-- Page JS -->
  <script src="assets/admin/js/pages-auth.js"></script>

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/auth-login-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 10:26:58 GMT -->

</html>

<!-- beautify ignore:end -->
