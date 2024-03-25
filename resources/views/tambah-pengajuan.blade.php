@extends('layout.main')
@section('content')


<div class="main-panel">
<div class="content-wrapper">
<div class="row purchace-popup">
<div class="col-12 stretch-card grid-margin">
<div class="card card-secondary">
<form action="{{ route('admin.simpan') }}" method="POST">
    @csrf
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">FORM TAMBAH PENGAJUAN</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Nomor Pengajuan</label><label for="" class="text-danger">*</label>
                <input type="text" class="form-control" id="exampleInputEmail3" name="nomor_pengajuan" value="{{ old('nomor_pengajuan') }}" required>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Tanggal Pengajuan</label><label for="" class="text-danger">*</label>
                <input type="date" class="form-control" id="exampleInputEmail3" name="tanggal_pengajuan" value="{{ old('tanggal_pengajuan') }}" required>
                @error('tanggal_pengajuan')
                <small>{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputPassword4">Keterangan</label>
                <input type="text" class="form-control" id="exampleInputEmail3" name="keterangan" placeholder="Bila Ada">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
             <a href="{{ route('admin.index') }}" class="btn btn-light">Cancel</a>
            </form>
          </div>
        </div>
      </div>
    </div>
</form>
</div>
</div>
</div>
</div>



@endsection
