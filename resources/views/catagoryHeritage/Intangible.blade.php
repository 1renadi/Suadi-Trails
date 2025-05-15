@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">التراث غير المادي في المملكة العربية السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_culture.jpg') }}" alt="العادات والتقاليد السعودية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">عادات وتقاليد ترويها الأجيال</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تمتلك المملكة العربية السعودية تراثًا غير مادي غنيًا يعكس تنوعها الثقافي وتاريخها العريق. هذا التراث، الذي يشمل العادات والفنون والمهارات التقليدية، ليس مجرد ذكريات من الماضي، بل هو جزء حيوي من الهوية الوطنية. في السنوات الأخيرة، أولت السعودية اهتمامًا كبيرًا لحماية هذا الإرث وتوثيقه محليًا وعالميًا، خاصة بعد انضمامها إلى اتفاقية اليونسكو لحماية التراث الثقافي غير المادي عام 2018.

                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الضيافة السعودية</h4>
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تعتبر الضيافة في المملكة العربية السعودية أحد أهم مظاهر الثقافة الاجتماعية، وتمثل قيمة عريقة متجذرة في تقاليد المجتمع السعودي. هذه الضيافة ليست مجرد عادة اجتماعية، بل هي جزء أساسي من الهوية الوطنية تعكس أصالة الشعب السعودي وكرمه.


                    </p>
                     <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> مظاهر الضيافة السعودية</h4>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>1. استقبال الضيف</li>
                        <li> 2. تقديم القهوة العربية</li>
                        <li>3. تقديم التمر</li>
                    </ul>

                     <div class="text-center mb-5">
                    <img src="{{ asset('images/1701562772.png') }}" alt="درب زبيدة" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>


                    <div class="text-center mt-5">
<a href="{{ route('home') }}" class="btn btn-custom px-4 py-2">العودة للصفحة الرئيسية</a>                    </div>
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