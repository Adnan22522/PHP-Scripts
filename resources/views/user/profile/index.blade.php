@extends('layouts.main')
@section('content')

<div id="wrapper">

 @include('user.inc.slidebar')

 <style type="text/css">
   .upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btnn {
  border: 1px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
 </style>

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
          <div class="row">
          <h1 class="h3 mb-4 text-gray-800 col-md-6">Dashboard</h1>
          <div class="col-md-4">            
            </div>

                    <div class="col-md-2">
                     
                    </div>
                </div>

                @if(count($errors)>0)
              @foreach($errors->all() as $er)
                <div class="alert alert-danger"> {{$er}}</div>
              @endforeach
            @endif

            @if (session('message'))
              <div class="alert alert-success">
              {{ session('message') }}
              </div>
            @endif

          <div class="border-bottom"></div>
          <form action="{{route('profile.update',$user->id)}}" method="post" style="float: right;" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          <div class="container emp-profile" >
                <div class="row">
                    <div class="col-md-2" >
                        <div class="profile-img" >
                            <img src="@if(!is_null($user->profile->user_pic)){{asset('public/images/'.$user->profile->user_pic)}}@else{{asset('public/images/no-thumbnail.png')}}@endif" height="170" width="230" alt=""/ style="margin-top: 50px;" id="imgthumbnail">
                            <div class="upload-btn-wrapper">
                              <button class="btnn" style="width: 230px;">Upload a file</button>
                              <input type="file" name="image" value="{{$user->profile->user_pic}}" id="thumbnail"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-8" style="margin-top: 70px;">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="hidden" name="id" value="{{$user->id}}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="name" value="{{$user->profile->fullname}}" placeholder="Name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="email" value="{{$user->email}}" placeholder="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" name="phone" value="{{$user->profile->phone}}" placeholder="Phone Number" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="address" value="{{$user->profile->address}}" placeholder="Address" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>New Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="Password" name="newpass" placeholder="New Password (optional)" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Confirm Password</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="Password" name="confpass" placeholder="Confirm Password (optional)" class="form-control">
                                            </div>
                                            </div>
                                      </div>
                                  </div>
                              </div>
                            <input type="submit" class="btn btn-info " name="submit" value="Save Profile"/ style="margin-left: 15px;">   
                        </div>
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
  $('#thumbnail').on('change',function(){
    var file= $(this).get(0).files;
    var reader= new FileReader();
    reader.ReadAsDataURL(file[0]);
    reader.addEventLestener("load",function(e){
        var image= e.target.result;
        $('#imgthumbnail').attr('src', image);
    });

  }); 

</script>
@endsection()