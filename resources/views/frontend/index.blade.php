@extends('frontend.layouts.master')
@section('title')
Influencer Marketing
@endsection
@section('main-content')

<div class="navbar-area fixed-top">

    <div class="mobile-nav">
        <a href="sass.html" class="logo">
            <img src="{{ asset('frontend/template/assets/img/logo-two.png') }}" alt="Logo">
        </a>
    </div>

    <div class="main-nav">
        <div class="container-fluid">
            {{-- navbar --}}
            @include('frontend.includes.navbar')
            {{-- end navbar --}}
        </div>
    </div>
</div>
{{-- banner service --}}
@include('frontend.includes.banner')
{{-- end banner service --}}
<section class="service-area pb-70">
    <div class="container">
        <div class="section-title three">
            <span class="sub-title">Our Core Services</span>
            <h2>We Have Better Services With Transparent Solution</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="service-item-three">
                    <h3><a href="service-details.html">Find best Influencer for your Business</a></h3>
                    <p>Create a ad campaign according to your niche, connect with related Influencers/ We analyze your
                        specifications and
                        find out best campaign suited for business.
                    </p>
                    <div class="service-link">
                        <img src="{{ asset('frontend/template/assets/img/digital/service1.png') }}" alt="Shape">
                        <a href="service-details.html">
                            <i class="flaticon-search"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="service-item-three two">
                    <h3><a href="service-details.html">Link Building And Local Search Strategy</a></h3>
                    <p>Business growth according to your link and promotion according to your area. We create
                        suited campaign for your brand to grow.
                    </p>
                    <div class="service-link">
                        <img src="{{ asset('frontend/template/assets/img/digital/service2.png') }}" alt="Shape">
                        <a href="service-details.html">
                            <i class="flaticon-link"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="service-item-three three">
                    <h3><a href="service-details.html">Marketing Campaign & Content Creation</a></h3>
                    <p>Create good quality content for instagram and facebook feed and story. </p>
                    <div class="service-link">
                        <img src="{{ asset('frontend/template/assets/img/digital/service3.png') }}" alt="Shape">
                        <a href="service-details.html">
                            <i class="flaticon-social-media"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="about-area-two pb-70">
    <div class="about-shape">
        <img src="{{ asset('frontend/template/assets/img/digital/about2.png') }}" alt="Shape">
        <img src="{{ asset('frontend/template/assets/img/digital/about3.png') }}" alt="Shape">
        <img src="{{ asset('frontend/template/assets/img/digital/about4.png') }}" alt="Shape">
    </div>
    <div class="container-fluid p-0">
        <div class="row m-0 align-items-center">
            <div class="col-lg-6 p-0">
                <div class="about-img">
                    <img src="{{ asset('frontend/template/assets/img/digital/about-main.png') }}" alt="About">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="about-content">
                    <div class="section-title three">
                        <span class="sub-title">About Us</span>
                        <h2>Our mission and story</h2>
                        <p>We began with a vision of the future of media built around the hundreds of thousands
                            of talented content creators building a presence on YouTube, Instagram, Blogs, SnapChat,
                            nd more. We’re building the platform to empower these creators to make a living from
                            sponsorships, endorsements and
                            collaborations with brands, so they can focus on making the content we all love. </p>
                    </div>
                    <ul>
                        <li>
                            <i class="flaticon-checkmark"></i>
                            Complete Marketing Solution
                        </li>
                        <li>
                            <i class="flaticon-checkmark"></i>
                            Experienced Team Members
                        </li>
                        <li>
                            <i class="flaticon-checkmark"></i>
                            Analyze relevant Influencers
                        </li>
                        <li>
                            <i class="flaticon-checkmark"></i>
                            Create campaign for ads
                        </li>
                    </ul>
                    <a href="#" class="cmn-btn">
                        Explore More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="team-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <span class="sub-title">Our Influencers</span>
            <h2>WHAT OUR Partners Say?</h2>
            <p>We will create content for the promotion of the video according to campaign </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="team-item">
                    <div class="top">
                        <img src="https://ouradmin.uptrendly.com/assets/uploads/images/testimonials/d9604-1556184589.jpg" alt="Team">
                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                        <div class="share-btn">
                            <span>
                                <i class="bx bx-share-alt"></i>
                            </span>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Malvika Subba</h3>
                        <span>Miss Nepal 2002</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item two">
                    <div class="top">
                        <img src="https://ouradmin.uptrendly.com/assets/uploads/images/testimonials/bdfcd-1556184901.jpg" alt="Team">
                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                        <div class="share-btn">
                            <span>
                                <i class="bx bx-share-alt"></i>
                            </span>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3> Sadichha Shrestha </h3>
                        <span>Miss Nepal  2010</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item three">
                    <div class="top">
                        <img src="https://ouradmin.uptrendly.com/assets/uploads/images/testimonials/c5101-106665788_643224582948230_3524481197216270779_n.jpg" alt="Team">
                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                        <div class="share-btn">
                            <span>
                                <i class="bx bx-share-alt"></i>
                            </span>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Nikesh Shrestha</h3>
                        <span>Brand Manager of Karmacharya Group</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item four">
                    <div class="top">
                        <img src="https://ouradmin.uptrendly.com/assets/uploads/images/testimonials/ad349-21316223_10154888941457023_7406011099110747436_o.jpg" alt="Team">
                        <ul class="team-social">
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-pinterest-alt'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                        </ul>
                        <div class="share-btn">
                            <span>
                                <i class="bx bx-share-alt"></i>
                            </span>
                        </div>
                    </div>
                    <div class="bottom">
                        <h3>Sijan Neupane</h3>
                        <span>Marketing Manager of Agni Group</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="testimonials-area ptb-100">
    <div class="testimonials-img">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial1.jpg') }}" alt="Client">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial2.jpg') }}" alt="Client">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial3.jpg') }}" alt="Client">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial4.jpg') }}" alt="Client">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial5.jpg') }}" alt="Client">
        <img src="{{ asset('frontend/template/assets/img/digital/testimonial6.jpg') }}" alt="Client">
    </div>
    <div class="container">
        <div class="section-title three">
            <span class="sub-title">Testimonials</span>
            <h2>Trusted From Brands</h2>
        </div>
        <div class="testimonials-slider owl-theme owl-carousel">
            <div class="testimonials-item">
                <p>“We now work with 500+ influencers on a monthly basis —
                    and get guaranteed content from them. Our growth in this area has just been mind-boggling.”</h3>
                    <span>CEO & Founder</span>
            </div>
            <div class="testimonials-item">
                <p> “From mommy bloggers to YouTubers to animators, we’ve found amazing creators through the platform. I
                    would not be able to manage a growing list of influencers without AspireIQ.”.</p>
                <h3>Tom Henry</h3>
                <span>Director</span>
            </div>
            <div class="testimonials-item">
                <p>Give your campaign a boost with the help of our best-in-class platform and team of experts.</p>
                <h3>Jac Jacson</h3>
                <span>Manager</span>
            </div>
        </div>
    </div>
</section>



<footer class="footer-area pt-100 pb-70">
    <div class="footer-shape">
        <img src="{{ asset('frontend/template/assets/img/digital/footer-bg.png') }}" alt="Footer">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="{{ route('home.page') }}">
                            <img src="{{ asset('frontend/template/assets/img/a.png') }}" alt="Logo" style="width: 25%;">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc Neque
                            porro quisquam est, qui dolorem magnam aliquam quaerat luptatem.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Support</h3>
                        <ul>
                            <li>
                                <a href="faq.html" target="_blank">FAQ</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-condiitons.html" target="_blank">Terms & Condiitons</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Community</a>
                            </li>
                            <li>
                                <a href="conatct.html" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Compnay</h3>
                        <ul>
                            <li>
                                <a href="about.html" target="_blank">About Us</a>
                            </li>
                            <li>
                                <a href="services.html" target="_blank">Services</a>
                            </li>
                            <li>
                                <a href="features.html" target="_blank">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html" target="_blank">Our Pricing</a>
                            </li>
                            <li>
                                <a href="blog.html" target="_blank">Latest News</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-address">
                        <h3>Address</h3>
                        <ul>
                            <li>
                                <span>Address:</span>
                                2659 Autostrad St, London, UK
                            </li>
                            <li>
                                <span>Message:</span>
                                <a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#660e030a0a0926020f0a1e4805090b"><span
                                        class="__cf_email__"
                                        data-cfemail="c8a0ada4a4a788aca1a4b0e6aba7a5">[email&#160;protected]</span></a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <a href="tel:2151234567">215 - 123 - 4567</a>
                            </li>
                            <li>
                                <span>Open:</span>
                                Mon - Fri/9:00 AM - 6:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-item">
                    <p>Copyright ©2021 Smart Branding. Designed By <a href="https://hibootstrap.com/"
                            target="_blank">Gokyo Tech</a></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="copyright-item">
                    <ul>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-facebook'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-linkedin'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
                            </a>
                        </li>
                       
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
