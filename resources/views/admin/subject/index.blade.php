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
          <div class="row">
          <h1 class="h3 mb-4 text-gray-800 col-md-10">Subjects</h1>
          <a href="{{route('subjects.create')}}" class="btn btn-info btn-sm col-md-2 border-bottom" style="float: right;height: 37px;padding-top: 7px;">Add Subject</a></div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Subjects Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                      <th>#</th>
                      <th>Subjects</th>
                      <th>Time(min)</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Subjects</th>
                      <th>Time(min)</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                  </tfoot>
<tbody>
            @if(count($subjects)>0)
            @foreach($subjects as $subject)
            <tr>
              <td>{{$subject->id}}</td>
              <td>{{$subject->subjects}}</td>
              <td>{{$subject->time}}</td>
              <td><a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-success btn-sm" title="Edit Subject">Edit</a></td>
              <td><form action="{{route('subjects.destroy',$subject->id)}}" method="post">
                @csrf
                @method('DELETE')
              <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
              </form></td>
            </tr>
            @endforeach
            @endif
          </tbody>
                </table>
                {{ $subjects->links() }}
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

