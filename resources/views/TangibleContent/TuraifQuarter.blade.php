@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">حي الطريف التاريخي</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/tarif_district.jpg') }}" alt="حي الطريف بالدرعية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">قلب الدولة السعودية الأولى</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
حي الطريف هو الحي التاريخي في الدرعية الذي كان مقراً لحكم آل سعود عندما كانت الدرعية عاصمة للدولة السعودية الأولى. يمثل هذا الحي تحفة معمارية فريدة من الطين والنخيل، وهو أحد مواقع التراث العالمي المسجلة في اليونسكو منذ عام 2010.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">التاريخ العريق</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
استقر أئمة الدولة السعودية الأولى في حي الطريف التاريخي بدءًا من الإمام عبدالعزيز بن محمد بن سعود، ثم الإمام سعود بن عبدالعزيز الذي اتسع الحي في عهده، ثم الإمام عبدالله بن سعود الذي شهِد الحي في آخر حكمه هجوم القوات العثمانية التي حاصرت الدرعية ستة أشهر عام 1233هـ/1818م، وفي آخر حصاره الدرعية وجه قائد الحملة إبراهيم باشا مدافعه التي كان يديرها مهندسون أوروبيون تجاه حي الطريف لوجود الإمام عبدالله بن سعود فيه، ولأنه آخر حصن للدفاع عن الدرعية والدولة، وتمكن إبراهيم باشا من تدمير الحي الذي صمد، وبقيت أجزاء كبيرة منه شامخة لقوة بنائه.

                    </p>

        
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">أبرز المعالم</h4>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>قصر سلوى: المقر الرئيسي لحكام آل سعود</li>
                        <li>مسجد الإمام محمد بن سعود</li>
                        <li>الأحياء السكنية التاريخية</li>
                        <li>المتاحف والمعارض</li>
                        <li>الأسوار والبوابات الدفاعية</li>
                    </ul>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">التجديد والترميم</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
ضمن رؤية 2030، خضع حي الطريف لعملية ترميم وتطوير شاملة تحافظ على أصالته التاريخية مع إضافة مرافق حديثة للزوار. أصبح الحي اليوم وجهة سياحية وثقافية عالمية تقدم تجربة غامرة في التاريخ السعودي العريق.
                    </p>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/tarif.jpg') }}" alt="حي الطريف ليلاً" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    
                    <div class="text-center mt-5">
                        <a href="{{ route('heritage.material') }}" class="btn btn-custom px-4 py-2">العودة إلى التراث التاريخي والأثري</a>
                    </div>
                </div>
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
            background-color: #A19882 !important;
            color: #2D2424 !important;
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
            background-color: #8B7D65 !important;
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