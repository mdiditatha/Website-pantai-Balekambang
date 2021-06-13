@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Destinasi')

<!-- style -->
@section('style')
  <style>
    body { 
      background: url(images/background/destinasi.jpg) no-repeat center center fixed; 
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
  </style>
@endsection

<!-- konten -->
@section('konten')
<div class="jumbotron">
  <div class="container text-center">
    <h1>Destinasi</h1>      
    <p>halaman yang menampilkan destinasi yang ada di malang selatan | Pantai Belekambang</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center" style="background-color: #fff;">    
  <div class="row">
    <div class="col-sm-4">
      <h3>Pulau Ismoyo</h3>
        <img src="{{ asset('images/ismoyo/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/destinasi/pulau-ismoyo" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <!-- <a href="#" class="btn btn-warning" style="margin: 10px">Audio</a> -->
      <!-- <p>Di salah satu pulau itu ada sebuah tempat peribadatan untuk agama Hindu yang dinamakan dengan Pura Ismoyo.
      Pura Ismoyo berada di atas batu, lengkap dengan jembatan penghubung.</p> -->
    </div>
    <div class="col-sm-4">
      <h3>Pulau Anoman</h3>
        <img src="{{ asset('images/anoman/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/destinasi/pulau-anoman" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <!-- <a href="#" class="btn btn-warning" style="margin: 10px">Audio</a> -->
      <!-- <p>Di salah satu pulau itu ada sebuah tempat peribadatan untuk agama Hindu yang dinamakan dengan Pura Ismoyo.
      Pura Ismoyo berada di atas batu, lengkap dengan jembatan penghubung.</p> -->
    </div>
    <div class="col-sm-4">
      <h3>Pulau Wisanggeni</h3>
      <img src="{{ asset('images/wasenggeni/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      <a href="/destinasi/pulau-wisanggeni" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
      <!-- <a href="#" class="btn btn-warning" style="margin: 10px">Audio</a> -->
      <!-- <p>Di salah satu pulau itu ada sebuah tempat peribadatan untuk agama Hindu yang dinamakan dengan Pura Ismoyo.
      Pura Ismoyo berada di atas batu, lengkap dengan jembatan penghubung.</p> -->
    </div>
  </div>
</div><br>
@endsection