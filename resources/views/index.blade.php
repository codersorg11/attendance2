@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">

    <div class="flex_container">
      <div style="flex-grow: 1" class="card flex_container_div">
        <div class="flex_container_inside">

          <div class="heading"><h3>TIMETABLE</h3></div>
          <div class="content">
            <p>This is the localized timetable for the college. Here you can view timetable for the college venue-wise that is for each venue you will get to see different courses or events and their timings arranged in a weekly manner.</p>

          </div>
          <div class="photo"><img class="image_size" src="{{ asset('img/timetable.png') }}"></img></div>
          <div class="down_bar"><div class="middle"><button class="btn btn-dark button_size" onclick="location.href='http://google.com';" type="button">View timetable</button></div></div>

        </div>

      </div>


      <div style="flex-grow: 1" class="card flex_container_div">
        <div class="flex_container_inside">

          <div class="heading"><h3>VENUE RESERVATION</h3></div>
          <div class="content">
            <p>Here is where you can reserve a room for a particular event, meeting or class. In the process of reserving a room you will have to specify your particulars, date, time and state the purpose of your reservation.  </p>

          </div>
          <div class="photo"><img class="image_size" src="{{ asset('img/venue.png') }}"></img></div>
          <div class="down_bar"><div class="middle"><button class="btn btn-dark button_size" onclick="location.href='http://google.com';" type="button">View timetable</button></div></div>

        </div>

      </div>



      <div style="flex-grow: 2" class="card flex_container_wide_div">

        <div class="flex_container_inside">

          <div class="heading"><h3>ATTENDANCE REPORT</h3></div>
          <div class="content">
            <p>Here is where attendance reports for both students and lecturers can be requested for each and every course. Also there is an option for generating students' attendance reports for tests and examinations.  </p>

          </div>
          <div class="photo"><img class="image_size_wide" src="{{ asset('img/report.png') }}"></img></div>
          <div class="down_bar"><div class="middle"><button class="btn btn-dark button_size" onclick="location.href='http://google.com';" type="button">View timetable</button></div></div>

        </div>
      </div>






    </div>
  </div>
</div>



@endsection
