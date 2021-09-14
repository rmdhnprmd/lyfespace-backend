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
              @php $totalPrice = 0 @endphp
              @foreach ($carts as $cart)
                <tr>
                  <td style="width: 15%">
                    @if ($cart->product->galleries)
                      <img
                        src="{{ Storage::url($cart->product->galleries->first()->photos) }}"
                        alt=""
                        class="cart-image"
                      />
                    @endif
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">
                        {{ $cart->product->name }}
                    </div>
                    <div class="product-subtitle">
                        by {{ $cart->product->user->store_name }}
                    </div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">
                        ${{ number_format($cart->product->price) }}
                    </div>
                    <div class="product-subtitle">
                        USD
                    </div>
                  </td>
                  <td style="width: 20%">
                    <form action="{{ route('cart-delete', $cart->id) }}" method="POST">
                      @method('DELETE')
                      @csrf
                      <button
                        type="submit"
                        class="btn btn-remove-cart"
                        >
                        Remove
                      </button>
                    </form>
                  </td>
                </tr>
                @php $totalPrice += $cart->product->price @endphp
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <form action="" id="locations">
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-4">Shipping Details</h2>
          </div>
        </div>

        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <div class="col-md-6 mb-4">
            <label for="address_one" class="form-label">
              Address
            </label>
            <input
              type="text"
              class="form-control"
              id="address_one"
              name="address_one"
              placeholder="1234 Main St"
            />
          </div>

          <div class="col-md-6 mb-4">
            <label for="address_two" class="form-label">
              Address 2
            </label>
            <input
              type="text"
              class="form-control"
              id="address_two"
              name="address_two"
              placeholder="Apartment, studio, or floor"
            />
          </div>

          <div class="col-md-4 mb-4">
            <label for="provinces_id" class="form-label">
              Province
            </label>
            <select
              name="provinces_id"
              id="provinces_id"
              class="form-select"
              v-if="provinces"
              v-model="provinces_id"
              >
              <option v-for="province in provinces" :value="province.id">@{{ province.name }}</option>
            </select>
            <select v-else class="form-select"></select>
          </div>

          <div class="col-md-4 mb-4">
            <label for="regencies_id" class="form-label">City</label>
            <select 
              name="regencies_id" 
              id="regencies_id" 
              class="form-select"
              v-if="regencies"
              v-model="regencies_id"
              >
              <option v-for="regency in regencies" :value="regency.id">@{{ regency.name }}</option>
            </select>
            <select v-else class="form-select"></select>
          </div>

          <div class="col-md-4 mb-4">
            <label for="zip_code" class="form-label">
              Zip Code
            </label>
            <input
              type="text"
              class="form-control"
              id="zip_code"
              name="zip_code"
              placeholder="11111"
            />
          </div>

          <div class="col-md-6 mb-4">
            <label for="country" class="form-label">Country</label>
            <select name="country" id="country" class="form-select">
              <option value="Indonesia">INDONESIA</option>
            </select>
          </div>

          <div class="col-md-6 mb-4">
            <label for="phone_number" class="form-label">
              Phone Number
            </label>
            <input
              type="text"
              class="form-control"
              id="phone_number"
              name="phone_number"
              placeholder="+62 81220022000"
            />
          </div>
        </div>

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
            <div class="product-title">$0</div>
            <div class="product-subtitle">Tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">$0</div>
            <div class="product-subtitle">
              Product Insurance
            </div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">$0</div>
            <div class="product-subtitle">Ship to Bekasi</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">
                ${{ number_format($totalPrice ?? 0) }}
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
      </form>
    </div>
  </section>
</div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script src="https://unpkg.com/vue-toasted"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
    var locations = new Vue({
      el: "#locations",
      mounted() {
        AOS.init();
        this.getProvincesData();
      },
      data: {
        provinces: null,
        regencies: null,
        provinces_id: null,
        regencies_id: null
      },
      methods: {
        getProvincesData() {
          var self = this;
          axios.get('{{ route('api-provinces') }}')
            .then(function(response){
              self.provinces = response.data;
            })
        },
        getRegenciesData() {
          var self = this;
          axios.get('{{ url('api/regencies') }}/' + self.provinces_id)
            .then(function(response){
              self.regencies = response.data;
            })
        },
      },
      watch: {
        provinces_id: function(val, oldVal) {
          this.regencies_id = null;
          this.getRegenciesData();
        }
      }
    });
  </script>
@endpush