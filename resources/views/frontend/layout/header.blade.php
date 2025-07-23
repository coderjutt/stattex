  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
          <span class="dot"></span>
          <div class="dots">
              <span></span>
              <span></span>
              <span></span>
          </div>
      </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{route('home')}}" class="logo">
                          <img src="{{ asset('assets/images/logo.gif') }}">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="{{ route('about_us') }}">About</a></li>
                          <li class="scroll-to-section"><a href="{{ route('services') }}">Services</a></li>
                          <li class="scroll-to-section"><a href="{{ route('product') }}">Our Product</a></li>
                          <li class="scroll-to-section"><a href="{{ route('contact') }}">Contact Us</a></li>
                          <li class="scroll-to-section">
                              <div class="main-red-button-hover"><a href="{{route('contact')}}">Contact Us Now</a></div>
                          </li>
                      </ul>
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->
