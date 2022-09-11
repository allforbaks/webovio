<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <script src="{{ '/js/app.js' }}"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <title>Webovio</title>
</head>
<body>
    <header>
        <div class="header__container">
            <div class="nav">
                <div class="logo">
                    <a href="/" ><img src="/img/header/logo.svg" alt="logo" class="header-logo-icon"></a>
                    <a href="/">webovio.</a>
                </div>
                <nav class='menu'>
                    <ul>
                        <li><a href="#" class="nav_item">About</a></li>
                        <li><a href="#" class="nav_item">Blog</a></li>
                        <li><a href="#" class="nav_item">Contact</a></li>
                        <li><a href="#" class="nav_item">Jobs</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-container">
                <span>A place where </span>
                <h1>A creative agency for redemptive brands</h1>
                <p>Anteelo is a leading strategic design firm that builds powerful digital solutions for startups and enterprises.</p>
                <a href="#">>  Get in touch</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer-wrap">
            <div class="let-go">
                <h1>Let’s make something amazing together.</h1>
                <a href="#" class="link">>  LET'S GET STARTED</a>
            </div>
            <div class="footer__container">
                <div class="company-info">
                    <div class="phone">
                        <h5 class="temp-text">Phone</h5>
                        <span class="company-info-item">+32 50 31 28 32</span>
                    </div>
                    <div class="address">
                        <h5 class="temp-text">Address</h5>
                        <span class="company-info-item">491 Merlin Crest Suite 963</span>
                    </div>
                </div>
                <div class="line footer-line"></div>
                <div class="footer-navigation">
                    <div class="nav-wrap">
                        <div class="nav-services">
                            <nav class="foo-menu">
                                <h4>Services</h4>
                                <ul>
                                    <li class="foo-nav-item temp-text">Strategy Design</li>
                                    <li class="foo-nav-item temp-text">Product Design</li>
                                    <li class="foo-nav-item temp-text">Content Strategy</li>
                                    <li class="foo-nav-item temp-text">Brand Strategy</li>
                                    <li class="foo-nav-item temp-text">Development </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="nav-help">
                            <nav class="foo-menu">
                                <h4>Help And Advice</h4>
                                <ul>
                                    <li class="foo-nav-item temp-text">How it works</li>
                                    <li class="foo-nav-item temp-text">Contact Support</li>
                                    <li class="foo-nav-item temp-text">Privacy Policy</li>
                                    <li class="foo-nav-item temp-text">FAQ</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="nav-company">
                            <nav class="foo-menu">
                                <h4>Company</h4>
                                <ul>
                                    <li class="foo-nav-item temp-text">About</li>
                                    <li class="foo-nav-item temp-text">Blog</li>
                                    <li class="foo-nav-item temp-text">Contact</li>
                                    <li class="foo-nav-item temp-text">Jobs</li>
                                </ul>
                            </nav>
                        </div>
                        <div class="get-in-touch">
                            <h4>Get in Touch</h4>
                            <p class="temp-text">Feel free to get in touch with us vai email</p>
                            <span class="email">info.webovio@gmail.com</span>
                            <div class="social">
                                <ul>
                                    <li class="social-item"><a href="https://www.facebook.com/"><img src="/img/social/facebook.png" alt="Facebook" class="social-icon"></a></li>
                                    <li class="social-item"><a href="https://twitter.com"><img src="/img/social/twitter.png" alt="Twitter" class="social-icon"></a></li>
                                    <li class="social-item soc-active"><a href="https://google.com"><img src="/img/social/google+.png" alt="Google+" class="social-icon"></a></li>
                                    <li class="social-item"><a href="https://ua.linkedin.com/"><img src="/img/social/linkedin.png" alt="Linkedin" class="social-icon"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line logo-line"></div>
                <div class="footer-logo">
                    <div class="logo">
                        <a href="/"><img src="/img/header/logo.svg" alt="logo" class="footer-logo-icon"></a>
                        <a href="/" class="name">webovio.</a>
                    </div>
                    <span class="copyright">© 2020@webovio. All Rights Reserved.</span>
                </div>
            </div>
        </div>
    </footer>
    
</body>