@extends('layouts.dashboard')

@section('title')
    LyfeSpace Transaction Detail
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">#STORE0666</h2>
      <p class="dashboard-subtitle">Transactions Details</p>
    </div>
    <div class="dashboard-content" id="transactionDetails">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img
                    src="/images/product-details-dashboard.png"
                    class="w-100 mb-3"
                    alt=""
                  />
                </div>
                <div class="col-12 col-md-8">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Customer Name</div>
                      <div class="product-subtitle">Aldebaran</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Product Name</div>
                      <div class="product-subtitle">
                        Tatakan Gelas
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">
                        Date of Transaction
                      </div>
                      <div class="product-subtitle">
                        1 August, 2021
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Payment Status</div>
                      <div class="product-subtitle text-danger">
                        Pending
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Total Amount</div>
                      <div class="product-subtitle">$45,184</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Mobile</div>
                      <div class="product-subtitle">
                        0821 5555 2121
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12 mt-3">
                  <h5>Shipping Information</h5>
                </div>
                <div class="col-12">
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address 1</div>
                      <div class="product-subtitle">
                        Vila Kembang Puncak
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Address 2</div>
                      <div class="product-subtitle">
                        Cluster Rose Blok A no. 1
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Province</div>
                      <div class="product-subtitle">West Java</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">City</div>
                      <div class="product-subtitle">Bogor</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">Postal Code</div>
                      <div class="product-subtitle">16411</div>
                    </div>
                    <div class="col-12 col-md-6">
                      <div class="product-title">State</div>
                      <div class="product-subtitle">Indonesia</div>
                    </div>
                    <div class="col-12 col-md-3">
                      <div class="product-title">Shipping Status</div>
                      <select
                        name="status"
                        id="status"
                        class="form-select"
                        v-model="status"
                      >
                        <option value="PENDING">Pending</option>
                        <option value="SHIPPING">Shipping</option>
                        <option value="SUCCESS">Success</option>
                      </select>
                    </div>
                    <template v-if="status == 'SHIPPING'">
                      <div class="col-md-3">
                        <div class="product-title">Input Resi</div>
                        <input
                          type="text"
                          class="form-control"
                          name="resi"
                          v-model="resi"
                        />
                      </div>
                      <div class="col-md-4 d-grid">
                        <button
                          type="submit"
                          class="btn btn-warning mt-4"
                        >
                          Update Resi
                        </button>
                      </div>
                    </template>
                  </div>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-12 text-end">
                  <button class="btn btn-success px-5 mt-3">
                    Save Now
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
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "SHIPPING",
        resi: "CGK03312182321",
      },
    });
  </script>
@endpush