@extends('layouts.app')

@section('title')
    LyfeSpace Cart 
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-cart">
  <section
    class="store-breadcrumbs"
    data-aos="fade-up"
    data-aos-delay="100"
    >
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
              </li>
              <li class="breadcrumb-item active">Cart</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="store-cart">
    <div class="container">
      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-12 table-responsive">
          <table class="table table-borderless table-cart">
            <thead>
              <tr>
                <th id="table-head">Image</th>
                <th id="table-head">
                    Name &amp; Seller
                </th>
                <th id="table-head">Price</th>
                <th id="table-head">Menu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td style="width: 15%">
                  <img
                    src="/images/product-cart-1.jpg"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      Nyender Sofa
                  </div>
                  <div class="product-subtitle">
                      by Rebahan Company
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      $1,409
                  </div>
                  <div class="product-subtitle">
                      USD
                  </div>
                </td>
                <td style="width: 20%">
                  <a
                      href="#"
                      class="btn btn-remove-cart"
                  >
                      Remove
                  </a>
                </td>
              </tr>
              <tr>
                <td style="width: 15%">
                  <img
                    src="/images/product-cart-2.jpg"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      Orange Bogotta
                  </div>
                  <div class="product-subtitle">
                      by Typebeast
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      $94,509
                  </div>
                  <div class="product-subtitle">
                      USD
                  </div>
                </td>
                <td style="width: 20%">
                  <a
                    href="#"
                    class="btn btn-remove-cart"
                  >
                    Remove
                  </a>
                </td>
              </tr>
              <tr>
                <td style="width: 15%">
                  <img
                    src="/images/product-cart-3.jpg"
                    alt=""
                    class="cart-image"
                  />
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      Tatakan Gelas
                  </div>
                  <div class="product-subtitle">
                      by Pecah Belah
                  </div>
                </td>
                <td style="width: 35%">
                  <div class="product-title">
                      $45,184
                  </div>
                  <div class="product-subtitle">
                      USD
                  </div>
                </td>
                <td style="width: 20%">
                  <a
                    href="#"
                    class="btn btn-remove-cart"
                  >
                    Remove
                  </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-4">Shipping Details</h2>
        </div>
      </div>

      <form
        class="row mb-2"
        data-aos="fade-up"
        data-aos-delay="200"
        >
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
            <option value="West Java">West Java</option>
          </select>
        </div>

        <div class="col-md-4 mb-4">
          <label for="city" class="form-label">City</label>
          <select name="city" id="city" class="form-select">
            <option selected>Choose...</option>
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
          <label for="state" class="form-label">State</label>
          <select name="state" id="state" class="form-select">
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
      </form>

      <div class="row" data-aos="fade-up" data-aos-delay="150">
        <div class="col-12">
          <hr />
        </div>
        <div class="col-12">
          <h2 class="mb-1">Payment Informations</h2>
        </div>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">
        <div class="col-4 col-md-2">
          <div class="product-title">$10</div>
          <div class="product-subtitle">Tax</div>
        </div>
        <div class="col-4 col-md-3">
          <div class="product-title">$20</div>
          <div class="product-subtitle">
            Product Insurance
          </div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title">$50</div>
          <div class="product-subtitle">Ship to Bekasi</div>
        </div>
        <div class="col-4 col-md-2">
          <div class="product-title text-success">
              $141,182
          </div>
          <div class="product-subtitle">Total</div>
        </div>
        <div class="col-8 col-md-3">
          <a
            href="{{ route('success') }}"
            class="btn btn-success mt-4 px-4 d-grid"
          >
            Checkout Now
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection