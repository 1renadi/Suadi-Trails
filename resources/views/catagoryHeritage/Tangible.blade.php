@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921; font-weight: bold; text-shadow: 1px 1px 2px rgba(0,0,0,0.1);">
            التراث التاريخي والأثري
        </h1>
        <div class="row">
            @php
                $landmarks = [
                    ['id' => 1, 'name' => 'الدرعية', 'image' => 'images/diriyah.jpg', 'description' => 'الدرعية هي الموقع التاريخي لتأسيس الدولة السعودية الأولى، وتُعد من مواقع التراث العالمي لليونسكو.', 'view' => 'TangibleContent.Diriyah'],
                    ['id' => 2, 'name' => 'الحجر', 'image' => 'images/al-hijr.jpg', 'description' => 'الحجر (مدائن صالح) هي موقع أثري يضم مقابر نبطية منحوتة في الصخر، وهي أول موقع سعودي يُدرج في قائمة اليونسكو.', 'view' => 'TangibleContent.AlHijr'],
                    ['id' => 3, 'name' => 'مسجد عمر بن الخطاب', 'image' => 'images/mosque_omar.jpg', 'description' => 'مسجد تاريخي يقع في الدمام، يتميز بتصميمه المعماري الفريد وأهميته الدينية.', 'view' => 'TangibleContent.UmarMosque'],
                    ['id' => 4, 'name' => 'قلعة زعبل', 'image' => 'images/zaabal_castle.jpg', 'description' => 'قلعة تاريخية في الجوف، تُعد شاهدة على التاريخ العسكري والدفاعي للمنطقة.', 'view' => 'TangibleContent.ZabalCastle'],
                    ['id' => 5, 'name' => 'قصر كاف', 'image' => 'images/kaaf_palace.jpg', 'description' => 'قصر أثري في منطقة جازان، يعكس الطراز المعماري التقليدي لجنوب المملكة.', 'view' => 'TangibleContent.KafPalace'],
                    ['id' => 6, 'name' => 'حي الطريف', 'image' => 'images/tarif_district.jpg', 'description' => 'الحي التاريخي في الدرعية، وهو قلب الدولة السعودية الأولى، ويضم قصوراً من الطين.', 'view' => 'TangibleContent.TuraifQuarter'],
                    ['id' => 7, 'name' => 'منطقة حمى الثقافية', 'image' => 'images/hama_cultural.jpg', 'description' => 'منطقة أثرية تضم نقوشاً صخرية تعود لآلاف السنين، وهي مدرجة في قائمة اليونسكو.', 'view' => 'TangibleContent.HimaCulturalArea'],
                    ['id' => 8, 'name' => 'درب زبيدة', 'image' => 'images/darb_zubayda_2.jpg', 'description' => 'طريق حج تاريخي يربط الكوفة بمكة، كان يُستخدم في العصر العباسي.', 'view' => 'TangibleContent.ZubaidahTrail'],
                    ['id' => 9, 'name' => 'الفنون الصخرية في جبة والشويمس', 'image' => 'images/juba_shuwaymis.jpg', 'description' => 'مواقع أثرية تحتوي على نقوش صخرية تعود للعصور القديمة، وهي من مواقع التراث العالمي.', 'view' => 'TangibleContent.JubbahShuwaymisRockArt'],
                ];
            @endphp

            @if (!empty($landmarks))
                <div class="list-group">
                    @foreach ($landmarks as $landmark)
                        <div class="list-group-item py-4 d-flex flex-column align-items-center">
                            <div class="card heritage-card w-100 border-0 shadow-sm overflow-hidden" style="background-color: #f1f8e9; border: 1px solid #D2B48C !important;">
                                <!-- صورة الموقع -->
                                <div class="card-img-container ratio ratio-16x9">
                                    <img src="{{ asset($landmark['image']) }}" 
                                         alt="{{ $landmark['name'] }}" 
                                         class="card-img-top img-fluid zoom-effect">
                                </div>
                                
                                <!-- محتوى الكارد -->
                                <div class="card-body p-3 p-md-4 text-center">
                                    <div class="d-flex align-items-center justify-content-center mb-3">
                                        <i class="fas fa-landmark me-2" style="color: rgb(71, 64, 44);"></i>
                                        <h5 class="card-title mb-0" style="font-family: 'Amiri', serif; color: #5a3921; font-weight: bold;">
                                            {{ $landmark['name'] }}
                                        </h5>
                                    </div>
                                    
                                    <p class="card-text" style="font-family: 'Tajawal', sans-serif; color: #2D2424;">
                                        {{ Str::limit($landmark['description'], 100) }}
                                    </p>
                                </div>
                                
                                <!-- زر التفاصيل -->
                                <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3 px-md-4 text-center">
                                    <a href="{{ route('heritage.showDetail', $landmark['view']) }}" 
                                       class="btn btn-custom btn-details px-3 px-md-4 py-2" style="font-family: 'Amiri', serif;">
                                       استكشف الموقع
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="col-12">
                    <p class="text-center py-5">لا توجد معالم تراثية مادية حاليًا.</p>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .body {
            font-family: 'Amiri', serif;
            background-color: rgb(251, 251, 236);
            margin: 0;
            transition: margin-right 0.3s;
            direction: rtl;
        }

        /* تأثيرات الكارد */
        .heritage-card {
            transition: all 0.3s ease;
            border-radius: 12px !important;
        }
        
        .heritage-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(0,0,0,0.15) !important;
        }
        
        /* تأثير الصورة */
        .card-img-container {
            overflow: hidden;
            border-top-right-radius: 12px !important;
            border-top-left-radius: 12px !important;
        }
        
        .zoom-effect {
            transition: transform 0.5s ease;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .heritage-card:hover .zoom-effect {
            transform: scale(1.05);
        }
        
        /* تعديلات الزر */
        .btn-custom {
            background-color: #A19882 !important;
            color: #2D2424 !important;
            border: none !important;
            border-radius: 25px !important;
            transition: all 0.3s ease !important;
        }
        
        .btn-custom:hover {
            background-color: #8B7D65 !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* تنسيق القائمة المتسلسلة */
        .list-group-item {
            margin-bottom: 20px;
            border: none;
            background: transparent;
        }

        /* استجابة */
        @media (max-width: 767.98px) {
            .card-body {
                padding: 1rem;
            }
            
            .card-title {
                font-size: 1.1rem !important;
            }
            
            .card-text {
                font-size: 0.9rem !important;
            }
            
            .btn-details {
                font-size: 0.9rem !important;
                padding: 0.5rem 1rem !important;
            }
        }
    </style>
@endpush