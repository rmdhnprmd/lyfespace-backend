@extends('layouts.admin')

@section('title')
    Products
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Products</h2>
      <p class="dashboard-subtitle">Create New Product</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Product Name</label>
                      <input type="text" name="name" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Owner</label>
                      <select name="users_id" class="form-select">
                        @foreach ($users as $user)
                          <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Category</label>
                      <select name="categories_id" class="form-select">
                        @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Price</label>
                      <input type="number" name="price" class="form-control" required>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Description</label>
                      <textarea name="description" id="editor"></textarea>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col text-end">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
          CKEDITOR.replace('editor');
    </script>
@endpush