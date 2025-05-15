@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">التراث الطبيعي في المملكة العربية السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_nature.jpg') }}" alt="التراث الطبيعي السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content" style= border-color: #2d6a4f;">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #8B4513; border-bottom: 2px solid #2d6a4f; padding-bottom: 8px;">كنوز طبيعية تفتخر بها المملكة</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
                        تمتلك المملكة العربية السعودية تراثاً طبيعياً فريداً يمتد من البحر الأحمر إلى الخليج العربي، ويشمل تنوعاً بيئياً مدهشاً من الصحاري والجبال والشواطئ والواحات. هذا التراث ليس مجرد مناظر خلابة، بل هو جزء أساسي من الهوية الوطنية والإرث الثقافي.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">أبرز معالم التراث الطبيعي</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li>جبال السودة في عسير</li>
                        <li>حرة رهط في المدينة المنورة</li>
                        <li>شواطئ البحر الأحمر</li>
                        <li>صحراء الربع الخالي</li>
                        <li>واحة الأحساء (موقع تراث عالمي لليونسكو)</li>
                        <li>جزر فرسان</li>
                    </ul>

                         <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">الصحارى والكثبان الرملية في القارة السعودية </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تُعد الصحارى في المملكة العربية السعودية من أبرز معالم التراث الطبيعي، حيث تشكل نسبة كبيرة من مساحتها الشاسعة. تتميز هذه الصحارى بتنوعها الجغرافي وجمالها البكر، مما يجعلها وجهة فريدة لعشاق الطبيعة والمغامرات. من أشهر هذه الصحارى الربع الخالي، وهي أكبر صحراء رملية متصلة في العالم، تمتد عبر الجزء الجنوبي من المملكة. تُبهر الربع الخالي زوارها بكثبانها الرملية الضخمة التي تتغير أشكالها مع الرياح، مما يخلق لوحات طبيعية مدهشة. هذه الصحراء ليست مجرد مساحة شاسعة من الرمال، بل هي موطن لثقافة البدو التقليدية التي ارتبطت بها عبر العصور، حيث كانت محطة للقوافل التجارية قديمًا.                    </p>

 <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_nature1.jpg') }}" alt="التراث الطبيعي السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>


                 <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">   الجبال في القارة السعودية </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تُشكل الجبال في المملكة العربية السعودية جزءًا لا يتجزأ من تراثها الطبيعي، حيث تضفي تنوعًا جغرافيًا وجماليًا على مناظرها. تُعد جبال الحجاز، التي تمتد على طول الساحل الغربي، من أبرز السلاسل الجبلية في المملكة. تضم هذه الجبال قمة جبل السودة في منطقة عسير، وهي الأعلى في المملكة، حيث يصل ارتفاعها إلى حوالي 3000 متر فوق سطح البحر. تتميز جبال الحجاز بمناخها المعتدل، خاصة في فصل الصيف، مما يجعلها وجهة سياحية شهيرة. غابات العرعر والمدرجات الزراعية التقليدية تضيف إلى سحرها، مما يعكس تفاعل الإنسان مع الطبيعة عبر القرون.
  <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
في وسط المملكة، تبرز جبال طويق كمعلم طبيعي مذهل، يُعرف باسم "حافة العالم" بسبب منحدراتها الحادة التي تشبه حافة هضبة ضخمة. تقع هذه الجبال بالقرب من الرياض، وتُعد رمزًا للتراث الطبيعي والثقافي، حيث كانت ملتقى للقوافل والمسافرين. تُوفر جبال طويق فرصًا للتسلق والاستكشاف، وهي موطن لبعض النباتات والحيوانات المتكيفة مع البيئة الصخرية. تسعى المملكة إلى حماية هذه الجبال من خلال مبادرات بيئية، مثل مبادرة السعودية الخضراء، التي تهدف إلى تعزيز الغطاء النباتي والحفاظ على التنوع البيولوجي في المناطق الجبلية.

<div class="text-center mb-5">
                    <img src="{{ asset('images/tuwaiq.jpg') }}" alt="التراث الطبيعي السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>



                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">المحميات الطبيعية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
                        أنشأت السعودية العديد من المحميات الطبيعية لحماية هذا التراث، مثل محمية الملك سلمان بن عبدالعزيز ومحمية الإمام تركي بن عبدالله ومحمية جزر فرسان. هذه المحميات تحافظ على التنوع البيولوجي وتوفر فرصاً للسياحة البيئية.
                    </p>
                     <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li>محمية جبل شدا   </li>
                        <li>محمية عروق بني معارض    </li>
                        <li>محمية نفود العريق  </li>
                        <li> محمية الجبيل للأحياء البحرية </li>
                        <li>محمية مجامع الهضب</li>
                        <li>محمية جزر  فرسان</li>
                    </ul>

                    <div class="text-center mb-5">
                        <img src="{{ asset('images/74591.jpg') }}" alt="المحميات الطبيعية" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    <div class="text-center mb-5">
                        <img src="{{ asset('images/73592.jpg') }}" alt="المحميات الطبيعية" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                    </div>

                    <div class="text-center mt-5">
<a href="{{ route('home') }}" class="btn btn-custom px-4 py-2">العودة للصفحة الرئيسية</a>                    </div>
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
            background-color: #f8f9fa;
            font-family: 'Tajawal', sans-serif;
        }
        
        .heritage-content {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #2d6a4f;
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
            background-color: #2d6a4f !important;
            color: white !important;
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
            background-color: #1b4332 !important;
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