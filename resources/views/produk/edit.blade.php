@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap alignitems-center pt-3
pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Produk </h1>
<a href="/produk" class="btn btn-success">Back to Produk</a>
</div>
<div class="col-lg-8">
<form method="POST" action="{{ route('produk.update',$data->id) }}">
@csrf
@method('PUT')
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama
Produk</label>
<input value="{{ $data->nama }}" type="text" class="form-control"
id="nama"
name="nama">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Harga</label>
<input type="text" class="form-control" id="harga" name="harga"
value="{{ $data->harga }}">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Jumlah</label>
<input type="text" class="form-control" id="jumlah" name="jumlah"
value="{{ $data->jumlah }}">
</div>
<button type="Simpan" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection