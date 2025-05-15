@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">الحجر - مدائن صالح </h1>
                
                <!-- الصورة المعدلة -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/al-hijr.jpg') }}" alt="الحجر" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;"> جوهرة التاريخ النبطي في السعودية   </h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
الحِجْر (مدائن صالح)، هي إحدى مواقع التراث العالمي، ومَعلم تاريخي سياحي سعودي، تقع في محافظة العُلا التابعة لمنطقة المدينة المنورة، شمال غرب المملكة العربية السعودية. تتألف الحِجر، التي عرفت لفترة زمنية بمدائن صالح، من آثار جَمعت حِقبًا تاريخية متنوعة، منها النبطية واللحيانية والإسلامية، ومن أشهر معالمها المدافن التاريخية المنحوتة على واجهات الصخور الرملية. 
                </p>

  
                 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">موقع الحِجر الجغرافي </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تقع الحِجر في محافظة العُلا شمال غرب السعودية، وتتبع إداريًّا لمنطقة المدينة المنورة، وتبعد الحِجر عن مركز محافظة العلا 22 كم، وعن العاصمة الرياض 1.45 ساعة بالطائرة،وهي في المنتصف بين تبوك شمالًا التي تبعد عنها نحو 270 كم، والمدينة المنورة إلى الجنوب بنحو 355 كم، ويفصلها عن مشروع البحر الأحمر نحو 353 كم. 

                    </p>
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تستقر الحِجر على هيئة متحف أثريٍّ مفتوح وسط الرمال في وادي القرى، على مساحة أكثر من 13 كم2، تتبدى فيه للرائي الجبال الشاهقة ذات الواجهات المنحوتة بدقة. وعلى الرغم من شهرة آثارها المرتبطة بالأنباط، إلا أن الآثار والنقوش العائدة إلى مملكتي لحيان ودادان، اللتين سبقتا الأنباط في الاستقرار بالحِجر، لا تزال حاضرة في نحو 50 نقشًا ورسمًا ونصًّا.

                  
                 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> الأهمية التاريخية للحجر  </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
كانت الحجر قديمًا ملتقى للقوافل التجارية التي تسلك طريق البخور قادمة من اليونان وروما وشمال أفريقيا وآسيا وجنوب شبه الجزيرة العربية، وهي ثاني أكبر موقع يشهد على حضارة الأنباط، بعد مدينة البتراء الأثرية في الأردن، احتضنت الحِجر ممالك وأقوامًا عربية قديمة، وهم المعينيون والثموديون ثم اللحيانيون، ومن بعدهم مملكة الأنباط، حيث ازدهرت في حكمهم الذي دام نحو 700 عام، وبلغت مكانة اقتصادية جعلتها العاصمة التجارية لمملكتهم.


                    </p>
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يحمل الموقع رمزية دينية بسبب استيطانه من قبل الثموديين الذين ذكروا في القرآن الكريم، باسم قوم ثَمُودْ: "وثَمُودَ الذّينَ جَابُوا الصّخْرَ بالوَاد"، (الفجر: 9) وأيضًا "أصحاب الحجر": "ولقد كذّبَ أصحَابُ الحِجرِ المُرسَلِين" (الحجر: 80). تُقدر الفترة الزمنية التي سكن فيها الثموديون الحِجر بـ3000 سنة قبل الميلاد، وتشير النصوص الدينية الإسلامية إلى نحتهم للجبال واتخاذها بيوتًا لهم، وأرسل الله إليهم نبيًّا يدعى صالح.





            
                    
                    <h4  class="mb-4"  style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem; ">  أبرز معالم الحجر:</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem; line-height: 1.8;">
                        <li class="mb-4" >  <h6 > قصر الفريد  </h6>   </li> 
                        <li class="mb-4" >  <h6 >  مقابر جبل أثلب   </h6>      </li>
                        <li class="mb-4" >  <h6 > مقابر قصر البنت   </h6>       </li> 
                        <li class="mb-4" >  <h6 > الجبل الأحمر  </h6>      </li>
                        <li class="mb-4" >  <h6 >  الخريمات  </h6>      </li>

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