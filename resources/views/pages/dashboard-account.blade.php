@extends('layouts.dashboard')

@section('title')
    Account Setting
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Account</h2>
      <p class="dashboard-subtitle">Update your current profile</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label for="name" class="form-label"
                      >Your Name
                    </label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      value="Ramadhan Permadi"
                    />
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="email" class="form-label"
                      >Your Email</label
                    >
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      value="akucintakamu@email.com"
                    />
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="address" class="form-label"
                      >Address</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="address"
                      placeholder="1234 Main St"
                    />
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="address2" class="form-label"
                      >Address 2</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="address2"
                      placeholder="Apartment, studio, or floor"
                    />
                  </div>

                  <div class="col-md-4 mb-4">
                    <label for="province" class="form-label"
                      >Province</label
                    >
                    <select
                      name="province"
                      id="province"
                      class="form-select"
                    >
                      <option selected>Select Province</option>
                      <option value="West Java">West Java</option>
                    </select>
                  </div>

                  <div class="col-md-4 mb-4">
                    <label for="city" class="form-label">City</label>
                    <select name="city" id="city" class="form-select">
                      <option selected>Select City</option>
                      <option value="Bandung">Bandung</option>
                      <option value="Bekasi">Bekasi</option>
                      <option value="Bogor">Bogor</option>
                    </select>
                  </div>

                  <div class="col-md-4 mb-4">
                    <label for="postalCode" class="form-label"
                      >Postal Code</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="postalCode"
                      placeholder="11111"
                    />
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="state" class="form-label"
                      >State</label
                    >
                    <select
                      name="state"
                      id="state"
                      class="form-select"
                    >
                      <option selected">Select State</option>
                      <option value="Indonesia">Indonesia</option>
                    </select>
                  </div>

                  <div class="col-md-6 mb-4">
                    <label for="mobile" class="form-label"
                      >Mobile</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="mobile"
                      placeholder="+62 81220022000"
                    />
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