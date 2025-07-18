  @extends('frontend/layout/app')
  @section('content')
      <div id="services" class="our-services section">
          <section class="breadcrumb-section text-center"
              style="background: url('{{ asset('assets/images/services-right-dec.png') }}') no-repeat center center; background-color:#242d5f;">
              <div class="container">
                  <h2 class="mb-2">Contact us</h2> {{-- Optional title --}}
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                          <li class="breadcrumb-item"><a href="{{ url('/services') }}">Contact us</a></li>

                      </ol>
                  </nav>
              </div>
          </section>
          <div id="contact" class="contact-us section">
              <div class="container gap">
                  <div class="row">
                      @if (session('success'))
                          <div class="alert alert-success">{{ session('success') }}</div>
                      @endif
                      <div class="col-lg-7">
                          <div class="section-heading">
                              <h2>Feel free to <em>Contact</em> us </span></h2>
                              <div id="map">
                                  <iframe
                                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.199431911793!2d74.3420400746963!3d31.518682047227145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904f7d678be59%3A0xc2b2ccfac701e84f!2sStartex%20Marketing%20Services!5e0!3m2!1sen!2s!4v1752834919202!5m2!1sen!2s"
                                      width="600" height="370" style="border:0;" allowfullscreen="" loading="lazy"
                                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div>
                              <div class="info">
                                  <span><i class="fa fa-phone"></i> <a href="#">+92-42-35782381 / 2</a></span>
                                  <span><i class="fa fa-envelope"></i> <a
                                          href="#">info@startexmarketing.com</a></span>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-5 align-self-center">
                          <form id="contact" action="{{ route('contact.submit') }}" method="post">
                              @csrf
                              <div class="row">
                                  <div class="col-lg-12">
                                      <fieldset>
                                          <input type="name" name="name" id="name" placeholder="Name"
                                              autocomplete="on" required>
                                      </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                      <fieldset>
                                          <input type="text" name="subject" id="subject" placeholder="subject"
                                              autocomplete="on" required>
                                      </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                      <fieldset>
                                          <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                              placeholder="Your Email" required="">
                                      </fieldset>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="col-lg-12">
                                          <fieldset>
                                              <textarea name="message" class="massage" id="message" placeholder="Your message" required></textarea>
                                          </fieldset>
                                      </div>

                                  </div>
                                  <div class="col-lg-12">
                                      <fieldset>
                                          <button type="submit" id="form-submit" class="main-button">Submit
                                              Request</button>
                                      </fieldset>
                                  </div>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
              <div class="contact-dec">
                  <img src="assets/images/contact-dec.png" alt="">
              </div>
              <div class="contact-left-dec">
                  <img src="assets/images/contact-left-dec.png" alt="">
              </div>
          </div>
      @endsection
