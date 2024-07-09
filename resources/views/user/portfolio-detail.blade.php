@extends('templates.user')

@section('title', $portfolios -> nama)

@section('content')
       <!-- Star Services Details Area
    ============================================= -->
    <div class="services-details-area mt-3" >
        <div class="container">
            <div class="services-details-items">
                <div class="row">

                    <div class="col-xl-8 col-lg-7 pr-45 pr-md-15 pr-xs-15 services-single-content">
                        <div class="service-single-thumb">
                            <img src="{{asset('storage/portfolio/gambar/' . $portfolios->gambar)}}"
                            alt="Thumb"
                            style="width: 100%; object-fit: cover; margin-bottom: 20px;">
                        </div>
                        {{-- <h2>{{$portfolios->nama}}</h2> --}}
                        <h5 class="mb-40">
                            {!! $portfolios->deskripsi !!}
                        </h5>
                    </div>

                    <div class="col-xl-4 col-lg-5 mt-md-50 mt-xs-50 pl-30 pl-md-15 pl-xs-15 services-sidebar">
                        <!-- Single Widget -->
                        <div class="single-widget services-list-widget">
                            <h4 class="widget-title">Detail</h4>
                            <ul>
                                <li><b>Kategori: </b>{{$portfolios->kategori}}</li>
                                <li><b>Tanggal Proyek: </b>{{$portfolios->tanggalProyek}}</li>
                                <li><b>Institusi Client: </b>{{$portfolios->client}}</li>
                                <li><b>Lokasi: </b>{{$portfolios->lokasi}}</li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services Details Area -->

@endsection
