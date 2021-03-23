@extends('layouts.app')

@section('content')
<div class="mt-3">
    <h2>Create new product</h2>
</div>

<div class="mt-3 card">
    <div class="card-body">
        <form method="POST" action="{{ url('/products/store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="text" class="form-control" name="amount" id="amount">
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" name="quantity" id="quantity">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection