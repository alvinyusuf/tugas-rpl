@section('container')

@extends('layouts.auth')
    <h1>Silahkan pilih kecamatan</h1>
    {{-- {{ $data }} --}}
    <form action="/desa" method="get">
        <input type="hidden" name="nameToko" value="{{ $data['nameToko'] }}">
        <input type="hidden" name="telp" value="{{ $data['telp'] }}">
        <label for="village">Pilih Kecamatan</label>
        <select name="village" id="village" class="form-control" required>
            <option value="">--Kecamatan--</option>
            @foreach ($districts as $district)
                <option value="{{ $district['id'] }}">{{ $district['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">pilih kecamatan</button>
    </form>
@endsection