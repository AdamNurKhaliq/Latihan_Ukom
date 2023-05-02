@extends('template.index')
@section('konten')
<div class="col-sm-6 col-xl-3 mt-3" style="margin-left: 25px;">
    <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
        <i class="fa fa-chart-bar fa-3x text-primary"></i>
        <div class="ms-3">
            <p class="mb-2">Total Customer</p>
            <h6 class="mb-0">{{ $customer }}</h6>
        </div>
    </div>
</div>
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-md-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="row">
                    <div class="col-md-10">
                        <h6 class="mb-4">Customer</h6>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('customer.create')}}">
                            <button style="margin-left: 70px;" type="button" class="btn btn-outline-info">Tambah</button>
                        </a>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th style="width: 10%;">Nama</th>
                            <th style="width: 10%;">Alamat</th>
                            <th style="width: 10%;">Kota</th>
                            <th style="width: 10%;">Email</th>
                            <th style="width: 15%;">No.Hp</th>
                            <th>Perusahaan</th>
                            <th></th>
                        </tr>
                    </thead>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td scope="row">{{ $no }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->kota }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->hp }}</td>
                            <td>{{ $item->perusahaan }}</td>
                            <td>
                                <a href="{{route('customer.edit', $item->id)}}">
                                    <button type="button" class="btn btn-outline-warning">Edit</button>
                                </a>
                                <a href="{{route('customer.show', $item->id)}}">
                                    <button style="margin-left: 5px;" type="button" class="btn btn-outline-light">Show</button>
                                </a>
                                <a href="{{route('customer.delete', $item->id)}}">
                                    <button onclick="return confirm('Yakin?')" style="margin-left: 5px;" type="button" class="btn btn-outline-primary">Hapus</button>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @php
                    $no++;
                    @endphp
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection