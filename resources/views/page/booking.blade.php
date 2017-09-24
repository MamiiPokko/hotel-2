@extends('layouts.app')

@section('content')
<center>
  <form method="post" action="http://localhost:3000/createuser">
        First name:<br>
        <input type="text" name="name" >
        <br>
        Email:<br>
        <input type="text" name="email" >
        <br>
        Password:<br>
        <input type="password" name="password" >
        <br><br>
        <input type="submit" value="Submit">
      </form> </p>
      </center>
@endsection 