@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Reservasi')

<!-- style -->
@section('style')
  <style>
    body { 
      background: url(images/background/reservasi.jpg) no-repeat center center fixed; 
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
    <h1>Reservasi</h1>      
    <p>Halaman yang menampilkan penginapan yang ada di Objek Wisata</p>
    <!-- <a href="/rekomendasi" class="btn btn-danger">Rekomendasi</a> -->
  </div>
</div>
<!-- coba mengunakan loop javascript -->
<!-- <div class="container-fluid bg-3 text-center" style="background-color: yellow;">
    <h1 id="test"></h1>
    <div id="day"></div>
    <div id="demo"></div>
</div> -->


<div class="container-fluid bg-3 text-center" style="background-color: #fff;">    
  <div class="row">
    <div class="col-sm-4">
      <h3>Penginapan Wibisono</h3>
        <img src="{{ asset('images/hotel/Penginapan-Wibisono-I.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/reservasi/penginapan-wibisono" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <a href="/reservasi/form-reservasi" class="btn btn-success" style="margin: 10px">Resevasi</a>
        <!-- <p>Hotel Wibisono berlokasi di Pantai Balekambang dan hanya berjarak sekitar 240 meter saja dari pantai, sehingga Anda bisa berjalan kaki saja dari penginapan untuk Pantai Balekambang.</p> -->
    </div>
    <!-- <div class="col-sm-4">
      <h3>Villa Wisma Berbunga</h3>
      <a href="/destinasi/pulau-anoman">
        <img src="{{ asset('images/hotel/Villa-Wisma-Berbunga.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      </a>
      <p>Villa Wisma Berbunga adalah penginapan murah yang tarifnya mulai dari Rp100.000 per malam. Berada di kawasan Balekambang, Kramat Jati. Jarak dari Pantai ke penginapan kurang lebih 650 meter.</p>
    </div> -->
    <div class="col-sm-4">
      <h3>Homestay Dhilpratis</h3>
        <img src="{{ asset('images/hotel/Villa-Wisma-Berbunga.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/reservasi/homestay-dhilpratis" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <a href="/reservasi/form-reservasi" class="btn btn-success" style="margin: 10px">Resevasi</a>  
      <!-- <p>Homestay Dhilpratis berlokasi di dekat Pulau Anoman, fasilitas yang disediakan oleh Homestay Dhilpratis pun standar, berupa satu ranjang double bed, kipas angin, meja, musala, dan kamar mandi umum dengan shower.</p> -->
    </div>
        
    <div class="col-sm-4">
      <h3>Fira Homestay</h3>
        <img src="{{ asset('images/hotel/Fira Homestay/003.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/reservasi/fira-homestay" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <a href="/reservasi/form-reservasi" class="btn btn-success" style="margin: 10px">Resevasi</a>
      <!-- <p>Fira Homestay, rate yang dipatok juga tak terpaut terlalu jauh, yakni Rp265 ribu saja per malam. Dengan harga sekian, 
      Anda sudah memperoleh kamar yang cukup luas, fan atau kipas angin, air minum kemasan gratis, meja, cermin, lemari pakaian, hingga kamar mandi dengan shower.</p> -->
    </div>
    
    <div class="col-sm-4">
      <h3>Wirojoyo Homestay</h3>
        <img src="{{ asset('images/hotel/Wirojoyo Homestay/001.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
        <a href="/reservasi/wirojoyo-homestay" class="btn btn-primary" style="margin: 10px">Deskripsi</a>
        <a href="/reservasi/form-reservasi" class="btn btn-success" style="margin: 10px">Resevasi</a>
      <!-- <p>Wirojoyo Homestay menyediakan 3 kamar tidur yang cukup menampung 6 orang tamu. Tarif sewa homestay ini dipatok Rp1,5 jutaan per malam. Selain kamar-kamar yang nyaman, Wirojoyo Homestay juga dilengkapi dengan fasilitas kipas angin, meja, kamar mandi pribadi, 
      shower, perlengkapan mandi, area parkir kendaraan yang luas, dan juga resepsionis 24 jam.</p> -->
    </div>

  </div>
</div><br>
<!-- membuat button rekomendasi list untuk transportasi, harga hotel -->
<!-- Peta Wisata itu isinnya cuma google map balekambang -->
<!-- Foto Team dan logo -->
@endsection

@section('script__')
<script>
  // var reservasi = ["senin","selasa","rabu","kamis"]
  document.getElementById('test').innerHTML = 'Hello JavaScript';
  
  // reservasi.forEach((i) => {
  //   document.getElementById('day').innerHTML = 'Hello JavaScript';
  // });

  // kita punya array seperti berikut
  var days = ["Penginapan-Wibisono-I.jpg", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"];
  var text ="";

  // Kemudian kita tampilkan semua hari
  // dengan menggunakan method foreach
  days.forEach((day) => {
      text += '<img src="images/hotel/' + day + '" class="img-responsive" style="width:100%" alt="aw">';
  });
  document.getElementById('day').innerHTML = text; 
</script>

<script>
var text = "";
var i;
for (i = 0; i < 5; i++) {
  text += "The number is " + i + "<br>";
}
document.getElementById("demo").innerHTML = text;
</script>
@endsection