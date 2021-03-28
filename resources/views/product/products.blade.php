@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2>List of products</h2>
<a href="{{url('/products/create')}}" type="button" class="mb-2 btn btn-info float-end">Add new product</a>    
</div>

@if(session()->has('status'))
  <div class="alert alert-success" role="alert">
    {{session()->get('status')}}
  </div> 
@endif

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">Amount</th>
        <th scope="col">Quantity</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product)
      <tr>
        <th scope="row">{{$product->id}}</th>
        <td>{{$product->title}}</td>
        <td>{{$product->amount}}</td>
        <td>{{$product->quantity}}</td>
        <td>
            <div class="btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/products/'.$product->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <a type="button" class="btn btn-danger">Delete</a>
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection