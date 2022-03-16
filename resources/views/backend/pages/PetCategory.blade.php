@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">detailes</th>
      <th scope="col">price</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
@foreach($categories as $singlecategory)
      <th scope="row">3</th>
      <td>{{$singlecategory->name}}</td>
      <td>{{$singlecategory->detailes}}</td>
      <td>{{$singlecategory->price}}</td>
      <td>{{$singlecategory->action}}
      <a class="btn btn-primary" href="">Edit</a>
      </td>
    </tr>

  </tbody>
  @endforeach
</table>
@endsection