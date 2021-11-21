@extends('layout.main')

@section('page')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="row justify-content-between">
                    <div class="col-sm-3">
                        <h2>Category</h2>
                    </div>
                    <div class="col-sm-3">
                        <a href="/category/create" class="btn btn-primary btn-sm mb-3">Add</a>
                    </div>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <form action="/category/{{ $category->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
