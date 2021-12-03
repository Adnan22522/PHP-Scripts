@extends('layouts.main')
@section('table')
<link rel="stylesheet" type="text/css" href="{{asset('public/g/vendor/datatables/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection
@section('content')

<div id="wrapper">

 @include('admin.inc.slidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         @include('admin.inc.top_navbar')

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 border-bottom">Users</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Users Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Email</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Email</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if(count($users)>0)
                  @foreach($users as $user)
                  <tr>
                    <td>{{$user->id}}</td>
                    <td style="width: 20px;">
                        <img src="@if(!is_null($user->profile->user_pic)){{asset('public/images/'.$user->profile->user_pic)}}@else{{asset('public/images/no-thumbnail.jpg')}}@endif" style="width:90%;height:50px;border-radius: 7px; cursor:pointer" 
                        onclick="onClick(this)" class="w3-hover-opacity">
                      </td>
                    <td>{{$user->profile->fullname}}</td>
                    <td>{{$user->profile->phone}}</td>
                    <td>{{$user->profile->address}}</td>
                    <td>{{$user->email}}</td>
                    </tr>
                  </tr>
            @endforeach
            @endif
          </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

     @include('admin.inc.footer')
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <div id="modal01" class="w3-modal" onclick="this.style.display='none'" >
  <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
  <div class="w3-modal-content w3-animate-zoom" style="width:50%;height: 100%;margin-top:-5%;">
    <img id="img01" style="width:100%;height: 100%;">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

@endsection()
@section('datatable')
<script src="{{asset('public/g/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/g/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/g/js/demo/datatables-demo.js')}}"></script>

@endsection()

