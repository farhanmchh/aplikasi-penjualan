@extends('layout.main')

@section('page')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="row justify-content-between">
          <div class="col-sm-3">
            <h2 class="d-inline">Detail</h2>
          </div>
          <div class="col-sm-3 text-right">
            <a href="/product" class="btn btn-primary btn-sm mb-3">Back</a>
          </div>
        </div>
        <div class="card text-center">
          <h2 class="card-header">
            {{ $product->name }}
          </h2>
          <div>
            <div class="position-absolute px-4 py-1 rounded-end text-white text-center rounded-right"
              style="background-color: rgba(0, 0, 0, 0.7);">{{ $product->category->name }}</div>
            @if ($product->image)
              <img src="{{ asset('storage/" . $product->image . "') }} " class="card-img-top" alt="...">
            @else
              <img src='https://source.unsplash.com/1600x900?{{ $product->category->name }}' class="card-img-top"
                alt="...">
            @endif
          </div>
          <div class="card-body">
            <h5 class="card-title">{{ $product->price }}</h5>
            <p class="card-text">{{ $product->description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
