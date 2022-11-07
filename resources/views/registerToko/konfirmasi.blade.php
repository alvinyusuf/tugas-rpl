@section('container')

@extends('layouts.auth')
{{-- {{ dd($data) }} --}}
<h2>Konfirmasi Data</h2>
  <p>Apakah data berikut sudah benar?</p>            
  <table class="table">
    <td>
      <tr>
        <th>Nama Toko</th>
        <td>{{ $data['nameToko'] }}</td>
      </tr>
      <tr>
        <th>No. Hp</th>
        <td>{{ $data['telp'] }}</td>
      </tr>
      <tr>
        <th>Provinsi</th>
        <td>{{ $data['provinsi'] }}</td>
      </tr>
      <tr>
        <th>Kabupaten/Kota</th>
        <td>{{ $data['kota'] }}</td>
      </tr>
      <tr>
        <th>Kecamatan</th>
        <td>{{ $data['kecamatan'] }}</td>
      </tr>
      <tr>
        <th>Desa/Kelurahan</th>
        <td>{{ $data['desa'] }}</td>
      </tr>
    </td>
  </table>
  <div class="d-block">
    <form action="/registertoko" method="get">
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <form action="/registertoko" method="post" class="mt-3">
      <input type="hidden" value="{{ $data['nameToko'] }}" name="nameToko">
      <input type="hidden" value="{{ $data['telp'] }}" name="telp">
      <input type="hidden" value="{{ $data['provinsi'] }}" name="provinsi">
      <input type="hidden" value="{{ $data['kota'] }}" name="kota">
      <input type="hidden" value="{{ $data['kecamatan'] }}" name="kecamatan">
      <input type="hidden" value="{{ $data['desa'] }}" name="desa">
      <button type="submit" class="btn btn-success">Ok</button>
    </form>
  </div>
@endsection