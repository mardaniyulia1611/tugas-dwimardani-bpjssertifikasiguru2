@extends('layout.main')
@section('content')


<div class="main-panel">
<div class="content-wrapper">
<div class="row purchace-popup">
<div class="col-12 stretch-card grid-margin">
<div class="card card-secondary">
<form action="{{ route('admin.update',['id' => $data->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="col-20 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-4">Pengajuan Detail</h4>

            <div class="text-left">
                <a href="{{ route('admin.import-excel') }}" class="btn btn-rounded btn-primary mb-4"><i class="icon-docs">  </i>IMPORT EXCEL</a>
            </div>
            <div class="text-right">
                <a href="{{ route('admin.export-excel', ['id' => $data->id]) }}" class="btn btn-rounded btn-success mb-4"><i class="icon-printer">  </i>EXPORT EXCEL</a>
                <a href="{{ route('admin.detail',['id'=> $data->id]) }}?export=pdf" class="btn btn-rounded btn-danger mb-4"><i class="icon-printer">  </i>EXPORT PDF</a>
            </div>
            <div class="table-responsive">
         <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>NO</th>
                <th>Nomor Pengajuan</th>
                <th>Tanggal Pengajuan</th>
                <th>Keterangan</th>
                <th>Nominal</th>
            </tr>
        </thead>
           @foreach($data->detail as $detail)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <th>{{ $data->nomor_pengajuan }}</th>
                <th>{{ $data->tanggal_pengajuan }}</th>
                <th>{{ $data->keterangan}}</th>
                <td>{{ $detail->nominal }}</td>

            </tr>
            @endforeach
            </table>

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
