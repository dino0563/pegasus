@extends('templates.admin')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive">
                <button class="btn btn-primary mt-3 ms-2">+ Tambah Data</button>
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Tanggal Proyek</th>
                            <th>Client</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($portfolios as $portfolio)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $portfolio->nama }}</td>
                                <td>{{ $portfolio->gambar }}</td>
                                <td>{{ $portfolio->lokasi }}</td>
                                <td>{{ $portfolio->tanggalProyek }}</td>
                                <td>{{ $portfolio->client }}</td>
                                <td>{{ $portfolio->deskripsi }}</td>
                                <td>
                                    <!-- Action buttons go here -->
                                    <button class="btn btn-sm btn-info">Edit</button>
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
@endsection

@section('script')


@endsection
