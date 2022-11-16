@section('container')

@extends('layouts.auth')

<h2>My Profile</h2>
<h1><i class="fas fa-user-alt"></i></h1>
  <table class="table">
    <td>
      <tr>
        <th>Username</th>
        <td>{{ auth()->user()->username }}</td>
      </tr>
      <tr>
        <th>Nama</th>
        <td>{{ auth()->user()->name }}</td>
      </tr>
      <tr>
        <th>Email</th>
        <td>{{ auth()->user()->email }}</td>
      </tr>
      <tr>
        <th>No Telepon</th>
        <td>{{ auth()->user()->telepon }}</td>
      </tr>
      <tr>
        <th>Alamat</th>
        <td>{{ auth()->user()->alamat }}</td>
      </tr>
    </td>
  </table>
  <button class="btn btn-primary"><a href="/" style="text-decoration: none;" class="text-light">kembali</a></button>
  {{-- <button class="btn btn-warning"><a href="/profile" style="text-decoration: none;" class="text-light">edit profil</a></button> --}}
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
        Edit Profile
    </button>
    
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Edit Profile</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
    
            <!-- Modal body -->
            <form action="/profile" method="post">
            <div class="modal-body">
                    <div class="mb-3 mt-3">
                      <label for="username" class="form-label">Username:</label>
                      <input type="text" class="form-control" id="username" placeholder="{{ auth()->user()->username }}" name="usernama" readonly>
                      <i>*Username tidak bisa diedit</i>
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="nama" class="form-label">Nama:</label>
                      <input type="text" class="form-control" id="nama" value="{{ auth()->user()->name }}" name="nama">
                    </div>
                    <div class="mb-3 mt-3">
                      <label for="email" class="form-label">Email:</label>
                      <input type="email" class="form-control" id="email" value="{{ auth()->user()->email }}" name="email">
                    </div>
                    <div class="mb-3">
                      <label for="tlp" class="form-label">No Telepon:</label>
                      <input type="text" class="form-control" id="tlp" value="{{ auth()->user()->telepon }}" name="tlp">
                    </div>
                    <div class="mb-3">
                      <label for="provinsi" class="form-label">Alamat:</label>
                      <input type="text" class="form-control" id="provinsi" value="{{ auth()->user()->alamat }}" name="provinsi">
                    </div>
                </div>
                
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
                
            </div>
        </div>
    </div>
@endsection