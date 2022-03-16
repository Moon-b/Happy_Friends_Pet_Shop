@extends('welcome')
@section('content')
<form action="{{route('pet.post')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">pet_type</label>
    <input name ='pet_type' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter pet_type">
   
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">age</label>
    <input name ='age' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter age">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">life_span</label>
    <input name ='life_span' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter life_span">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">height</label>
    <input name ='height' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter height">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">weight</label>
    <input name ='weight' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter weight">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">breed</label>
    <input name ='breed' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter breed">
 
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">size</label>
    <input name ='size' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter size">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">color</label>
    <input name ='color' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter color">
 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection