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
          <table class="datatables-blogs table border-top">
            <thead>
              <tr>
                <th></th>
                <th>Judul</th>
                <th>Gambar Blog</th>
                <th>Penulis</th>
                <th>Tanggal</th>
                <th>Deskripsi</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>

          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Blog</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body mx-0 flex-grow-0">
                <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                    <div class="mb-3">
                        <label class="form-label" for="add-user-fullname">Judul</label>
                        <input type="text" class="form-control" id="add-user-fullname" placeholder="Judul Blog" name="Judul Blog" aria-label="Judul Blog" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-email">Gambar Blog</label>
                        <div id="dropzone" class="dropzone">
                            <div class="dz-message">Drag & Drop your image here or click to upload</div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-contact">Penulis</label>
                        <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="John Doe" aria-label="John Doe" name="penulis" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add-user-company">Tanggal</label>
                        <input type="date" id="add-user-company" class="form-control" placeholder="Tanggal" aria-label="tanggal" name="tanggal" />
                    </div>
                    <!-- Description -->
                    <div class="mb-3">
                      <label for="editBlogDescription" class="form-label">Deskripsi</label>
                      <div id="editBlogDescription" class="form-control" style="height: 150px;"></div>
                  </div>
                    <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
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
  <div class="modal fade" id="modalEditBlog" tabindex="-1" aria-labelledby="editBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editBlogForm">
                <div class="modal-header">
                    <h5 class="modal-title" id="editBlogModalLabel">Edit Blog</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editBlogTitle" class="form-label">Judul Blog</label>
                        <input type="text" class="form-control" id="editBlogTitle" name="editBlogTitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="editBlogAuthor" class="form-label">Penulis</label>
                        <input type="text" class="form-control" id="editBlogAuthor" name="editBlogAuthor" required>
                    </div>
                    <div class="mb-3">
                        <label for="editBlogDate" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="editBlogDate" name="editBlogDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="editBlogDescription" class="form-label">Deskripsi</label>
                        <textarea id="editBlogDescription" class="form-control" style="height: 150px;"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
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

  <!-- Vendors JS -->
  <script src="assets/admin/vendor/libs/moment/moment.js"></script>
  <script src="assets/admin/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
  <script src="assets/admin/vendor/libs/select2/select2.js"></script>
  <script src="assets/admin/vendor/libs/%40form-validation/popular.js"></script>
  <script src="assets/admin/vendor/libs/%40form-validation/bootstrap5.js"></script>
  <script src="assets/admin/vendor/libs/%40form-validation/auto-focus.js"></script>
  <script src="assets/admin/vendor/libs/cleavejs/cleave.js"></script>
  <script src="assets/admin/vendor/libs/cleavejs/cleave-phone.js"></script>
  <script src="assets/admin/vendor/libs/quill/katex.js"></script>
  <script src="assets/admin/vendor/libs/quill/quill.js"></script>

  <!-- Main JS -->
  <script src="assets/admin/js/main.js"></script>

  <!-- dropzone -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.js"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

  <!-- Page JS -->
  <!-- <script src="assets/admin/js/app-user-list.js"></script> -->

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>

  <script>
    $(document).ready(function () {
      var dataTable = $(".datatables-blogs").DataTable({
        dom:
          '<"row mx-2"<"col-md-2"<"me-3"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        buttons: [
          {
            text:
              '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New Blog</span>',
            className: "add-new btn btn-primary ml-3",
            attr: {
              "data-bs-toggle": "offcanvas",
              "data-bs-target": "#offcanvasAddUser",
            },
          },
        ],
        columns: [
          { data: "" },
          { data: "judul_blog" },
          { data: "gambar_blog" },
          { data: "penulis" },
          { data: "tanggal" },
          { data: "deskripsi" },
          { data: "action" },
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
            },
          },
          {
            targets: 1,
            responsivePriority: 4,
            render: function (data, type, row, meta) {
              return (
                '<div class="d-flex align-items-center">' +
                '<span class="fw-medium">' +
                row.judul_blog +
                "</span>" +
                "</div>"
              );
            },
          },
          {
            targets: 2,
            render: function (data, type, row, meta) {
              return (
                '<img src="assets/admin/img/blog/' +
                row.gambar_blog +
                '" alt="Blog Image" class="img-thumbnail" style="max-width: 100px;">'
              );
            },
          },
          {
            targets: 6,
            render: function (data, type, row, meta) {
              return (
                '<div class="d-inline-block text-nowrap">' +
                '<button class="btn btn-sm btn-icon edit-blog" data-bs-toggle="modal" data-bs-target="#modalEditBlog"><i class="bx bx-edit"></i></button>' +
                '<button class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button>' +
                "</div>"
              );
            },
          },
        ],
        data: [
          {
            judul_blog: "Judul Blog 1",
            gambar_blog: "1.jpg",
            penulis: "John Doe",
            tanggal: "2023-01-01",
            deskripsi: "Deskripsi Blog 1",
            action: "",
          },
          {
            judul_blog: "Judul Blog 2",
            gambar_blog: "2.jpg",
            penulis: "Jane Doe",
            tanggal: "2023-02-15",
            deskripsi: "Deskripsi Blog 2",
            action: "",
          },
        ],
      });

      // Event listener for edit button
      $(".datatables-blogs").on("click", ".edit-blog", function () {
        var rowData = dataTable.row($(this).closest("tr")).data();
        $('#editBlogTitle').val(rowData.judul_blog);
        $('#editBlogAuthor').val(rowData.penulis);
        $('#editBlogDate').val(rowData.tanggal);
        $('#editBlogDescription').val(rowData.deskripsi);
      });

      // Submit form handler for save button in modal
      $("#editBlogForm").submit(function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        // You can add more validation if needed
        var editedData = {
          judul_blog: formData.get("editBlogTitle"),
          gambar_blog: "", // Handle image upload if needed
          penulis: formData.get("editBlogAuthor"),
          tanggal: formData.get("editBlogDate"),
          deskripsi: formData.get("editBlogDescription"),
        };

        var rowIndex = dataTable.row(".edit-blog").index();
        dataTable.row(rowIndex).data(editedData).draw(false);
        $("#modalEditBlog").modal("hide");

        Swal.fire({
          icon: "success",
          title: "Blog berhasil diubah",
          customClass: { confirmButton: "btn btn-primary" },
          buttonsStyling: false,
        });

        // Clear the form after submission if needed
        $("#editBlogForm").trigger("reset");
      });

      // Event listener for delete button
      $(".datatables-blogs").on("click", ".delete-record", function () {
        var row = $(this).closest("tr");
        Swal.fire({
          title: "Anda yakin?",
          text: "Blog ini akan dihapus secara permanen.",
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
            Swal.fire("Terhapus!", "Blog berhasil dihapus.", "success");
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