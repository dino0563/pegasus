@extends('templates.admin')

@section('title', 'Dashboard')
@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">User Form</h5>
                <small class="text-muted float-end">Create a new User</small>
            </div>
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="name">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="email">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <div class="col-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter password (min. 6 characters)" required
                                    oninput="checkPasswordLength(this)">
                                <button type="button" class="btn btn-outline-secondary"
                                    onclick="togglePasswordVisibility(this, 'password')"><i
                                        class='bx bx-show-alt'></i></button>
                            </div>
                            <small class="text-muted">Minimum password: 6 characters</small>
                        </div>

                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="password">Profile Picture</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control dropify" data-max-file-size="10M"
                                data-allowed-file-extensions="png jpg jpeg" id="profile_photo" name="profile_photo"
                                required accept=".jpg, .jpeg, .png">

                            <small class="text-muted">Maximum file size: 10MB</small>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create User</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@push("admin_scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    document.getElementById('password').addEventListener('input', function() {
        if (this.value.length >= 6) {
            this.style.border = '2px solid green';
        } else {
            this.style.border = '2px solid red';
        }
    });

    document.getElementById('password').addEventListener('blur', function() {
        if (this.value.length < 6) {
            this.style.border = '2px solid red';
            alert('Password must be at least 6 characters long.');
        } else {
            this.style.border = '2px solid green';
        }
    });


    function togglePasswordVisibility(button, fieldId) {
        const field = document.getElementById(fieldId);
        if (field.getAttribute('type') === "password") {
            field.setAttribute('type', "text");
            button.innerHTML = "<i class='bx bx-hide'></i>";
        } else {
            field.setAttribute('type', "password");
            button.innerHTML = "<i class='bx bx-show-alt'></i>";
        }
    };


    $(document).ready(function(){
        $('.dropify').dropify();
    });

</script>
@endpush
