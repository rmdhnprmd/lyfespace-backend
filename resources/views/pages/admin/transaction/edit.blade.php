@extends('layouts.admin')

@section('title')
    Transactions
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
      <p class="dashboard-subtitle">Edit Transaction</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-md-12">
          @if($errors->any())
            <div class="alert alert-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
          <div class="card">
            <div class="card-body">
              <form action="{{ route('transaction.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                  
                  
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Transaction Status</label>
                      <select name="transaction_status" class="form-select">
                        <option value="{{ $item->transaction_status }}" selected>{{ $item->transaction_status }}</option>
                        <option value="" disabled>------------</option>
                        <option value="PENDING">PENDING</option>
                        <option value="CANCELLED">CANCELLED</option>
                        <option value="SUCCESS">SUCCESS</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group mb-3">
                      <label class="mb-1">Total Price</label>
                      <input type="number" name="total_price" class="form-control" value="{{ $item->total_price }}" required>
                    </div>
                  </div>
                </div>

                <div class="row mt-4">
                  <div class="col text-end">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
          CKEDITOR.replace('editor');
    </script>
@endpush