@extends('layouts.main')
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
          <h1 class="h3 mb-4 text-gray-800">Records</h1>
          <div class="border-bottom"></div>

          @if (session('message'))
              <div class="alert alert-success">
              {{ session('message') }}
              </div>
          @endif

           <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Quiz Records</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>subjects</th>
                      <th>Users</th>
                      <th>Start Time</th>
                      <th>End Time</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                   </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                        <th>subjects</th>
                        <th>Users</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if(count($quizes)>0)
                  @foreach($quizes as $quiz)
                    <tr>
                    <td>{{$quiz->id}}</td>
                    <td>{{$quiz->subject->subjects}}</td>
                    <td>{{$quiz->profile->fullname}}</td>
                    <td>{{$quiz->start_time}}</td>
                    <td>{{$quiz->end_time}}</td>
                      <td><form action="{{route('record.destroy',$quiz->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                        <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form></td>
                  </tr>
                  @endforeach
                  @else
                  <td colspan="6">No record Found</td>
                  
              @endif
                </tbody>
        </table>
        {{ $quizes->links() }}
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

@endsection()


