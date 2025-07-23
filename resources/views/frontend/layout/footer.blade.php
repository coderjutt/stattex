<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="about footer-item">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset('assets/images/logo.gif') }}"
                                alt="Onix Digital TemplateMo"></a>
                    </div>
                    <a href="#">info@startexmarketing.com</a>
                    <ul>
                        <li><a href="https://www.facebook.com/p/Startex-Marketing-Services-100021280965800/"
                                target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://ae.linkedin.com/company/startex-marketing-services" target="_blank"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://www.behance.net/startexmarketing" target="_blank"><i
                                    class="fa fa-behance"></i></a></li>
                        <li><a href="https://www.instagram.com/startexmarketing" target="_blank"><i
                                    class="fa fa-instagram"></i></a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-3">
                <div class="services footer-item">
                    <h4>Services</h4>
                    <ul>
                        @foreach ($services as $service)
                            <li><a href="#">{{ $service->name }}</a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="community footer-item">
                    <h4>Community</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about_us') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('product') }}">Our Product</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="subscribe-newsletters footer-item">
                    <h4>Subscribe Newsletters</h4>
                    <p>Get our latest news and ideas to your inbox</p>
                    <form action="#" method="get">
                        <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*"
                            placeholder="Your Email" required="">
                        <button type="submit" id="form-submit" class="main-button "><i
                                class="fa fa-paper-plane-o"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="copyright">
                    <p>Copyright © Startex Co., Ltd. All Rights Reserved.
                        <br>
                        Designed by <a rel="nofollow" href="http://www.startexmarketing.com/"
                            title="Startex">Startex</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
