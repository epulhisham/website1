@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10 text-center">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-12 mt-3">
              <h3 class="display-2">Apa yang Kami lakukan</h3>
              <br>
              <div class="col-md-12 mt-3">
                <p class="display-6">
                  Kami bekerjasama dengan perniagaan dalam membantu mereka menghidupkan 
                  projek dan idea mereka. Kami fokus pada ekosistem Laravel dan PHP MySQL 
                  bersama Bootstrap untuk membina aplikasi web dan mudah alih, serta perisian 
                  sumber terbuka.
                </p>
                <br>
              </div>
              <div class="col-md-12 mt-3">
                <p class="display-6">
                  Kami mengambil pendekatan khusus yang disesuaikan dengan keperluan setiap projek 
                  dan bekerjasama dengan pasukan anda, kami memilih teknologi terbaik yang sesuai 
                  dengan keperluan anda.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row justify-content-center mt-5">
    <div class="col-md-9">
      <div class="row py-5">
        <div class="col-md-4 text-center">
          <img src={{ asset('img/website.png') }} alt="web apps" width="35%">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h3>Web Aplikasi</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Aplikasi web yang luar biasa berdasarkan PHP MySQL yang sesuai dengan keperluan 
                dan pangkalan pengguna anda, yang dibina dengan perhatian khusus terhadap perincian.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center">
          <img src={{ asset('img/smartphone.png') }} alt="smartphone" width="35%">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h3>Aplikasi mudah alih asli</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Aplikasi mudah alih untuk Android berdasarkan Bootstrap Framework, 
                berintegrasi sempurna dengan API dan aplikasi web anda yang ada dan
                memberikan pengalaman pengguna yang luar biasa.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center">
          <img src={{ asset('img/performance.png') }} alt="performance" width="35%">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h3>Pengauditan & Penalaan Prestasi</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Pengauditan dan analisis terhadap aplikasi yang ada, menawarkan sokongan
                untuk meningkatkan pengalaman pengguna atau memperluasnya dengan fitur baru.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row py-5">
        <div class="col-md-4 text-center">
          <img src={{ asset('img/seo-training.png') }} alt="training" width="35%">
        </div>
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-12">
              <h3>Latihan</h3>
            </div>
            <div class="col-md-12 mt-2">
              <p>
                Membantu dan menyokong dengan PHP MySQL untuk pasukan anda yang ada untuk 
                meningkatkan tahap pengetahuan dan memperoleh kepakaran yang diperlukan oleh projek anda.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection