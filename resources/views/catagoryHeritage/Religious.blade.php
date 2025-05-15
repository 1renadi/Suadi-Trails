@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">التراث الديني في المملكة العربية السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/masjid_al_haram.jpg') }}" alt="المسجد الحرام" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">إرث ديني عريق</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تمتلك المملكة العربية السعودية تراثاً دينياً فريداً بوصفها مهبط الوحي وقلب العالم الإسلامي. هذا التراث يشمل المواقع الدينية والتقاليد الإسلامية والممارسات الروحية التي تمتد لأكثر من 1400 عام. تحرص السعودية على حفظ هذا التراث وتوثيقه كجزء أساسي من هويتها الوطنية ودورها القيادي في العالم الإسلامي.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">أبرز مظاهر التراث الديني</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>المسجد الحرام والكعبة المشرفة</li>
                        <li>المسجد النبوي وقبر الرسول ﷺ</li>
                        <li>مقبرة البقيع</li>
                        <li>جبل عرفات ومشاعر الحج</li>
                        <li>المساجد التاريخية كمسجد القبلتين</li>
                    </ul>

                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">التقاليد الدينية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تشمل التقاليد الدينية في السعودية طقوس الحج والعمرة، والأذان، والخطابة، والإنشاد الديني، بالإضافة إلى العادات المرتبطة بشهر رمضان والأعياد الإسلامية. كما تشتهر السعودية بحفظها للقرآن الكريم وتعليمه، وإقامة المسابقات القرآنية العالمية.
                    </p>

                    <div class="text-center mb-5">
                        <img src="{{ asset('images/hajj_rituals.jpg') }}" alt="مناسك الحج" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                    </div>

                    <div class="text-center mt-5">
<a href="{{ route('home') }}" class="btn btn-custom px-4 py-2">العودة للصفحة الرئيسية</a>                    </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        /* تنسيقات عامة */
        body {
            background-color: rgb(251, 251, 236);
            font-family: 'Tajawal', sans-serif;
        }
        
        .heritage-content {
            background-color: #F5F5DC;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #D2B48C;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        /* تنسيقات الصورة */
        .heritage-content img {
            max-height: 500px;
            width: auto;
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 2rem auto;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        
        /* تنسيقات الزر */
        .btn-custom {
            background-color: #5a3921 !important;
            color: #F5F5DC !important;
            border: none !important;
            border-radius: 25px !important;
            transition: all 0.3s ease !important;
            font-family: 'Amiri', serif;
            font-weight: bold;
            padding: 10px 30px;
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        
        .btn-custom:hover {
            background-color: #3a2414 !important;
            transform: translateY(-3px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        /* تحسينات للجوال */
        @media (max-width: 768px) {
            .heritage-content {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 1.8rem;
            }
            
            h3, h4 {
                font-size: 1.3rem;
            }
            
            .heritage-content img {
                max-height: 300px;
            }
            
            .btn-custom {
                padding: 8px 25px;
                font-size: 0.9rem;
            }
        }
    </style>
@endpush