@section('container')

@extends('layouts.auth')

    <h1>HALAMAN REGISTER TOKO</h1>

    <form action="/provinsi" method="get">
        @csrf
        <div class="mb-3 mt-3">
            <label for="nametoko" class="form-label">Name Toko:</label>
            <input type="text" class="form-control" id="nametoko" placeholder="Enter name toko" name="nameToko">
        </div>
        <div class="mb-3 mt-3">
            <label for="telp" class="form-label">No Telp:</label>
            <input type="text" class="form-control" id="telp" placeholder="Enter telp" name="telp">
        </div>
        {{-- <a href="/provinsi">pilih alamat</a>
        <label for="province">Pilih Provinsi</label>
        <select name="provice" id="province" class="form-control" required>
            <option value="">--Provinsi--</option>
            @foreach ($data as $datum)
                <option value="{{ $datum['id'] }}">{{ $datum['name'] }}</option>
            @endforeach
        </select> --}}
        <button type="submit" class="btn btn-primary">Pilih Alamat</button>
    </form>
@endsection
{{-- 



 @section('container')
 @extends('layouts.auth')
 @foreach ($data as $datum)
     {{ $datum['name'] }}
 @endforeach
 @endsection --}}