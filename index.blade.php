@extends('layouts.app')

@section('content')
<div class="">
    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">List of Products</a>
        <div class="row">
            <form class="form-inline" method="GET" action="{{ route('products.index') }}">
                <div class="col-md-8">
                    <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </div>
            </form>
            <a href="{{ route('products.create') }}" class="btn btn-primary mr-2">Add Product</a>
        </div>
    </nav>

    @if ($message = session('success'))
    <div class="p-2 alert alert-success alert-dismissible fade show" role="alert">
    {{ $message }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    @endif

    <div class="row mt-4 px-4">
        @foreach ($products as $product)
        <div class="col-3">
            <div class="card shadow">
                <img src="https://placehold.co/600x400?text=Product" class="card-img-top" alt="Fissure in Sandstone" />
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text">₱ {{ $product->price }}</p>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" data-mdb-ripple-init>Edit</a>
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $products->links() }}
</div>
@endsection