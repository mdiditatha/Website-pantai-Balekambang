@extends('app.layouts')

<!-- judul halaman -->
@section('judul', 'Destinasi')

<!-- style -->
@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
@endsection

<!-- konten -->
@section('konten')
<div class="jumbotron">
  <div class="container text-center">
    <h1>Form Booking</h1>      
    <p>halaman yang menampilkan form untuk booking reservasi</p>
  </div>
</div>

<div class="container">
  <h1 class="text-center">Data Pemesan</h1>
  <form action="#">
    
    <div class="row">
      <div class="col-25">
        <label for="fname">Check In</label>
      </div>
      <div class="col-75">
        <!-- <input type="text" name="nama" placeholder="Nama.."> -->
        <input type="date" name="check_in">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Check Out</label>
      </div>
      <div class="col-75">
        <input type="date" name="check_out">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="hname">Hotel</label>
      </div>
      <div class="col-75">
      <select name='hotel'>
        <option value='#'>Penginapan Wibisono | Rp 277.777 / Malam </option>
        <option value='#'>Homestay Dhilpratis | Rp 190.777 / Malam </option>
        <option value='#'>Fira Homestay | Rp 275.750 / Malam</option>
        <option value='#'>Wirojoyo Homestay | Rp 165.000 / Malam</option>
      </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="fname">Nama Kontak</label>
      </div>
      <div class="col-75">
        <input type="text" name="nama" placeholder="Nama..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">No.handphone Kontak</label>
      </div>
      <div class="col-75">
        <input type="text" name="handphone" placeholder="Handphone..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Alamat email kontak</label>
      </div>
      <div class="col-75">
        <input type="text" name="email" placeholder="Email..">
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select>
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label for="subject">Keterangan</label>
      </div>
      <div class="col-75">
        <textarea name="keterangan" placeholder="Keterangan.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" onclick="sweetAlert()">
    </div>
  </form>
</div>
@endsection