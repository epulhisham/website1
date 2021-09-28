<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>website1</title>

<link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}">

<script src="{{ asset('asset/bootstrap/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('asset/bootstrap/js/popper.min.js') }}" defer></script>
<script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}" defer></script>
    

  
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-sm">
              <div class="row">
              
                  <!-- Brand/logo -->
                  <a class="navbar-brand" href="lamanutama">
                    <img src={{ asset('img/logo.png') }} alt="logo" style="width:35px;">
                  &nbsp; Website1
                  </a>
               </div>
            
               
                  <!-- Links -->
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="lamanutama">Laman Utama</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="servis">Servis</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="hubungikami">Hubungi Kami</a>
                    </li>
                  </ul>
                  
              </div>
            </div>
          </nav>

        <main class="py-4">
            @yield('content')
            <br><br><br><br><br><br><br>
        </main>
    </div>

    <!-- Footer -->
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Website1. Hakcipta Terpelihara.
    <br>
    Cheras, Kuala Lumpur
    <br>
    Ibu Pejabat Kami :
    <a href="https://www.lakarancintasistem.com/"> lakarancintasistem.com</a>
    <br>
    Whatsapp :
    <a href="http://www.wasap.my/601110514029/I'MPROGRAMMERLOVEYOURHEARTS"> 01110514029-admin</a>
    <br>
    Link rasmi Kami :
    <a href="https://www.lakarancintasistem.com/"> lakarancintasistem.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
</html>
