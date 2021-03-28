@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Edit: {{$product->title}} </h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/products/'.$product->id.'/update') }}">
            @csrf
            @method('PUT')
            @include('product.form')
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection