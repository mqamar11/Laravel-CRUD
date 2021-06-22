@extends('website.main.master')

@section('title', 'Add new Student')

@section('body')

<div class="container">

    <a href= "{{ route('student.index') }}" class = "btn btn-outline-warning btn-large"> < Back </a> 
<br> <br>
{{-- error bag message --}}

@if ($errors->any())
<div class= "alert alert-danger">
  <ul>
@foreach($errors->all() as $error)

   <li> {{$error}} </li>
   @endforeach

  </ul>
</div>
@endif

{{--end error bag --}}
<form action="{{route('student.store')}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="form-group">
  <label for="">UserName :</label>
<input type="text" name="name" id="" class="form-control" placeholder="Enter your name" value="{{old('name')}}" >
  <label for="">Email :</label>
  <input type="text" name="email" id="" class="form-control" placeholder="Enter your email" value="{{old('email')}}" >
   <label for="">Address :</label>
  <input type="text" name="address" id="" class="form-control" placeholder="Enter your address" value="{{old('address')}}" >
<br>
<label for="">Upload image :</label><br>
<input type="file" name="image" id=""   >
<br>

</div>
<input type= "submit" value= "Submit form" class= "btn btn-info btn-lg">

</form>

</div>



@endsection