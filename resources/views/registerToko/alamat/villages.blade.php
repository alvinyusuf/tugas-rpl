@section('container')

@extends('layouts.auth')
{{-- {{ dd($villages) }} --}}
    <h1>Silahkan pilih desa</h1>
    {{-- {{ $data }} --}}
    <form action="/konfirmasi" method="get">
        <input type="hidden" name="nameToko" value="{{ $data['nameToko'] }}">
        <input type="hidden" name="telp" value="{{ $data['telp'] }}">
        <label for="village">Pilih Desa</label>
        <select name="village" id="village" class="form-control" required>
            <option value="">--Desa--</option>
            @foreach ($villages as $village)
                <option value="{{ $village['id'] }}">{{ $village['name'] }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">pilih desa</button>
    </form>
@endsection