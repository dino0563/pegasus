@extends('templates.admin')

@section('title', 'Add New Portfolio')

@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Portfolio Form</h5> <small class="text-muted float-end">Create a new portfolio
                    item</small>
            </div>
            <div class="card-body">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data"
                    onsubmit="validateForm(event)" autocomplete="off">
                    @csrf
                    {{-- <input type="hidden" name="id" value="{{ $portfolio->id ?? '' }}"> --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name"
                                required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="gambar">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control dropify" data-max-file-size="10M"
                                data-allowed-file-extensions="png jpg jpeg" id="gambar" name="gambar" required
                                accept=".jpg, .jpeg, .png">
                            <small class="text-muted">Maximum file size: 10MB</small>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="lokasi">Lokasi</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lokasi" name="lokasi"
                                    placeholder="Enter location" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="kategori" name="kategori" required>
                                    <option value="Konstruksi">Konstruksi</option>
                                    <option value="Pendidikan">Pendidikan</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="tanggalProyek">Tanggal</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggalProyek" name="tanggalProyek" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="client">Client</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="client" name="client"
                                    placeholder="Enter client name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="myeditorinstance" name="deskripsi" placeholder="Enter description"
                                        style="height: 100px; resize: none;"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create Portfolio</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush
