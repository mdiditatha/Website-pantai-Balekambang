@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Peta')

<!-- style -->
@section('style__')
  <!-- Menyisipkan library Google Maps -->
  <script src="http://maps.googleapis.com/maps/api/js"></script>

  <script>
    // fungsi initialize untuk mempersiapkan peta
    function initialize() {
    var propertiPeta = {
        center:new google.maps.LatLng(-8.5830695,116.3202515),
        zoom:9,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    
    var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
    }

    // event jendela di-load  
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@endsection

@section('style_')
<style>
  html, body {
    height: 100%;
    margin: 0;
    padding: 0;
  }
  #street-view {
    height: 100%;
  }
</style>
@endsection

<!-- konten -->
@section('konten_')
<div id="street-view"></div>
    <script>
      var panorama;
      function initialize() {
        panorama = new google.maps.StreetViewPanorama(
            document.getElementById('street-view'),
            {
              position: {lat: -6.169063, lng: 106.784694},
              pov: {heading: 165, pitch: 0},
              zoom: 1
            });
      }
    </script>
    <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize">
    </script>
@endsection

@section('konten')
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3110.183542603281!2d112.53846190587514!3d-8.403510746152172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a9458651084f%3A0x6b8da077d5b83e2f!2sPantai%20Balekambang!5e0!3m2!1sid!2sid!4v1617748780977!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
  <iframe src="https://www.google.com/maps/embed?pb=!4v1617749315140!6m8!1m7!1sCAoSLEFGMVFpcFBfRkFNbWIyWmhFN3p3d0w4TXU5cFFjQUFVcmRCQm9uMWN1Skxk!2m2!1d-8.403060984562195!2d112.5346126074068!3f237.59!4f6.650000000000006!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
@endsection

<!-- https://ghozaliq.com/cara-upload-foto-panorama-dan-virtual-tour-360/ -->
