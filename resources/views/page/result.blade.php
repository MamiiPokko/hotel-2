@extends('layouts.app')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

@section('content')
  <div class="content">
    <div class="container_12">
        <h3>Result Reservation</h3>



<table class="w3-table w3-bordered">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Address</th>
    <th>E-mail</th>
    <th>Tel</th>
    <th>PDF File</th>
  </tr>
  <tr>
    <th>{{$customers->name}}</th>
    <th>{{$customers->surname}}</th>
    <th>{{$customers->address}}</th>
    <th>{{$customers->email}}</th>
    <th>{{$customers->tel}}</th>
    <th><a target="_blank" href="{{URL('/pdf')}}/{{$customers->id}}"> <button type="button" class="btn btn-primary">PDF</button></a></th>
  </tr>
</table>
</div> 

@endsection 