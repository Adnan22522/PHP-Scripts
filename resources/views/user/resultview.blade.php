@extends('layouts.main')
@section('content')

<div id="wrapper">

 @include('user.inc.slidebar')

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

         @include('user.inc.top_navbar')

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">{{ucfirst($course->subject->subjects)}} Result</h1>
          <div class="border-bottom"></div>

      <div class="row mt-5">
      <h1 class="col-md-0.5 ml-3" style="color:green;margin-top: -22px;"><b>.</b></h1><h6 class="col-sm-5">Right Answer</h5>
      </div>

      <div class="row">
      <h1 class="col-md-0.5 ml-3" style="color:red;margin-top: -22px;"><b>.</b></h1><h6 class="col-sm-5">Wrong Answer</h5>
      </div>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Questions</th>
              <th>Your Answer</th>
              <th>Right Answer</th>
            </tr>
          </thead>
          <tbody>
            @if(count($records)>0)
            @foreach($records as $record)
            <tr>
              <td>{{$record->id}}</td>
              <td>{{$record->question->questions}}</td>
              
                @if($record->rightAns==[] && $record->wrongAns==[])
                <td>unattempted</td>
                @else
                @if($record->rightAns==[])
                <td style="color:red;">{{$record->wrongAns}}</td>
                @else
                <td style="color:green;">{{$record->rightAns}}</td>
                @endif
                @endif

              <td>{{$record->question->rightAns}}</td>
            </tr>
            @endforeach
            @endif
          </tbody>
        </table>
      </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

     @include('user.inc.footer')
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection()
