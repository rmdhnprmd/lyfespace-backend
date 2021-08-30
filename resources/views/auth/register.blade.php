@extends('layouts.auth')

@section('title')
    LyfeSpace Register 
@endsection

@section('content')

<div class="page-content page-auth" id="register">
  <div class="section-store-auth" data-aos="fade-up">
    <div class="container">
      <div
        class="row align-items-center justify-content-center row-login mb-4"
      >
        <div class="col-lg-4">
          <h2>
            Start Buying and Selling
            <br />
            in The Newest Way
          </h2>

          <form method="POST" action="{{ route('register') }}" class="mt-3">
            @csrf
            <div class="form-group mb-3">
              <label>Full Name</label>
              <input id="name"
                v-model="name" 
                type="text" 
                class="form-control @error('name') is-invalid @enderror" 
                name="name" 
                value="{{ old('name') }}" 
                required 
                autocomplete="name" 
                autofocus
                />

              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group mb-3">
              <label>Email Address</label>
              <input id="email"
                v-model="email"
                @change="checkForEmailAvailability()"
                type="email" 
                class="form-control @error('email') is-invalid @enderror" 
                :class="{ 'is-invalid' : this.email_unavailable }"
                name="email" 
                value="{{ old('email') }}" 
                required 
                autocomplete="email"
                />

              @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group mb-3">
              <label>Password</label>
              <input id="password" 
                type="password" 
                class="form-control @error('password') is-invalid @enderror" 
                name="password" 
                required 
                autocomplete="new-password"
                />

              @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group mb-3">
              <label>Password Confirmation</label>
              <input id="password-confirm" 
                type="password" 
                class="form-control @error('password_confirmation') is-invalid @enderror" 
                name="password_confirmation" 
                required 
                autocomplete="new-password"
                />

              @error('password_confirmation')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>

            <div class="form-group mb-3">
              <label>Store</label>
              <p class="text-muted">Do you want to open an online store?</p>
              <div class="form-check-inline">
                <input
                  type="radio"
                  class="form-check-input"
                  name="is_store_open"
                  id="openStoreTrue"
                  v-model="is_store_open"
                  :value="true"
                />
                <label for="openStoreTrue" class="custom-control-label">
                  Yes, i want
                </label>
              </div>
              <div class="form-check-inline">
                <input
                  type="radio"
                  class="form-check-input"
                  name="is_store_open"
                  id="openStoreFalse"
                  v-model="is_store_open"
                  :value="false"
                />
                <label for="openStoreFalse" class="custom-control-label">
                  No, thank you
                </label>
              </div>
            </div>

            <div class="form-group mb-3" v-if="is_store_open">
              <label>Store Name</label>
              <input type="text" 
                v-model="store_name"
                id="store_name"
                class="form-control @error('password_confirm') is-invalid @enderror"
                name="store_name"
                required
                autocomplete
                autofocus
                />
              @error('store_name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group mb-3" v-if="is_store_open">
              <label>Category</label>
              <select name="categories_id" class="form-select">
                <option selected>Select Category</option>
                @foreach ($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
              </select>
            </div>
            <button
              type="submit"
              class="btn btn-success btn-block w-100 mt-4"
              :disabled="this.email_unavailable"
              >
              Sign Up Now
            </button>
            <a
              href="{{ route('login') }}"
              class="btn btn-signup btn-block w-100 mt-2"
              >Back to Sign In</a
            >
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    Vue.use(Toasted);

    var register = new Vue({
        el: "#register",
        mounted() {
            AOS.init();
        },
        methods: {
          checkForEmailAvailability: function() {
            var self = this;

            axios.get('{{ route('api-register-check') }}', {
              params: {
                email: this.email
              }
            })
              .then(function (response) {
                
                if(response.data == 'Available') {
                  self.$toasted.show(
                    "Your email available, please continue to the next step",
                    {
                        position: "top-center",
                        className: "rounded",
                        duration: 1000,
                    }
                  );
                  self.email_unavailable = false;
                } else {
                  self.$toasted.error(
                    "Sorry, your email is already registered in our system.",
                    {
                        position: "top-center",
                        className: "rounded",
                        duration: 1000,
                    }
                  );
                  self.email_unavailable = true;
                }
                
                // handle success
                console.log(response);
              });
          }
        },
        data() {
          return {
            name: "Asep Squarepants",
            email: "tampandanberani@gmail.com",
            is_store_open: true,
            store_name: "",
            email_unavailable: false
          }
        },
    });
</script>
@endpush