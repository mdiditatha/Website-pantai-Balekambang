<!DOCTYPE html>
<html lang="en">
<head>
<title>@yield('judul') | TourBalekambang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- custom -->
  @yield('style')
</head>
<body>

<!-- header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="/">Pantai Balekambang</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="/">Beranda</a></li>
        <li><a href="/destinasi">Destinasi</a></li>
        <li><a href="/reservasi">Reservasi</a></li>
        <!-- <li><a href="/peta_wisata">Peta Wisata</a></li> -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Virtual 360
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                  <a href="/virtual-360/pantai-balekambang">Pantai Balekambang</a>
                </li>
                <li>
                  <a href="/virtual-360/pantai-isomoyo">Pantai Isomoyo</a>
                </li>
                <!-- <li>
                    <a target="__blank" href="https://www.google.co.id/maps/@-8.403061,112.5346126,3a,75y,237.59h,96.65t/data=!3m8!1e1!3m6!1sAF1QipP_FAMmb2ZhE7zwwL8Mu9pQcAAUrdBBon1cuJLd!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipP_FAMmb2ZhE7zwwL8Mu9pQcAAUrdBBon1cuJLd%3Dw203-h100-k-no-pi-0-ya47.40647-ro-0-fo100!7i8192!8i4096">Pantai Balekambang</a>
                </li> -->
                <!-- <li>
                    <a href="#">Pulau Anoman</a>
                </li>
                <li>
                    <a href="#">Pulau Wisanggeni</a>
                </li> -->
                <!-- <li>
                    <a target="__blank" href="https://www.google.co.id/maps/@-8.4035865,112.5335191,3a,75y,325.09h,60.89t/data=!3m8!1e1!3m6!1sAF1QipNb0kWvYpgBvc_KYD2Q2riipNqCWoMWNE-KwgYv!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipNb0kWvYpgBvc_KYD2Q2riipNqCWoMWNE-KwgYv%3Dw203-h100-k-no-pi-0-ya98.5091-ro-0-fo100!7i4096!8i2048">Pulau Isomoyo</a>
                </li> -->
            </ul>
        </li>
        <li>
            <a target="_blank" href="https://goo.gl/maps/H943quC3E8adLCzv8">Rute Balekambang</a>
        </li>
        <!-- <li>
            <a target="_blank" href="https://www.google.co.id/maps/@-8.4027242,112.5336865,3a,75y,113.41h,91.24t/data=!3m8!1e1!3m6!1sAF1QipPTp0XcmUSAfE0cupoVCsfvUJ5wXP84T0BDocGM!2e10!3e11!6shttps:%2F%2Flh5.googleusercontent.com%2Fp%2FAF1QipPTp0XcmUSAfE0cupoVCsfvUJ5wXP84T0BDocGM%3Dw203-h100-k-no-pi-0-ya222.45921-ro-0-fo100!7i8000!8i4000">Virtual 360</a>
        </li>
        <li>
            <a target="_blank" href="https://goo.gl/maps/H943quC3E8adLCzv8">Street View</a>
        </li> -->
      </ul>
      <!-- <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul> -->
    </div>
  </div>
</nav>

<!-- content -->
@yield('konten')

<!-- footer -->
<footer class="container-fluid text-center">
  <p>Binus Malang</p>
</footer>

</body>
<script type="text/javascript">
  function sweetAlert() {  
    // Swal.fire('Booking Hotel Berhasil')
    Swal.fire({
      type: 'success',
      title: 'Sukses',
      text: 'Booking Hotel Berhasil',
      footer: '<a href="/"> Kembali Beranda </a>'
    }) 
  }
</script>

@yield('script')
</html>
