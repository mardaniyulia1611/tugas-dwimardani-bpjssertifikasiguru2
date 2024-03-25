{{-- resources/views/user/profile.blade.php --}}
@extends('layout.main')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <h1>Profil Pengguna</h1>
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group text-center">
                                <div class="user-icon-circle mb-3">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                 <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ Auth::user()->email }}" readonly>
                            </div>
                        
                            <!-- Tambahkan field lain sesuai kebutuhan -->
                            <button type="submit" class="btn btn-primary mr-2">Update Profil</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
</div>
@endsection
