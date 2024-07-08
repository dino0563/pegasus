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
        border: 2px solid #0A1F44;
        background-color: white;
        cursor: pointer;
        transition: background 0.3s, color 0.3s;
    }

    .filter-button:hover {
        background-color: #6A00FF;
        color: white;
    }

    .filter-button.active {
        background-color: #0A1F44;
        color: white;
    }
</style>
@endsection

@section('content')

<div class="filter-bar" style="padding-top: 30px;">
    <button class="filter-button active" data-filter="all">All</button>
    <button class="filter-button" data-filter="Company Profile">Company Profile</button>
    <button class="filter-button" data-filter="E-Commerce">E-Commerce</button>
    <button class="filter-button" data-filter="ERP">ERP</button>
    <button class="filter-button" data-filter="Point Of Sale">Point Of Sale</button>
    <button class="filter-button" data-filter="E-Learning">E-Learning</button>
    <button class="filter-button" data-filter="Digital Marketing">Digital Marketing</button>
    <button class="filter-button" data-filter="E-Payment">E-Payment</button>
    <button class="filter-button" data-filter="Accounting">Accounting</button>
</div>

<!-- Start Blog -->
<div class="blog-area blog-grid-colum" style="padding: 15px">
    <div class="container">
        <div class="row">
            <!-- Single Item -->
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-50 blog-item" data-category="{{ $blog->kategori }}">
                <div class="blog-style-one">
                    <div class="thumb">
                        <a href="{{ route('blog.detail', $blog->slug) }}"><img
                                src="{{asset('storage/blog/gambar/' . $blog->gambar)}}" alt="Image Not Found"
                                style="width: 100%; height: auto; object-fit: cover; border-radius: 10px; aspect-ratio: 3 / 2;"></a>
                    </div>
                    <div class="info">
                        <div class="meta">
                            <ul>
                                <li>{{ $blog->penulis }}</li>
                                <li>{{ $blog->kategori }}</li>
                            </ul>
                        </div>
                        <h3 class="post-title"><a href="{{ route('blog.detail', $blog->slug) }}">{{ $blog->judul }}</a>
                        </h3>
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
        {{-- <div class="row">
            <div class="col-md-12 pagi-area text-center">
                <nav aria-label="navigation">
                    {{ $blogs->links() }}
                </nav>
            </div>
        </div> --}}
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
            var filter = $(this).data('filter').toLowerCase();

            if (filter === 'all') {
                $('.blog-item').show();
            } else {
                $('.blog-item').hide();
                $('.blog-item').each(function() {
                    var category = $(this).data('category').toLowerCase();
                    if (category === filter) {
                        $(this).show();
                    }
                });
            }
        });
    });
</script>
@endpush
