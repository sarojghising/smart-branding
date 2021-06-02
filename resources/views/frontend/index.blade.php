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





<div class="support-area">
    <div class="container">
        <div class="support-item">
            <h3>Over <span>150.000</span>Supporter all over the world</h3>
            <div class="support-slider owl-theme owl-carousel">
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support1.png') }}" alt="Support">
                </div>
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support2.png') }}" alt="Support">
                </div>
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support3.png') }}" alt="Support">
                </div>
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support4.png') }}" alt="Support">
                </div>
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support5.png') }}" alt="Support">
                </div>
                <div class="support-inner">
                    <img src="{{ asset('frontend/template/assets/img/digital/support6.png') }}" alt="Support">
                </div>
            </div>
        </div>
    </div>
</div>


<section class="service-area four pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="service-content">
                    <div class="section-title three">
                        <span class="sub-title">Our Services</span>
                        <h2>Pair expertise with advanced technology</h2>
                        <p>Our team blends experience from leaders in product, engineering, and content creation.
                            Brought together by a shared passion for building the best content marketplace.

                        </p>
                    </div>
                    <a href="#" class="cmn-btn">
                        Explore More
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="service-inner">
                            <i class="flaticon-laptop-2"></i>
                            <h3><a href="service-details.html">Start your sales from day one</a></h3>
                            <p>Give your campaign a boost with the help of our best-in-class platform and team of
                                experts
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="service-inner">
                            <i class="flaticon-info"></i>
                            <h3><a href="service-details.html">Scale your program like a pro</a></h3>
                            <p>Using our automated step-by-step workflow that adapts to your needs, you can streamline
                                each step of your campaign.Influencer</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="service-inner">
                            <i class="flaticon-pie-chart"></i>
                            <h3><a href="service-details.html">Advanced Analytics</a></h3>
                            <p>We listen to our clients to craft a strategy that matches their goals, budgets and
                                timelines.
                                Clear, practical action steps to build their business.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="service-inner">
                            <i class="flaticon-earth-day"></i>
                            <h3><a href="service-details.html">Create brand-safe content</a></h3>
                            <p>Discover well-aligned influencers who create authentic content
                                to protect your brand from fraud.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="portfolio-area ptb-100">
    <div class="container">
        <div class="section-title three">
            <h2>We Are Glad With Our Awesome Portfolio</h2>
        </div>
    </div>
    <div class="container-fluid">
        <div class="portfolio-slider owl-theme owl-carousel">
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio1.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>SEO</span>
                    <h3>
                        <a href="project-details.html">1000 Bulk Email Collection For Multiple Companies</a>
                    </h3>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio2.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>Web Design</span>
                    <h3>
                        <a href="project-details.html">We Designed A Creative Website For Your Company</a>
                    </h3>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio3.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>Web Development</span>
                    <h3>
                        <a href="project-details.html">We Developed A Creative Website For China Company</a>
                    </h3>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio4.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>UX/UI</span>
                    <h3>
                        <a href="project-details.html">We Made A Creative Website For USA Company</a>
                    </h3>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio5.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>Data Entry</span>
                    <h3>
                        <a href="project-details.html">We Are Very Careful To Keep Your Data Safe</a>
                    </h3>
                </div>
            </div>
            <div class="portfolio-item">
                <img src="{{ asset('frontend/template/assets/img/digital/portfolio6.jpg') }}" alt="Portfolio">
                <div class="portfolio-inner">
                    <span>SEO</span>
                    <h3>
                        <a href="project-details.html">1000 Bulk Email Collection For Multiple Companies</a>
                    </h3>
                </div>
            </div>
        </div>
        <div class="portfolio-contact">
            <p>We're Taking New Project <a href="contact.html">Contact Us</a></p>
        </div>
    </div>
</div>


<section class="team-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <span class="sub-title">Our Influencers</span>
            <h2>Better Content Creation</h2>
            <p>We will create content for the promotion of the video according to campaign </p>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="team-item">
                    <div class="top">
                        <img src="{{ asset('frontend/template/assets/img/digital/team1.jpg') }}" alt="Team">
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
                        <h3>Ralph Lauren</h3>
                        <span>Youtuber</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item two">
                    <div class="top">
                        <img src="{{ asset('frontend/template/assets/img/digital/team2.jpg') }}" alt="Team">
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
                        <h3>Jermin Jekson</h3>
                        <span>Actor</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item three">
                    <div class="top">
                        <img src="{{ asset('frontend/template/assets/img/digital/team3.jpg') }}" alt="Team">
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
                        <h3>Olfard Zain</h3>
                        <span>Musician</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="team-item four">
                    <div class="top">
                        <img src="{{ asset('frontend/template/assets/img/digital/team4.jpg') }}" alt="Team">
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
                        <h3>Julfiker Jeain</h3>
                        <span>Fashion Model</span>
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
            <h2>Trusted From Clients</h2>
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


<section class="blog-area two pt-100 pb-70">
    <div class="container">
        <div class="section-title three">
            <span class="sub-title">Our News</span>
            <h2>Our Latest Blogs</h2>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item blog-img-one">
                    <ul class="top">
                        <li>22nd July, 2020</li>
                        <li>SEO</li>
                    </ul>
                    <h3>
                        <a href="blog-details.html">Multiple Companies For Collecting Emails</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit sed do eiumod</p>
                    <ul class="bottom">
                        <li>
                            <img src="{{ asset('frontend/template/assets/img/it-startup/blog1.jpg') }}" alt="Blog">
                        </li>
                        <li>
                            <span>by:</span>
                        </li>
                        <li>
                            <a href="#">Alex Dimanov</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="blog-item blog-img-two">
                    <ul class="top">
                        <li>30th May, 2020</li>
                        <li>Design</li>
                    </ul>
                    <h3>
                        <a href="blog-details.html">Top Ten Marketing Tricks And Tips</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit sed do eiumod</p>
                    <ul class="bottom">
                        <li>
                            <img src="{{ asset('frontend/template/assets/img/it-startup/blog2.jpg') }}" alt="Blog">
                        </li>
                        <li>
                            <span>by:</span>
                        </li>
                        <li>
                            <a href="#">Tom Henry</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="blog-item blog-img-three">
                    <ul class="top">
                        <li>08th April, 2020</li>
                        <li>Development</li>
                    </ul>
                    <h3>
                        <a href="blog-details.html">Weekly Campiagn For University Of Linkon</a>
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectur adipisicing elit sed do eiumod</p>
                    <ul class="bottom">
                        <li>
                            <img src="{{ asset('frontend/template/assets/img/it-startup/blog3.jpg') }}" alt="Blog">
                        </li>
                        <li>
                            <span>by:</span>
                        </li>
                        <li>
                            <a href="#">Jac Jacson</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="talk-area pt-100 pb-70">
    <div class="talk-shape">
        <img src="{{ asset('frontend/template/assets/img/digital/talk2.png') }}" alt="Shape">
        <img src="{{ asset('frontend/template/assets/img/digital/talk3.png') }}" alt="Shape">
    </div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="talk-img">
                    <img src="{{ asset('frontend/template/assets/img/digital/talk-main.png') }}" alt="Laptop">
                    <img src="{{ asset('frontend/template/assets/img/digital/talk1.png') }}" alt="Shape">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="talk-content">
                    <div class="section-title three">
                        <span class="sub-title">Let's Talk</span>
                        <h2>We’re Taking Project Get Started A Project?</h2>
                        <p>You can create a campaign on your own or we will guide you according to your needs.
                            Contact us and our team will guide you to make a perfect campaign for your business to
                            gain more sales,genuine customers and brand awareness by associating with well known
                            infleuncers.
                        </p>
                    </div>
                    <a href="contact.html" class="cmn-btn">
                        Contact Us
                        <i class='bx bx-plus'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-area pt-100 pb-70">
    <div class="footer-shape">
        <img src="{{ asset('frontend/template/assets/img/digital/footer-bg.png') }}" alt="Footer">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="sass.html">
                            <img src="{{ asset('frontend/template/assets/img/logo-two.png') }}" alt="Logo">
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
                    <p>Copyright ©2021 Dilx. Designed By <a href="https://hibootstrap.com/"
                            target="_blank">HiBootstrap</a></p>
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
                                <i class='bx bxl-twitter'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-instagram'></i>
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
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
