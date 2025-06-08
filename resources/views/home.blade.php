@extends('layouts.app')

@section('title', 'الرئيسية - مآثر')

@section('content')
    <!-- الهيدر الرئيسي (مستوحى من Grayscale) -->
    <header class="masthead" style="background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.7)), url('{{ asset('images/saudi-heritage-bg.jpg') }}'); background-size: cover; background-position: center; min-height: 100vh; display: flex; align-items: center; text-align: center;">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center animate__animated animate__fadeInDown" style="height: 150px; margin-bottom: 1.5rem;">
  <img src="/images/logoWhite.jpg" alt="مآثر" style="max-height: 240px; width: auto; object-fit: contain;">
</div>

 
            <h2 class="text-white-50 mb-5 animate__animated animate__fadeIn animate__delay-1s" style="font-family: 'Amiri', serif; max-width: 800px; margin: 0 auto; font-size: 1.5rem;">
                اكتشف كنوز المملكة العربية السعودية التراثية من معالم تاريخية وآثار عريقة وعادات وتقاليد أصيلة تروي قصة أمجاد الماضي وعبقرية الحاضر.
            </h2>
            <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeIn animate__delay-1s">
                <a href="{{ route('sites.index') }}" class="btn btn-primary btn-lg rounded-pill px-4 py-2" style="background-color: #A19882; border-color: #A19882;">
                    <i class="fas fa-map-marked-alt me-2"></i>استكشف المعالم
                </a>
                <a href="#heritage-video" class="btn btn-outline-light btn-lg rounded-pill px-4 py-2">
                    <i class="fas fa-play-circle me-2"></i>شاهد الفيديو
                </a>
            </div>
        </div>
    </header>

    <!-- قسم الإحصائيات -->
    <section class="stats-section py-5" style="background-color: #E9DAC1;">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="stat-item p-4 rounded-4 shadow-sm hover-effect" style="background-color: #FBFBE8;">
                        <h2 class="display-4 text-success">6</h2>
                        <p class="mb-0" style="font-family: 'Amiri', serif;">مواقع مسجلة في اليونسكو</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item p-4 rounded-4 shadow-sm hover-effect" style="background-color: #FBFBE8;">
                        <h2 class="display-4 text-success">13</h2>
                        <p class="mb-0" style="font-family: 'Amiri', serif;">منطقة تراثية رئيسية</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item p-4 rounded-4 shadow-sm hover-effect" style="background-color: #FBFBE8;">
                        <h2 class="display-4 text-success">300+</h2>
                        <p class="mb-0" style="font-family: 'Amiri', serif;">مبنى تاريخي</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="stat-item p-4 rounded-4 shadow-sm hover-effect" style="background-color: #FBFBE8;">
                        <h2 class="display-4 text-success">5000</h2>
                        <p class="mb-0" style="font-family: 'Amiri', serif;">سنة من التاريخ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم تعريفي عن التراث السعودي -->
    <section class="about-heritage py-5" style="background-color: #FBFBE8;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="mb-4 text-success fw-bold" style="font-family: 'Tajawal', sans-serif;">
                            <i class="fas fa-landmark me-2"></i>تراث المملكة.. إرث حضاري عريق
                        </h2>
                        <p class="lead fs-5" style="font-family: 'Amiri', serif;">
                            تمتد جذور التراث السعودي إلى آلاف السنين، حيث تتناغم الحضارات القديمة مثل النبطية واللحيانية والدلمونية مع إنجازات العصر الحديث لتشكل نسيجًا ثقافيًا فريدًا.
                        </p>
                        <p style="font-family: 'Amiri', serif;">
                            من صحراء الربع الخالي إلى جبال عسير، ومن سواحل الخليج إلى أودية الحجاز، تحتضن المملكة كنوزًا تراثية تروي قصص الحضارات والإنسان. مواقع مثل مدائن صالح وقصر المصمك والدرعية ليست مجرد آثار، بل هي صفحات مفتوحة من تاريخنا المجيد.
                        </p>
                        <div class="d-flex gap-2 mt-4">
                            <a href="{{ route('more') }}" class="btn btn-primary btn-md rounded-pill" style="background-color: #A19882; border-color: #A19882;">
                                <i class="fas fa-info-circle me-1"></i> المزيد عنا
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-outline-primary btn-md rounded-pill" style="border-color: #A19882; color: #A19882;">
                                <i class="fas fa-envelope me-1"></i> اتصل بنا
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heritage-gallery">
                        <div class="row g-3">
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-1.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm hover-effect" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-2.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm hover-effect" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-3.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm hover-effect" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-4.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm hover-effect" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الفيديو التوضيحي -->
    <section id="heritage-video" class="py-5" style="background-color: #E9DAC1;">
        <div class="container">
            <div class="video-container rounded-4 overflow-hidden shadow-lg">
                <div class="ratio ratio-16x9">
                    <iframe src="https://www.youtube.com/embed/z8A0LpX7_yM" title="فيديو عن التراث السعودي" allowfullscreen></iframe>
                </div>
                <div class="p-4 text-center" style="background-color: #A19882; color: #FBFBE8;">
                    <h3 class="mb-2" style="font-family: 'Tajawal', sans-serif;">رحلة في أعماق التراث السعودي</h3>
                    <p class="mb-0" style="font-family: 'Amiri', serif;">شاهد هذا الفيديو التعريفي الذي يأخذك في جولة عبر أهم المعالم التراثية في المملكة</p>
                </div>
            </div>
        </div>
    </section>

    <!-- قسم الاشتراك في النشرة البريدية -->
    <section class="newsletter-section py-5" style="background: linear-gradient(135deg, #A19882, #355E3B);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center text-white">
                    <h2 class="display-5 fw-bold mb-3" style="font-family: 'Tajawal', sans-serif;">
                        <i class="fas fa-envelope-open-text me-2"></i>انضم إلى قائمتنا البريدية
                    </h2>
                    <p class="lead mb-4" style="font-family: 'Amiri', serif; opacity: 0.9;">
                        اشترك ليصلك كل جديد عن تراث المملكة، معالم تاريخية، فعاليات تراثية، قصائد وطنية وغيرها
                    </p>
                    <form class="row g-2 justify-content-center">
                        <div class="col-md-8">
                            <div class="input-group">
                                <input type="email" class="form-control form-control-lg rounded-pill" placeholder="بريدك الإلكتروني" required>
                                <button class="btn btn-light text-success px-4 rounded-pill" type="submit" style="background-color: #FBFBE8; color: #355E3B;">
                                    اشترك <i class="fas fa-paper-plane ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-12 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                <label class="form-check-label small" for="agreeTerms" style="color: #FBFBE8;">
                                    أوافق على تلقي النشرات البريدية وموافقة على سياسة الخصوصية
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </section>

    @push('styles')
    <style>
        /* تحسينات عامة */
        body {
            font-family: 'Tajawal', sans-serif;
        }

        /* الهيدر */
        .masthead {
            padding: 6rem 1rem;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        /* تأثيرات الكروت */
        .hover-effect {
            transition: all 0.3s ease;
        }
        .hover-effect:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2) !important;
        }

        /* الإحصائيات */
        .stat-item {
            transition: all 0.3s ease;
        }
        .stat-item:hover {
            transform: scale(1.05);
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* الأزرار */
        .btn-primary {
            background-color: #A19882;
            border-color: #A19882;
        }
        .btn-primary:hover {
            background-color: #8b7f6a;
            border-color: #8b7f6a;
        }
        .btn-outline-primary {
            color: #A19882;
            border-color: #A19882;
        }
        .btn-outline-primary:hover {
            background-color: #A19882;
            color: #FBFBE8;
        }
        .btn-outline-light {
            border-color: #FBFBE8;
            color: #FBFBE8;
        }
        .btn-outline-light:hover {
            background-color: #FBFBE8;
            color: #355E3B;
        }

        /* تحسين استجابة الهيدر للشاشات الصغيرة */
        @media (max-width: 768px) {
            .masthead h1 {
                font-size: 2.5rem;
            }
            .masthead h2 {
                font-size: 1.2rem;
            }
            @media (min-width: 2000px) {
  .responsive-logo {
    max-width: 500px;
  }
}
@media (max-width: 480px) {
  .responsive-logo {
    max-width: 90vw;
  }
}

        }
    </style>
    @endpush

    @push('scripts')
    <!-- مكتبات للحركات والتفاعل -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    @endpush
@endsection