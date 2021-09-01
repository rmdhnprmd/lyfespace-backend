@extends('layouts.app')

@section('title')
    LyfeSpace Detail
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-details">
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
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Details</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="store-gallery mb-2" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
          <transition name="slide-fade" mode="out-in">
            <img
              :src="photos[activePhoto].url"
              :key="photos[activePhoto].id"
              class="w-100 main-image"
              alt=""
            />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div
              class="col-3 col-lg-12 mt-2 mt-lg-0"
              v-for="(photo, index) in photos"
              :key="photo.id"
              data-aos="zoom-in"
              data-aos-delay="100"
            >
              <a href="#store-gallery" @click="changeActive(index)">
                <img
                  :src="photo.url"
                  class="w-100 thumbnail-image"
                  :class="{active: index == activePhoto}"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="store-details-container" data-aos="fade-up">
    <section class="store-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>{{ $product->name }}</h1>
            <div class="owner">By {{ $product->user->store_name }}</div>
            <div class="price">${{ number_format($product->price) }}</div>
          </div>

          <div class="col-lg-2" data-aos="zoom-in">
            @auth
              <form action="{{ route('detail-add', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <button
                  type="submit"
                  class="btn btn-success d-grid text-white mb-3"
                  >
                  Add to Cart
                </button>
              </form>
            @else
              <a
                href="{{ route('login') }}"
                class="btn btn-success d-grid text-white mb-3"
                >
                Sign In to Add
              </a>
            @endauth  
          </div>
        </div>
      </div>
    </section>

    <section class="store-description">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            {!! $product->description !!}
          </div>
        </div>
      </div>
    </section>

    <section class="store-review">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mt-3 mb-3">
            <h5>Customer Review (3)</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <div class="d-flex media">
              <img
                src="/images/icon-user-2.png"
                alt=""
                class="rounded-circle"
              />
              <div class="ms-3 mt-2 mb-1 media-body">
                <h5>Asep Pangabean</h5>
                <p>
                  I thought it was not good for living. I really happy to
                  decide buy this product last week now feels like homey.
                </p>
              </div>
            </div>

            <div class="d-flex media">
              <img
                src="/images/icon-user-3.png"
                alt=""
                class="rounded-circle"
              />
              <div class="ms-3 mt-2 mb-1 media-body">
                <h5>Sugeng</h5>
                <p>
                  Color is great with the minimalist concept. Even I thought
                  it was made by Cactus industry. I do really satisfied with
                  this.
                </p>
              </div>
            </div>

            <div class="d-flex media">
              <img
                src="/images/icon-user-4.png"
                alt=""
                class="rounded-circle"
              />
              <div class="ms-3 mt-2 mb-1 media-body">
                <h5>Japra Keling</h5>
                <p>
                  When I saw at first, it was really awesome to have with.
                  Just let me know if there is another upcoming product like
                  this.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

@push('addon-script')
  <script src="/vendor/vue/vue.js"></script>
  <script>
    var gallery = new Vue({
      el: "#gallery",
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        photos: [
          @foreach ($product->galleries as $gallery)
            {
              id: {{ $gallery->id }},
              url: "{{ Storage::url($gallery->photos) }}",
            },
          @endforeach
        ],
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id;
        },
      },
    });
  </script>
@endpush