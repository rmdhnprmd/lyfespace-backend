@extends('layouts.dashboard')

@section('title')
    LyfeSpace Setting
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
>
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Settings</h2>
      <p class="dashboard-subtitle">Make store that profitable</p>
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
                      <label class="mb-2">Store Name</label>
                      <input type="text" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group mb-3">
                      <label class="mb-2">Category</label>
                      <select name="category" class="form-select">
                        <option selected>Select Category</option>
                        <option disabled>Furniture</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-8">
                    <div class="form-group mb-3">
                      <label>Store Status</label>
                      <p class="text-muted">
                        Is your store currently open?
                      </p>
                      <div class="form-check-inline">
                        <input
                          type="radio"
                          class="form-check-input"
                          name="is_store_open"
                          id="openStoreTrue"
                          value="true"
                        />
                        <label
                          for="openStoreTrue"
                          class="custom-control-label"
                        >
                          We're Open
                        </label>
                      </div>
                      <div class="form-check-inline">
                        <input
                          type="radio"
                          class="form-check-input"
                          name="is_store_open"
                          id="openStoreFalse"
                          value="false"
                        />
                        <label
                          for="openStoreFalse"
                          class="custom-control-label"
                        >
                          Sorry, We're Currently Closed
                        </label>
                      </div>
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