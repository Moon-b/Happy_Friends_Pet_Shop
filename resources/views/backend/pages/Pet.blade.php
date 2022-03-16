@extends('welcome')
@section('content')
<a href="{{route('pet.form')}}" class="btn btn-success" style="float: right;">add new pet</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">pettype</th>
      <th scope="col">age</th>
      <th scope="col">lifespan</th>
      <th scope="col">height</th>
      <th scope="col">weight</th>
      <th scope="col">breed</th>
      <th scope="col">size</th>
      <th scope="col">color</th>
    </tr>
  </thead>
  <tbody>
@foreach($pets as $singlepet)
      <th scope="row">3</th>
      <td>{{$singlepet->pet_type}}</td>
      <td>{{$singlepet->age}}</td>
      <td>{{$singlepet->life_span}}</td>
      <td>{{$singlepet->height}}</td>
      <td>{{$singlepet->weight}}</td>
      <td>{{$singlepet->breed}}</td>
      <td>{{$singlepet->size}}</td>
      <td>{{$singlepet->color}}</td>
      <td>  
      <button type="button" style="background-color: green; color: white; padding: 10px; border-radius:10%;">Update</button> 
      <button type="button" style="background-color: red; color:white; padding:10px; border-radius:10%;">Delete</button>
      <button type="button" style="background-color: blue; color:white; padding: 10px; border-radius: 10%;">Edit</button>
      </td>
    </tr>
@endforeach
  </tbody>
  
</table>
@endsection