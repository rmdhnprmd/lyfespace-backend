@extends('layouts.dashboard')

@section('title')
    LyfeSpace Dashboard Product Detail
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Create Product</h2>
      <p class="dashboard-subtitle">Create your own product</p>
    </div>

    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label class="mb-2">Product Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label class="mb-2">Price</label>
                      <input type="number" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-2">Category</label>
                      <select name="category" class="form-select">
                        <option selected>Select Category</option>
                        <option disabled>Furniture</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-2">Description</label>
                      <textarea name="editor"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-2">Thumbnails</label>
                      <input type="file" class="form-control" />
                      <p class="text-muted">
                        You can select more than one file
                      </p>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-end">
                    <button
                      type="submit"
                      class="btn btn-success px-5"
                    >
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush