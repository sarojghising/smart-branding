<nav class="navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="sass.html">
        <img src="{{ asset('frontend/template/assets/img/logo.png') }}" alt="Logo">
    </a>
    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle active">Home <i
                        class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="sass.html" class="nav-link">Sass Startup Demo</a>
                    </li>
                    <li class="nav-item">
                        <a href="it-startup.html" class="nav-link">IT Startup Demo</a>
                    </li>
                    <li class="nav-item">
                        <a href="digital.html" class="nav-link active">Digital Marketing Demo</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Pages <i
                        class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle">User <i
                                class='bx bx-chevron-down'></i></a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a href="sign-in.html" class="nav-link">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="features.html" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="team.html" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a href="pricing.html" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="faq.html" class="nav-link">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="404.html" class="nav-link">404 Error Page</a>
                    </li>
                    <li class="nav-item">
                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="about.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Services <i
                        class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">Service Style One</a>
                    </li>
                    <li class="nav-item">
                        <a href="services-2.html" class="nav-link">Service Style Two</a>
                    </li>
                    <li class="nav-item">
                        <a href="service-details.html" class="nav-link">Service Details</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Projects <i
                        class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="projects.html" class="nav-link">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a href="project-details.html" class="nav-link">Project Details</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>
                <ul class="dropdown-menu">
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="contact.html" class="nav-link">Contact</a>
            </li>
        </ul>
        <div class="side-nav">
            <a class="left-btn" href="{{ route('brand.register.form') }}">
                <i class='bx bx-log-out'></i>
                I'm  Brand
            </a>
            <a class="left-btn" href="{{ route('influencer.register.form') }}">
                <i class='bx bx-log-out'></i>
                I'm  Influencer
            </a>
        </div>
    </div>
</nav>
