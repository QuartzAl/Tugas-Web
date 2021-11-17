@extends('layout')
@section('content')
<section class="content">
    <div class="container-fluid">
        <p>Products</p>
        <button type="submit" class="btn btn-primary" href={{route('addProduct')}}>New Product</button>

        <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Product</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($Products as $item)
                <tr>
                    <th scope="row">{{ $item -> id }}</th>
                    <td>{{ $item -> name }}</td>
                    <td>{{ $item -> description }}</td>
                    <td>{{ $item -> price }}</td>
                    <td>{{ $item -> stock }}</td>
                    <td><a href="{{ route('deleteProduct', $item -> id) }}" class="btn btn-sm btn-danger">Delete</a></td> <!-- Lempar ke route dulu melalui href -->
                  </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</section>
  @endsection
