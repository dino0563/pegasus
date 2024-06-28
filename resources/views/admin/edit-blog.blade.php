@extends('templates.admin')

@section('title', 'Edit Blog')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Blog Form</h5>
                <small class="text-muted float-end">Edit a Blog item</small>
            </div>
            <div class="card-body">
                <form action="{{ route('blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf_field
                <input type="hidden" name="id" value="{{ $blog->id }}">

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="judul">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter name" value="{{ old('judul', $blog->judul) }}" required>
                            @if ($errors->has('judul'))
                                <div class="text-danger">{{ $errors->first('judul') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="gambar">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar" accept=".jpg, .jpeg, .png">
                            @if ($errors->has('gambar'))
                                <div class="text-danger">{{ $errors->first('gambar') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="penulis">Penulis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penulis" name="penulis" placeholder="Enter location" value="{{ old('penulis', $blog->penulis) }}" required>
                            @if ($errors->has('penulis'))
                                <div class="text-danger">{{ $errors->first('penulis') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="tanggalProyek">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggalProyek" name="tanggalProyek" value="{{ old('tanggalProyek', $blog->tanggalProyek) }}" required>
                            @if ($errors->has('tanggalProyek'))
                                <div class="text-danger">{{ $errors->first('tanggalProyek') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="Enter deskripsi name" value="{{ old('deskripsi', $blog->deskripsi) }}" required>
                            @if ($errors->has('deskripsi'))
                                <div class="text-danger">{{ $errors->first('deskripsi') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update Blog</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<!-- Add your custom scripts if any -->
@endsection
