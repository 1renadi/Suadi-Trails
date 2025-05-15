@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">التراث البحري في المملكة العربية السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_maritime.jpg') }}" alt="التراث البحري السعودي" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content" style= border-color: #5a3921;>
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #5a3921; padding-bottom: 8px;">إرث بحري عريق على ضفاف البحر الأحمر والخليج العربي</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
التراث البحري في المملكة العربية السعودية يُعد جزءًا حيويًا من هويتها الطبيعية والثقافية، حيث تمتلك المملكة سواحل طويلة تمتد على البحر الأحمر غربًا والخليج العربي شرقًا، بالإضافة إلى جزر وموارد بحرية غنية. هذا التراث يشمل التنوع البيولوجي البحري، الشعاب المرجانية، الجزر، الشواطئ، والممارسات التقليدية المرتبطة بالبحر مثل صيد اللؤلؤ والملاحة. فيما يلي مقالات قصيرة تتناول الجوانب الرئيسية للتراث البحري في المملكة، مقدمة ضمن علامات <xaiArtifact/> مع معرفات UUID فريدة، عناوين، ونوع المحتوى المناسب.                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">أبرز مظاهر التراث البحري</h4>
                    
                    <ul style="font-family: 'Tajawal', sans-serif; color: #212529; padding-right: 1.5rem;">
                        <li>صناعة السفن التقليدية (القلافة)</li>
                        <li>تقاليد صيد اللؤلؤ في الخليج العربي</li>
                        <li>أساليب الصيد التقليدية</li>
                        <li>الموانئ التاريخية مثل جدة التاريخية</li>
                        <li>الغوص على الأسماك واللؤلؤ</li>
                        <li>الحرف اليدوية المرتبطة بالبحر</li>
                    </ul>

                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> الملاحة والتراث  البحري     </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
تُعد الملاحة البحرية جزءًا لا يتجزأ من التراث البحري في المملكة العربية السعودية، حيث كانت الموانئ السعودية مراكز تجارية حيوية على مر التاريخ. في البحر الأحمر، لعبت موانئ مثل جدة وينبع دورًا رئيسيًا في التجارة البحرية، حيث كانت محطات للحجاج والتجار القادمين من آسيا وأفريقيا. اعتمد البحارة على السفن الشراعية التقليدية مثل "السامبوك" و"الداو"، التي صُنعت يدويًا بمهارة عالية لتتحمل الرحلات الطويلة.                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
في الخليج العربي، تُسهم غابات المنغروف والأعشاب البحرية في دعم التنوع البيولوجي، حيث توفر مواطن للطيور المهاجرة والأسماك الصغيرة. تُدرك المملكة أهمية هذا التراث، لذا تُنفذ مبادرات لحمايته، مثل مشروع البحر الأحمر الذي يركز على السياحة البيئية المستدامة، ومبادرة السعودية الخضراء التي تهدف إلى حماية النظم البحرية من التلوث والصيد الجائر. هذه الجهود تعزز الحفاظ على التنوع البيولوجي البحري كجزء لا يتجزأ من التراث الطبيعي للمملكة.

                

 <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;"> التنوع البيولوجي البحري     </h4>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
يُعد التنوع البيولوجي البحري في المملكة العربية السعودية كنزًا طبيعيًا يعكس غنى مياهها في البحر الأحمر والخليج العربي. تضم هذه المياه أكثر من 1200 نوع من الأسماك، بما في ذلك أسماك الشعاب المرجانية الملونة مثل سمكة الببغاء والفراشة. كما تُعتبر موطنًا للثدييات البحرية مثل الدلافين وأبقار البحر، والسلاحف البحرية المهددة بالانقراض مثل السلاحف الخضراء. الشعاب المرجانية، التي تمتد على طول ساحل البحر الأحمر، تُشكل نظامًا بيئيًا حيويًا يدعم مئات الأنواع البحرية، مما يجعل المملكة واحدة من أبرز وجهات الغوص في العالم.                    </p>
                    <p style="font-family: 'Tajawal', sans-serif; color: #212529; text-align: justify;">
في الخليج العربي، ارتبطت الملاحة بصيد اللؤلؤ والتجارة مع الهند وشرق آسيا، مما جعل موانئ مثل الدمام مراكز تجارية مزدهرة. هذا التراث لا يزال حيًا من خلال الحرف التقليدية لبناء السفن، التي تُعرض في المتاحف والمهرجانات البحرية. تُعزز المملكة هذا التراث من خلال تطوير الموانئ الحديثة مع الحفاظ على القيمة التاريخية للموانئ القديمة. مشاريع مثل نيوم تهدف إلى إحياء الملاحة البحرية كجزء من السياحة البحرية، مع ضمان الحفاظ على التراث الملاحي كجزء من الهوية الوطنية.
                  </p>
                



                 

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
            background-color: #f0f8ff;
            font-family: 'Tajawal', sans-serif;
        }
        
        .heritage-content {
            background-color: #f0f8ff;
            padding: 2rem;
            border-radius: 10px;
            border: 1px solid #005f73;
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
            background-color: #005f73 !important;
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
            background-color: #003d4d !important;
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