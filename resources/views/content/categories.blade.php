@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <p>Categories</p>
        <button type="submit" class="btn btn-primary" href={{route('addCategory')}}>New Category</button>

        <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($categories as $item)
                <tr>
                    <td scope="row">{{ $item -> id }}</td>
                    <td>{{ $item -> name }}</td>
                    <td>{{ $item -> description }}</td>
                    <td><a href="{{ route('deleteCategory', $item -> id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</section>

@endsection