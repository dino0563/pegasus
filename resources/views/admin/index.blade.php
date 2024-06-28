@extends('templates.admin')

@section('title', 'Dashboard')
@section('custom-js')
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
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
@endsection

@section('content')
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="py-3 mb-4">
                Dashboard
            </h4>

            <div class="row">
                <!-- Shipment statistics-->
                <div class="col-lg-12 col-xxl-6 mb-4 order-3 order-xxl-1">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <div class="card-header flex-nowrap header-elements">
                                <h5 class="m-0 me-2">Grafik Laporan Pengunjung</h5>
                                <div class="flex card-header-elements ms-auto py-0 d-none d-sm-block">
                                    <div class="btn-group" role="group" aria-label="radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="dailyRadio" checked>
                                        <label class="btn btn-outline-secondary" for="dailyRadio">Daily</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="monthlyRadio">
                                        <label class="btn btn-outline-secondary" for="monthlyRadio">Monthly</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="yearlyRadio">
                                        <label class="btn btn-outline-secondary" for="yearlyRadio">Yearly</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="shipmentStatisticsChart"></div>
                        </div>
                    </div>
                </div>
                <!--/ Shipment statistics -->
            </div>
            <!--/ On route vehicles Table -->


        </div>
        <!-- / Content -->

        <div class="content-backdrop fade"></div>
    </div>
@endsection
@section('script')
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
  <script src="assets/admin/vendor/libs/apex-charts/apexcharts.js"></script>
  <script src="assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

  <!-- Main JS -->
  <script src="assets/admin/js/main.js"></script>


  <!-- Page JS -->
  <script src="assets/admin/js/app-logistics-dashboard.js"></script>
  <script src="assets/admin/js/charts-apex.js"></script>

</body>


<!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-logistics-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 10:26:11 GMT -->

</html>

<!-- beautify ignore:end -->
@endsection
