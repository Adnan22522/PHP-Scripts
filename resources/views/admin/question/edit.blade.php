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
          <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
          <div class="border-bottom"></div>

          @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif

        @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif

      <form action="{{route('questions.update',$question->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="row">
        <div class="col-sm-8 col-md-8">
        <div class="form-group">
          <label for="exampleInputEmail1">Question</label>
          <input type="text" value="{{$question->questions}}" name="question" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write question here">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Option 1</label>
          <input type="text" name="option1" value="{{$question->option1}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write option here">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Option 2</label>
          <input type="text" name="option2" value="{{$question->option2}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write option here">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Option 3</label>
          <input type="text" name="option3" value="{{$question->option3}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write option here">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Option 4</label>
          <input type="text" name="option4" value="{{$question->option4}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write option here">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Correct Answar</label>
          <input type="text" name="ans" value="{{$question->rightAns}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write correct answer here">
        </div>
        </div>
      <div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3"></label>
          <select type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option>Please Select Your Course</option>
              @if(count($subjects)>0)
              @foreach($subjects as $subject)
                <option value="{{$subject->id}}" {{ $subject->id === $question->subject->id ? ' selected="selected"' : '' }}>{{$subject->subjects}}</option>
              @endforeach
              @endif
            
          </select>
        </div>

      </div>

  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

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