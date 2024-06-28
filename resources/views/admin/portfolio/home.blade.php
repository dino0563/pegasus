@extends('templates.admin')

@section('title', 'Dashboard')

@section('content')
<div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive">
                <a href="/add-portfolio" class="btn btn-primary mt-3 ms-2">+ Tambah Data</a>
                <table id="example" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Gambar</th>
                            <th>Lokasi</th>
                            <th>Kategori</th>
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
                            <td><img src="{{asset('storage/portfolio/gambar/' . $portfolio->gambar)}}" alt="" srcset=""
                                    style="width: 100px;"></td>
                            <td>{{ $portfolio->lokasi }}</td>
                            <td>{{ $portfolio->kategori }}</td>
                            <td>{{ $portfolio->tanggalProyek }}</td>
                            <td>{{ $portfolio->client }}</td>
                            <td>{{ $portfolio->deskripsi }}</td>
                            <td class="" style="">
                                <div class="d-inline-block text-nowrap">
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-icon edit-portfolio"><i
                                            class="bx bx-edit"></i></a>
                                    <a href="{{ route('portfolio.delete', $portfolio->id) }}" class="btn btn-sm btn-icon delete-record"><i
                                            class="bx bx-trash"></i></a>
                                </div>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')


@endsection
