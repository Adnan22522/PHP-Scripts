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
          <h1 class="h3 mb-4 text-gray-800">Your Result</h1>

      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Quiz</th>
              <th>Total Questions</th>
              <th>Course</th>
              <th>Total Marks</th>
              <th>Your Result</th>
              <th>Attempted Questions</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @if(count($quizes)>0)
            @foreach($quizes as $quiz)
            <tr>
            <td>{{$quiz->id}}</td>
            <td>{{count($quiz->results)}}</td>
            <td>{{($quiz->subject->subjects)}}</td>
            <td>{{($quiz->marks->total_marks)}}</td>
            <td>{{($quiz->marks->result)}}</td>
            <td>{{($quiz->marks->attempt_questions)}}</td>
            
              <td><a href="{{route('result.viewrecord',$quiz->id)}}" class="btn btn-success btn-sm" title="View All Record">View Record</a></td>
              
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
