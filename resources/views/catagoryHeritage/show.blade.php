@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <h1 class="text-center mb-4" style="font-family: 'Amiri', serif; color: #5a3921;">التراث غير المادي في السعودية</h1>
                
                <!-- الصورة الرئيسية -->
                <div class="text-center mb-5">
                    <img src="{{ asset('images/saudi_culture.jpg') }}" alt="العادات والتقاليد السعودية" 
                         class="img-fluid rounded shadow" 
                         style="max-height: 500px; width: auto; display: block; margin: 0 auto;">
                </div>
                
                <div class="heritage-content">
                    <h3 class="mb-3" style="font-family: 'Amiri', serif; color: #5a3921; border-bottom: 2px solid #D2B48C; padding-bottom: 8px;">عادات وتقاليد ترويها الأجيال</h3>
                    
                    <p style="font-family: 'Tajawal', sans-serif; color: #2D2424; text-align: justify;">
يتميز التراث غير المادي السعودي بتنوعه العريق الذي يعكس ثراء الثقافة وتعدد الأقاليم. من حفلات الزواج إلى فنون القصائد الحماسية، ومن طقوس الضيافة إلى الحرف اليدوية الموروثة، يشكل هذا التراث نسيجاً حياً للهوية الوطنية.
                    </p>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">فنون الأداء</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="culture-item p-3 mb-3" style="background-color: #F8F5F0; border-radius: 8px;">
                                <h5 style="color: #8B7D65;">العرضة النجدية</h5>
                                <p>رقصة الحرب التقليدية التي تحولت إلى فن وطني مصحوب بالطبول والقصائد.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="culture-item p-3 mb-3" style="background-color: #F8F5F0; border-radius: 8px;">
                                <h5 style="color: #8B7D65;">المجرور</h5>
                                <p>فن غنائي تراثي من المنطقة الشرقية يصاحبه الدفوف والإيقاعات.</p>
                            </div>
                        </div>
                    </div>

                    <div class="text-center my-4">
                        <img src="{{ asset('images/ardha_performance.jpg') }}" alt="العرضة النجدية" 
                             class="img-fluid rounded shadow" 
                             style="max-height: 400px; width: auto; display: block; margin: 0 auto;">
                    </div>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الضيافة السعودية</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="text-center p-3">
                                <i class="fas fa-coffee fa-3x mb-3" style="color: #A19882;"></i>
                                <h5 style="color: #5a3921;">القهوة العربية</h5>
                                <p>رمز الكرم تقدم مع التمر في الدلة والفلجان.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3">
                                <i class="fas fa-utensils fa-3x mb-3" style="color: #A19882;"></i>
                                <h5 style="color: #5a3921;">المائدة السعودية</h5>
                                <p>أطباق مثل الكبسة والمندي وجلسات الطعام الجماعي.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="text-center p-3">
                                <i class="fas fa-hands-helping fa-3x mb-3" style="color: #A19882;"></i>
                                <h5 style="color: #5a3921;">العزائم</h5>
                                <p>تقاليد استقبال الضيوف والمناسبات الاجتماعية.</p>
                            </div>
                        </div>
                    </div>
                    
                    <h4 style="font-family: 'Amiri', serif; color: #5a3921; margin-top: 1.5rem;">الحرف اليدوية</h4>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/sadu_weaving.jpg') }}" class="img-fluid rounded" alt="السدو">
                            <h5 class="mt-2" style="color: #5a3921;">السدو</h5>
                            <p>فن النسيج التقليدي للبدو باستخدام صوف الأغنام.</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/pottery.jpg') }}" class="img-fluid rounded" alt="الفخار">
                            <h5 class="mt-2" style="color: #5a3921;">الفخار</h5>
                            <p>حرفة تقليدية في الأحساء والقصيم.</p>
                        </div>
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset('images/attar.jpg') }}" class="img-fluid rounded" alt="العطور">
                            <h5 class="mt-2" style="color: #5a3921;">صناعة العطور</h5>
                            <p>خلطات عطرية تقليدية مثل المسك والعنبر.</p>
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