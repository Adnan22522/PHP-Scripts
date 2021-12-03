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
          <h1 class="h3 mb-4 text-gray-800">Start your quiz</h1>
          <div class="border-bottom"></div>
          <div class="col-md-5">
          @if (session('message'))
              <div class="alert alert-success">
              {{ session('message') }}
              </div>
            @endif
          </div>

         <div class="col-md-5">
      <form action="{{route('quiz.start')}}" method="post">
        @csrf
        <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3">Select Your Course</label>
          <select type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option>Please Select Your Course</option>
            @if(count($subjects)>0)
            @foreach($subjects as $subject)
              @if(count($subject_record)>0)
                @foreach($subject_record as $check)
                  @if($subject->id!==$check->subject_id)
                  <option  value="{{$subject->id}}">{{$subject->subjects}}</option>
                  @endif
                @endforeach
              @else
              <option  value="{{$subject->id}}">{{$subject->subjects}}</option>
              @endif
              
            @endforeach
            @endif
          </select>
        </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Start</button>
    </form>
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