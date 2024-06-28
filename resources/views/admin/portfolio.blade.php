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
                            <th></th>
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



            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                aria-labelledby="offcanvasAddUserLabel">
                <div class="offcanvas-header">
                    <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Portfolio</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body mx-0 flex-grow-0">
                    <form class="add-new-portfolio pt-0" id="addNewPortfolioForm" onsubmit="return false">
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-name">Nama Portofolio</label>
                            <input type="text" class="form-control" id="add-portfolio-name"
                                placeholder="Nama Portofolio" name="nama_portofolio" aria-label="Nama Portofolio"
                                required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-image">Gambar Portofolio</label>
                            <div id="dropzone" class="dropzone">
                                <div class="dz-message">Drag & Drop your image here or click to upload</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-location">Lokasi</label>
                            <input type="text" id="add-portfolio-location" class="form-control" placeholder="Lokasi"
                                aria-label="Lokasi" name="lokasi" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-category">Kategori</label>
                            <select class="form-select" id="add-portfolio-category" aria-label="Kategori"
                                name="kategori" required>
                                <option value="">Pilih Kategori</option>
                                <option value="Konstruksi">Konstruksi</option>
                                <option value="Pendidikan">Pendidikan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-date">Tanggal Proyek</label>
                            <input type="date" id="add-portfolio-date" class="form-control"
                                placeholder="Tanggal Proyek" aria-label="Tanggal Proyek" name="tanggal_proyek" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="add-portfolio-client">Institusi Klien</label>
                            <input type="text" id="add-portfolio-client" class="form-control"
                                placeholder="Institusi Klien" aria-label="Institusi Klien" name="institusi_klien"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="add-portfolio-description" class="form-label">Deskripsi</label>
                            <div id="add-portfolio-description" class="form-control" style="height: 150px;"></div>
                        </div>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                        <button type="reset" class="btn btn-label-secondary"
                            data-bs-dismiss="offcanvas">Cancel</button>
                    </form>
                </div>
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
      <script>
      $(document).ready(function () {
    var dataTable = $(".datatables-portfolios").DataTable({
      responsive: true,
      dom: '<"row mx-2"<"col-md-2"<"me-3"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
      buttons: [
        {
          text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New Portofolio</span>',
          className: "add-new btn btn-primary ml-3",
          attr: {
            "data-bs-toggle": "offcanvas",
            "data-bs-target": "#offcanvasAddUser",
          },
        },
      ],
      columns: [
        { data: null },  // Corrected this line
        { data: "nama_portofolio" },
        { data: "gambar_portofolio" },
        { data: "lokasi" },
        { data: "kategori" },
        { data: "tanggal_proyek" },
        { data: "institusi_klien" },
        { data: "deskripsi" },
        { data: null }  // Corrected this line
      ],
      columnDefs: [
        {
          className: "control",
          searchable: false,
          orderable: false,
          responsivePriority: 2,
          targets: 0,
          render: function (data, type, row, meta) {
            return "";
          }
        },
        {
          targets: 1,
          responsivePriority: 4,
          render: function (data, type, row, meta) {
            return '<div class="d-flex align-items-center">' +
              '<span class="fw-medium">' + row.nama_portofolio + '</span>' +
              '</div>';
          }
        },
        {
          targets: 2,
          render: function (data, type, row, meta) {
            return '<img src="assets/admin/img/portofolio/' + row.gambar_portofolio + '" alt="Portfolio Image" class="img-thumbnail" style="max-width: 100px;">';
          }
        },
        {
          targets: 8,
          render: function (data, type, row, meta) {
            return '<div class="d-inline-block text-nowrap">' +
              '<button class="btn btn-sm btn-icon edit-portfolio" data-bs-toggle="modal" data-bs-target="#modalEditPortfolio"><i class="bx bx-edit"></i></button>' +
              '<button class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button>' +
              '</div>';
          }
        }
      ],
      data: [
        {
          nama_portofolio: "Portofolio 1",
          gambar_portofolio: "2.jpg",
          lokasi: "Jakarta",
          kategori: "Pendidikan",
          tanggal_proyek: "2023-01-01",
          institusi_klien: "Universitas X",
          deskripsi: "Deskripsi Portofolio 1",
          action: ''
        },
        {
          nama_portofolio: "Portofolio 2",
          gambar_portofolio: "1.jpg",
          lokasi: "Bandung",
          kategori: "Konstruksi",
          tanggal_proyek: "2023-02-15",
          institusi_klien: "Perusahaan Y",
          deskripsi: "Deskripsi Portofolio 2",
          action: ''
        }
      ]
    });
  
    // Event listener for edit button
    $('.datatables-portfolios').on('click', '.edit-portfolio', function () {
      var rowData = dataTable.row($(this).closest('tr')).data();
      $('#editPortfolioName').val(rowData.nama_portofolio);
      // Assuming you have an image upload feature, handle it here
      $('#editPortfolioImage').val(rowData.gambar_portofolio);
      $('#editPortfolioLocation').val(rowData.lokasi);
      $('#editPortfolioCategory').val(rowData.kategori).trigger('change');
      $('#editPortfolioDate').val(rowData.tanggal_proyek);
      $('#editPortfolioClient').val(rowData.institusi_klien);
      $('#editPortfolioDescription').val(rowData.deskripsi);
    });
  
    // Event listener for save button in modal
    $('#saveEditPortfolio').on('click', function () {
      var editedData = {
        nama_portofolio: $('#editPortfolioName').val(),
        gambar_portofolio: $('#editPortfolioImage').val(), // Handle image upload as needed
        lokasi: $('#editPortfolioLocation').val(),
        kategori: $('#editPortfolioCategory').val(),
        tanggal_proyek: $('#editPortfolioDate').val(),
        institusi_klien: $('#editPortfolioClient').val(),
        deskripsi: $('#editPortfolioDescription').val()
      };
  
      var rowIndex = dataTable.row('.edit-portfolio').index();
      dataTable.row(rowIndex).data(editedData).draw(false);
      $('#modalEditPortfolio').modal('hide');
  
      Swal.fire({
        icon: "success",
        title: "Portofolio berhasil diubah",
        customClass: { confirmButton: "btn btn-primary" },
        buttonsStyling: false,
      });
    });
  
    // Event listener for delete button
    $('.datatables-portfolios').on('click', '.delete-record', function () {
      var row = $(this).closest('tr');
      Swal.fire({
        title: "Anda yakin?",
        text: "Portofolio ini akan dihapus secara permanen.",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Ya, hapus!",
        cancelButtonText: "Batal",
        customClass: {
          confirmButton: "btn btn-primary me-3",
          cancelButton: "btn btn-label-secondary",
        },
        buttonsStyling: false,
      }).then((result) => {
        if (result.isConfirmed) {
          dataTable.row(row).remove().draw();
          Swal.fire(
            'Terhapus!',
            'Portofolio berhasil dihapus.',
            'success'
          );
        }
      });
    });
  });
  
        </script>
        
        
    </body>
  
    <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 10:23:43 GMT -->
  </html>
  
  <!-- beautify ignore:end -->
  
@endsection