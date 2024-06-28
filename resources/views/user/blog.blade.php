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
<!-- Start Atribute Navigation -->
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
        <a href="#" class="btn btn-light btn-block">Pendidikan</a>
    </div>
    <div class="widget">
        <a href="#" class="btn btn-light btn-block">Konstruksi</a>
    </div>


</div>
<!-- End Side Menu -->
@endsection



@section('content')
<!-- Start Blog
    ============================================= -->
    <div class="blog-area blog-grid-colum default-padding">
        <div class="container">
            <div class="row">
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-3-colum.html"><img src="assets/user/img/blog/1.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/2.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/3.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/4.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/5.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End Single Item -->
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 mb-50">
                    <div class="blog-style-one">
                        <div class="thumb">
                            <a href="blog-single-with-sidebar.html"><img src="assets/user/img/blog/6.jpg" alt="Image Not Found"></a>
                        </div>
                        <div class="info">
                            <div class="meta">
                                <ul>
                                    <li>
                                        <a href="#">Md Sohag</a>
                                    </li>
                                    <li>
                                        25 April, 2023
                                    </li>
                                </ul>
                            </div>
                            <h3 class="post-title"><a href="blog-single-with-sidebar.html">Miscovery incommode earnestly is commanded</a></h3>
                            <a href="blog-single-with-sidebar.html" class="button-regular">
                                Continue Reading <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
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
