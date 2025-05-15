<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Suadi-Trails') - مآثر</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Amiri', serif;
            background-color: rgb(251, 251, 236);
            margin: 0;
            transition: margin-right 0.3s;
            direction: rtl;
        }

        .header {
            background-color: #E9DAC1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .navbar-brand img {
            height: 60px;
            width: auto;
            transition: transform 0.3s ease;
        }

        .navbar-brand img:hover {
            transform: scale(1.1);
        }

        .nav-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
        }

        .nav {
            gap: 10px;
            background-color: #A19882;
            padding: 5px 15px;
            border-radius: 8px;
            display: flex;
        }

        .nav-link {
            color: var(--bs-nav-link-color) !important;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Amiri', serif;
            padding: 8px 12px;
            white-space: nowrap;
        }

        .nav-link.active {
            color: var(--bs-nav-pills-link-active-color) !important;
            background-color: var(--bs-nav-pills-link-active-bg) !important;
        }

        .nav-link:hover {
            color: #EEC373 !important;
            background-color: #355E3B;
        }

        .language-btn {
            border: 1px solid rgb(0, 0, 0);
            border-radius: 5px;
            padding: 5px 10px;
            background-color: #F5F5DC;
            color: rgb(0, 0, 0);
            font-family: 'Amiri', serif;
        }

        .language-btn:hover {
            background-color: rgb(0, 0, 0);
            color: #EEC373;
        }

        /* زر القائمة للجوال */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: #000;
            cursor: pointer;
        }

        /* تنسيقات للشاشات الصغيرة */
        @media (max-width: 992px) {
            .nav {
                display: none;
                position: absolute;
                top: 80px;
                right: 20px;
                flex-direction: column;
                width: 200px;
                z-index: 1000;
            }
            
            .nav.show {
                display: flex;
            }
            
            .mobile-menu-btn {
                display: block;
            }
            
            .navbar-brand img {
                height: 50px;
            }
            
            .nav-link {
                padding: 10px;
                text-align: center;
            }
            
            .header {
                padding: 10px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                height: 40px;
            }
            
            .language-btn {
                padding: 3px 6px;
                font-size: 14px;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container-fluid">
            <div class="nav-container">
                <!-- Brand/Logo -->
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="مآثر Logo" class="img-fluid">
                </a>

                <!-- زر القائمة للجوال -->
                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Nav Bar -->
                <ul class="nav nav-pills nav-fill gap-2 p-1 rounded-4 shadow-sm" dir="rtl" 
                    id="pillNav2" 
                    role="tablist"
                    style="--bs-nav-link-color:rgb(31, 25, 25); 
                           --bs-nav-pills-link-active-color: #EEC373; 
                           --bs-nav-pills-link-active-bg:rgb(46, 12, 16);">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active rounded-5" id="home-tab2" href="{{ route('home') }}" role="tab" aria-selected="true">الرئيسية</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-5" id="heritage-tab2" href="{{route('heritage-sites.index') }}" role="tab" aria-selected="false">المواقع التراثية</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-5" id="contact-tab2" href="{{ route('contact') }}" role="tab" aria-selected="false">تواصل معنا</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link rounded-5" id="more-tab2" href="{{ route('more') }}" role="tab" aria-selected="false">المزيد</a>
                    </li>
                </ul>

                <!-- Language Switch -->
                <div class="d-flex align-items-center">
                    <button class="btn language-btn">En</button>
                    <div class="nav-item" role="presentation" dir="ltr">
                        <a class="nav-link rounded-5" id="login-tab2" href="{{ route('login') }}" role="tab" aria-selected="false">تسجيل الدخول</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Content -->
    <div class="content" id="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer>
        <div class="social-icons mb-3">
            <a href="https://x.com/1Renadi" target="_blank" class="text-white me-3"><i class="fab fa-twitter"></i></a>
            <a href="https://www.linkedin.com/in/renad-alruwaili-243317201/" target="_blank" class="text-white"><i class="fab fa-linkedin"></i></a>
        </div>
        <p>© {{ date('Y') }} مآثر جميع الحقوق محفوظة.</p>
        <p>Done By <a href="https://www.linkedin.com/in/renad-alruwaili-243317201/" style="color:#9D5353;">RENAD HOKAGE</a></p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JavaScript for Mobile Menu -->
    <script>
        document.getElementById('mobileMenuBtn').addEventListener('click', function() {
            document.querySelector('.nav').classList.toggle('show');
        });
    </script>
</body>
</html>