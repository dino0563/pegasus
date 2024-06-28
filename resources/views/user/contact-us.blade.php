@extends('templates.user')

@section('title', "Contact Us")

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
                    <h5><a href="mailto:info@pegasusindonesia.co.id">info@pegasusindonesia.co.id</a></h5>
                </div>
            </div>
        </li>
    </ul>
</div>
<!-- End Atribute Navigation -->
@endsection

@section('content')
<!-- Start Contact Us
    ============================================= -->
    <div class="contact-area contact-page bg-gray overflow-hidden default-padding" style="background-image: url(assets/user/img/shape/map.png);">
        <div class="shape-right-bottom">
            <img src="assets/user/img/shape/18.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-center">

                <div class="col-tact-stye-one col-lg-6">
                    <div class="contact-form-style-one">
                        <form action="#" method="POST" class="contact-form contact-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <input class="form-control" id="subject" name="subject" placeholder="Your Subject" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="nama" name="nama" placeholder="Nama" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group comments">
                                        <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" name="submit" id="submit">
                                        <i class="fa fa-paper-plane"></i> Send Message
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-lg-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-tact-stye-one col-lg-5 offset-lg-1 mt--80 mt-md-50 mt-xs-50">
                    <div class="contact-style-one-info">
                        <div class="mb-40">
                            <h2>Contact Information</h2>
                            <p>
                                PT. Pegasus Nusantara Jaya Abadi adalah Perusahaan yang bergerak di bidang IT yang berdiri sejak 16 Maret 2015.
                            </p>
                            <p>
                                PT. Pegasus Nusantara Jaya Abadi lebih banyak menangani kebutuhan projek project dan lelang atau tender yang di adakan oleh
                                Pemerintah. Tetapi kami juga melayani penunjukan langsung untuk memenuhi kebutuhan IT di instansi swasta atau pemerintah.
                            </p>
                            <p>
                                Kami melayani kebutuhan IT di masayarakat yang meliputi : instasnsi pemerintahan, perusahaan swasta nasional, universitas
                                negeri dan swasta, sekolah dan lain-lain.
                            </p>
                        </div>
                        <ul class="contact-address">
                            <li class="wow fadeInUp">
                                <div class="content">
                                    <h4 class="title">Phone</h4>
                                    <a href="#">(+62) 274 515555</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="300ms">
                                <div class="info">
                                    <h4 class="title">Location</h4>
                                    <p>
                                        Jl. C. Simanjuntak 37, Yogyakarta, Indonesia
                                    </p>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="500ms">
                                <div class="info">
                                    <h4 class="title">Official Email</h4>
                                    <a href="mailto:info@pegasusindonesia.co.id">info@pegasusindonesia.co.id</a>
                                </div>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="700ms">
                                <div class="info">
                                    <h4 class="title">Follow Us</h4>
                                    <ul class="social-link">
                                        <li>
                                            <a class="facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                        <li>
                                            <a class="twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a class="pinterest" href="#" target="_blank"><i class="fab fa-pinterest-p"></i></a>
                                        </li>
                                        <li>
                                            <a class="linkedin" href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- End Contact -->
@endsection
