@extends('layouts.success')

@section('title')
    LyfeSpace Register Success
@endsection

@section('content')
<!-- Page Content Register Success-->
<div class="page-content page-success">
  <div class="section-success" data-aos="zoom-in">
    <div class="container">
      <div class="row align-items-center row-login justify-content-center">
        <div class="col-lg-6 text-center">
          <img src="/images/img-success-register.png" alt="" class="mb-3 mt-5" />
          <h2>Welcome to LyfeSpace</h2>
          <p>
            You have successfully registered with us.
            <br />
            Let's grow up now
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