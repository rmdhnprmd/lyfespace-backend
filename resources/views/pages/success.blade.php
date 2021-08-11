@extends('layouts.success')

@section('title')
    LyfeSpace Transaction Processed
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-success">
  <div class="section-success" data-aos="zoom-in">
    <div class="container">
      <div class="row align-items-center row-login justify-content-center">
        <div class="col-lg-6 text-center">
          <img src="/images/img-success.png" alt="" class="mb-3 mt-4" />
          <h2>Transaction Processed!</h2>
          <p>
            Please wait for our confirmation email and we will inform the
            receipt as soon as possible!
          </p>
          <div>
            <a href="{{ route('dashboard') }}" class="btn btn-success w-50 mt-4"
              >My Dashboard
            </a>
            <a href="{{ route('home') }}" class="btn btn-signup w-50 mt-2"
              >Go To Shopping
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection