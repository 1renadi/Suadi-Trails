@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">درب زبيدة</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/darb_zubayda_2.jpg') }}" alt="درب زبيدة" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">شريان الحج والتجارة العظيم</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
درب زبيدة أو طريق الحج الكوفي، هو أحد طرق الحج والتجارة التاريخية في المملكة العربية السعودية، وهو الطريق البري الذي يصل بين العراق ومكة المكرمة، يمر بخمس مناطق سعودية هي: الحدود الشمالية، وحائل، والقصيم، والمدينة المنورة، ومكة المكرمة، اتخذه المسافرون طريقًا للتجارة منذ عصور ما قبل الإسلام، وفيما بعد معبرًا للحجاج والزوار القادمين من العراق وشمال شبه الجزيرة العربية إلى المدينتين المقدستين مكة المكرمة والمدينة المنورة. 

                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">درب زبيدة قبل الإسلام </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يعد أحد الطرق المعروفة منذ عصور ما قبل الإسلام، اكتسب أهميته من كونه الطريق الرابط بين الحواضر التجارية في شمال شبه الجزيرة العربية وجنوبها، سلكته لاحقًا الجيوش الإسلامية في طريقها إلى العراق للمرة الأولى بعد ظهور الإسلام في فترة خلافة الصحابي عمر بن الخطاب، وبقيادة سعد بن أبي وقاص، ظهرت على إثر هذه الحادثة مواضع أصبحت فيما بعد محطات رئيسية للحاج على امتداد هذا الطريق، وهي: الثعلبية وزرود والشرف والعذيب والقادسية، وازدادت أهميته مع تحول مركز الخلافة من دمشق في الشام إلى العاصمة بغداد في العراق.
شهد درب زبيدة في فترة الدولة الأموية أعلى حركة مرورية من بين طرق الحج والتجارة التاريخية، كونه حلقة الوصل بين مركز الدولة في بغداد والأماكن المقدسة في مكة المكرمة والمدينة المنورة.
                    </p>

                     <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">   مسار درب زبيدة </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يجتاز الطريق جغرافيًّا، أراضي سهلية ومناطق وعرة وصحاري ثم يصل إلى جبال الحجاز متجاوزًا الأودية الضيقة والعميقة، يبلغ طوله في أراضي المملكة نحو 1400 كلم، وتشغل الأراضي الحالية للمملكة 89% منه، نسبة لإجمالي طوله البالغ 1571 كلم، وهو الخط الذي يبدأ من محطة العقبة شمالا وينتهي إلى مكة المكرمة. 

                    </p>

                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>أول طريق منظم لخدمة الحجاج في التاريخ الإسلامي</li>
                        <li>يبلغ طوله حوالي 1400 كم</li>
                        <li>يضم أكثر من 27 محطة رئيسية</li>
                        <li>يشمل العديد من البرك والآبار والسدود</li>
                    </ul>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/darb_zubayda_1.jpg') }}" alt="إحدى محطات درب زبيدة" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">منشآت الدرب</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تميز درب زبيدة بمنشآت متكاملة لخدمة الحجاج:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>محطات استراحة (مثل محطة الربذة)</li>
                        <li>برك لتجميع المياه (أشهرها برك الخرابة)</li>
                        <li>أماكن للصلاة (مساجد ومصليات)</li>
                        <li>أبراج مراقبة لحماية القوافل</li>
                    </ul>
                    
                    
        
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