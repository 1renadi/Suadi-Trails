<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Suadi-Trails') - مآثر</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: 'Amiri', serif;
            background-color: #FBFBE8;
            margin: 0;
            direction: rtl;
            overflow-x: hidden;
        }

        .header {
            background-color: #E9DAC1;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 10px 20px;
            position: fixed; 
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            border-bottom: 1px solid #ccc; 
            border-radius: 0 0 15px 15px; 
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

        .navbar-nav {
            gap: 10px;
        }

        .nav-link {
            color: #1F1919 !important;
            font-size: 16px;
            border-radius: 5px;
            font-family: 'Amiri', serif;
            padding: 8px 12px;
            white-space: nowrap;
            transition: background-color 0.3s, color 0.3s;
        }

        .nav-link.active {
            color: #EEC373 !important;
            background-color: #2E0C10 !important;
        }

        .nav-link:hover {
            color: #EEC373 !important;
            background-color: #355E3B;
        }

        .sidebar {
            background-color: #636347;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(27, 20, 20, 0.1);
            width: 250px;
            height: calc(100vh - 90px);
            position: fixed;
            top: 90px;
            right: 0;
            overflow-y: auto;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            z-index: 999;
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .sidebar h4 {
            font-family: 'Tajawal', sans-serif;
            font-weight: 700;
            margin-bottom: 15px;
            color: #2D2424;
        }

        .sidebar .nav-link {
            color: #2D2424;
            padding: 10px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: #EEC373;
            color: #355E3B;
        }

        .sidebar .nav-link.active {
            background-color: #A19882;
            color: #EEC373;
        }

        .sidebar-toggle {
            position: fixed;
            top: 100px;
            right: 10px;
            background-color: #E9DAC1;
            color: #2D2424;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            z-index: 1001;
        }

        .main-content {
            margin-right: 0;
            padding: 20px;
            margin-top: 80px; /* مسافة من الأعلى لتجنب التداخل مع الـ navbar العائم */
            transition: margin-right 0.3s ease;
        }

        .main-content.sidebar-open {
            margin-right: 270px;
        }

        footer {
            background-color: #E9DAC1;
            color: #2D2424;
            padding: 20px;
            text-align: center;
            position: relative;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 992px) {
            .navbar-nav {
                display: none;
            }

            .navbar-nav.show {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 80px;
                right: 20px;
                width: 200px;
                background-color: #A19882;
                z-index: 1000;
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

            .sidebar {
                width: 200px;
                height: calc(100vh - 80px);
                top: 80px;
            }

            .main-content.sidebar-open {
                margin-right: 220px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                max-width: 300px;
            }

            .main-content {
                padding: 15px;
            }

            .main-content.sidebar-open {
                margin-right: 300px;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                height: 40px;
            }

            .sidebar {
                max-width: 250px;
            }

            .main-content.sidebar-open {
                margin-right: 250px;
            }
        }
    </style>
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

                <!-- Navbar Toggler (Hamburger Menu) -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#pillNav2" aria-controls="pillNav2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Nav Bar -->
                <div class="collapse navbar-collapse" id="pillNav2">
                    <ul class="navbar-nav nav-pills gap-2 p-1 rounded-4 shadow-sm" dir="rtl" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active rounded-5" id="home-tab2" href="{{ route('home') }}" role="tab" aria-selected="true">الرئيسية</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-5" id="heritage-tab2" href="{{ route('heritage-sites.index') }}" role="tab" aria-selected="false">المواقع التراثية</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-5" id="contact-tab2" href="{{ route('contact') }}" role="tab" aria-selected="false">تواصل معنا</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link rounded-5" id="more-tab2" href="{{ route('more') }}" role="tab" aria-selected="false">المزيد</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- Sidebar Toggle Button -->
    <button class="sidebar-toggle" id="sidebarToggle">☰</button>

    <!-- هيكل الصفحة الرئيسي -->
    <div class="container-fluid">
        <div class="row">
            <!-- الشريط الجانبي -->
            <aside class="sidebar" id="sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('heritage-sites.index') }}">المواقع التراثية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">تواصل معنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('more') }}">المزيد</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>
                </ul>
            </aside>

            <!-- المحتوى الرئيسي -->
            <main class="main-content" id="mainContent">
                @yield('content')
            </main>
        </div>
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

    <!-- JavaScript for Sidebar -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mainContent = document.getElementById('mainContent');

        if (sidebarToggle && sidebar && mainContent) {
            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('show');
                mainContent.classList.toggle('sidebar-open');
            });

            window.addEventListener('resize', function() {
                if (sidebar.classList.contains('show')) {
                    mainContent.classList.add('sidebar-open');
                } else {
                    mainContent.classList.remove('sidebar-open');
                }
            });
        }
    </script>
</body>
</html>