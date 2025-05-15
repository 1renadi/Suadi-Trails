@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #8B4513;">الأزياء التقليدية في المملكة العربية السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/clothing.jpg') }}" alt="الأزياء السعودية التقليدية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content" style=border-color: #8B4513;">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #8B4513; border-bottom: 2px solid #8B4513; padding-bottom: 8px;">تراث نسيجي يعكس تنوع الثقافة السعودية</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
                        تمثل الأزياء التقليدية في المملكة العربية السعودية جزءاً أصيلاً من الهوية الوطنية، تعكس تاريخ المنطقة وتراثها الغني. تتنوع هذه الأزياء بين المناطق السعودية، حيث لكل منطقة طابعها الخاص الذي يميزها.
                    </p>

                    
                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;"> الأزياء الرجالية التقليدية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تتميز الأزياء الرجالية التقليدية في المملكة بالبساطة والأناقة، مع تصاميم تُراعي الحشمة والمناخ الصحراوي. الزي الرجالي الأكثر شيوعًا هو الثوب، وهو رداء طويل فضفاض مصنوع من القطن أو الصوف، غالبًا باللون الأبيض في الصيف ليعكس الحرارة، وألوان داكنة مثل البني أو الأسود في الشتاء. يُكمل الثوب الشماغ أو الغترة، وهما غطاء رأس من القماش يُثبت بحبل يُسمى العقال. الشماغ غالبًا أحمر وأبيض، بينما الغترة بيضاء نقية، ويُعبر اختيارهما عن الأناقة والمناسبة.                    </p>
                    
<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
في المناسبات الرسمية، يرتدي الرجال البشت، وهو عباءة خارجية مزخرفة مصنوعة من الصوف الناعم أو القماش الفاخر، غالبًا باللون الأسود أو البني مع حواف ذهبية أو فضية. يُعد البشت رمزًا للوجاهة والكرامة، ويُرتدى في الأعياد والمناسبات الاجتماعية. تختلف التفاصيل الإقليمية؛ ففي نجد، يُفضل الثوب الضيق قليلاً، بينما في الحجاز يميل إلى الفضفاض. تُحافظ المملكة على هذا التراث من خلال تشجيع ارتداء الأزياء التقليدية في المناسبات الوطنية ودعم الحرفيين المحليين لإنتاج الأقمشة والتطريز التقليدي.                    
 <div class="text-center mb-5">
                    <img src="{{ asset('images/111w.jpg') }}" alt="الأزياء السعودية التقليدية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>

                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">أبرز الأزياء التقليدية للرجال</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li>الثوب: الزي الأساسي للرجل السعودي</li>
                        <li>المشلح: العباءة الخارجية</li>
                        <li>الغترة: غطاء الرأس مع العقال</li>
                        <li>البشت: العباءة الفاخرة للمناسبات</li>
                        <li>الجنبية: الخنجر التقليدي في المناطق الجنوبية</li>
                    </ul>


                                        
                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;"> الأزياء النسائية التقليدية</h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تنوعت أزياء المرأة بين لباس الزينة واللباس المُعتاد الذي يُستخدم يوميًا، وكانت النساء -عادة- هن من يصنعن أزياءهن الخاصة بهن، ومن أبرز ملابس المرأة في منطقة الحدود الشمالية: ثياب المقطع والمسرح والكرتة، ويُعرف "المقطع" بأنه ثوب طويل، وتغلب عليه البساطة عند كبار السن، ويكون أشبه بالثوب العادي، أما الفتيات فيرتدين ثوب المقطع المُزيّن والمطرّز على الصدر والأكمام.                    
<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
في المناطق الجنوبية مثل عسير، تشتهر النساء بارتداء المنديل، وهو غطاء رأس ملون مزخرف بأنماط هندسية، مع فساتين تقليدية تُبرز الألوان الزاهية كالأحمر والأخضر. في المنطقة الشرقية، تُفضل النساء النشل، وهو ثوب فضفاض مطرز بخيوط ذهبية. تُحافظ المملكة على هذا التراث من خلال معارض الأزياء التقليدية ودعم الحرفيات في صناعة التطريز والنسيج، مما يُسهم في إبقاء هذه الأزياء حية في المناسبات الثقافية والاجتماعية.

<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
النساء في الحجاز يرتدين الملحفة، وهي عباءة مزخرفة بتطريز ملون مستوحى من الفنون الإسلامية، مع فساتين طويلة تُسمى السدرة تتميز بألوان زاهية كالأزرق والأحمر. غطاء الرأس، أو الشيلة، غالبًا مطرز بخيوط ذهبية أو فضية. تُعكس هذه الأزياء التأثيرات العثمانية والمصرية بسبب الموقع التجاري للحجاز. تُحافظ المنطقة على تراثها من خلال مهرجانات مثل موسم جدة، التي تُعرض الأزياء التقليدية، وورش العمل لتعليم التطريز الحجازي.

عرض في الشريط الجانبي
<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
النساء يرتدين العباءة النجدية، وهي سوداء بسيطة مع تطريز خفيف على الأكمام، وتحتها الدراعة، وهي فستان طويل مطرز بخيوط فضية أو ذهبية. غطاء الرأس، أو الشيلة، غالبًا أسود أو داكن ليتناسب مع التقاليد المحافظة. تُعكس الأزياء النجدية القيم البدوية مثل الكرم والكرامة. تُحافظ نجد على تراثها من خلال فعاليات مثل موسم الرياض، التي تُبرز الأزياء التقليدية، ودعم الحرفيين في صناعة الأقمشة والتطريز اليدوي.

<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
النساء يرتدين النشل، وهو ثوب فضفاض مطرز بخيوط ذهبية مستوحاة من التصاميم الهندية والفارسية، مع العباءة المزينة بتفاصيل معقدة. غطاء الرأس، أو الدقلة، مزخرف بالخرز والتطريز الملون. تُعكس هذه الأزياء التنوع الثقافي للمنطقة. تُحافظ المنطقة الشرقية على تراثها من خلال مهرجانات مثل موسم الشرقية، التي تُعرض الأزياء التقليدية، ودعم ورش النسيج والتطريز للحفاظ على الحرف اليدوية.


<p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
النساء يرتدين المنديل، وهو غطاء رأس ملون مزخرف بأنماط هندسية، مع فساتين طويلة تُسمى السواس تتميز بألوان زاهية كالأحمر والأصفر. التطريز اليدوي والخرز يُضيفان لمسة فنية مميزة. تُعكس هذه الأزياء تراث المنطقة الغني بالفنون الشعبية. تُحافظ المنطقة الجنوبية على تراثها من خلال مهرجانات مثل مهرجان عسير السياحي، ودعم الحرفيات في صناعة الأزياء التقليدية، مما يُسهم في إبقاء هذا الإرث حيًا.


<div class="text-center mb-5">
                    <img src="{{ asset('images/1111e.jpg') }}" alt="الأزياء السعودية التقليدية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>

                    <h4 style="font-family: 'Amiri', serif; color: #8B4513; margin-top: 1.5rem;">أبرز الأزياء التقليدية للنساء</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li>الثوب: بأشكاله المتنوعة حسب المنطقة</li>
                        <li>المشلح: العباءة النسائية</li>
                        <li>الشيلة: غطاء الرأس</li>
                        <li>البرقع: في بعض المناطق</li>
                        <li>الحلي والمجوهرات التقليدية</li>
                    </ul>

          

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
            background-color: #FFF8DC;
            font-family: 'Tajawal', sans-serif;
        }
        
        .heritage-content {
            background-color: #FFF8DC;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #8B4513;
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
            background-color: #8B4513 !important;
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
            background-color: #5D2906 !important;
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