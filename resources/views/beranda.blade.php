<!-- untuk memanggil tamplate laravel di folder -->
<!-- app/layouts.blade.php -->
@extends('app.layouts')

<!-- judul halaman -->
<!-- di @yield('judul') -->
<!-- untuk nambahkan custom nama -->
@section('judul', 'Beranda')

<!-- style -->
<!-- di @yield('judul') -->
<!-- untuk nambahkan custom style -->
@section('style')
  <style>
    body { 
      background: url(images/background/beranda.jpg) no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }
    
    .carousel-inner img {
        width: 100%; /* Set width to 100% */
        margin: auto;
        min-height:200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
  </style>
@endsection

<!-- konten -->
<!-- di @yield('konten') -->
<!-- untuk nambahkan custom konten -->
@section('konten')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{ asset('images/banner/banner-01.jpg') }}" alt="Image">
        <div class="carousel-caption">
          <p>Sunset</p>
        </div>     
      </div>

      <div class="item">
        <img src="{{ asset('images/banner/banner-02.jpg') }}" alt="Image">
        <div class="carousel-caption">
          <p>Banner...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center" style="background-color: #fff;">    
  <h3>Tempat Wisata Balekambang</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="/destinasi/pulau-ismoyo">
        <img src="{{ asset('images/ismoyo/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Pulau Ismoyo</p>
    </div>
    <!-- col-4 -->
    <div class="col-sm-4"> 
      <a href="/destinasi/pulau-wisanggeni">
        <img src="{{ asset('images/wasenggeni/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Pulau Wisanggeni</p>    
    </div>
    <!-- col-4 -->
    <div class="col-sm-4">
      <a href="/destinasi/pulau-anoman">
        <img src="{{ asset('images/anoman/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Pulau Anoman</p>
    </div>
    <!-- col-4 -->
  </div>

  <h3>Tempat Hotel Balekambang</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <a href="/reservasi/penginapan-wibisono">
        <img src="{{ asset('images/hotel/Penginapan-Wibisono-I.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Penginapan Wibisono</p>
    </div>
    <!-- col-4 -->
    <!-- <div class="col-sm-4"> 
      <img src="{{ asset('images/hotel/Villa-Wisma-Berbunga.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      <p>Villa Wisma Berbunga</p>    
    </div> -->
    <!-- col-4 -->
    <div class="col-sm-4">
      <a href="/reservasi/homestay-dhilpratis">
        <img src="{{ asset('images/hotel/Villa-Wisma-Berbunga.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Homestay Dhilpratis</p>
    </div>
    <!-- col-4 -->

    <div class="col-sm-4">
      <a href="/reservasi/fira-homestay">
        <img src="{{ asset('images/hotel/Fira Homestay/003.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Fira Homestay</p>
    </div>
    <!-- col-4 -->

    <div class="col-sm-4">
      <a href="/reservasi/wirojoyo-homestay">
        <img src="{{ asset('images/hotel/Wirojoyo Homestay/001.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Wirojoyo Homestay</p>
    </div>
    <!-- col-4 -->
  </div>
  </div>
</div><br>
@endsection

@section('konten__')
<div class="container">
    <div class="row bg-primary">
      <p>Hello</p>
    </div>
    <div class="row bg-danger">
      <div class="col-sm-4">
        <a href="/destinasi/pulau-ismoyo">
          <img src="{{ asset('images/ismoyo/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        </a>
        <p>Pulau Ismoyo</p>
      </div>
      <!-- col-4 -->
    </div>
</div>
@endsection