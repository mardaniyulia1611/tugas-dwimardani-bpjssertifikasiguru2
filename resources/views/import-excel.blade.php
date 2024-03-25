@extends('layout.main')
@section('content')


<div class="main-panel">
<div class="content-wrapper">
<div class="row purchace-popup">
<div class="col-12 stretch-card grid-margin">
<div class="card card-secondary">
<form action="{{ route('admin.import-proses') }}" method="POST">
    @csrf
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">FORM IMPORT EXCEL</h4>
            <form class="forms-sample">
              <div class="form-group">
                <label for="exampleInputName1">Pilih File</label>
                <input type="file" class="form-control" id="exampleInputEmail3" name="file" required>
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
