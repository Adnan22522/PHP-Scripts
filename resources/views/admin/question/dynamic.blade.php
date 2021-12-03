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

        <div class="container">
        <div id="dvMain">
            <label id="lblNoOfRec"> Enter Value For Create No Of Questions </label>
            <div class="row">
            <input type="text" class="form-control col-sm-6 col-md-6" style="border-radius: 2px;" id="txtNoOfRec" />
            <input type="button" class="btn btn-primary" style="border-radius: 2px;" value="CREATE" onclick="load()" />
        </div>
        
        <br />
        <form action="{{route('questions.store')}}" method="post">
        @csrf
        
          <select type="text" name="subject" class="form-control col-md-7" id="exampleInputEmail1" aria-describedby="emailHelp">
            <option>Please Select Your Course</option>
            
          </select>
          </div>
      
        <div id="AddControll">
        	

        </div>

    </form>
    </div>

      <!-- <table>
    <tr>
        <th> S.No </th>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Gender </th>
        <th> City </th>
    </tr>

    <tr>
        <td>
            <input type="text" id="txtFName" placeholder="First Name" autofocus />
        </td>

        <td>
            <input type="text" id="txtLName" placeholder="Last Name" />
        </td>

        <td>
            <input type="radio" name="Gender" value="M" /> Male <br />
            <input type="radio" name="Gender" value="F" /> Female
        </td>

        <td>
            <select id="ddlCity">
                <option value="0"> - Select City - </option>
                <option value="1"> Porbandar </option>
                <option value="2"> Jamnagar </option>
                <option value="3"> Rajkot </option>
                <option value="4"> Baroda </option>
                <option value="5"> Mumbai </option>
            </select>
        </td>
    </tr>
</table>
 -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

     @include('user.inc.footer')
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

<script type="text/javascript">
	
// JavaScript source code



function load() {
    //alert("Working...");
    $("#txtNoOfRec").focus();

        $("#AddControll").empty();
        var NoOfRec = $("#txtNoOfRec").val();

        //alert("" + NoOfRec);

        if (NoOfRec > 0) {
            createControll(NoOfRec);
        }
}

function createControll(NoOfRec) {
    var tbl = "";

    tbl = "<table class='table table-bordered table-hover'>"+
                "<tr>"+
                    "<th style='width:20px'> S.No </th>"+
                    "<th> Questions </th>"+
                "</tr>";

    for (i = 1; i <= NoOfRec; i++) {
        tbl += "<tr>" +
                    "<td>" + i + "</td>" +

                    "<td>"+
                        "<input type='text' id='txtFName' name='question[]' class='form-control' placeholder='Write Question Here' autofocus required/>"+
                    "</td>"+

                "</tr>";
    }
    tbl += "</table>"+
    				"<input type='submit' id='txtFName' class='btn btn-primary' autofocus required/>";
    				

    $("#AddControll").append(tbl);
}	

</script>

@endsection()




