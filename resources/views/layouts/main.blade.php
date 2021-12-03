<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Online Quiz</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/g/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/g/css/sb-admin-2.min.css')}}" rel="stylesheet">
  @yield('table')
</head>

<body id="page-top" >


  <!-- Page Wrapper -->
  @yield('content')

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  @yield('scripts')
  <script src="{{asset('public/g/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/g/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/g/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/g/js/sb-admin-2.min.js')}}"></script>
  @yield('datatable')

</body>

</html>

<script type="text/javascript">

    // var timeleft= 1*60;

    // function timeout(){

    //   var minute= Math.floor(timeleft/60);
    //   var second= timeleft%60;
    //   if(timeleft<=0){
    //     clearTimeout(tm);
    //     document.getElementById("form1").submit();
    //   }
    //   else{
    //     document.getElementById("time").innerHTML=minute+":"+second;
    //   }
    //   timeleft--;
    //   var tm= setTimeout(function(){timeout()},100);
    // }

  </script>
