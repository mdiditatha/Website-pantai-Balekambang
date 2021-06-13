@extends('app.layouts')

<!-- judul halaman -->
@section('judul' , 'Destinasi - Pulau Wisanggeni')

<!-- style -->
@section('style')
  <style>
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

<!-- kontnet -->
@section('konten')
<div class="jumbotron">
  <div class="container text-center">
    <h1>Pulau Wisanggeni</h1>      
    <p>Objek Wisata Pulau Balekambang</p>
  </div>
</div>

<div class="container">
  <div class="row content">

    <div class="col-sm-12">
      <img src="{{ asset('images/wasenggeni/beranda.jpg') }}" class="img-responsive" style="width:100%" alt="Image">
      <h2>Pulau Wisanggeni</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Didit, March 26, 2021.</h5>
      <h5><span class="label label-danger">Food</span> <span class="label label-primary">Ipsum</span></h5><br>
      <p>Pulau Anoman letaknya tersembunyi di dekat Pantai Balekambang yang ada di dusun Sumber Jambe, Desa Srigonco, Kecamatan Bantur, Kabupaten Malang atau lebih tepatnya sekitar 70 km dari pusat kota Malang.Untuk menemukan Pulau Anoman dari pantai Balekambang kalian harus jalan kaki dulu strudelers, sekitar 1 km dari Pulau Ismoyo (pulau yang ada purenya itu). Nah untuk ke pulau Anoman ini kalian tak perlu menyewa perahu untuk sampai di pulaunya karena ada jembatan yang menghubungkan pantai dengan pulau Anoman ini.Dulunya sih jembatan pulau ini sempat ambrol, tapi sekarang sudah dibangun dan tentunya berdiri kokoh juga Oh iya, di Pulau Anoman ini akan segera dibangun Masjid loh. Di pulau Anoman ini kalian bisa menikmati keindahan laut lepas yang viewnya berbeda dari Pantai Balaikambang. Suasana yang masih asri dan alami ini bakalan bikin kalian rileks banget<br>
      </p>
      <!-- <br><br>
      <h4><small>Gallery</small></h4>
      <hr>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <hr>
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <hr> -->
      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <!-- <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
          <p><span class="badge">1</span> Comment:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
@endsection