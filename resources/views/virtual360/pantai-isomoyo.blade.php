@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Virtual 360 - Pantai Isomoyo')

<!-- style -->
@section('style')
@endsection

<!-- konten -->
@section('konten')
<div class="jumbotron">
  <div class="container text-center">
    <h1>Pantai Isomoyo</h1>      
    <p>Virtual 360</p>
  </div>
</div>

<div class="container">
  <iframe src="https://www.google.com/maps/embed?pb=!4v1617841490096!6m8!1m7!1sCAoSLEFGMVFpcE5iMGtXdllwZ0J2Y19LWUQyUTJyaWlwTnFDV29NV05FLUt3Z1l2!2m2!1d-8.4035865!2d112.5335191!3f325.09!4f-29.11!5f0.7820865974627469" width="1111" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection