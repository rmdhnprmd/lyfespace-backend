@extends('layouts.app')

@section('title')
    LyfeSpace Homepage
@endsection

@section('content')
<div class="page-content page-home">
  <section class="store-carousale">
    <div class="container">
      <div class="row">
        <div class="col-lg-12" data-aos="zoom-in">
          <div
            id="storeCarousel"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                class="active"
                data-bs-target="#storeCarousel"
                data-bs-slide-to="0"
              ></li>
              <li data-bs-target="#storeCarousel" data-bs-slide-to="1"></li>
              <li data-bs-target="#storeCarousel" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="border-radius: 8px">
              <div class="carousel-item active">
                <img
                  src="/images/banner.jpg"
                  alt="Carousel Image 1"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/images/banner2.jpg"
                  alt="Carousel Image 2"
                  class="d-block w-100"
                />
              </div>
              <div class="carousel-item">
                <img
                  src="/images/banner3.jpg"
                  alt="Carousel Image 3"
                  class="d-block w-100"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>Trend Categories</h5>
        </div>
      </div>

      <div class="row">
        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img
                src="/images/categories-baby.svg"
                alt="Baby"
                class="w-100"
              />
            </div>
            <p class="categories-text">Baby</p>
          </a>
        </div>

        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img
                src="/images/categories-furniture.svg"
                alt="furniture"
                class="w-100"
              />
            </div>
            <p class="categories-text">Furniture</p>
          </a>
        </div>

        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-gadgets.svg" alt=Gadgets"
              class="w-100" />
            </div>
            <p class="categories-text">Gadgets</p>
          </a>
        </div>

        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img
                src="/images/categories-makeup.svg"
                alt="Makeup"
                class="w-100"
              />
            </div>
            <p class="categories-text">Makeup</p>
          </a>
        </div>

        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img
                src="/images/categories-sneaker.svg"
                alt="Sneaker"
                class="w-100"
              />
            </div>
            <p class="categories-text">Sneaker</p>
          </a>
        </div>

        <div
          class="col-6 col-md-3 col-lg-2"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img
                src="/images/categories-tools.svg"
                alt="Tools"
                class="w-100"
              />
            </div>
            <p class="categories-text">Tools</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="store-new-products">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>

      <div class="row">
        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="100"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-apple-watch.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Apple Watch 4</div>
            <div class="products-price">$890</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="200"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-orange-bogotta.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Orange Bogotta</div>
            <div class="products-price">$94,509</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="300"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-sofa-comfy.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Nyender Sofa</div>
            <div class="products-price">$1,409</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="400"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-bubuk-maketti.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Bubuk Maketti</div>
            <div class="products-price">$225</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="500"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-tatakan-gelas.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Tatakan Gelas</div>
            <div class="products-price">$45,184</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="600"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-drone-kwsuper.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Drone KW Super</div>
            <div class="products-price">$503</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="700"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-nike-black.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Black Nike</div>
            <div class="products-price">$70,482</div>
          </a>
        </div>

        <div
          class="col-6 col-md-4 col-lg-3"
          data-aos="fade-up"
          data-aos-delay="800"
        >
          <a href="{{ route('detail') }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div
                class="products-image"
                style="
                  background-image: url('/images/products-monkey-dolls.jpg');
                "
              ></div>
            </div>
            <div class="products-text">Monkey Dolls</div>
            <div class="products-price">$783</div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection