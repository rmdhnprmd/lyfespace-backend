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
          <form class="mt-3">
            <div class="form-group mb-3">
              <label>Full Name</label>
              <input
                type="text"
                class="form-control is-valid"
                v-model="name"
                autofocus
              />
            </div>
            <div class="form-group mb-3">
              <label>Email Address</label>
              <input
                type="email"
                class="form-control is-invalid"
                v-model="email"
              />
            </div>
            <div class="form-group mb-3">
              <label>Password</label>
              <input type="password" class="form-control" />
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
              <input type="text" class="form-control" />
            </div>
            <div class="form-group mb-3" v-if="is_store_open">
              <label>Category</label>
              <select name="category" class="form-select">
                <option selected>Select Category</option>
                <option disabled>Furniture</option>
              </select>
            </div>
            <a
              href="{{ route('dashboard') }}"
              class="btn btn-success btn-block w-100 mt-4"
              >Sign Up Now</a
            >
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

<div class="container hide" style="display: none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
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
<script src="/vendor/vue/vue.js"></script>
<script src="https://unpkg.com/vue-toasted"></script>
<script>
    Vue.use(Toasted);

    var register = new Vue({
        el: "#register",
        mounted() {
            AOS.init();
            this.$toasted.error(
                "Sorry, your email is already registered in our system.",
                {
                    position: "top-center",
                    className: "rounded",
                    duration: 1000,
                }
            );
        },
        data: {
            name: "Asep Squarepants",
            email: "tampandanberani@gmail.com",
            password: "",
            is_store_open: true,
            store_name: "",
        },
    });
</script>
@endpush