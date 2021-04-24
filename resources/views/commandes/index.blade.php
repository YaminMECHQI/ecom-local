@extends('layouts.app')

@section('content')
<h1>List Of Commandes</h1>

<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Status</th>
        <th scope="col">Reference</th>
        <th scope="col" class="text-center">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($commandes as $commande)
      <tr>
        <th scope="row">{{$commande->id}}</th>
        <td>{{$commande->status}}</td>
        <td>{{$commande->reference}}</td>
        <td>
            <div class="float-right btn-group" role="group" aria-label="Basic example">
                <a href="{{url('/commandes/'.$commande->id.'/edit')}}" type="button" class="btn btn-primary">Edit</a>
                <a href="{{url('/commandes/'.$commande->id)}}" type="button" class="btn btn-info text-white">show</a>
            </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
