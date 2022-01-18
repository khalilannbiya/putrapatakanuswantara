@extends('layouts.user')

@section('header')
<style>
  #hero {
    background: url('{{asset('user/images/contact.png')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
</style>
@endsection

@section('hero')
<h1>Contact Us</h1>
<h2>Hubungi Kami Sekarang Juga!</h2>
@endsection

@section('content')

<section id="contact">
  <div class="container wow fadeInUp">
    <div class="section-header">
      <h3 class="section-title">Contact</h3>
      <p class="section-description"></p>
    </div>
  </div>

  <div class="maps__ppn">
    <div id="googleMap"></div>
  </div>

  <div class="container wow fadeInUp">
    <div class="row justify-content-center">

      <div class="col-lg-3 col-md-4">

        <div class="info">
          <div>
            <i class="fa fa-map-marker social-links"></i>
            <p>Kabupaten Karawang</p>
          </div>

          <div>
            <i class="fa fa-envelope social-links"></i>
            <p><a href="mailto:pataka.nuswantara@gmail.com" target="_blank"> pataka.nuswantara@gmail.com</a></p>
          </div>

          <div>
            <i class="fa fa-phone"></i>
            <p><a href="https://api.whatsapp.com/send?phone=6281282052959&text=&source=&data=&app_absent="
                target="_blank"> 0812-8205-2959</a></a></p>
          </div>
        </div>

      </div>

      <iframe
        src="https://docs.google.com/forms/d/e/1FAIpQLSeoU8VOyNVubjE57jXvABqV-kbq9oaMlu9EoAFfa8tiQByiTA/viewform?embedded=true"
        width="640" height="542" frameborder="0" marginheight="0" marginwidth="0">Memuat…</iframe>


    </div>

  </div>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
</section><!-- #contact -->
@endsection