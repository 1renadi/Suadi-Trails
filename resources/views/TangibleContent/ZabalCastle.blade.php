@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;"> 
قلعة زعبل  </h1>
                
                <!-- الصورة المعدلة -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/zaabal_castle.jpg') }}" alt="قلعة زعبل " 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">     حارس التاريخ في سماء الجوف </h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تعتلي قلعة زعبل هضبةً بازلتيةً في سكاكا بمنطقة الجوف، كـحارسٍ شامخ يراقب سهول النخيل منذ القرن الأول الهجري. هذه القلعة التاريخية التي تنتصب كـتاجٍ على رأس الجبل، تروي ملحمةً من الصمود أمام تقلبات الزمن.


  
                 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">     تاريخ قلعة زعبل​  </h4>
                    

                 
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يرتبط تاريخ القلعة بفترات زمنية مختلفة من تاريخ الجوف. تُشير الروايات إلى أن القلعة شُيدت منذ أكثر من 200 عام على يد مملكة الأنباط، وكانت تُستخدم كحصن دفاعي لحماية مدينة سكاكا من الغزوات. كان للقلعة أهمية استراتيجية كبيرة نظراً لموقعها المرتفع الذي يسمح بمراقبة الأعداء من مسافات بعيدة.

  <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
كما احتوت على مخازن للأسلحة والمؤن، مما جعلها مركزاً مهماً للحروب والدفاع في الماضي. شهدت القلعة العديد من الأحداث التاريخية التي أكسبتها شهرة واسعة في المنطقة. وعلى الرغم من قِدمها، ما زالت القلعة تحتفظ بجزء كبير من بنيتها الأصلية، مما يعكس جودة التصميم والبناء.


  <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">     ترميم قلعة زعبل  </h4>
                    

                 
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
شهدت القلعة على مر الزمن العديد من عمليات الترميم بهدف الحفاظ عليها كواحدة من أهم المعالم التاريخية في منطقة الجوف. يُعتبر ترميم القلعة جزءاً من جهود المملكة لتعزيز السياحة التراثية والحفاظ على الإرث التاريخي والتراث السعودي.


  <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
مؤخرًا، قامت هيئة السياحة والتراث الوطني بترميم القلعة عام 2020 ميلادي. وغالبًا ما كانت تتم عمليات الترميم باستخدام مواد محلية مثل الطين والحجر لضمان توافقها مع البنية الأصلية. وكانت تشمل إصلاح الأجزاء المتهالكة من الجدران، تعزيز القواعد الأساسية، وإعادة تصميم بعض التفاصيل الهندسية لضمان سلامة الزوار. تساهم هذه الجهود في إبراز القلعة كوجهة سياحية مميزة تستقطب الزوار والباحثين في مجال التاريخ والثقافة من مختلف أنحاء المملكة وخارجها.



  <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">    أهمية القلعة التاريخية والسياحية </h4>
                    

                 
                     <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
لا تقتصر أهمية القلعة على دورها التاريخي فقط، بل تمتد إلى كونها رمزاً للتراث الثقافي في منطقة الجوف. تُعد القلعة محطة مهمة لعشاق التراث الذين يرغبون في التعرف على الحياة القديمة والهندسة المعمارية التقليدية. إضافةً إلى ذلك، تُعتبر القلعة موقعاً تعليمياً مميزاً للطلاب والباحثين في مجال التاريخ والآثار. ومن الناحية السياحية، تُسهم القلعة في تعزيز السياحة المحلية، حيث توفر تجربة تجمع بين التعليم والترفيه.



                 <img src="{{ asset('images/zaabalCastel.jpg') }}" alt="لقلعةعة زعبل " 
 
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