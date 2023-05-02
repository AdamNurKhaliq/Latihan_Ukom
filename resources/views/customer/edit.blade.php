@extends('template.index')
@section('konten')
<a href="{{route('dashboard')}}">
    <button type="button" class="btn btn-outline-primary mt-3" style="margin-left: 15px;">Back</button>
</a>
<div class="col-md-12 mt-5">
    <div class="bg-secondary rounded h-100 p-4">
        <form class="forms-sample" method="post" action="{{route('customer.update', $edit['id'])}}">
        @csrf
        @method('PUT')

        <h6 class="mb-4">Edit Data Customer</h6>
            <div class="form-floating mb-3">
                <input type="text" name="nama_customer" value="{{ $edit['nama'] }}" class="form-control p-input {{ $errors->first('nama_customer') ? "is-invalid":""}}"" id=" floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Nama Customer</label>
                @error('nama_customer')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="alamat" value="{{ $edit['alamat'] }}" class="form-control" id="floatingInput" placeholder="Alamat">
                <label for="floatingPassword">Alamat</label>
                @error('alamat')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="kota" value="{{ $edit['kota'] }}" class="form-control" id="floatingInput" placeholder="kota">
                <label for="floatingPassword">Kota</label>
                @error('kota')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" name="email" value="{{ $edit['email'] }}" class="form-control" id="floatingInput" placeholder="email">
                <label for="floatingPassword">Email</label>
                @error('email')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="number" name="hp" value="{{ $edit['hp'] }}" class="form-control" id="floatingInput" placeholder="hp">
                <label for="floatingPassword">No.Hp</label>
                @error('hp')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="perusahaan" value="{{ $edit['perusahaan'] }}" class="form-control" id="floatingInput" placeholder="perusahaan">
                <label for="floatingPassword">Perusahaan</label>
                @error('perusahaan')
                <small class="text-danger">
                    {{ $message }}
                </small>
                @enderror
            </div>
            <center>
                <div class="form-group mt-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </center>
    </form>
    </div>
</div>
@endsection