<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reservasi | TourBalekambang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

    .topnav {
      position: relative;
      overflow: hidden;
      background-color: #333;
    }

    .topnav a {
      float: left;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }

    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }

    .topnav a.active {
      background-color: #4CAF50;
      color: white;
    }

    .topnav-centered a {
      float: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .topnav-right {
      float: right;
    }

    /* Responsive navigation menu (for mobile devices) */
    @media screen and (max-width: 600px) {
        .topnav a, .topnav-right {
          float: none;
          display: block;
        }
        
        .topnav-centered a {
          position: relative;
          top: 0;
          left: 0;
          transform: none;
        }
      }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
      
    <div class="collapse navbar-collapse" id="myNavbar">
    <!-- kurang bisa responsive untuk menu -->
      <ul class="nav navbar-nav" style="
      float: none;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);">
        <li><a href="#">Beranda</a></li>
        <li class="active"><a href="/destinasi">Destinasi</a></li>
        <li><a href="/reservasi">Reservasi</a></li>
        <li><a href="/peta_wisata">Peta Wisata</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Top navigation -->
<div class="topnav">

  <!-- Centered link -->
  <div class="topnav-centered">
    <a href="#home" class="active">Home</a>
  </div>
  
  <!-- Left-aligned links (default) -->
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  
  <!-- Right-aligned links -->
  <div class="topnav-right">
    <a href="#search">Search</a>
    <a href="#about">About</a>
  </div>
  
</div>

<div style="padding-left:16px">
  <h2>Responsive Top Navigation with Centered and Right-Aligned Links</h2>
  <p>Resize the browser window to see the responsive effect.</p>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>