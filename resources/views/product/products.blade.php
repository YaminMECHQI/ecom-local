@extends('layouts.app')

@section('content')
<div class="mt-3">
<h2>List of products</h2>
<a href="{{url('/products/create')}}" type="button" class="float-right mb-2 text-white btn btn-success">Add new product</a>    
</div>

@if(session()->has('status'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session()->get('status')}}.</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">title</th>
        <th scope="col">Amount</th>
        <th scope="col">Quantity</th>
        <th scope="col" class="text-center">Actions</th>
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
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/products/'.$product->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <form method="POST" action="{{ url('/products/'.$product->id) }}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection