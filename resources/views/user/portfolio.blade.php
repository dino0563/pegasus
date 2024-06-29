@extends('templates.user')

@section('title', "Portfolio")
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
<!-- Start Atribute Navigation -->
<div class="attr-nav flex">
    <ul>
        <li class="side-menu">
            <a href="#">
                <span class="bar-1"></span>
                <span class="bar-2"></span>
                <span class="bar-3"></span>
            </a>
        </li>
    </ul>
</div>
<!-- End Atribute Navigation -->
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
        <a href="#" class="btn btn-light btn-block">Show All</a>
    </div>
    <div class="widget">
        <a href="#" class="btn btn-light btn-block">Konstruksi</a>
    </div>
    <div class="widget">
        <a href="#" class="btn btn-light btn-block"> Pendidikan</a>
    </div>
</div>

</div>
<!-- End Side Menu -->
@endsection

@section('content')
<!-- Start Project
    ============================================= -->
<div class="project-style-one-area overflow-hidden default-padding">
    <div class="project-style-one-items">
        <div class="container-fill">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-center-stage-carousel swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Single Item -->
                            @foreach($portfolios as $portfolio)
                            <div class="swiper-slide">
                                <div class="project-style-one">
                                    <img src="{{asset('storage/portfolio/gambar/' . $portfolio->gambar)}}" alt="Thumb">
                                    <div class="overlay">
                                        <span>{{ $portfolio->kategori }}</span>
                                        {{-- <h4><a href="{{ route('portfolio.show', $portfolio->id) }}">{{ $portfolio->nama }}</a></h4> --}}
                                        <h4><a href="{{ route('portfolio.details', $portfolio->slug) }}">{{ $portfolio->nama }}</a></h4>
                                    </div>
                                    <div class="shape">
                                        <img src="assets/user/img/shape/10.png" alt="Image Not Found">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- End Single Item -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Project -->
@endsection
