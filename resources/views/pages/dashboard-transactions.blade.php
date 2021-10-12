@extends('layouts.dashboard')

@section('title')
    LyfeSpace Transaction
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Transactions</h2>
      <p class="dashboard-subtitle">
        Big result start from the small one
      </p>
    </div>
    <div class="dashboard-content">
      <!-- Table Dashboard Transactions -->
      <div class="row">
        <div class="col-12 mt-2">
          <ul
            class="nav nav-pills mb-3"
            id="pills-tab"
            role="tablist"
          >
            <li class="nav-item" role="presentation">
              <button
                class="nav-link active"
                id="pills-home-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-home"
                type="button"
                role="tab"
                aria-controls="pills-home"
                aria-selected="true"
              >
                Sell Product
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button
                class="nav-link"
                id="pills-profile-tab"
                data-bs-toggle="pill"
                data-bs-target="#pills-profile"
                type="button"
                role="tab"
                aria-controls="pills-profile"
                aria-selected="false"
              >
                Buy Product
              </button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div
              class="tab-pane fade show active"
              id="pills-home"
              role="tabpanel"
              aria-labelledby="pills-home-tab"
            >
              @foreach ($sellTransactions as $transaction)
                  <a
                    href="{{ route('dashboard-transaction-details', $transaction->id) }}"
                    class="card card-list d-block"
                    >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img
                            src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                            class="w-50"
                          />
                        </div>
                        <div class="col-md-4">{{ $transaction->product->name }}</div>
                        <div class="col-md-3">{{ $transaction->product->user->store_name }}</div>
                        <div class="col-md-3">{{ $transaction->created_at }}</div>
                        <div class="col-md-1 d-none d-md-block">
                          <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                  </a>
              @endforeach
            </div>
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
              @foreach ($buyTransactions as $transaction)
                  <a
                    href="{{ route('dashboard-transaction-details-buy', $transaction->id) }}"
                    class="card card-list d-block"
                    >
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-1">
                          <img
                            src="{{ Storage::url($transaction->product->galleries->first()->photos ?? '') }}"
                            class="w-50"
                          />
                        </div>
                        <div class="col-md-4">{{ $transaction->product->name }}</div>
                        <div class="col-md-3">{{ $transaction->product->user->store_name }}</div>
                        <div class="col-md-3">{{ $transaction->created_at }}</div>
                        <div class="col-md-1 d-none d-md-block">
                          <img
                            src="/images/dashboard-arrow-right.svg"
                            alt=""
                          />
                        </div>
                      </div>
                    </div>
                  </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection