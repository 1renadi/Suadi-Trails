@extends('layouts.app')

@section('title', 'المزيد')

@section('content')
    <div class="container py-5">
        <!-- Hero Section -->
        <div class="text-center  mb-20">
            <h1 class="display-4" style="color: #355E3B; font-family: 'Amiri', serif;">اكتشف المزيد عن مآثر</h1>
        </div>

        <!-- About Heritage Section -->
        <div class="row mb-5">
            <div class="col-md-12 mb-40 offset-md-4 text-center">
                <h2 class="mb-4" style="font-family: 'Amiri', serif; color: #5a3921">عن التراث السعودي</h2>
                <p class="text-muted" style="font-family: 'Amiri', serif;">
                    التراث السعودي يعكس تاريخًا عريقًا يمتد لآلاف السنين، من الحضارات القديمة مثل ثمود إلى الإنجازات الحديثة. يضم المملكة مواقع تراثية عالمية مثل الدرعية، التي كانت عاصمة الدولة السعودية الأولى، ومدائن صالح، التي تروي قصص الحضارة النبطية. تعرف على هذه القصص واستكشف المزيد من الثقافة العربية الأصيلة.
                </p>
            </div>
        </div>

        <!-- Latest News or Updates Section -->
        <div class="row mb-5">
            <h2 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921">آخر الأخبار</h2>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/news1.jpg') }}" class="card-img-top" alt="خبر 1" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #355E3B; font-family: 'Amiri', serif;">  معرض روائع آثار المملكة عبر العصور </h5>
                                <p class="card-text">هو معرض سعودي عالمي، لتعريف العالم بآثار المملكة العربية السعودية، وتاريخها الحضاري الممتد لآلاف السنين</p>
                                <a href="https://saudipedia.com/article/11167/%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE/%D9%85%D8%B9%D8%A7%D9%84%D9%85-%D9%88-%D8%A2%D8%AB%D8%A7%D8%B1/%D9%85%D8%B9%D8%B1%D8%B6-%D8%B1%D9%88%D8%A7%D8%A6%D8%B9-%D8%A2%D8%AB%D8%A7%D8%B1-%D8%A7%D9%84%D9%85%D9%85%D9%84%D9%83%D8%A9-%D8%B9%D8%A8%D8%B1-%D8%A7%D9%84%D8%B9%D8%B5%D9%88%D8%B1" class="btn btn-custom">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/news2.jpg') }}" class="card-img-top" alt="خبر 2" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #355E3B; font-family: 'Amiri', serif;"> الدرعية... ترميم التاريخ وإعادة التأهيل </h5>
                                <p class="card-text">أقرت السعودية استراتيجيات وبرامج لتطوير «الدرعية» من النواحي العمرانية والثقافية والاقتصادية والاجتماعية وغيرها بوصفها عاصمة الدولة السعودية الأولى التي وضعت اسمها أقوى الدول في المنطقة</p>
                                <a href="https://aawsat.com/%D8%A7%D9%84%D8%B9%D8%A7%D9%84%D9%85-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A/%D8%A7%D9%84%D8%AE%D9%84%D9%8A%D8%AC/5114786-%D8%A7%D9%84%D8%AF%D8%B1%D8%B9%D9%8A%D8%A9-%D8%AA%D8%B1%D9%85%D9%8A%D9%85-%D8%A7%D9%84%D8%AA%D8%A7%D8%B1%D9%8A%D8%AE-%D9%88%D8%A5%D8%B9%D8%A7%D8%AF%D8%A9-%D8%A7%D9%84%D8%AA%D8%A3%D9%87%D9%8A%D9%84" class="btn btn-custom">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="{{ asset('images/news3.jpg') }}" class="card-img-top" alt="خبر 3" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title" style="color: #355E3B; font-family: 'Amiri', serif;">  مهرجان التراث العربي .. أصالة الماضي وإشراقة الحاضر</h5>
                                <p class="card-text">يعتبر التراث العربي جزءًا أساسيًا من الهوية الثقافية للأمة العربية، فهو يجمع بين العادات والتقاليد، الفنون، اللغة، الأدب، والمعرفة التي توارثتها الأجيال عبر التاريخ</p>
                                <a href="#" class="btn btn-custom">اقرأ المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Useful Resources Section -->
        <div class="row mb-5">
            <h2 class="text-center mb-4" style="color: #355E3B; font-family: 'Amiri', serif;">مواقع مفيدة</h2>
            <div class="col-md-12 offset-md-2 text-center">
                <p class="text-muted" style="font-family: 'Amiri', serif;">
                    زُر <a href="https://whc.unesco.org" target="_blank" style="color: #355E3B;">موقع اليونسكو</a> لتفاصيل عن المواقع التراثية العالمية، أو تحقق من <a href="https://scth.gov.sa" target="_blank" style="color: #355E3B;">هيئة السياحة السعودية</a> لأحدث الفعاليات.
                </p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center py-5 bg-light rounded-4">
            <h3 style="color: #355E3B; font-family: 'Amiri', serif;">شاركنا رحلتك التراثية!</h3>
            <p class="text-muted" style="font-family: 'Amiri', serif;">إذا زرت أحد المواقع، شارك صورك معنا عبر وسائل التواصل الاجتماعي.</p>
            <a href="{{ route('contact') }}" class="btn btn-custom mt-3">تواصل معنا</a>
        </div>
    </div>
@endsection