@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">منطقة حمى الثقافية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/hama_cultural.jpg') }}" alt="منطقة حمى الثقافية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">   متحف الصخور المفتوح في نجران</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تُعد منطقة حمى الثقافية في نجران متحفاً طبيعياً مفتوحاً للنقوش والرسوم الصخرية التي تعود إلى أكثر من 7000 عام، حيث تم تسجيلها في قائمة اليونسكو للتراث العالمي عام 2021 كأحد أهم مواقع الفن الصخري في العالم.
                    </p>

                     <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> آثار منطقة حمى الثقافية
</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تحتضن منطقة حمى عدة أماكن أثرية كجبل "صيدح" وجبل "حمى" وموقع "عان جمل" و"شسعا" و"الكوكب"، كما يضم الموقع آبار حمى الأثرية، منها: أم نخلة، والقراين، والجناح، وسقيا، والحماطة، والحبيسةحُفرت أغلبها في الصخور، وهي تُعدُّ من معالم الحضارة والتاريخ العتيق لمنطقة حمى، تحيط بها الكهوف والجبال من جميع الجهات عدا الجهة الشرقية، وهي مليئة بالرسوم والنقوش الصخرية المشتملة على الرسوم الآدمية والحيوانية.

                    </p>



                       <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> المواقع الأثرية في منطقة حمى الثقافية </h4>
                       <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li> جبل صيدح <p>  هو أحد المواقع الأثرية والسياحية البارزة، تعود أهميته إلى نقوشه التي احتفظ بها على مر العصور، ويتميز الجبل بأنه إرث تاريخي عريق ومعلم سياحي بارز، يرتاده السيّاح من داخل المملكة وخارجها؛ لمشاهدة الرسوم والنقوش التي رسمها ونقشها الإنسان على واجهات صخور الجبل، والأدوات الحجرية التي استخدمها في حفر رسومه ونقوشه الكتابية المتنوعة والغنية، التي تدل على فن وإبداع الإنسان في العصور القديمة.</p>     </li>
                        <li> جبل الكوكب  <p>  من المواقع الثرية بالفنون الصخرية من حيث الرسوم والكتابات، ونظرًا للتنوع البيئي في المنطقة المحيطة بجبل الكوكب، فقد تعددت الموضوعات التي نُقشت على الصخور، مثّلت نقوش جبل الكوكب سجلًا تاريخيًا للكثير من القوافل التي عبرت من المنطقة، وهذا ما يُفسر كثرة أعداد الجمال والخيول في النقوش الصخرية، كما أن وجودها الكثيف والمتكرر يعكس اهتمام سكان المنطقة منذ القدم على اقتنائها ورعايتها، والتباهي بإظهارها في رسوماتهم وموضوعاتهم الفنيّة، وأنها كانت تحتل مكانةً مهمة في حياتهم الاجتماعية والاقتصادية، كما كشفت النقوش عن تعدد مهارة الفنان القديم وثقافته واتساع مداركه، من خلال تنوّع الأساليب الفنية والمواضيع الاجتماعية، وأظهرت وجود حيوانات مفترسة في تلك الفترة مثل الأسود، والتي وُجدت رسوم لها في أماكن متفرقة من الواجهات الصخرية.
                        <li>موقع فرزة آل حجاب  <p>  يقع ما بين آبار حمى وعان جمل على بُعد 6.2 كم شمال شرقي آبار حمى، وهو عبارة عن مقبرة تعود إلى العصر الذي سبق العصر الحديدي مباشرة، يحتوي على رسوم ونقوش صخرية، وقبور موجودة في قمة المرتفعات والتلال الصخرية، وهي مبنيّة بواسطة أحجار مصفّفة وبلاطات من نوع الصخور الرملية السوداء التي أخذت من المكان نفسه، وبعض هذه القبور له شكل مذنب أسطواني ذو أذناب طويلة يبلغ طول بعضها عشرات الأمتار، تُرجع عادةً بعض المصادر هذا النوع من القبور إلى العصر البرونزي، لكن التنقيبات التي جرت في مواقع قريبة منها في اليمن، أظهرت أن هذا النوع من القبور استمر استخدامه حتى العصر الحديدي.
</p>     </li>

                    </ul>


                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">كنوز أثرية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تحتوي المنطقة على:
                    </p>
                    
                   
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>أكثر من 550 موقعاً للنقوش الصخرية</li>
                        <li>34 موقعاً للرسوم الصخرية</li>
                        <li>نقوش بخط المسند الجنوبي</li>
                        <li>رسوم للإنسان والحيوانات تعود للعصر الحجري</li>
                    </ul>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/hamaa.jpg') }}" alt="النقوش الصخرية في حمى" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">بوابة التاريخ</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
تمثل المنطقة سجلاً حياً لحضارات متعاقبة:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>حضارات ما قبل التاريخ</li>
                        <li>مملكة سبأ وقتبان</li>
                        <li>الفترة الإسلامية المبكرة</li>
                    </ul>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">تجربة الزائر</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
توفر المنطقة:
                    </p>
                    <ul style="font-family: 'Tajawal', sans-serif; color: #2D2424; padding-right: 1.5rem;">
                        <li>مسارات سياحية مخصصة</li>
                        <li>مركز تفسير النقوش</li>
                        <li>جولات بصحبة مرشدين</li>
                        <li>منطقة خدمات للزوار</li>
                    </ul>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/hama_cultural_2.jpg') }}" alt="طبيعة منطقة حمى" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                      <div class="text-center my-4">
                        <img src="{{ asset('images/hama_cultural_1.jpg') }}" alt="طبيعة منطقة حمى" 
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