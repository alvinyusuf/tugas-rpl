@section('container')

@extends('layouts.auth')
{{-- {{ dd($alamat) }} --}}
    <h1>Silahkan pilih kota</h1>
    {{-- {{ $data }} --}}
    <form action="/kecamatan" method="get">
        <input type="hidden" name="nameToko" value="{{ $data['nameToko'] }}">
        <input type="hidden" name="telp" value="{{ $data['telp'] }}">
        <label for="district">Pilih Kota</label>
        <select name="district" id="province" class="form-control" required>
            <option value="">--Kota--</option>
            @foreach ($states as $state)
                <option value="{{ $state['id'] }}">{{ $state['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">pilih kota</button>
    </form>
@endsection