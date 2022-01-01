@extends('layouts.user')

@section('header')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  #hero {
    background: url('{{asset('user/images/abouts.jpg')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
</style>
@endsection

@section('hero')
<h1>Services</h1>
<h2>tou·ché</h2>
<h2>/to͞oˈSHā/ - French, noun</h3>
  <h2>English: Touch | Bahasa: Sentuhan</h2>
  @endsection

  @section('content')

  <section id="team">
    <div class="justify-content-center">
      <div class="">
        <div class="section-header" style="padding-bottom: 10px;">
          <h1 class="section-title text-center mt-5" style="color:black">Our Amazing Team</h1>
          <p class="section-description pl-3 pr-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium
            doloremque</p>
        </div>
        <div class="psikolog__flex">
          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team1.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Puteri Qohimah, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Educational Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about wellness conseling, child development, self-development, parenting, motivation,
                mindfullness, school problem.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team3.jpeg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Devina P.Zabrina, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Founder of TOUCHÉ Development Center</h6>
              <hr>
              <p>Concerned about depression, anxiety, loneliness, development crisis, cognitive impairment, loss and
                grief, personality disorder.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 20px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team2.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Riska Rahmananda, M. Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about self-development, relationship issues (friendship, romantic, and family), trust issues,
                anxiety.</p>
            </div>
          </div>
          <div class="">
            <div class="card-box text-center">
              <div class="user-pic">
                <img src="{{asset('user/images/team4.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Elisa Kristiani, S.Psi, M.Psi, Psikolog</b></h4>
              <h6 style="color:black">Industrial-Organizational Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about self-development, career path, stress management, burnout, self-love, work
                satisfaction, motivation, conflict management, leadership, organizational communication.</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 65px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team5.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Ainurizan Ridho, M.Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist</h6>
              <hr>
              <p>Concerned about depression, anxiety, quarter-life ceisis, interpersonal relationships</p>
            </div>
          </div>

          <div class="">
            <div class="card-box text-center" style="padding-bottom: 65px;">
              <div class="user-pic">
                <img src="{{asset('user/images/team6.jpg')}}" class="img-fluid" alt="User Pic">
              </div>
              <h4 style="color:black"><b>Deacy Anindya Putri, M. Psi., Psikolog</b></h4>
              <h6 style="color:black">Clinical Psychologist, Associate Psychologist</h6>
              <hr>
              <p>Concerned about general anxiety disorder, pregnancy- anxiety, relationship and marriage issues,
                self-love, self- care.</p>
            </div>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </div>
  </section>

  {{-- ----------------Section FAQ------------ --}}

  <section class="faq-section">
    <div class="section-header">
      <h1 class="section-title text-center" style="color:black">FAQ</h1>
      <p class="section-description">Everything you need to know about the product</p>
    </div>
    <div class="accordion-section">
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                aria-expanded="true" aria-controls="collapseOne">
                Offline Konseling<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Offline konseling adalah konseling tatap muka atau home visit (psikolog datang ke rumah). Saat ini offline
              konseling hanya tersedia di YOGYAKARTA dan SURABAYA.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Mental Health Check Up<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Selayaknya pemeriksaan kesehatan fisik umum (Medical Check Up), Mental Health Check Up adalah pemeriksaan
              kesehatan mental umum yang merupakan layanan unggulan dari TOUCHÉ Development Center
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Layanan untuk Bisnis<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                  class="bi bi-chevron-down float-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                </svg>
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              TOUCHÉ tidak hanya melayani klien individu,namun juga memberikan layanan psikologi kepada
              perusahaan/instansi berupa asesmen, rekrutmen, training, outbound dll.* Selain perusahaan, TOUCHÉ juga
              aktif melayani ke sekolah maupun komunitas dalam bentuk konseling siswa, asesmen, webinar dll.*
              <br><br>*custom/sesuai permintaan klien
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- -----------Section Our Service----------- --}}

  <section id="contact" class="service mt-5">
    <div class="justify-content-center">
      <div class="">
        <div class="section-header pl-2 pr-2">
          <h1 class="section-title text-center" style="color:black">Our Services</h1>
          <p class="section-description pl-3 pr-3">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
            accusantium
            doloremque</p>
        </div>



        <div class="d-flex justify-content-center">
          <div class="mt-2">
            <h3 class="header-consultation"><strong> Konsultasi Online </strong></h3>
          </div>
        </div>
        <div class="flex__card">
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 125k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 160k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 150k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 190k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 225k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai kenyamanan klien
                selama 120 menit, sesi follow up 15 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 260K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center konsultasi__offline">
          <div class="mt-5">
            <h3 class="header-consultation"><strong> Konsultasi Offline </strong></h3>
          </div>
        </div>
        <div class="flex__card">
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 160K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 190k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Individu <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 230K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 180k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 90 menit, sesi follow up 10 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 210k</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Anak <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 250K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 90 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 260K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> Premium</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konseling tatap muka selama 120 menit, sesi follow up 15 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 290K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
          <div class="kotak">
            <div class="header">
              <h2>Konsultasi Pasangan <br> (Home Visit)</h2>
            </div>
            <div class="content">
              <p>Termasuk: mental check up, konselor datang ke rumah, konseling selama 120 menit.</p>
            </div>
            <div class="footer">
              <h3>Biaya: IDR 330K</h3>
              <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                target="_blank" class="btn btn-primary">Daftar</a>
            </div>
          </div>
        </div>

        {{-- <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Individu</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 60 menit.</p>
                <h5><strong>Biaya: IDR 125k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Individu Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 90 menit, sesi follow up 10 menit.</p>
                <h5><strong>Biaya: IDR 160k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 60 menit. </p>
                <h5><strong>Biaya: IDR 150k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 90 menit, sesi follow up 10 menit.</p>
                <h5><strong>Biaya: IDR 190k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Pasangan</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 90 menit.</p>
                <h5><strong>Biaya: IDR 225k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 60 menit. </p>
                <h5><strong>Biaya: IDR 150k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Pasangan Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling online (via chat/telepon/video call) sesuai
                  kenyamanan klien selama 120 menit, sesi follow up 15 menit.</p>
                <h5><strong>Biaya: IDR 260k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center mt-5">
            <h3><strong>Konsultasi Offline</strong></h3>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Individu</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
                <h5><strong>Biaya: IDR 160K</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Individu Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
                <h5><strong>Biaya: IDR 190k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Individu (Home Visit)</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
                <h5><strong>Biaya: IDR 230k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 60 menit.</p>
                <h5><strong>Biaya: IDR 180K</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 90 menit, sesi follow up 10
                  menit.</p>
                <h5><strong>Biaya: IDR 210k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Anak (Home Visit)</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konselor datang ke rumah, konseling selama 90 menit.</p>
                <h5><strong>Biaya: IDR 250k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Pasangan</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 90 menit.</p>
                <h5><strong>Biaya: IDR 260K</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Pasangan Premium</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konseling tatap muka selama 120 menit, sesi follow up 15
                  menit.</p>
                <h5><strong>Biaya: IDR 290k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Konsultasi Pasangan (Home Visit)</h4>
              </div>
              <div class="card-body">
                <p class="card-text">Termasuk: mental check up, konselor datang ke rumah, konseling selama 120 menit.
                </p>
                <h5><strong>Biaya: IDR 330k</strong></h5>
                <a href="https://api.whatsapp.com/send?phone=6281328283875&text=&source=&data=&app_absent="
                  class="btn btn-primary" target="_blank">Daftar</a>
              </div>
            </div>
          </div>
        </div> --}}

      </div>
    </div>
  </section>
  @endsection