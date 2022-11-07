@section('container')

@extends('layouts.auth')
    <h1>Silahkan pilih provinsi</h1>
    <form action="/kota" method="get">
            <input type="hidden" name="nameToko" value="{{ $data['nameToko'] }}">
            <input type="hidden" name="telp" value="{{ $data['telp'] }}">
        <label for="province">Pilih Provinsi</label>
        <select name="provice" id="province" class="form-control" required>
            <option value="">--Provinsi--</option>
            @foreach ($provinces as $province)
                <option value="{{ $province['id'] }}">{{ $province['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">pilih provinsi</button>
    </form>
@endsection
