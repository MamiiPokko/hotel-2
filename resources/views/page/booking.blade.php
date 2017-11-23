@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@section('content')

<style type="text/css">
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
<div class="container-fluid">
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3949.360892743861!2d98.2931585152152!3d8.16634779412209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3050461a68de4eeb%3A0x444b159312376548!2sJW+Marriott+Phuket+Resort+%26+Spa!5e0!3m2!1sth!2sth!4v1511407915974" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></center>
</div>

<div class="clear"></div>
<div class="center">
  <div class="room">
    <form method="post" action="http://localhost:3000/bookingroom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4" style="">Name : <input type="text" name="name" ></div>
          <div class="col-sm-4" style="">Surname : <input type="text" name="surname"></div>
          <div class="col-sm-4" style="">Address : <input type="text" name="address"></div>
        </div><br>
        <div class="row">
          <div class="col-sm-4" style="">E-mail : <input type="text" name="email"></div>
          <div class="col-sm-4" style="">Tel number : <input type="text" name="tel"></div>
        </div><br>
        <input type="submit" value="Submit" name="">
        <a href="{{URL('/rent')}}">
        <button type="button" class="btn-warning">Cancel</button></a>
      </div>
  </div>
</form>
@endsection 