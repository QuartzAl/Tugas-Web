@extends('layout')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="card">
                <h5 class="card-header bg-primary">New Product</h5>
                <div class="card-body">
                    <form method="POST" action={{route('storeProduct')}}>
                      @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Product Name</label>
                          <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <div id="emailHelp" class="form-text">Whatever you want to name it!</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">Make it descriptive</div>
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Price</label>
                            <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">What should be the price?</div>
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Stock</label>
                            <input name="stock" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">How much stock do you have of this product?</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                </div>
              </div>
        </div>
    </div>
  </div>
  @endsection
