@extends('layouts.dashboard')
@section('content')
@section('title', 'All Categories')
<main class="col-md-9">


    <form action="{{ route('admin.categories.index')}}" method="get" class="d-flex mb-4">
        <input name="name" type="text" class="form-control me-2" placeholder="Search By Name">
        <select name="parent_id" class="form-control me-2">
            <option value="">All Categories</option>
            @foreach ($parents as $parent)
            <option value="{{$parent->id}}">{{$parent->name}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-secondary">Filter</button>
    </form>


    <a href="{{ route('admin.categories.create')}}" class="btn btn-primary">Create Category</a>
    <table class="table mt-4 mb-4">
        <tbody>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent ID</th>
                    <th>Status</th>
                    <th>Created_At</th>
                    <th>Action</th>
                </tr>
            </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td><a href="{{ route('admin.categories.edit', $category->id)}}">{{ $category->name }}</a></td>
                <td>{{ $category->parent_id }}</td>
                <td>{{ $category->status }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                    <form action="{{ route('admin.categories.destroy', $category->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        </tbody>
    </table>
</main>
@endsection