@extends('layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Halaman Pelanggan Detail</h1>
    <a href="/pelanggan" class="btn btn-success">Back to Pelanggan<span data-feather="arrow-left">
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
                <td>Nama Pelanggan</td>
                <td>{{ $data->nama }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $data->email}}</td>
            </tr>
            <tr>
                <td>Password</td>
                <td>{{ $data->password }}</td>
            </tr>
        </tbody>
    </table>    
</div>
@endsection