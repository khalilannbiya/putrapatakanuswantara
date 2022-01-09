@extends('layouts.user')

@section('header')
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

  #hero {
    background: url('{{asset('user/images/abouts.png')}}') top center;
    background-repeat: no-repeat;
    width: 100%;
    background-size: cover;
  }
</style>
@endsection

@section('hero')
<h1>About Company</h1>
<a href="https://drive.google.com/file/d/1YCIgfNXjcf3--gOWw4kSgw3hNso35LxU/view?usp=drivesdk" target="_blank"
  class="btn-get-started">
  Legality</a>
@endsection

@section('content')

{{-- Section Visi misi --}}
<section id="team">
  <div class="justify-content-center">
    <div class="">
      <div class="section-header" style="padding-bottom: 10px;">
        <h1 class="section-title text-center mt-5" style="color:black">Vision And Mission</h1>
      </div>
      <div class="vision">
        <h2>Vision</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis,
          voluptatibus praesentium molestiae
          esse asperiores dolor repellat obcaecati laborum harum accusantium alias repellendus iste sit autem aperiam
          explicabo dolorum voluptatum molestias ullam odit sapiente quidem architecto deleniti. Sint quidem sequi
          eaque. Fuga animi ullam asperiores rerum, provident doloribus repellendus enim consequuntur omnis velit ea
          nemo delectus totam deleniti officia expedita numquam nihil praesentium vel, ut quo! Debitis nostrum suscipit
          possimus aut iusto. Animi architecto voluptas in delectus quae unde, dicta at dolorem deleniti consectetur
          optio omnis voluptatum illum corrupti adipisci magni? Omnis possimus impedit repellendus consequuntur
          doloribus quae adipisci recusandae minima?</p>
      </div>
      <div class="mission">
        <h2>Mission</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, voluptatibus praesentium molestiae
          esse asperiores dolor repellat obcaecati laborum harum accusantium alias repellendus iste sit autem aperiam
          explicabo dolorum voluptatum molestias ullam odit sapiente quidem architecto deleniti. Sint quidem sequi
          eaque. Fuga animi ullam asperiores rerum, provident doloribus repellendus enim consequuntur omnis velit ea
          nemo delectus totam deleniti officia expedita numquam nihil praesentium vel, ut quo! Debitis nostrum suscipit
          possimus aut iusto. Animi architecto voluptas in delectus quae unde, dicta at dolorem deleniti consectetur
          optio omnis voluptatum illum corrupti adipisci magni? Omnis possimus impedit repellendus consequuntur
          doloribus quae adipisci recusandae minima?</p>
      </div>
    </div>
  </div>
</section>

{{-- -------------------- Section History ------------------ --}}

<section id="team" class="history-section">
  <div class="justify-content-center">
    <div class="">
      <div class="section-header" style="padding-bottom: 10px;">
        <h1 class="section-title text-center mt-5" style="color:black">history</h1>
      </div>
      <div class="history">
        <p>PT. Putra Pataka Nuswantara adalah perusahaan jasa kontruksi yang bergerak dibidang penyediaan kontruksi
          Gedung kesehatan,kontruksi jaringan irigasi yang berlokasi di Kabupaten Karawang. Berdiri pada Tanggal 30
          Januari 2018 No. 03 dengan nama PT. Putra Pataka Nuswantara yang merupakan bagian dari PT. Putra Pataka
          Nuswantara dan PT. Fajar Putra Nusantara.
        </p>
        <p>PT. Putra Pataka Nuswantara memberikan berbagai layanan jasa Kontruksi, diantaranya : pengelolaan kontruksi
          bangunan pengolahan, penyaluran dan penampungan air minum, air limbah dan drainase. Kami terus berkembang dan
          telah dipercaya mengelola kontruksi di berbagai lokasi dan jenis usaha, mulai dari Kontruksi pemerintahan
          ataupun dari perusahaan swasta.
        </p>
        <p>Sebagai perusahaan yang bergerak dibidang jasa kontruksi, kami juga memberikan beberapa layanan jasa lain
          seperti jasa perdagangan besar beras, Pembuatan perumahan dam perdagangan besar alat olahraga.</p>
      </div>
    </div>
  </div>
</section>

{{-- secion struktur organisasi --}}
<section id="team" class="organisasi__section">
  <div class="justify-content-center">
    <div class="">
      <div class="section-header" style="padding-bottom: 10px;">
        <h1 class="section-title text-center mt-5" style="color:black">Organizational Structure</h1>
      </div>
      <div class="flex__organisasi">
        <img class="struktur-organisasi" src=" {{ asset('user/images/organisasi.png') }}" alt="Struktur organisasi">
      </div>
    </div>
  </div>
</section>

@endsection