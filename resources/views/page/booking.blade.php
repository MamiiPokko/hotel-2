@extends('layouts.app')

@section('content')

<form method="post" action="http://localhost:3000/bookingroom">
  First name:<br>
  <input type="text" name="name" >
  <br>
  Surname:<br>
  <input type="text" name="surname" >
  <br>
  Address:<br>
  <input type="text" name="address">
  <br>
  Email:<br>
  <input type="text" name="email">
  <br>
  tel:<br>
  <input type="text" name="tel" >
  <br><br>
  <input type="submit" value="Submit">
</form> 
@endsection 