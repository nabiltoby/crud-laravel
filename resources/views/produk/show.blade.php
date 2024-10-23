@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Produk Detail</h1>
    <a href="/produk" class="btn btn-success">Back to Produk<span data-feather="arrow-left">
        </span></a>
</div>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <tbody>
            <tr>
                <td>No.</td>
                <td>{{ $data->id}}</td>
            </tr>
            <tr>
                <td>Nama Produk</td>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>{{ $data->harga}}</td>
            </tr>
            <tr>
                <td>Foto</td>
                <td>{{ $data->jumlah }}</td>
            </tr>
        </tbody>
    </table>    
</div>
@endsection