@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">الفنون الصخرية في جبة والشويمس</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/juba.jpg') }}" alt="الفنون الصخرية في جبة والشويمس" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">أرشيف البشرية المنقوش على الحجر</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تعد مواقع الفنون الصخرية في جبة والشويمس بشمال السعودية من أهم المتاحف الطبيعية المفتوحة التي تحوي آلاف النقوش والرسوم الصخرية التي تعود إلى أكثر من 10,000 عام. أدرجت اليونسكو الموقعين على قائمة التراث العالمي عام 2015 كشاهد استثنائي على الإبداع البشري عبر العصور.
                    </p>

                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الفنون الصخرية في موقع جبة </h4>

                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يمثل موقع جبة الأثري متحفًا مفتوحًا للفنون الصخرية، وأحد أكبر مواقع الفنون الصخرية في المملكة،وكانت بالقرب من جبة قديمًا بحيرة كبيرة وملاجئ صخرية يقيم فيها الصيادون الذين كانوا يكمنون للطرائد التي ترد مياه البحيرة، وبذلك كانت جبة مركزًا للتبادل الثقافي والاجتماعي في عصور ما قبل التاريخ، دلت على ذلك الفنون الصخرية والنقوش القديمة فيها، التي تؤكد أن هذا المكان كان مركزًا يتجمع فيه السكان، وتجري فيه الأنشطة الاجتماعية والثقافية والدينية.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">كنوز الموقع</h4>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>أكثر من 5,000 نقش ورسوم صخرية</li>
                        <li>نقوش تعود للعصر الحجري الحديث (6,000 ق.م)</li>
                        <li>رسوم للإنسان والحيوانات (الجمال، النعام، الغزلان)</li>
                        <li>نقوش بخط الثمودي واللحياني</li>
                    </ul>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/juba_shuwaymis_1.jpg') }}" alt="نقوش الشويمس الصخرية" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">جبة: متحف الصحراء المفتوح</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تتميز جبة بـ:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>موقعها وسط بحيرة جافة قديمة</li>
                        <li>نقوش تصور الحياة اليومية للصيادين القدامى</li>
                        <li>رسوم للحيوانات المنقرضة في المنطقة</li>
                        <li>أقدم صور معروفة للكلاب المستأنسة</li>
                    </ul>

                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">  أهمية موقع الشويمس</h4>

                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يعد موقع الشويمس من المتاحف المفتوحة للنقوش الصخرية في شبه الجزيرة العربية، وأحد أكبر متاحف التاريخ الطبيعي المفتوحة في العالم، يمتد على مساحة تصل إلى نحو 50 كم2، وتتكون جغرافيا الموقع من الأحجار الرملية، المرتكزة على أرض بركانية شاسعة تضم فوهات وكهوفًا ما زالت تخضع للاستكشاف،وتوجد في الموقع لوحات إفريزية جميلة نفذت بدقة متناهية يصل طول إحداها إلى نحو 12 مترًا.

                    </p>

                     <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">  آثار الشويمس في قائمة التراث العالمي  </h4>

                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تحيط بواجهات الشويمس الصخرية مواقع أثرية تتميز بها منطقة حائل، كموقع جبلي راطا والمنجور. وتوثق النقوش الصخرية تحولاتٍ بيئية مرت بها شبه الجزيرة العربية.وضُم موقع جبلي راطا والمنجور في الشويمس إلى قائمة التراث العالمي في منظمة الأمم المتحدة للتربية والعلم والثقافة "اليونسكو" عام 1436هـ/2015م.
                    </p>
                    
                    

                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الشويمس: لوحات فنية قديمة</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يتميز موقع الشويمس بـ:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>منحوتات صخرية ضخمة</li>
                        <li>مشاهد صيد متقنة</li>
                        <li>رموز فلكية قديمة</li>
                        <li>نقوش تعود لعصور ما قبل التاريخ</li>
                    </ul>
                    <div class="text-center my-4">
                        <img src="{{ asset('images/74123.jpg') }}" alt="نقوش الشويمس الصخرية" 
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