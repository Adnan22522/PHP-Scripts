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
          <h1 class="h3 mb-4 text-gray-800">Profile</h1>
          <div class="border-bottom"></div>

          @if(count($errors)>0)
            @foreach($errors->all() as $er)
              <div class="alert alert-danger"> {{$er}}</div>
            @endforeach
        @endif
 <center>   
<div class="container emp-profile">
        <form action="{{route('profile.update',$profile->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
                    <div class="col-md-12" >
                        <div class="profile-img" >
                            <img src="@if(!is_null($profile->user_pic)) {{asset('public/images/'.$profile->user_pic)}} @else {{asset('public/images/no-thumbnail.png')}} @endif " height="150" width="250" id="imgthumbnail" alt=""/>
                            </div>
                            <div class="file btn btn-lg btn-primary" style="font-size: 12px;border-radius: 0px;background-color:gray;width:250px;">
                                
                                <input type="file" class="form-control" value="{{$profile->user_pic}}" style="font-size: 12px;" name="thumbnail" />
                            </div>
                        </div>
                   
                    
                    <div class="col-md-8 mt-4" >
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="hidden" class="form-control" name="id" value="{{$profile->id}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="name" value="{{$profile->fullname}}" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control" name="phone" value="{{$profile->phone}}" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" name="address" value="{{$profile->address}}" placeholder="Address">
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




