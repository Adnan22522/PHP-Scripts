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
          <h1 class="h3 mb-4 text-gray-800">Add Subject</h1>
          <div class="border-bottom"></div>

          @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif

        @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif

      <form action="{{route('subjects.store')}}" method="post" class="mt-4">
        @csrf
        <div class="col-sm-8 col-md-8">
        <div class="form-group">
          <label for="exampleInputEmail1">Subject Name</label>
          <input type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Subject Name"><br>
          <label for="exampleInputEmail1">Time (in minute)</label>
          <input type="number" name="time" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Time">
        </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>

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