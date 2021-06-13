@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Rekomendasi')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('konten')
<!-- <div class="jumbotron">
  <div class="container text-center">
    <h1>Rekomendasi</h1>      
    <p>Deskripsi Halaman Rekomendasi</p>
    <div class="search-container">
        <form action="/">
        <input type="text" placeholder="Masukan Harga.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
  </div>
</div> -->

<div class="jumbotron">
  <div class="container text-center">
    <h1>Rekomendasi</h1>      
    <p>Deskripsi Halaman Rekomendasi</p>
    <a href="#" class="btn btn-danger">Transportasi</a>
    <a href="#" class="btn btn-danger">Hotel</a>
  </div>
</div>

@endsection