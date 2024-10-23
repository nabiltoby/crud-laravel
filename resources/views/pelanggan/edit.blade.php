@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap alignitems-center pt-3
pb-2 mb-3 border-bottom">
<h1 class="h2">Edit Pelanggan </h1>
<a href="/pelanggan" class="btn btn-success">Back to Pelanggan</a>
</div>
<div class="col-lg-8">
<form method="POST" action="{{ route('pelanggan.update',$data->id) }}">
@csrf
@method('PUT')
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Nama
Pelanggan</label>
<input value="{{ $data->nama }}" type="text" class="form-control"
id="nama"
name="nama">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Email</label>
<input type="text" class="form-control" id="email" name="email"
value="{{ $data->email }}">
</div>
<div class="mb-3">
<label for="exampleInputEmail1" class="form-label">Password</label>
<input type="text" class="form-control" id="password" name="password"
value="{{ $data->password }}">
</div>
<button type="Simpan" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection