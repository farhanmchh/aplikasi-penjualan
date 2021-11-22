@extends('layout.main')

@section('page')

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Edit Product</h2>
                <a href="/product" class="btn btn-secondary btn-sm mb-3">Back</a>
                <form action="/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-3">
                        <label class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $product->name }}">
                        @error('name')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="form-label">Price</label>
                        <input type="text" class="form-control" name="price" value="{{ $product->price }}">
                        @error('price')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control">
                            <option></option>
                            @foreach ($categories as $category)
                                @if ($product->category_id == $category->id)
                                    <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <label for="" class="form-label">Image</label>
                    <div class="custom-file mb-3">
                        <input type="hidden" name="old_image" value="{{ $product->image }}">
                        <input type="file" class="custom-file-input" id="customFile" name="image">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        @error('image')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="5" rows="5"
                            class="form-control">{{ $product->description }}</textarea>
                        @error('description')
                            <p class="text-danger">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
