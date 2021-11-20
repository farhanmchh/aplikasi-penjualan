@extends('layout.main')

@section('page')

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2>Product</h2>
                @if (auth()->user()->role == 'admin')
                    <a href="/product/create" class="btn btn-primary btn-sm mb-3">Add</a>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card">
                        <div class="position-absolute px-4 py-1 rounded-end text-white text-center"
                            style="background-color: rgba(0, 0, 0, 0.7);">{{ $product->category->name }}</div>
                        <img src="https://source.unsplash.com/1600x900?{{ $product->category->name }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $product->price }}</h6>
                            <p class="card-text">{{ Str::limit($product->description, 50) }}</p>
                            <a href="/product/{{ $product->id }}" class="btn btn-primary btn-sm">Detail</a>
                            @if (auth()->user()->role == 'admin')
                                <a href="/product/{{ $product->id }}/edit" class="btn btn-success btn-sm">Edit</a>
                                <form class="d-inline" action="/product/{{ $product->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@endsection
