@extends('layouts.dashboard')

@section('title')
    LyfeSpace Dashboard Transaction
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
            <div
              class="tab-pane fade"
              id="pills-profile"
              role="tabpanel"
              aria-labelledby="pills-profile-tab"
            >
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection