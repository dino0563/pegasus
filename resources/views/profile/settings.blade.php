@extends('templates.admin')

@section('title', 'Dashboard')
@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

@endpush
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
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4">
                <span class="text-muted fw-light">Account Settings /</span> Account
            </h4>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <h5 class="card-header">Profile Details</h5>
                        <div class="card-body">
                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                <img src="{{ asset('storage/users/images/' . $user->profile_photo) }}" alt="user-avatar"
                                    class="d-block rounded" height="100" width="100" id="uploadedAvatar" />
                                <div class="button-wrapper">
                                    <form action="{{ route('profile.photo') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <label for="gambar">
                                            <input type="file" class="form-control me-2 mb-2 dropify" id="gambar"
                                                name="photo" data-max-file-size="10M"
                                                data-allowed-file-extensions="png jpg jpeg" required accept=".jpg, .jpeg, .png, .gif">
                                        </label>
                                        <p class="text-muted mb-2">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                        @if ($errors->has('photo'))
                                            <div class="text-danger">{{ $errors->first('photo') }}</div>
                                        @endif
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <hr class="my-0">
                        <div class="card-body">
                            <form action="{{ route('profile.updatee') }}" method="POST">
                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label for="Name" class="form-label">Name</label>
                                        <input class="form-control" type="text" id="name" name="name"
                                            value="{{ old('name', $user->name) }}" required />
                                        @if ($errors->has('name'))
                                            <div class="text-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input class="form-control" type="email" id="email" name="email"
                                            value="{{ old('email', $user->email) }}" required />
                                        @if ($errors->has('email'))
                                            <div class="text-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="mt-2">
                                    <button type="submit" class="btn btn-primary me-2">Save changes</button>
                                    <a href="{{ route('dashboard') }}" class="btn btn-label-secondary">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection
@push('admin_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush