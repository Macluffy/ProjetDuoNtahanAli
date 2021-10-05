<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tailwind.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
    <link rel="stylesheet" href="{{ asset('js/tailwind.js') }}">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <div class="logo_name">Bikin BackOffice</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="/dashboard">
                    <i class='bx bxs-dashboard'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="{{route('titres.index')}}">
                    <i class='bx bx-bracket'></i>
                    <span class="links_name">Titres</span>
                </a>
                <span class="tooltip">Titres</span>
            </li>
            <li>
                <a href="{{route('header.index')}}">
                    <i class='bx bx-headphone'></i>
                    <span class="links_name">Header</span>
                </a>
                <span class="tooltip">Header</span>
            </li>
            <li>
                <a href="{{route('hero.index')}}">
                    <i class='bx bx-heading'></i>
                    <span class="links_name">Hero</span>
                </a>
                <span class="tooltip">Hero</span>
            </li>
            <li>
                <a href="{{route('about.index')}}">
                    <i class='bx bx-dots-horizontal-rounded'></i>
                    <span class="links_name">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="{{route('feature.index')}}">
                    <i class='bx bxs-detail'></i>
                    <span class="links_name">Features</span>
                </a>
                <span class="tooltip">Features</span>
            </li>
            <li>
                <a href="{{route('service.index')}}">
                    <i class='bx bx-dots-vertical'></i>
                    <span class="links_name">Services</span>
                </a>
                <span class="tooltip">Services</span>
            </li>
            <li>
                <a href="{{route('portfolios.index')}}">
                    <i class='bx bx-images'></i>
                    <span class="links_name">Portfolio</span>
                </a>
                <span class="tooltip">Portfolio</span>
            </li>
            <li>
                <a href="{{route('testimonials.index')}}">
                    <i class='bx bxs-briefcase'></i>
                    <span class="links_name">Testimonials</span>
                </a>
                <span class="tooltip">Testimonials</span>
            </li>
            <li>
                <a href="{{route('teams.index')}}">
                    <i class='bx bxl-microsoft-teams'></i>
                    <span class="links_name">Team</span>
                </a>
                <span class="tooltip">Team</span>
            </li>
            <li>
                <a href="{{route('contacts.index')}}">
                    <i class='bx bxs-phone'></i>
                    <span class="links_name">Contact</span>
                </a>
                <span class="tooltip">Contact</span>
            </li>
            <li>
                <a href="{{route('footers.index')}}">
                    <i class='bx bxs-down-arrow'></i>
                    <span class="links_name">Footer</span>
                </a>
                <span class="tooltip">Footer</span>
            </li>
            <li>
                <a href="/">
                    <i class='bx bx-arrow-from-right'></i>
                    <span class="links_name">Front</span>
                </a>
                <span class="tooltip">Front</span>
            </li>
        </ul>
    </div>


    <section class="home-section">
        @yield('content')
    </section>


    
    <script>
        let sidebar = document.querySelector(".sidebar");
        let closeBtn = document.querySelector("#btn");
        let searchBtn = document.querySelector(".bx-search");

        closeBtn.addEventListener("click", () => {
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
            sidebar.classList.toggle("open");
            menuBtnChange(); //calling the function(optional)
        });

        // following are the code to change sidebar button(optional)
        function menuBtnChange() {
            if (sidebar.classList.contains("open")) {
                closeBtn.classList.replace("bx-menu", "bx-menu-alt-right"); //replacing the iocns class
            } else {
                closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
            }
        }
    </script>
</body>

</html>
