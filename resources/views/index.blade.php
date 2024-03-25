@extends('layout.main')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row purchace-popup">
            <div class="col-12 stretch-card grid-margin">
                <div class="card card-secondary">
                    <h2>Data Pengajuan</h2>
                    <form action="{{ url('/search') }}" method="GET" class="d-flex justify-content-center align-items-end">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="tanggal" class="sr-only">Tanggal Pengajuan</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Pengajuan">
                        </div>
                        <button type="submit" class="btn btn-dark mb-2 btn-rounded">
                            <i class="icon-magnifier"></i> Cari
                        </button>
                    </form>

<div>
    <div class="text-right">
       <a href="{{ route('admin.tambah-pengajuan') }}" class="btn btn-rounded btn-success mb-3"><i class="icon-plus">  </i>Tambah Pengajuan</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="font-weight-bold">NO</th>
                <th class="font-weight-bold">Nomor Pengajuan</th>
                <th class="font-weight-bold">Tanggal Pengajuan</th>
                <th class="font-weight-bold">Keterangan</th>
                <th class="font-weight-bold">Action</th>
            </tr>
        </thead>
                @foreach ($data as $d)
            <tr>
                <td>{{ $loop->iteration  }}</td>
                <td>{{ $d->nomor_pengajuan }}</td>
                <td>{{ $d->tanggal_pengajuan }}</td>
                <td>{{ $d->keterangan }}</td>
                <td>
                    <a href="{{ route('admin.detail',['id' => $d->id]) }}" class="btn btn-rounded btn-sm btn-secondary"><i class=" icon-info">  </i>Detail</a>
                    <a href="{{ route('admin.edit',['id' => $d->id]) }}" class="btn btn-rounded btn-sm btn-primary"><i class="icon-pencil">  </i>Edit</a>
                    <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" class="btn btn-rounded btn-sm btn-danger"><i class="icon-trash">  </i>Hapus</a>
                </td>

            </tr>

            <div class="modal fade" id="modal-hapus{{ $d->id }}">
                <div class="modal-dialog">
                  <div class="modal-content bg-secondary">
                    <div class="modal-header">
                      <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                      <p>Apakah kamu yakin ingin menghapus data pengajuan? <b>{{ $d->name }}</b></p>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <form action="{{ route('admin.user.delete',['id' =>$d->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                      <button type="button" class="btn btn-outline-Dark" data-dismiss="modal">Close</button>
                      <button type="Submit" class="btn btn-outline-Dark">Ya,Hapus data</button>
                    </form>
                    </div>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
                @endforeach
        </table>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
