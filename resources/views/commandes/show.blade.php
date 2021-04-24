@extends('layouts.app')

@section('content')
<h1>Details Of Commandes</h1>

@foreach ($commande->products as $product)
    <h2>{{$product->title}}</h2>
@endforeach

@endsection