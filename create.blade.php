@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1>Add Product</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" required
                required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Price" step="0.01" required>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Description</label>
            <textarea type="text" name="description" class="form-control" id="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save Product</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary mr-2">Cancel</a>
    </form>
</div>
@endsection