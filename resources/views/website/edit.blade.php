@extends('website.main.master')


@section('title', 'Edit Student')



@section('body')


<div class="container">

    <a href= "{{ route('student.index') }}" class = "btn btn-outline-warning btn-large"> < Back </a> 
<br> <br>
{{-- error bag message --}}

{{-- @if ($errors->any())
<div class= "alert alert-danger">
  <ul>
@foreach($errors->all() as $error)

   <li> {{$error}} </li>
   @endforeach

  </ul>
</div>
@endif --}}

{{--end error bag --}}
<div class='row'>
  <div class='col-lg-6'>
<form action="{{route('student.update', $student->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method("PUT")      {{--  Update method     --}}
<div class="form-group">
  <label for="">UserName :</label>
<input type="text" name="name" id="" class="form-control" placeholder="Enter your name" value="{{$student->name}}" >
  <label for="">Email :</label>
<input type="text" name="email" id="" class="form-control" placeholder="Enter your email" value="{{$student->email}}" >
   <label for="">Address :</label>
  <input type="text" name="address" id="" class="form-control" placeholder="Enter your address" value="{{$student->address}}" >
<br>

<label for="">Upload image : </label><br>
<input type="file" name="image" id=""   >
<br>
<input type="hidden" name="my_image" id="" value="{{$student->image}}"  >



</div>
<input type= "submit" value= "Update" class= "btn btn-info btn-lg">

</form>
  </div>
  <div class = 'col-lg-6 bg-dark'>   
<div class="d-flex justify-content-center">  
<div>      
  <h2 class="text-center text-white">Profile image: </h2>
<img src="{{url('upload/', $student->image)}}" alt="" id="editimg" class="rounded" >
</div>

</div>    
  
  
  </div>

</div>

</div>




@endsection