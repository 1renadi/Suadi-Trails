@extends('layouts.app')

@section('title', 'الرئيسية')

@section('content')
    <div class="container py-5">
        <!-- Hero Section - تحسين القسم الترويجي -->
        <div class="hero-section text-center mb-5 py-5 rounded-4" style="url('{{ asset('images/saudi-heritage-bg.jpg') }}'); background-size: cover; background-position: center;">
            <h1 class="mb-4 display-4 fw-bold animate__animated animate__fadeInDown" style="color: #355E3B; font-family: 'Amiri', serif;"> نافذتك على تراث المملكة العريق</h1>
            <h5 class="text-black mb-4 animate__animated animate__fadeIn animate__delay-1s" style="font-family: 'Amiri', serif; max-width: 800px; margin: 0 auto;">
                اكتشف كنوز المملكة العربية السعودية التراثية من معالم تاريخية وآثار عريقة وعادات وتقاليد أصيلة تروي قصة أمجاد الماضي وعبقرية الحاضر.
            </h5>
            <div class="d-flex justify-content-center gap-3 animate__animated animate__fadeIn animate__delay-1s">
                <a href="{{ route('sites.index') }}" class="btn btn-custom px-4 py-2">
                    <i class="fas fa-map-marked-alt me-2"></i>استكشف المعالم
                </a>
                <a href="#heritage-video" class="btn btn-custom px-4 py-2">
                    <i class="fas fa-play-circle me-2"></i>شاهد الفيديو
                </a>
            </div>
        </div>

        <!-- إحصائيات سريعة - قسم جديد -->
        <div class="stats-section mb-5 py-4 bg-light rounded-4">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="stat-item p-3">
                        <h2 class="display-4 text-success">6</h2>
                        <p class="mb-0">مواقع مسجلة في اليونسكو</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item p-3">
                        <h2 class="display-4 text-success">13</h2>
                        <p class="mb-0">منطقة تراثية رئيسية</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item p-3">
                        <h2 class="display-4 text-success">300+</h2>
                        <p class="mb-0">مبنى تاريخي</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stat-item p-3">
                        <h2 class="display-4 text-success">5000</h2>
                        <p class="mb-0">سنة من التاريخ</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- قسم تعريفي عن التراث السعودي - محسن -->
        <section class="about-heritage mb-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="pe-lg-5">
                        <h2 class="mb-4 text-success fw-bold" style="font-family: 'Amiri', serif;">
                            <i class="fas fa-landmark me-2"></i>تراث المملكة.. إرث حضاري عريق
                        </h2>
                        <p class="lead fs-5">
                            تمتد جذور التراث السعودي إلى آلاف السنين، حيث تتناغم الحضارات القديمة مثل النبطية واللحيانية والدلمونية مع إنجازات العصر الحديث لتشكل نسيجًا ثقافيًا فريدًا.
                        </p>
                        <p>
                            من صحراء الربع الخالي إلى جبال عسير، ومن سواحل الخليج إلى أودية الحجاز، تحتضن المملكة كنوزًا تراثية تروي قصص الحضارات والإنسان. مواقع مثل مدائن صالح وقصر المصمك والدرعية ليست مجرد آثار، بل هي صفحات مفتوحة من تاريخنا المجيد.

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="heritage-gallery">
                        <div class="row g-3">
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-1.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-2.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-3.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                            <div class="col-6">
                                <img src="{{ asset('images/heritage-4.jpg') }}" alt="تراث سعودي" class="img-fluid rounded-3 shadow-sm" style="height: 200px; width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- قسم الفيديو التوضيحي - جديد -->
        <section id="heritage-video" class="mb-5">
            <div class="video-container rounded-4 overflow-hidden shadow-lg" style="background: #000;">
                <div class="ratio ratio-16x9">
                    <iframe src="https://youtu.be/zfujw9DrPLg?si=3oJmNEUGBTiy_vmF" title="فيديو عن التراث السعودي" allowfullscreen></iframe>
                </div>
                <div class="video-caption p-4 bg-dark text-white">
                    <h3 class="mb-2" style="font-family: 'Amiri', serif;">رحلة في أعماق التراث السعودي</h3>
                    <p class="mb-0">شاهد هذا الفيديو التعريفي الذي يأخذك في جولة عبر أهم المعالم التراثية في المملكة</p>
                </div>
            </div>
        </section>

        <!-- قسم الاشتراك في النشرة البريدية - جديد -->
        <section class="newsletter-section mb-5 py-5 rounded-4" style="background: linear-gradient(135deg,hsl(46, 17.90%, 54.10%),rgb(88, 64, 47));">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center text-white">
                        <h2 class="display-5 fw-bold mb-3" style="font-family: 'Amiri', serif;">
                            <i class="fas fa-envelope-open-text me-2"></i>انضم إلى قائمتنا البريدية
                        </h2>
                        <p class="lead mb-4" style="opacity: 0.9;">
                            اشترك ليصلك كل جديد عن تراث المملكة، معالم تاريخية، فعاليات تراثية، قصائد وطنية وغيرها
                        </p>
                        <form class="row g-2 justify-content-center">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="email" class="form-control form-control-lg" placeholder="بريدك الإلكتروني" required>
                                    <button class="btn btn-light text-success px-4" type="submit">
                                        اشتراك <i class="fas fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                                    <label class="form-check-label small" for="agreeTerms">
                                        أوافق على تلقي النشرات البريدية وموافقة على سياسة الخصوصية
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
                                </p>
                        <div class="d-flex gap-2 mt-4">
                            <a href="{{ route('more') }}" class="btn btn-custom">
                                <i class="fas fa-info-circle me-1"></i> المزيد عنا
                            </a>
                            <a href="{{ route('contact') }}" class="btn btn-custom">
                                <i class="fas fa-envelope me-1"></i> اتصل بنا
                            </a>
                        </div>
    </div>

    @push('styles')
    <style>
        /* تحسينات عامة */
        body {
            font-family: 'Tajawal', sans-serif;
        }
        
        /* قسم البطل */
        .hero-section {
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
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        
        /* العلامات على الصور */
        .badge-overlay {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 2;
        }
        
        /* القصائد */
        .poem-card {
            transition: all 0.3s ease;
        }
        .poem-card:hover {
            background: #fff !important;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1) !important;
        }
        
        /* الإحصائيات */
        .stat-item {
            transition: all 0.3s ease;
        }
        .stat-item:hover {
            transform: scale(1.05);
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        /* أزرار */
        .btn-success {
            background-color: #355E3B;
            border-color: #355E3B;
        }
        .btn-success:hover {
            background-color: #2a4b2f;
            border-color: #2a4b2f;
        }
        .btn-outline-success {
            color: #355E3B;
            border-color: #355E3B;
        }
        .btn-outline-success:hover {
            background-color: #355E3B;
            color: white;
        }
    </style>
    @endpush

    @push('scripts')
    <!-- مكتبات للحركات والتفاعل -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    @endpush
@endsection