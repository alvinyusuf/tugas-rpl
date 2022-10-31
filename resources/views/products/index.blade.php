@section('container')
    @extends('layouts.main')
    <h2>Halaman Produk</h2>
    <p>Halaman ini menampilkan semua produk</p>            
    <table class="table table-hover">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Paket</th>
            <th>action</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Dina Laundry</td>
            <td>Semarang</td>
            <td>
                <ul>
                    <li>Cuci Kering</li>
                    <li>Cuci Basah</li>
                </ul>
            </td>
            <td><a href="" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Detail</a></td>
        </tr>
        </tbody>
    </table>
    </div>
@endsection