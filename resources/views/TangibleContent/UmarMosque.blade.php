@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">مسجد عمر بن الخطاب </h1>
                
                <!-- الصورة المعدلة -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/mosque_omar_2.jpg') }}" alt="مسجد عمر بن الخطاب " 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">     حيث التاريخ يلتقي بالإيمان   </h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يُعتبر مسجد عمر بن الخطاب في دومة الجندل لؤلؤة العمارة الأموية وشاهداً حياً على بساطة الفن الإسلامي المبكر، حيث يروي حجارةُه قصةَ حقبةٍ من التاريخ الإسلامي العريق.


                </p>

  
                 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">  تصميم مسجد عمر بن الخطاب </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يظهر مسجد عمر بن الخطاب بشكل مستطيل، وتبدو مئذنته مربعة، وتضيق إلى الداخل، بحيث يتناقص عرضها كلما ارتفع طولها، وتنتهي بشكل مشابه للهرم، ويبلغ ارتفاعها 12.7م، وتنقسم من الداخل إلى أربعة طوابق بنيت جميعها على سقف يؤدي لطريق خارجي.


                    </p>
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
كان سقف مسجد عمر بن الخطاب يمثّل الطريق الوحيد إلى المئذنة، حيث يتم من خلاله الوصول إلى الطابق الأول للمئذنة، قبل الوصول إلى السلم الحجري الرابط بين الطوابق العلوية، والذي انهار سابقًا، ليمنع الوصول إلى المئذنة سنوات عديدة، وبالرغم من إعادة ترميم المسجد مرات عديدة إلا أن مئذنته بقيت محافظةً على شكلها منذ بنيت حتى هذا العصر.

 <img src="{{ asset('images/mosque_omar_1.jpg') }}" alt="مسجد عمر بن الخطاب " 
 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                 <img src="{{ asset('images/mosque_omar22.jpg') }}" alt="مسجد عمر بن الخطاب " 
 
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