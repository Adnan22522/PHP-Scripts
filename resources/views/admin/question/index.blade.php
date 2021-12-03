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
          <h1 class="h3 mb-4 text-gray-800 col-md-10">Questions</h1>
          <a href="{{route('questions.create')}}" class="btn btn-info btn-sm col-md-2 border-bottom" style="float: right;height: 37px;padding-top: 7px;">Add Question</a></div>

          @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif

      <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Questions Table</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>questions</th>
                      <th>option1</th>
                      <th>option2</th>
                      <th>option3</th>
                      <th>option4</th>
                      <th>rightAns</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>questions</th>
                      <th>option1</th>
                      <th>option2</th>
                      <th>option3</th>
                      <th>option4</th>
                      <th>rightAns</th>
                      <th colspan="3" style="text-align: center;">Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  @if(count($questions)>0)
                  @foreach($questions as $question)
                  <tr>
                    <td>{{$question->id}}</td>
                    <td>{{$question->questions}}</td>
                    <td>{{$question->option1}}</td>
                    <td>{{$question->option2}}</td>
                    <td>{{$question->option3}}</td>
                    <td>{{$question->option4}}</td>
                    <td>{{$question->rightAns}}</td>
                    <td><a href="{{route('questions.edit',$question->id)}}" class="btn btn-success btn-sm" title="Edit Subject">Edit</a></td>
                    <td><form action="{{route('questions.destroy',$question->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                    <input type="submit" name="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form></td>
              </tr>
            @endforeach
            @endif
          </tbody>
                </table>
                {{ $questions->links() }}
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

@section('datatable')
<script src="{{asset('public/g/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/g/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/g/js/demo/datatables-demo.js')}}"></script>

@endsection()



