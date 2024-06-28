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
        <!-- Users List Table -->
        <div class="card">
            <div class="card-datatable table-responsive">
                <table class="datatables-portfolios table border-top">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Portofolio</th>
                            <th>Gambar Portofolio</th>
                            <th>Lokasi</th>
                            <th>Kategori</th>
                            <th>Tanggal Proyek</th>
                            <th>Institusi Klien</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>



        </div>
    </div>
    <!-- / Content -->

    <div class="content-backdrop fade"></div>
</div>
@endsection
@section('script')
<div class="modal fade" id="modalEditPortfolio" tabindex="-1" aria-labelledby="modalEditPortfolioTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditPortfolioTitle">Edit Portfolio</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form id="editPortfolioForm">
          <div class="modal-body">
            <div class="mb-3">
              <label for="editPortfolioName" class="form-label">Nama Portofolio</label>
              <input type="text" class="form-control" id="editPortfolioName" name="editPortfolioName" placeholder="Masukkan nama portofolio">
            </div>
            <div class="mb-3">
              <label class="form-label" for="add-portfolio-image">Gambar Portofolio</label>
              <div id="dropzone" class="dropzone">
                <div class="dz-message">Drag & Drop your image here or click to upload</div>
              </div>
            </div>
            <div class="mb-3">
              <label for="editPortfolioLocation" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="editPortfolioLocation" name="editPortfolioLocation" placeholder="Masukkan lokasi">
            </div>
            <div class="mb-3">
              <label for="editPortfolioCategory" class="form-label">Kategori</label>
              <select class="form-select" id="editPortfolioCategory" name="editPortfolioCategory">
                <option value="Konstruksi">Konstruksi</option>
                <option value="Pendidikan">Pendidikan</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="editPortfolioDate" class="form-label">Tanggal Proyek</label>
              <input type="date" class="form-control" id="editPortfolioDate" name="editPortfolioDate">
            </div>
            <div class="mb-3">
              <label for="editPortfolioClient" class="form-label">Institusi Klien</label>
              <input type="text" class="form-control" id="editPortfolioClient" name="editPortfolioClient" placeholder="Masukkan institusi klien">
            </div>
            <div class="mb-3">
              <label for="editPortfolioDescription" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="editPortfolioDescription" name="editPortfolioDescription" rows="3" placeholder="Masukkan deskripsi portofolio"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>


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

      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

          <!-- dropzone -->
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
          <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
          <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

      <!-- Vendors JS -->
      <script src="assets/admin/vendor/libs/moment/moment.js"></script>
      <script src="assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
      <script src="assets/admin/vendor/libs/select2/select2.js"></script>
      <script src="assets/admin/vendor/libs/%40form-validation/popular.js"></script>
      <script src="assets/admin/vendor/libs/%40form-validation/bootstrap5.js"></script>
      <script src="assets/admin/vendor/libs/%40form-validation/auto-focus.js"></script>
      <script src="assets/admin/vendor/libs/cleavejs/cleave.js"></script>
      <script src="assets/admin/vendor/libs/cleavejs/cleave-phone.js"></script>

      <!-- Main JS -->
      <script src="assets/admin/js/main.js"></script>

      <!-- Page JS -->
      <!-- <script src="assets/admin/js/app-user-list.js"></script> -->

      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
      


    </body>

    <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 10:23:43 GMT -->
  </html>

  <!-- beautify ignore:end -->

@endsection
