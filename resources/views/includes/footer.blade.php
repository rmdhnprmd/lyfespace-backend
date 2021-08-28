<footer>
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <h6>Contact Us</h6>
          <ul class="footer-links">
            <li>
              <em class="fa fa-volume-control-phone"></em>
              1500-0321
            </li>
            <li>
              <em class="fa fa-whatsapp"></em>
              <a href="https://wa.me/6281220022000" target="blank"
                >+62 812-2002-2000
              </a>
            </li>
            <li>
              <em class="fa fa-envelope"></em>
              <a href="mailto:support@lyfespace.com"
                >support@lyfespace.com
              </a>
            </li>
            <li class="address mt-4">
              <a href="https://goo.gl/maps/z2VwJbML4g9TfSrD8" target="blank"
                >LyfeSpace Headquarter, Sinarmas MSIG Tower 13th Floor,
                Sudirman South Jakarta, Indonesia</a
              >
            </li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <h6>Categories</h6>
          @forelse ($categories as $category)
            @if ($category)
              <ul class="footer-links mb-0">
                <li><a href="{{ route('categories-detail', $category->slug) }}">{{ $category->name }}</a></li>
              </ul>
            @endif
            
          @empty
            
          @endforelse
          
        </div>

        <div class="col-md-6 col-lg-3">
          <h6>LyfeSpace</h6>
          <ul class="footer-links">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="#">FAQ</a></li>
            <li>
              <a href="#">Privacy Policy</a>
            </li>
            <li>
              <a href="#">Terms & Condition</a>
            </li>
            <li><a href="#">Service Center</a></li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="footer-widget">
            <div class="section-heading">
              <h6>Subscribe</h6>
              <span class="animate-border border-black"></span>
            </div>
            <p>
              <!-- Don’t miss to subscribe to our new feeds, kindly fill the form below. -->
              Reference site about LyfeSpace, giving information on its
              origins, as well.
            </p>
            <form action="#">
              <div class="form-row">
                <div class="col dk-footer-form">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email Address"
                  />
                  <button type="submit">
                    <em class="fa fa-send"></em>
                  </button>
                </div>
              </div>
            </form>
            <!-- End form -->
          </div>
          <!-- End footer widget -->
        </div>
      </div>
      <hr />
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">
            Copyright &copy; LyfeSpace 2021 • Made in Jakarta • All rights
            reserved by
            <a href="#">rmdhnprmd</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li>
              <a
                class="facebook"
                href="https://www.facebook.com/"
                target="blank"
                ><em class="fa fa-facebook"></em
              ></a>
            </li>
            <li>
              <a
                class="instagram"
                href="https://www.instagram.com/"
                target="blank"
                ><em class="fa fa-instagram"></em
              ></a>
            </li>
            <li>
              <a class="twitter" href="https://twitter.com/" target="blank"
                ><em class="fa fa-twitter"></em
              ></a>
            </li>
            <!-- <li>
              <a
                class="dribbble"
                href="https://dribbble.com/"
                target="blank"
                ><em class="fa fa-dribbble"></em
              ></a>
            </li> -->
            <li>
              <a
                class="linkedin"
                href="https://id.linkedin.com/"
                target="blank"
                ><em class="fa fa-linkedin"></em
              ></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>