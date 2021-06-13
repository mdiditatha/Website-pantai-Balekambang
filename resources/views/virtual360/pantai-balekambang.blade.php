@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Virtual 360 - Pantai Balekambang')

<!-- style -->
@section('style')
@endsection

<!-- konten -->
@section('konten')
<div class="jumbotron">
  <div class="container text-center">
    <h1>Pantai Balekambang</h1>      
    <p>Virtual 360</p>
  </div>
</div>

<div class="container">
  <iframe src="https://www.google.com/maps/embed?pb=!4v1617749315140!6m8!1m7!1sCAoSLEFGMVFpcFBfRkFNbWIyWmhFN3p3d0w4TXU5cFFjQUFVcmRCQm9uMWN1Skxk!2m2!1d-8.403060984562195!2d112.5346126074068!3f237.59!4f6.650000000000006!5f0.7820865974627469" width="1111" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection