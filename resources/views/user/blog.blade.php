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

    .filter-bar {
        display: flex;
        gap: 10px;
        align-items: center;
        justify-content: center;
        padding: 10px;
    }

    .filter-button {
        border: 1px solid transparent;
        border-radius: 20px;
        padding: 5px 15px;
        color: #0A1F44;
        /* Right color for inactive text */
        border: 2px solid #0A1F44;
        /* Right color for inactive border */
        background-color: white;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
    }

    .filter-button:hover {
        background-color: #6A00FF;
        /* Left color for hover background */
        color: white;
    }

    .filter-button.active {
        background-color: #0A1F44;
        /* Right color for selected background */
        color: white;
    }
</style>
@endsection

{{-- @section('attr-nav')
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
@endsection --}}

{{-- @section('side-menu')
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
@endsection --}}

@section('content')

<div class="filter-bar" style="padding-top: 30px;">
    <button class="filter-button active" data-filter="all">All</button>
    <button class="filter-button" data-filter="company-profile">Company Profile</button>
    <button class="filter-button" data-filter="e-commerce">E-Commerce</button>
    <button class="filter-button" data-filter="erp">ERP</button>
    <button class="filter-button" data-filter="pos">Point Of Sale</button>
    <button class="filter-button" data-filter="e-learning">E-Learning</button>
    <button class="filter-button" data-filter="digital-marketing">Digital Marketing</button>
    <button class="filter-button" data-filter="e-payment">E-Payment</button>
    <button class="filter-button" data-filter="accounting">Accounting</button>
</div>



<!-- Start Blog
    ============================================= -->
<div class="blog-area blog-grid-colum" style="padding: 15px">
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
                        <p>{!! Str::limit($blog->deskripsi, 100) !!}</p>
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
                        @if(method_exists($blogs, 'links'))
                            @foreach($blogs->links() as $link)
                                @if($loop->first)
                                    <li class="page-item"><a class="page-link" href="{{ $link->url }}" rel="prev"><i class="fas fa-angle-left"></i></a></li>
                                @endif
                                @if($loop->iteration % 12 == 0)
                                    <li class="page-item"><a class="page-link" href="{{ $link->url }}">{{ $loop->iteration / 12 + 1 }}</a></li>
                                @endif
                                @if($loop->last)
                                    <li class="page-item"><a class="page-link" href="{{ $link->url }}" rel="next"><i class="fas fa-angle-right"></i></a></li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Blog -->
@endsection

@push('user_script')
<script>
    $(document).ready(function() {
        $('.filter-button').click(function() {
            $('.filter-button').removeClass('active');
            $(this).addClass('active');
            var filter = $(this).data('filter');
            // Implement your filter logic here
            console.log("Selected filter: " + filter);
        });
    });
</script>
@endpush
