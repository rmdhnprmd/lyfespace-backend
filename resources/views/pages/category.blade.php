@extends('layouts.app')

@section('title')
    LyfeSpace Category
@endsection

@section('content')
  <div class="page-content page-home">
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
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
                  src="/images/categories-gadgets.svg"
                  alt="gadgets"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Gadgets</p>
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
                <img
                  src="/images/categories-makeup.svg"
                  alt="makeup"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Make Up</p>
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
                  src="/images/categories-sneaker.svg"
                  alt="sneaker"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Sneaker</p>
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
                  src="/images/categories-tools.svg"
                  alt="tools"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Tools</p>
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
                  src="/images/categories-baby.svg"
                  alt="baby"
                  class="w-100"
                />
              </div>
              <p class="categories-text">Baby</p>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="store-new-products">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Products</h5>
          </div>
        </div>

        <div class="row">
          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
              <div class="products-thumbnail">
                <div
                  class="products-image"
                  style="
                    background-image: url('/images/products-sofa-comfy.jpg');
                  "
                ></div>
              </div>
              <div class="products-text">Sofa Comfy</div>
              <div class="products-price">$1,409</div>
            </a>
          </div>

          <div
            class="col-6 col-md-4 col-lg-3"
            data-aos="fade-up"
            data-aos-delay="400"
          >
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
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
            <a href="/details.html" class="component-products d-block">
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