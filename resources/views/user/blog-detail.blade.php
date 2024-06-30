@extends('templates.user')

@section('title', $blogs->judul)

@section('content')
    <!-- Star Services Details Area

    ============================================= -->
    <div class="services-details-area p-5">
        <div class="container">
          <div class="services-details-items">
            <div class="row justify-content-center">
              <div class="col-12 services-single-content text-left">
                <div class="service-single-thumb">
                  <img
                    src="{{asset('storage/blog/gambar/' . $blogs->gambar)}}"
                    alt="Thumb"
                    style="width: 100%; height: auto; object-fit: cover; border-radius: 10px; aspect-ratio: 3 / 2;"
                  />
                </div>
                <h2>{{$blogs->judul}}</h2>
                <h4>{{$blogs->penulis}} | {{$blogs->tanggal}}</h4>
                <p>
                  {!! $blogs->deskripsi !!}
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Services Details Area -->

@endsection
