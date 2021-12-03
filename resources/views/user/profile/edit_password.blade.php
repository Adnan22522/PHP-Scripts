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
          <h1 class="h3 mb-4 text-gray-800">Edit Password</h1>
          <div class="border-bottom"></div>

          @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif
 <center>   
<div class="container emp-profile">
        <form action="{{route('user.update',$user->id)}}" method="post">
        @csrf
                    
                    <div class="col-md-8 mt-4" >
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control" name="id">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="oldpass" placeholder="Old Password">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="newpass" placeholder="New Password">
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="password" class="form-control" name="confpass" placeholder="Confirm Password">
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                       <div class="col-md-2" ><br>
                            <input type="submit" class="btn btn-info" style="width: 100%;" name="submit" value="Done"/>
                        </div>
                </form>
           </div>
           </center>  

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




