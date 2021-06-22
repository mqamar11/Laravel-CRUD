@extends('website.main.master')

@section('title', 'Show Student data')


@section('body')

<div class= "jumbotron bg-info text-center">
<h3 class='bg-warning p-3'> Student Detail:  </h3>
<img src="{{url('upload/',$student->image)}}" alt="" id="showimg" class='rounded-circle' >

<h2> ID: {{$student->id}} </h2>
<h2> Name: {{$student->name}} </h2>
<h2> Email: {{$student->email}} </h2>
<h2> Address: {{$student->address}} </h2>

</div>



@endsection



