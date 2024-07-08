@extends('templates.admin')

@section('title', 'Edit Portfolio')

@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
@endpush

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Portfolio Form</h5>
                <small class="text-muted float-end">Edit a portfolio item</small>
            </div>
            <div class="card-body">
                <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="id" value="{{ $portfolio->id }}">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nama">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter name"
                                value="{{ old('nama', $portfolio->nama) }}" required>
                            @if ($errors->has('nama'))
                            <div class="text-danger">{{ $errors->first('nama') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="gambar">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control dropify" data-max-file-size="3M"
                                data-allowed-file-extensions="png jpg jpeg" id="gambar" name="gambar"
                                accept=".jpg, .jpeg, .png">
                            @if ($errors->has('gambar'))
                            <div class="text-danger">{{ $errors->first('gambar') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="lokasi">Lokasi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="lokasi" name="lokasi"
                                placeholder="Enter location" value="{{ old('lokasi', $portfolio->lokasi) }}" required>
                            @if ($errors->has('lokasi'))
                            <div class="text-danger">{{ $errors->first('lokasi') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="Company Profile" {{ old('kategori', $portfolio->kategori) == 'Company Profile' ?
                                    'selected' : '' }}>Company Profile</option>
                                <option value="E-Commerce" {{ old('kategori', $portfolio->kategori) == 'E-Commerce' ?
                                    'selected' : '' }}>E-Commerce</option>
                                <option value="ERP" {{ old('kategori', $portfolio->kategori) == 'ERP' ?
                                    'selected' : '' }}>ERP</option>
                                <option value="Point Of Sale" {{ old('kategori', $portfolio->kategori) == 'Point Of Sale' ?
                                    'selected' : '' }}>Point Of Sale</option>
                                <option value="E-Learning" {{ old('kategori', $portfolio->kategori) == 'E-Learning' ?
                                    'selected' : '' }}>E-Learning</option>
                                <option value="Digital Marketing" {{ old('kategori', $portfolio->kategori) == 'Digital Marketing' ?
                                    'selected' : '' }}>Digital Marketing</option>
                                <option value="E-Payment" {{ old('kategori', $portfolio->kategori) == 'E-Payment' ?
                                    'selected' : '' }}>E-Payment</option>
                                <option value="Accounting" {{ old('kategori', $portfolio->kategori) == 'Accounting' ?
                                    'selected' : '' }}>Accounting</option>
                            </select>
                            @if ($errors->has('kategori'))
                            <div class="text-danger">{{ $errors->first('kategori') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tanggalProyek">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggalProyek" name="tanggalProyek"
                                value="{{ old('tanggalProyek', $portfolio->tanggalProyek) }}" required>
                            @if ($errors->has('tanggalProyek'))
                            <div class="text-danger">{{ $errors->first('tanggalProyek') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="client">Client</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="client" name="client"
                                placeholder="Enter client name" value="{{ old('client', $portfolio->client) }}"
                                required>
                            @if ($errors->has('client'))
                            <div class="text-danger">{{ $errors->first('client') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10 position-relative">
                            <textarea class="form-control" id="myeditorinstance" name="deskripsi"
                                placeholder="Enter description"
                                style="height: 100px; resize: none;">{{ old('deskripsi', $portfolio->deskripsi) }}</textarea>
                            @if ($errors->has('deskripsi'))
                            <div class="text-danger">{{ $errors->first('deskripsi') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Portfolio</button>
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
