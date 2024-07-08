@extends('templates.admin')

@section('title', 'Manage Blog')
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
                <div class="d-flex justify-content-between align-items-center p-3">
                    <h2 class="mb-0">Manage Blog</h2>
                    <a href="/add-blog" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="container mb-4">
                    <table id="example" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Gambar</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $blog->judul }}</td>
                                <td>{{ $blog->penulis }}</td>
                                <td><img src="{{ asset('storage/blog/gambar/' . $blog->gambar) }}" style="width:100px;">
                                </td>
                                <td>{{ $blog->tanggal }}</td>
                                <td>{{ $blog->kategori }}</td>
                                <td>{!! Str::limit(strip_tags($blog->deskripsi), 150) !!}</td>
                                <td class="" style="">
                                    <div class="d-inline-block text-nowrap">
                                        <a href="{{ route('blog.edit', $blog->id) }}"
                                            class="btn btn-sm btn-icon edit-portfolio"><i class="bx bx-edit"></i></a>
                                        <button class="btn btn-sm btn-icon delete-blog-button"
                                            data-id="{{ $blog->id }}"><i class="bx bx-trash"></i></button>
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
</div>
@endsection
