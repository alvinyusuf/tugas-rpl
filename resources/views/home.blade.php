@section('container')
    @extends('layouts.main')
    <h2>Halaman Home</h2>
    <p>Halaman ini menampilkan sekilas produk</p>            
    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Dina Laundry</td>
            <td>Semarang</td>
            <td><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Detail</a></td>
        </tr>
        </tbody>
    </table>
    </div>
@endsection