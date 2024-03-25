@extends('layout.main')
@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        <H1>DASHBOARD</H1>
      <div class="row purchace-popup">
        <div class="col-10 stretch-card grid-margin">
        </div>
      </div>
      <!-- Quick Action Toolbar Starts-->
      <div class="row quick-action-toolbar">
        <div class="col-md-12 grid-margin">
          <div class="card">
            <div class="card-header d-block d-md-flex">
              <h5 class="mb-0">FITUR</h5>
              <p class="ml-auto mb-0">cek pengajuanmu??<i class="icon-bulb"></i></p>
            </div>
            <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
              <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <a href="{{ route('admin.index') }}" type="button" class="btn px-0"> <i class="icon-wallet mr-2"></i>PENGAJUAN</a>
            </div>
              <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                <a href="{{ route('admin.profile') }}" type="button" class="btn px-0"> <i class="icon-user mr-2"></i>PENGGUNA</a>

              </div>
              <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
                <a href="{{ route('admin.password.form') }}" type="button" class="btn px-0"> <i class="icon-pencil mr-2"></i>UBAH PASSWORD</a>
              </div>
              <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
              <a href="{{ route('logout') }}" type="button" class="btn px-0"> <i class="icon-logout mr-2"></i>LOG OUT</a>
             </div>
              <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">

            </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Quick Action Toolbar Ends-->


    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <!-- partial -->
  </div>

@endsection
