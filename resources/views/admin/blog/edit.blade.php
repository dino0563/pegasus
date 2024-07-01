@extends('templates.admin')

@section('title', 'Edit Blog')
@push('admin_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">

@endpush
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
                    @csrf
                    @method('POST')
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
                            <input type="file" class="form-control dropify" id="gambar" name="gambar" accept=".jpg, .jpeg, .png">
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
                        <label class="col-sm-2 col-form-label" for="tanggal">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $blog->tanggal) }}" required>
                            @if ($errors->has('tanggal'))
                                <div class="text-danger">{{ $errors->first('tanggal') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="kategori">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="kategori" name="kategori" required>
                                <option value="Konstruksi" {{ old('kategori', $blog->kategori) == 'Konstruksi' ? 'selected' : '' }}>Konstruksi</option>
                                <option value="Pendidikan" {{ old('kategori', $blog->kategori) == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                            </select>
                            @if ($errors->has('kategori'))
                                <div class="text-danger">{{ $errors->first('kategori') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="myeditorinstance" name="deskripsi" placeholder="Enter description" oninput="this.style.height = 'auto'; this.style.height = this.scrollHeight + 'px';">{{ old('deskripsi', $blog->deskripsi) }}</textarea>
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

@push('admin_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
</script>
@endpush
