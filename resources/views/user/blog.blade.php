@extends('templates.user')

@section('title', "Blog")
@section('custom-css')
<style>
    .side {
        background-color: #e4e0ea;
    }
    .side .widget {
        margin-bottom: 20px;
    }
    .side .widget h4 {
        margin-bottom: 15px;
    }
    .side .widget a {
        color: #343a40;
        display: block;
        padding: 10px;
        border: 1px solid #000000;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>
@endsection

@section('attr-nav')
<!-- Start Attribute Navigation -->
<div class="attr-nav flex">
    <ul>
        <li class="search"><a href="#"><i class="fas fa-search"></i></a></li>
        <li class="side-menu">
            <a href="#">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
            </a>
        </li>
    </ul>
</div>
<!-- End Attribute Navigation -->
@endsection

@section('side-menu')
<!-- Start Side Menu -->
<div class="side">
    <a href="#" class="close-side"><i class="icon_close"></i></a>
    <div class="widget">
        <div class="logo">
            <img src="assets/user/img/logo-light.png" alt="Logo">
        </div>
    </div>

    <div class="widget">
        <a href="#" class="btn btn-light btn-block" onclick="filterBlogs('All')">All</a>
    </div>
    <div class="widget">
        <a href="#" class="btn btn-light btn-block" onclick="filterBlogs('Pendidikan')">Pendidikan</a>
    </div>
    <div class="widget">
        <a href="#" class="btn btn-light btn-block" onclick="filterBlogs('Konstruksi')">Konstruksi</a>
    </div>
</div>
<!-- End Side Menu -->

<script>
    function filterBlogs(category) {
        const blogs = document.querySelectorAll('.blog-style-one');
        blogs.forEach(blog => {
            const blogCategory = blog.querySelector('.meta ul li:nth-child(2)').textContent.trim();
            if (category === 'All' || blogCategory === category) {
                blog.parentElement.style.display = 'block';
            } else {
                blog.parentElement.style.display = 'none';
            }
        });
    }
</script>
@endsection

@section('content')
<!-- Start Blog
    ============================================= -->
<div class="blog-area blog-grid-colum default-padding">
    <div class="container">
        <div class="row">
            <!-- Single Item -->
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-50">
                <div class="blog-style-one">
                    <div class="thumb">
                        <a href="{{ route('blog.detail', $blog->slug) }}"><img src="{{asset('storage/blog/gambar/' . $blog->gambar)}}" alt="Image Not Found" style="width: 100%; height: auto; object-fit: cover; border-radius: 10px; aspect-ratio: 3 / 2;"></a>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>{{ $blog->penulis }}</li>
                                <li>{{ $blog->kategori }}</li>
                            </ul>
                        </div>
                        <h3 class="post-title"><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->judul }}</a></h3>
                        <a href="{{ route('blog.detail', $blog->slug) }}" class="button-regular">
                            Continue Reading <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Item -->
        </div>
        <!-- Pagination -->
        <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i class="fas fa-angle-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="blog-with-sidebar.html">1</a></li>
                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">2</a></li>
                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html">3</a></li>
                        <li class="page-item"><a class="page-link" href="blog-with-sidebar.html"><i class="fas fa-angle-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection
