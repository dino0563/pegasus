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
                    <table class="datatables-users table border-top">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>

                <!-- Offcanvas to add new user -->
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser"
                    aria-labelledby="offcanvasAddUserLabel">
                    <div class="offcanvas-header">
                        <h5 id="offcanvasAddUserLabel" class="offcanvas-title">
                            Add User
                        </h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body mx-0 flex-grow-0">
                        <form class="add-new-user pt-0" id="addNewUserForm" onsubmit="return false">
                            <div class="mb-3">
                                <label class="form-label" for="add-user-fullname">Username</label>
                                <input type="text" class="form-control" id="add-user-fullname" placeholder="Username"
                                    name="username" aria-label="username" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="add-user-fullname">Email</label>
                                <input type="email" class="form-control" id="add-user-fullname" placeholder="Email"
                                    name="email" aria-label="email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="add-user-email">Profile</label>
                                <input type="file" id="add-user-email" class="form-control" name="profile" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="add-user-role">Role</label>
                                <select id="add-user-role" class="form-select" name="role" aria-label="Role">
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">
                                Cancel
                            </button>
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
    <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalCenterTitle">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUserForm">
                        <div class="row">
                            <div class="col mb-3">
                                <label for="editUserProfile" class="form-label">Profile</label>
                                <input type="file" id="editUserProfile" class="form-control" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="editUserName" class="form-label">Full Name</label>
                                <input type="text" id="editUserName" class="form-control"
                                    placeholder="Enter Full Name" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="editUserEmail" class="form-label">Email</label>
                                <input type="email" id="editUserEmail" class="form-control" placeholder="xxxx@xxx.xx" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label for="editUserRole" class="form-label">Role</label>
                                <select id="editUserRole" class="form-control">
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Editor">Editor</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                    <button type="button" class="btn btn-primary" id="saveEditUser">
                        Save
                    </button>
                </div>
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

    <!-- Main JS -->
    <script src="assets/admin/js/main.js"></script>

    <!-- Page JS -->
    <!-- <script src="../../assets/js/app-user-list.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.5/dist/sweetalert2.all.min.js"></script>
    <script>
        $(document).ready(function() {
            var e,
                s = $(".datatables-users"),
                o = $(".select2"),
                r = "app-user-view-account.html";

            if (o.length) {
                o.wrap('<div class="position-relative"></div>').select2({
                    placeholder: "Select Country",
                    dropdownParent: o.parent(),
                });
            }

            if (s.length) {
                e = s.DataTable({
                    dom: '<"row mx-2"<"col-md-2"<"me-3"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    buttons: [{
                        text: '<i class="bx bx-plus me-0 me-sm-1"></i><span class="d-none d-sm-inline-block">Add New User</span>',
                        className: "add-new btn btn-primary ml-3",
                        attr: {
                            "data-bs-toggle": "offcanvas",
                            "data-bs-target": "#offcanvasAddUser",
                        },
                    }, ],
                    columns: [{
                            data: ""
                        },
                        {
                            data: "full_name"
                        },
                        {
                            data: "role"
                        },
                        {
                            data: "action"
                        },
                    ],
                    columnDefs: [{
                            className: "control",
                            searchable: false,
                            orderable: false,
                            responsivePriority: 2,
                            targets: 0,
                            render: function(e, t, a, n) {
                                return "";
                            },
                        },
                        {
                            targets: 1,
                            responsivePriority: 4,
                            render: function(e, t, a, n) {
                                var s = a.full_name,
                                    o = a.email,
                                    l = a.avatar;
                                return (
                                    '<div class="d-flex justify-content-start align-items-center user-name"><div class="avatar-wrapper"><div class="avatar avatar-sm me-3">' +
                                    (l ?
                                        '<img src="' +
                                        "assets/admin/img/avatars/" +
                                        l +
                                        '" alt="Avatar" class="rounded-circle">' :
                                        '<span class="avatar-initial rounded-circle bg-label-' +
                                        [
                                            "success",
                                            "danger",
                                            "warning",
                                            "info",
                                            "dark",
                                            "primary",
                                            "secondary",
                                        ][Math.floor(6 * Math.random())] +
                                        '">' +
                                        (l = (
                                            ((l = (s = a.full_name).match(/\b\w/g) || [])
                                                .shift() ||
                                                "") + (l.pop() || "")
                                        ).toUpperCase()) +
                                        "</span>") +
                                    '</div></div><div class="d-flex flex-column"><a href="' +
                                    r +
                                    '" class="text-body text-truncate"><span class="fw-medium">' +
                                    s +
                                    '</span></a><small class="text-muted">' +
                                    o +
                                    "</small></div></div>"
                                );
                            },
                        },
                        {
                            targets: 3,
                            render: function(e, t, a, n) {
                                return (
                                    '<div class="d-inline-block text-nowrap">' +
                                    '<button class="btn btn-sm btn-icon edit-user" data-bs-toggle="modal" data-bs-target="#modalCenter"><i class="bx bx-edit"></i></button>' +
                                    '<button class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></button>' +
                                    '<button class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown"></button>' +
                                    "</div>"
                                );
                            },
                        },
                    ],
                    data: [{
                            avatar: "1.png",
                            full_name: "John Doe",
                            email: "john.doe@example.com",
                            role: "Admin",
                            action: "",
                        },
                        {
                            avatar: "2.png",
                            full_name: "Jane Doe",
                            email: "jane.doe@example.com",
                            role: "User",
                            action: "",
                        },
                        {
                            avatar: "3.png",
                            full_name: "Jeno Doe",
                            email: "Jeno.doe@example.com",
                            role: "User",
                            action: "",
                        },
                        {
                            avatar: "4.png",
                            full_name: "Jay Doe",
                            email: "Jay.doe@example.com",
                            role: "Editing",
                            action: "",
                        },
                        {
                            avatar: "5.png",
                            full_name: "Jack Doe",
                            email: "Jack.doe@example.com",
                            role: "User",
                            action: "",
                        },
                    ],
                });

                // Event listener for edit button
                s.on("click", ".edit-user", function() {
                    var rowData = e.row($(this).closest("tr")).data();
                    $("#editUserName").val(rowData.full_name);
                    $("#editUserEmail").val(rowData.email);
                    $("#editUserRole").val(rowData.role);
                    // Handle profile picture upload as needed
                });

                // Event listener for save button in modal
                $("#saveEditUser").on("click", function() {
                    var editedData = {
                        full_name: $("#editUserName").val(),
                        email: $("#editUserEmail").val(),
                        role: $("#editUserRole").val(),
                        // Handle profile picture upload as needed
                    };
                    var rowIndex = e.row(".edit-user").index();
                    e.row(rowIndex).data(editedData).draw(false);
                    $("#modalCenter").modal("hide");
                    Swal.fire({
                        icon: "success",
                        title: "The user has been successfully edited",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        },
                        buttonsStyling: false,
                    });
                });

                // Event listener for delete button
                s.on("click", ".delete-record", function() {
                    var row = $(this).closest("tr");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        customClass: {
                            confirmButton: "btn btn-primary me-3",
                            cancelButton: "btn btn-label-secondary",
                        },
                        buttonsStyling: false,
                    }).then((result) => {
                        if (result.isConfirmed) {
                            e.row(row).remove().draw();
                            Swal.fire("Deleted!", "The user has been deleted.", "success");
                        }
                    });
                });
            }
        });
    </script>

    </body>

    <!-- Mirrored from demos.themeselection.com/sneat-bootstrap-html-admin-template/html/vertical-menu-template/app-user-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Jun 2024 10:23:43 GMT -->

    </html>

    <!-- beautify ignore:end -->
@endsection
