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
                    <a href="/"><img src="/img/header/logo.svg" alt="logo"></a>
                    <a href="/"><span>webovio.</span></a>
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
            <div class="header_container">
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
    </footer>
    
</body>