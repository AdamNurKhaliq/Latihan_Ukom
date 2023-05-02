@extends('template.index')
@section('konten')
<a href="{{route('dashboard')}}">
<button type="button" class="btn btn-outline-primary mt-3" style="margin-left: 15px;">Back</button>
</a>
<div class="col-md-12 mt-5">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Data Customer</h6>

        <center>
            <h3>Nama : {{$show['nama']}}</h3>
            <h3>Alamat : {{$show['alamat']}}</h3>
            <h3>Kota : {{$show['kota']}}</h3>
            <h3>Email : {{$show['email']}}</h3>
            <h3>No.HP : {{$show['hp']}}</h3>
            <h3>Perusahaan : {{$show['perusahaan']}}</h3>
        </center>
    </div>
</div>
@endsection