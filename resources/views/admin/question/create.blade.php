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
          <h1 class="h3 mb-4 text-gray-800">Add Question</h1>
          <div class="border-bottom"></div>

          @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif

        @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
        @endif
        @if(session('error'))
          <div class="alert alert-danger">{{session('error')}}</div>
        @endif

      <form action="{{route('questions.store')}}" method="post">
        @csrf
        <div class="row">
        <div class="col-md-4">
        <div class="form-group">
        <label for="exampleInputEmail1" class="mt-3"></label>
          <select type="text" name="subject" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option>Please Select Your Course</option>
            @if(count($subjects)>0)
            @foreach($subjects as $subject)
              <option  value="{{$subject->id}}">{{$subject->subjects}}</option>
            @endforeach
            @endif
          </select>
        </div>
      </div>
      <div class="col-md-4"></div>
      <div class="col-md-4 mt-4">
          <button type="button" name="add" onclick="add_next()" class="btn btn-success" style="float: right;">Add More</button>
        </div>
      </div>
        <div id="dynamicTable">
        <div class="col-sm-12 col-md-12" style="border-style: groove;">
        <div class="form-group mt-2">
          <input type="text" name="question[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write question here" required/>
        </div>
        <div class="row">
        <div class="form-group col-sm-5 col-md-5">
          <input type="text" name="option1[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 1" required/>
        </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="form-group col-sm-5 col-md-5">
          <input type="text" name="option2[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 3" required/>
        </div>
        </div>
        <div class="row">
        <div class="form-group col-sm-5 col-md-5">
          <input type="text" name="option3[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 2" required/>
        </div>
        <div class="col-md-2 col-sm-2"></div>
        <div class="form-group col-sm-5 col-md-5">
          <input type="text" name="option4[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 4" required/>
        </div>
      </div>
        <div class="form-group col-sm-5 col-md-5">
          <input type="text" name="ans[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correct answer here" required/>
        </div>
      </div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    <div>
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

@section('scripts')
<script type="text/javascript">
   function add_next()
    {

    var i = 0;
       
   
        ++i;
   
        $("#dynamicTable").append('<div id="remove"><div class="mt-5"</div><div class="col-sm-12 col-md-12" style="border-style: groove"><div class="form-group mt-2"><input type="text" name="question[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Write question here" required/></div><div class="row"><div class="form-group col-sm-5 col-md-5"><input type="text" name="option1[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 1" required/></div><div class="col-md-2 col-sm-2"></div><div class="form-group col-sm-5 col-md-5"><input type="text" name="option2[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 3" required/></div></div><div class="row"><div class="form-group col-sm-5 col-md-5"><input type="text" name="option3[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 2" required/></div><div class="col-md-2 col-sm-2"></div><div class="form-group col-sm-5 col-md-5"><input type="text" name="option4[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Option 4" required/></div></div><div class="form-group col-sm-5 col-md-5"><input type="text" name="ans[]" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correct answer here" required/></div> <button type="button" style="float:right" class="btn btn-danger remove-tr" onclick="alerttt()">Remove</button></div></div>');
   
    $(document).on('click', '.remove-tr', function(){  
         $(this).parents('#remove').remove();
    });  
   }

   function alerttt(){
    alert('Are you sure You want to romove');
   }
   
</script>
@endsection()