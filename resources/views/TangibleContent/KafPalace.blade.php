@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;"> 
قصر كاف الأثري </h1>
                
                <!-- الصورة المعدلة -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/kaaf_palace.jpg') }}" alt="قصر كاف الأثري" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">       إرث عريق وحكاية أصالة</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
هو قصرٌ تراثيٌّ تاريخيٌّ وأحد المعالم الحضارية والتاريخية في محافظة القريات بمنطقة الجوف، شمال المملكة العربية السعودية، بني في عام 1338هـ كما هو مدون على بابه، ليكون مقرًّا لإقامة الشيخ نواف الشعلان حين كان يحكم المنطقة ويتخذ من هذا القصر مقرًّا لحكمه في ذلك الوقت، واشتهر باسم قصر ابن شعلان نسبةً إليه.

  
                 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">     تاريخ قصر كاف الأثري  </h4>
                    

                 
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
سُلِّم قصر كاف الأثري إلى الملك المؤسس عبدالعزيز بن عبدالرحمن آل سعود عام 1344هـ، وأصبح القصر في حينها مقرًّا للإمارة، إذ تعاقب عليه عدد من الأمراء ابتداءً من أول أمراء القريات علي بن بطاح، ثم عبدالله بن حمدان، وعبدالله الحواس، وصالح بن عبدالواحد، وعبدالعزيز بن زيد.


  <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
ونقل مركز الإمارة في عهد عبدالعزيز السديري من قرية كاف إلى مقر القريات الحالي، وكان ذلك عام 1357هـ، وبقي القصر مقرًّا لمركز إمارة كاف، حتى سُلِّم لوحدة الآثار والمتاحف وقتها في إدارة التعليم بالقريات، ثم وُثِّق وسُجل، ورُمِّم بعد ذلك.



  <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">     موقع قصر كاف الأثري  </h4>
                    

                 
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يقع قصر كاف الأثري على تل متوسط الارتفاع في الجهة الشمالية الشرقية من قرية كاف التي سمي باسمها، ويبعد عن قلعة الصعيدي التاريخية 700م.



  <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
ويعرف القصر بأساساته الجدارية الحجرية، وبنائه ذي الطابع التاريخي التراثي المميز، إذ استغرق تأسيسه نحو عامين، وعلى أطرافه عدد من الأبراج، وله بوابتان رئيستان، وهو محاط بسور فيه أربعة أبراج مراقبة في أركانه، إذ كان أحد الحصون الحربية في العصر العثماني، كما يحوي القصر عددًا من الغرف والقاعات متعددة الاستخدامات.




                 <img src="{{ asset('images/kaaf.jpg') }}" alt=" قصر كاف الأثري " 
 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                    <img src="{{ asset('images/kaaf_palace_2.jpg') }}" alt=" قصر كاف الأثري " 
 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
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