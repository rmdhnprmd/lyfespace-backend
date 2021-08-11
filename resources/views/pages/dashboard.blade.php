@extends('layouts.dashboard')

@section('title')
    LyfeSpace Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div
  class="section-content section-dashboard-home"
  data-aos="fade-up"
  >
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Dashboard</h2>
      <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Customer</div>
              <div class="dashboard-card-subtitle">5,320</div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Revenue</div>
              <div class="dashboard-card-subtitle">$23,480</div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-2">
            <div class="card-body">
              <div class="dashboard-card-title">Transaction</div>
              <div class="dashboard-card-subtitle">543,552</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Dashboard Daftar Belanja -->
      <div class="row mt-3">
        <div class="col-12 mt-2">
          <h5 class="mb-3">Recent Transactions</h5>
          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="/images/dashboard-product-icon-1.png"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Tatakan Gelas</div>
                <div class="col-md-3">Aldebaran</div>
                <div class="col-md-3">1 August, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </a>

          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="/images/dashboard-product-icon-2.png"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Orange Bogotta</div>
                <div class="col-md-3">Japra</div>
                <div class="col-md-3">25 July, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </a>

          <a
            href="/dashboard-transactions-details.html"
            class="card card-list d-block"
          >
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img
                    src="/images/dashboard-product-icon-3.png"
                    alt=""
                  />
                </div>
                <div class="col-md-4">Nyender Sofa</div>
                <div class="col-md-3">Asep Pangabean</div>
                <div class="col-md-3">15 July, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img
                    src="/images/dashboard-arrow-right.svg"
                    alt=""
                  />
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection