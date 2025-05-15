@extends('layouts.app')

@section('title', 'المواقع التراثية')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-5" style="color: #355E3B; font-family: 'Amiri', serif;">المواقع التراثية</h1>

        <!-- قائمة أنواع التراث بشكل خانات متجاورة -->
        <section class="heritage-categories">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <!-- التراث المادي -->
                <div class="col">
                    <a href="{{ route('heritage.material') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/material.jpg') }}" class="card-img-top" alt="التراث المادي" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">1. التراث المادي (التاريخي والأثري)</h4>
                                <p class="text-muted">استكشف المواقع التاريخية مثل قصر المصمك ومدائن صالح.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- التراث غير المادي -->
                <div class="col">
                    <a href="{{ route('heritage.nonmaterial') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/nonmaterial.jpg') }}" class="card-img-top" alt="التراث غير المادي" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">2. التراث غير المادي (العادات والتقاليد)</h4>
                                <p class="text-muted">تعرف على العادات والتقاليد السعودية الأصيلة.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- التراث الديني -->
                <div class="col">
                    <a href="{{ route('heritage.religious') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/religious.jpg') }}" class="card-img-top" alt="التراث الديني" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">3. التراث الديني</h4>
                                <p class="text-muted">اكتشف الإرث الديني المرتبط بالحرمين الشريفين.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- التراث الطبيعي -->
                <div class="col">
                    <a href="{{ route('heritage.natural') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/natural.jpg') }}" class="card-img-top" alt="التراث الطبيعي" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">4. التراث الطبيعي</h4>
                                <p class="text-muted">استمتع بالجمال الطبيعي للجبال والصحارى.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- التراث البحري -->
                <div class="col">
                    <a href="{{ route('heritage.maritime') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/maritime.jpg') }}" class="card-img-top" alt="التراث البحري" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">6. التراث البحري</h4>
                                <p class="text-muted">تعرف على التراث المرتبط بالبحر الأحمر والخليج.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- الأزياء التقليدية -->
                <div class="col">
                    <a href="{{ route('heritage.clothing') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/clothing.jpg') }}" class="card-img-top" alt="الأزياء التقليدية" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">7. الأزياء التقليدية</h4>
                                <p class="text-muted">استعرض الأزياء التقليدية التي تعكس الهوية السعودية.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- الفلكلور والأهازيج -->
                <div class="col">
                    <a href="{{ route('heritage.folklore') }}" class="list-group-item list-group-item-action text-decoration-none">
                        <div class="card h-100" style="background-color: #f1f8e9; border: 2px solid #A19882; font-family: 'Amiri', serif;">
                            <img src="{{ asset('images/folklore.jpg') }}" class="card-img-top" alt="الفلكلور والأهازيج" style="height: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h4 class="mb-0" style="color: #355E3B;">الفلكلور والأهازيج</h4>
                                <p class="text-muted">استمتع بالأهازيج والقصص الشعبية السعودية.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </section>

        <!-- قسم المواقع التراثية (اختياري) -->
        <div class="row mt-5">
            @forelse ($sites as $site)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($site->image) }}" class="card-img-top" alt="{{ $site->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #355E3B; font-family: 'Amiri', serif;">{{ $site->name }}</h5>
                            <p class="card-text">{{ Str::limit($site->description, 100) }}</p>
                            <a href="{{ route('sites.show', $site->id) }}" class="btn btn-custom">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>

    <style>
        .heritage-categories .card {
            transition: transform 0.3s;
        }
        .heritage-categories .card:hover {
            transform: scale(1.02);
            background-color: #e0f7fa;
        }
        .btn-custom {
            background-color: #A19882 !important;
            color: rgb(34, 33, 31) !important;
            border: none;
            padding: 8px 16px;
            border-radius: 5px;
            font-family: 'Amiri', serif;
        }
        .btn-custom:hover {
            background-color: rgb(157, 125, 64) !important;
            color: rgb(43, 42, 40) !important;
        }
    </style>
@endsection