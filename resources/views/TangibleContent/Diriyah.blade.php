@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">الدرعية</h1>
                
                <!-- الصورة المعدلة -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/diriyah.jpg') }}" alt="الدرعية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">جوهرة التراث السعودي وأصل المجد</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        تعتبر الدرعية من أبرز المعالم التاريخية في المملكة العربية السعودية، حيث تمثل القلب النابض لتاريخ الدولة السعودية الأولى. تقع شمال غرب العاصمة الرياض، وتتميز بموقع استراتيجي عند وادي حنيفة الذي منحها خصوبة طبيعية جعلتها مركزاً حضارياً مهماً عبر القرون.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">تاريخ عريق</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        تأسست الدرعية عام 1446م على يد مانع المريدي، جد الأسرة المالكة السعودية. لكن شهرتها العالمية جاءت عندما أصبحت عاصمة للدولة السعودية الأولى عام 1744م تحت قيادة الإمام محمد بن سعود الذي تحالف مع الشيخ محمد بن عبد الوهاب. شهدت الدرعية ازدهاراً غير مسبوق في تلك الفترة، حيث أصبحت مركزاً سياسياً ودينياً واقتصادياً مهماً في الجزيرة العربية.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">معالم أثرية خلابة</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        تحتضن الدرعية العديد من المواقع التاريخية المهمة، أبرزها:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>حي الطريف: المدرج على قائمة اليونسكو للتراث العالمي.</li>
                        <li>قصر سلوى: مقر إقامة الأسرة الحاكمة سابقاً.</li>
                        <li>مسجد الإمام محمد بن سعود.</li>
                        <li>أحياء البجيري والسمحة التاريخية.</li>
                    </ul>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">إعادة الإحياء</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        في العصر الحديث، أولت المملكة اهتماماً كبيراً بإعادة إحياء الدرعية كوجهة ثقافية وسياحية عالمية. تم إنشاء مشروع تطوير الدرعية الكبير الذي يشمل:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>متاحف حديثة تعرض تاريخ السعودية.</li>
                        <li>مراكز ثقافية وفعاليات عالمية.</li>
                        <li>مناطق ترفيهية ومطاعم فاخرة.</li>
                        <li>فنادق ومنتجعات تراثية فاخرة.</li>
                    </ul>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">رمز الوحدة الوطنية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        تمثل الدرعية رمزاً للوحدة الوطنية السعودية، حيث كانت نقطة الانطلاق لتوحيد المملكة تحت قيادة الملك عبد العزيز آل سعود. كما تعتبر من أهم الوجهات السياحية حالياً، حيث تستقطب الزوار من داخل المملكة وخارجها للتعرف على تاريخ السعودية العريق.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">رؤية مستقبلية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
                        تحت رؤية 2030، تسعى المملكة إلى جعل الدرعية من أهم الوجهات الثقافية العالمية، حيث تدمج بين الأصالة التاريخية والحداثة العمرانية. أصبحت الدرعية اليوم تمثل نموذجاً فريداً للحفاظ على التراث مع مواكبة التطور.
                    </p>
                    
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