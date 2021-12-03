@extends('layouts.main')
@section('content')

  <script type="text/javascript">
     var seconds = {{$subject->time}}*60;
      function secondPassed() {
          var minutes = Math.round((seconds - 30)/60),
              remainingSeconds = seconds % 60;

          if (remainingSeconds < 10) {
              remainingSeconds = "0" + remainingSeconds;
          }

          document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;
          if (seconds == 0) {
              clearInterval(countdownTimer);
             //form1 is your form name
            document.getElementById("form1").submit.click();
          } else {
              seconds--;
          }
      }
      var countdownTimer = setInterval('secondPassed()', 1000);

  </script>

  <!-- Page Wrapper -->

<div id="wrapper">

 @include('user.inc.slidebar')

 <style type="text/css">
    /* Base */

/* carrent */
.feature-car-rent-box-1 {
  position: relative;
  padding: 30px;
  background: #fff; }
  .feature-car-rent-box-1:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 10px;
    width: 100%;
    background: #007bff; }
  .feature-car-rent-box-1 ul {
    padding: 0;
    margin: 0; }
    .feature-car-rent-box-1 ul li {
      display: block;
      padding: 20px 0;
      list-style: none;
      border-bottom: 1px solid #efefef;
      margin: 0;
      position: relative; }
      .feature-car-rent-box-1 ul li .spec {
        position: absolute;
        right: 0; }
      .feature-car-rent-box-1 ul li:last-child {
        border-bottom: none; }

.p-3 {
    padding: 1rem!important;
}

.align-items-center {
    -webkit-box-align: center!important;
    -ms-flex-align: center!important;
    align-items: center!important;
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
          <h1 class="h3 mb-4 text-gray-800 border-bottom">Quiz</h1>
          <div class="row" >
            Remaining Time
          <time id="countdown" class="col-md-1" ></time>
        </div>

          @if(session('message'))
          <div class="alert alert-success">{{session('message')}}</div>
          @endif

            <form action="{{route('quiz.store')}}" name="form1" id="form1" method="post">
            @csrf
            <input type="hidden" name="time" value="@php echo date('Y-m-d H:i:s'); @endphp">
            <div class="col-lg-5" style="margin-left: 20%;">
                <div class="feature-car-rent-box-1">
                  @php
                    $i=1;
                    $j=1;
                    $count = 1;
                  @endphp
                  @if(count($questions)>0)
              @foreach($questions as $question)
              <div class="questions q{{$count}}" @if($count != '1') style="display: none;" @endif>
                  <ul>
                    <li>
                      <h4>{{$i}}.&nbsp;{{$question->questions}}</h4>
                    </li>
                      <input type="hidden" name="qid[]" value="{{$question->id}}" >
                      <input type="hidden" name="sid" value="{{$question->subject_id}}">
                      
                    <li>
                      {{$j}}.&nbsp; <input type="radio" name="option{{$question->id}}" value="{{$question->option1}}">&nbsp;{{$question->option1}}
                    </li>
                    <li>@php $j++ @endphp
                      {{$j}}.&nbsp;<input type="radio" name="option{{$question->id}}" value="{{$question->option2}}">&nbsp;{{$question->option2}}
                    </li>
                    <li>@php $j++ @endphp
                      {{$j}}.&nbsp;<input type="radio" name="option{{$question->id}}" value="{{$question->option3}}">&nbsp;{{$question->option3}}
                    </li>
                    <li>@php $j++ @endphp
                      {{$j}}.&nbsp;<input type="radio" name="option{{$question->id}}" value="{{$question->option4}}">&nbsp;{{$question->option4}}
                    </li>
                    <li></li>
                  </ul>
                  @if($count != count($questions))
                  <button type="button" class="btn btn-primary" onclick="next_question('{{$count}}')">Next Question</button>
                  @endif
                  @if($count == count($questions))
                    <input type="submit" name="submit" class="ml-auto btn btn-primary">
                    @endif
                </div>
                    @php 
                    $j++;
                    $i++;
                    $count++; @endphp
                   @endforeach
              @endif
              
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

  <script type="text/javascript">
    function next_question(value)
    {
      var new_question = Number(value)+1;
      $('.questions').hide();
      $('.q'+new_question).show();
    }
  </script>


@endsection()