@extends('templates.user')

@section('title', "About Us")

@section('attr-nav')
<!-- Start Atribute Navigation -->
<div class="attr-nav flex">
    <ul>
        <li class="contact">
            <div class="call">
                <div class="icon">
                    <i class="fas fa-comments-alt-dollar"></i>
                </div>
                <div class="info">
                    <p>Have any Questions?</p>
                    <h5><a href="mailto:info@pegasusindonesio.co.id">info@pegasusindonesia.co.id</a></h5>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- End Atribute Navigation -->
@endsection

@section('content')
<!-- Start About
    ============================================= -->
<div class="about-style-two-area default-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 about-style-two">
                <div class="about-two-thumb">
                    <img src="{{asset('assets/user/img/thumb/4.jpg')}}" alt="Image Not Found">
                    <div class="experience">
                        <h2><strong>9</strong> Years Experience</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-style-two pl-50 pl-md-15 pl-xs-15 mt-60 mt-xs-40">
                <div class="about-two-info">
                    <h2 class="title">PT. Pegasus <br> Nusantara Jaya Abadi</h2>
                    <p>
                        Perusahaan yang bergerak di bidang IT yang berdiri sejak 16 Maret tahun 2015. PT.Pegasus
                        Nusantara Jaya Abadi lebih
                        banyak menangani kebutuhan projek project dan lelang atau tender yang di adakan oleh Pemerintah.
                        Tetapi kami juga
                        melayani penunjukan langsung untuk memenuhi kebutuhan IT di instansi swasta atau pemerintah.
                    </p>
                    <p>
                        Kami melayani kebutuhan IT di masyarakat yang meliputi :
                    </p>
                    <div class="about-grid-info">
                        <a class="btn-round-animation" href="#">Learn More <i class="fas fa-arrow-right"></i></a>
                        <ul class="list-info-item">
                            <li>
                                <h4><a href="services-details.html">Instansi Pemerintahan <i
                                            class="fas fa-angle-right"></i></a></h4>
                            </li>
                            <li>
                                <h4><a href="services-details.html">Perusahaan Swasta Nasional <i
                                            class="fas fa-angle-right"></i></a></h4>
                            </li>
                            <li>
                                <h4><a href="services-details.html">Universitas Negeri dan Swasta <i
                                            class="fas fa-angle-right"></i></a></h4>
                            </li>
                            <li>
                                <h4><a href="services-details.html">Sekolah <i class="fas fa-angle-right"></i></a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start Why Choose Us
    ============================================= -->
<div class="choose-us-style-two-area default-padding bg-dark text-light">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="choose-us-style-two">
                    <ul class="check-list-item">
                        <li>
                            <h4>VISI</h4>
                            <p>
                                PT. Nusantara Jaya Abadi sebagai penyedia layanan dan solusi terbaik dalam bidang
                                komputer dan IT.
                                Berkomitmen untuk memberikan service excelence kepada steakholder PT. Nusantara Jaya
                                Abadi </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 offset-xl-1">
                <ul class="check-list-item">
                    <li>
                        <h4>MISI</h4>
                        <p>
                            1. Memberikan pelayanan melalui teknologi informasi melalui produk IT dan Komputer. <br>
                            2. Menyediakan fasilitas yang handal serta solusi dan layanan Teknologi Informasi. <br>
                            3. Untuk mengembangkan sumber daya manusia berkualitas di bidang Teknologi Informasi.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Why Choose Us -->

<!-- Start Team
    ============================================= -->
<div class="team-style-two-area bg-gray default-padding-top pb-70 pb-xs-0">

    <div class="container">
        <div class="row align-center">
            <!-- Single Item -->
            <div class="col-xl-6 col-lg-12">
                <div class="site-heading">
                    <h5 class="sub-title">Our Team</h5>
                    <h2 class="title">Our professional <br> expert team members</h2>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInUp">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/1.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="team-details.html">James Baker</a></h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInUp" data-wow-delay="300ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/2.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="team-details.html">Dalton Grant</a></h4>
                                <span>Project Manager</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="300ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/3.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="team-details.html">Ryan Ricketts</a></h4>
                                <span>Director</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="500ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/4.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="team-details.html">James Baker</a></h4>
                                <span>Marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-3 col-lg-4 col-md-6 mb-50 wow fadeInLeft" data-wow-delay="700ms">
                <div class="team-style-two">
                    <div class="thumb">
                        <img src="assets/user/img/team/5.jpg" alt="Image Not Found">
                        <div class="team-info">
                            <div class="content">
                                <h4><a href="team-details.html">Dalton Grant</a></h4>
                                <span>Project Manager</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Team -->

<!-- Start Team
    ============================================= -->
<div class="team-style-three-area text-center default-padding-bottom bottom-less">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h2 class="title">Partnership</h2>
                    <br>
                    <h4>Our awesome partnership we've had the pleasure to work with!</h4>
                    <h7>Berkomitmen untuk memberikan service excelence kepada steakholder PT. Nusantara Jaya Abadi.
                    </h7>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-apple.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">Apple</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-cisco.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">Cisco</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-dell.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">Dell</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-hp.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">Hp</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-IBM.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">IBM</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
            <!-- Single Item -->
            <div class="col-xl-4 col-md-6 mb-30">
                <div class="team-style-three">
                    <div class="thumb" style="background-image: url(assets/user/img/shape/31.png);">
                        <img src="assets/user/img/banner/logo-intel.png" alt="Image Not Found">
                    </div>
                    <div class="content">
                        <h4><a href="#">Intel</a></h4>
                    </div>
                </div>
            </div>
            <!-- End Single Item -->
        </div>
    </div>
</div>
<!-- End Team  -->
@endsection
