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
      <h2 class="dashboard-title">Tatakan Gelas</h2>
      <p class="dashboard-subtitle">Product Details</p>
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
                      <input
                        type="text"
                        class="form-control"
                        value="Tatakan Gelas"
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label class="mb-2">Price</label>
                      <input
                        type="number"
                        class="form-control"
                        value="45184"
                      />
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
                </div>
                <div class="row">
                  <div class="col text-end d-grid">
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

      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 mb-3 position-relative">
                  <div class="gallery-container">
                    <img
                      src="/images/product-card-1.png"
                      alt=""
                      class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                      <img src="/images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>

                <div class="col-md-4 mb-3 position-relative">
                  <div class="gallery-container">
                    <img
                      src="/images/product-card-2.png"
                      alt=""
                      class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                      <img src="/images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>

                <div class="col-md-4 mb-3 position-relative">
                  <div class="gallery-container">
                    <img
                      src="/images/product-card-3.png"
                      alt=""
                      class="w-100"
                    />
                    <a href="#" class="delete-gallery">
                      <img src="/images/icon-delete.svg" alt="" />
                    </a>
                  </div>
                </div>

                <div class="col-12 d-grid mt-2">
                  <input
                    type="file"
                    id="file"
                    style="display: none"
                    multiple
                  />
                  <button
                    class="btn btn-secondary"
                    onclick="thisFileUpload()"
                  >
                    Add Photo
                  </button>
                </div>
              </div>
            </div>
          </div>
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
  <script>
    function thisFileUpload() {
      document.getElementById("file").click();
    }
  </script>
@endpush