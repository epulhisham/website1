@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div id="demo" class="carousel slide" data-ride="carousel">

                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src={{ asset('img/img1.jpg') }} alt="img1"  width="100%">
                      <div class="carousel-caption bg-dark">
                        <h3>Membantu</h3>
                        <p> Kami akan membantu dengan PHP MySQL untuk pasukan anda yang ada untuk 
                          meningkatkan tahap pengetahuan dan memperoleh kepakaran yang diperlukan oleh projek anda.</p>
                      </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/img2.jpg') }} alt="img2" width="100%">
                        <div class="carousel-caption bg-dark">
                          <h3>Kerjasama</h3>
                          <p> Kami bekerjasama dengan perniagaan dalam membantu mereka menghidupkan 
                            projek dan idea mereka.</p>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src={{ asset('img/img3.jpg') }} alt="img3" width="100%">
                        <div class="carousel-caption bg-dark">
                          <h3>Pekerja yang profesional</h3>
                          <p> Di sini juga kami mempunyai pekerja yang profesional dan berpengalaman tinggi.</p>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9 text-center">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mt-5">
                            <h1 class="display-2">Web dan mudah alih bertaraf dunia</h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Laravel</h3>
                            <br>
                            <p>Laravel adalah kerangka aplikasi web dengan sintaks ekspresif dan elegan. 
                                Kami telah meletakkan asas yang membebaskan anda untuk membuat tanpa mengeluarkan 
                                barang-barang kecil. - Laravel menjaga selebihnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/laravel.jpg') }} alt="laravel" width="100%">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/android.jpg') }} alt="android" width="100%">
                </div>
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Android Apps</h3>
                            <br>
                            <p>Android terbuka untuk semua orang: pembangun, pereka dan pembuat peranti. 
                                Ini bermakna lebih banyak orang dapat bereksperimen, membayangkan dan 
                                mencipta perkara yang belum pernah dilihat oleh dunia. 
                                - Segala-galanya dari telefon bimbit 5G hingga tablet yang menakjubkan,
                                 Android memberi kuasa kepada mereka semua.
                            </p>
                        </div>
                    </div>
                </div> 
            </div>

            <div class="row mt-5">
                <div class="col-md-6 mt-5">
                    <div class="row">
                        <div class="cold-md-12 mt-3">
                            <h3>Bootstrap</h3>
                            <br>
                            <p>Reka bentuk dan sesuaikan dengan cepat laman web bergerak mudah alih yang
                                responsif dengan Bootstrap, alat sumber terbuka yang paling popular di dunia, 
                                yang menampilkan pemboleh ubah dan mixin Sass, sistem grid responsif, 
                                komponen prebuilt yang luas, dan plugin JavaScript yang kuat.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <img src={{ asset('img/boostrap5.jpg') }} alt="bootstrap" width="100%">
                </div>
            </div>


        </div>
    </div>
</div>

@endsection