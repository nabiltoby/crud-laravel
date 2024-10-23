@extends('layouts.main')
@section('container')

<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <h1 class="display-4">Selamat Datang di Toko Serba Ada</h1>
        <p class="lead">Temukan berbagai produk berkualitas dengan harga terbaik.</p>
        <a href="/produk" class="btn btn-primary">Lihat Produk Kami</a>
    </div>
</div>
<div class="home-content">
    <! -- Banner Gambar -->
    <img src="{{asset('images/banner.png')}}" alt="Banner Toko Serba Ada" class="img-fluid banner-home">
</div>

<div class="more-info mt-5 text-center">
    <h2>Kenapa Belanja di Toko Sejuta Barang?</h2>
    <p>Kami menawarkan produk-produk terbaik dengan layanan pelanggan yang luar biasa.</p>
</div>
@endsection