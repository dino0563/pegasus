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
            <div class="card">
                <div class="card-datatable table-responsive">
                    <a href="/add-blog" class="btn btn-primary mt-3 ms-2">+ Tambah Data</a>
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Tanggal</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $blog->judul }}</td>
                                    <td><img src="{{ asset('storage/blog/gambar/' . $blog->gambar) }}" style="width:100px;">
                                    </td>
                                    <td>{{ $blog->tanggal }}</td>
                                    <td>{{ $blog->deskripsi }}</td>
                                    <td class="" style="">
                                        <div class="d-inline-block text-nowrap">
                                            <a href="{{ route('blog.edit', $blog->id) }}"
                                                class="btn btn-sm btn-icon edit-portfolio"><i class="bx bx-edit"></i></a>
                                            <a href="{{ route('blog.delete', $blog->id) }}"
                                                class="btn btn-sm btn-icon delete-record"><i class="bx bx-trash"></i></a>
                                        </div>
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
