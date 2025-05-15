@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">الفلكلور والأهازيج الشعبية في المملكة</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_folklore.jpg') }}" alt="الفلكلور السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content" style=border-color: #5a3921;">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #6a1b9a; padding-bottom: 8px;">إرث غنائي وحركي يعبر عن أصالة الشعب السعودي</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
                        يتميز الفلكلور السعودي بتنوعه الغني الذي يعكس ثقافة المناطق المختلفة في المملكة. تشمل الأهازيج الشعبية والرقصات التقليدية مجموعة من الفنون التي توارثتها الأجيال، وتُمارس في المناسبات الاجتماعية والأعياد والاحتفالات الوطنية.
                    </p>

                        <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الفلكلور الشعبي  </h4>

                        <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
يُشكل الفلكلور الشعبي في المملكة العربية السعودية تعبيرًا غنيًا عن الهوية الثقافية، حيث يتضمن الشعر النبطي، القصص الشعبية، الأمثال، والفنون الأدائية مثل الرقصات والأهازيج. يرتبط الفلكلور بحياة البدو والحضر، معبرًا عن تجاربهم في الصحراء، الزراعة، أو البحر. تُعد العرضة، وهي رقصة شعبية نجدية، مثالًا بارزًا، حيث يؤديها الرجال باستخدام السيوف مع إيقاعات الطبول وأهازيج تمجد البطولة والكرم. تُصاحب العرضة أبيات شعرية مثل:                    </p>
                    

<h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">  الدحَّة  في المنطقة الشمالية  </h4>

                        <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تنطوي أهزوجة الدحَّة الشمالية التقليدية على أصواتٍ وهمهمات حادة من قِبل المؤدين، تمثّل استعدادًا للمعركة أو إظهارًا لمهارات غريبة في القتال تشابه صوتيًا زئير الأسد، وهي إحدى الأهازيج التي تعتمد في نجاحها على قوة الأصوات البشرية، مُشيرةً إلى طقوس قديمة للاستعداد الصوتي للمعارك.
  <div class="text-center mb-5">
                    <img src="{{ asset('images/ald7h.jpg') }}" alt="الفلكلور السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>

<h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">  الخطوة العسيرية في المنطقة الجنوبية  </h4>

                        <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تُعد الخطوة العسيرية من أشهر الفنون الشعبية في عسير، وهي رقصة جماعية تُؤديها الرجال بحركات إيقاعية متزامنة، غالبًا مع حمل السيوف أو العصي. تُصاحب الرقصة أهازيج حماسية تُمجد المنطقة، القبيلة، أو المناسبة.
مثال على أهزوجة الخطوة:
"يا دار عسير يا جنة الأرض / غنوا معانا في عيدنا الفرض / جبالك خضرا وقلوبنا عز / بالخطوة نهز الأرض بفخرنا".
تُؤدى الخطوة في الأعراس والاحتفالات الوطنية، مثل يوم التأسيس، وتُبرز التلاحم الاجتماعي والفخر بالهوية.
  <div class="text-center mb-5">
                    <img src="{{ asset('images/asir.jpg') }}" alt="الفلكلور السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
<div class="text-center mb-5">
                    
                    


                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">أشهر الرقصات الشعبية</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li><strong>العرضة النجدية:</strong> رقصة الحرب التي تحولت إلى فن وطني</li>
                        <li><strong>الرزفة:</strong> في المنطقة الشرقية والجنوبية</li>
                        <li><strong>المجرور:</strong> في منطقة الحجاز</li>
                        <li><strong>الدحة:</strong> في شمال المملكة</li>
                        <li><strong>اللعب:</strong> بالسكاكين في الجنوب</li>
                    </ul>

                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">أنواع الأهازيج الشعبية</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li><strong>السامري:</strong> غناء جماعي مع إيقاع</li>
                        <li><strong>الحداء:</strong> أناشيد الإبل</li>
                        <li><strong>القهوجي:</strong> أهازيج القهوة</li>
                        <li><strong>الزوامل:</strong> الأهازيج الحماسية</li>
                        <li><strong>أغاني العمل:</strong> مثل أغاني الغوص والزراعة</li>
                    </ul>

                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 style="color: #5a3921;">آلات موسيقية تقليدية</h5>
                                    <ul>
                                        <li>الطبول (الطار)</li>
                                        <li>المزمار</li>
                                        <li>الربابة</li>
                                        <li>الصاجات (الجرس)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 style="color: #5a3921;">مناسبات الأداء</h5>
                                    <ul>
                                        <li>الأعراس</li>
                                        <li>الأعياد الوطنية</li>
                                        <li>المهرجانات التراثية</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
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
            background-color: #faf5ff;
            font-family: 'Tajawal', sans-serif;
        }
        
        .heritage-content {
            background-color: #f3e5f5;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #6a1b9a;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        
        .card {
            border: 1px solid #d1c4e9;
            border-radius: 8px;
            transition: transform 0.3s;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0,0,0,0.1);
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
            background-color: #6a1b9a !important;
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
            background-color: #4a148c !important;
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