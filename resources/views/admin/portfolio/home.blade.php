@extends('templates.admin')

@section('title', 'Dashboard')

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
                    @foreach($portfolios as $portfolio)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $portfolio->nama}}</td>
                            <td><img src="{{ $portfolio->gambar }}" alt=""></td>
                            <td>{{ $portfolio->lokasi }}</td>
                            <td>{{ $portfolio->kategori }}</td>
                            <td>{{ $portfolio->tanggalProyek }}</td>
                            <td>{{ $portfolio->client }}</td>
                            <td>{{ $portfolio->deskripsi }}</td>
                            <td>
                                <!-- action buttons here -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>



<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
<div class="offcanvas-header">
<h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add Portfolio</h5>
<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>
<div class="offcanvas-body mx-0 flex-grow-0">
<form class="add-new-portfolio pt-0" id="addNewPortfolioForm" onsubmit="return false">
<div class="mb-3">
  <label class="form-label" for="add-portfolio-name">Nama Portofolio</label>
  <input type="text" class="form-control" id="add-portfolio-name" placeholder="Nama Portofolio" name="nama_portofolio" aria-label="Nama Portofolio" required>
</div>
<div class="mb-3">
  <label class="form-label" for="add-portfolio-image">Gambar Portofolio</label>
  <div id="dropzone" class="dropzone">
    <div class="dz-message">Drag & Drop your image here or click to upload</div>
  </div>
</div>
<div class="mb-3">
  <label class="form-label" for="add-portfolio-location">Lokasi</label>
  <input type="text" id="add-portfolio-location" class="form-control" placeholder="Lokasi" aria-label="Lokasi" name="lokasi" required>
</div>
<div class="mb-3">
  <label class="form-label" for="add-portfolio-category">Kategori</label>
  <select class="form-select" id="add-portfolio-category" aria-label="Kategori" name="kategori" required>
    <option value="">Pilih Kategori</option>
    <option value="Konstruksi">Konstruksi</option>
    <option value="Pendidikan">Pendidikan</option>
  </select>
</div>
<div class="mb-3">
  <label class="form-label" for="add-portfolio-date">Tanggal Proyek</label>
  <input type="date" id="add-portfolio-date" class="form-control" placeholder="Tanggal Proyek" aria-label="Tanggal Proyek" name="tanggal_proyek" required>
</div>
<div class="mb-3">
  <label class="form-label" for="add-portfolio-client">Institusi Klien</label>
  <input type="text" id="add-portfolio-client" class="form-control" placeholder="Institusi Klien" aria-label="Institusi Klien" name="institusi_klien" required>
</div>
<div class="mb-3">
  <label for="add-portfolio-description" class="form-label">Deskripsi</label>
  <div id="add-portfolio-description" class="form-control" style="height: 150px;"></div>
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
