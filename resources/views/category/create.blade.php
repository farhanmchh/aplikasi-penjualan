@extends('layout.main')

@section('page')

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>Add Category</h2>
                <a href="/category" class="btn btn-secondary btn-sm mb-3">Back</a>
                <form action="/category" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
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
