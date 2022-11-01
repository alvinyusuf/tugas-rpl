@section('container')

@extends('layouts.auth')

    <h1>HALAMAN REGISTER TOKO</h1>

    <form action="/registertoko" method="post">
        @csrf
        <div class="mb-3 mt-3">
            <label for="nametoko" class="form-label">Name Toko:</label>
            <input type="text" class="form-control" id="nametoko" placeholder="Enter name toko" name="nametoko">
        </div>
        <div class="mb-3 mt-3">
            <label for="telp" class="form-label">No Telp:</label>
            <input type="text" class="form-control" id="telp" placeholder="Enter telp" name="telp">
        </div>
        <label for="province">Pilih Provinsi</label>
        <select name="provice" id="province" class="form-control" required>
            <option value="">--Provinsi--</option>
            @foreach ($data as $datum)
                <option value="{{ $datum['id'] }}">{{ $datum['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <div class="text-center mt-3">
        <h6 class="m-0">Sudah Punya Akun?</h6>
        <a href="/login" class="btn btn-success">Masuk</a>
    </div>
@endsection
{{-- 



 @section('container')
 @extends('layouts.auth')
 @foreach ($data as $datum)
     {{ $datum['name'] }}
 @endforeach
 @endsection --}}