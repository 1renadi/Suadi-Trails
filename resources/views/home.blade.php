@extends('layouts.app')

@section('title', 'الرئيسية')

@section('content')
    <div class="container py-5">
        <!-- Hero Section -->
        <div class="text-center mb-40">
            <h1 class="mb-5 display-4" style="color: #355E3B; font-family: 'Amiri', serif;">مرحبًا بكم في مآثر</h1>
                <h5 class="text-muted" style="font-family: 'Amiri', serif;">
                    "مآثر" هو بوابة لاستكشاف التراث الغني للمملكة العربية السعودية، حيث تجمع بين التاريخ العريق والثقافة المتنوعة. من مدائن صالح إلى الدرعية، كل موقع يحكي قصة عن ماضٍ عظيم. انضموا إلينا في هذه الرحلة لتتعرفوا على الكنوز الثقافية التي صنعت هويتنا.
</h5>
        </div>

        <!-- Introduction Section -->
        <div class="row mb-5">
            <div class="col-md-12 offset-md-2 text-center">

            </div>
        </div>

        <!-- Featured Sites Section -->
        <div class="row mb-40"> <!-- زيادة المسافة أسفل باستخدام mb-7 -->
            <h2 class="text-center mb-4
            " style="color: #355E3B; font-family: 'Amiri', serif;">أبرز المواقع التراثية</h2>
            <div class="col-12">
                <div class="row">
                    @forelse ($featuredSites as $site)
                        <div class="col-md-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ asset($site->image) }}" class="card-img-top" alt="{{ $site->name }}" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="color: #355E3B; font-family: 'Amiri', serif;">{{ $site->name }}</h5>
                                    <p class="card-text">{{ Str::limit($site->description, 80) }}</p>
                                    <a href="{{ route('sites.show', $site->id) }}" class="btn btn-custom">استكشف المزيد</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-muted" style="font-family: 'Amiri', serif;">لا توجد مواقع تراثية متاحة حاليًا.</p>
                    @endforelse
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center py-5 bg-light rounded-4">
            <h3 style="color: #355E3B; font-family: 'Amiri', serif;">هل أنت مستعد لاستكشاف القارة السعودية </h3>
            <a href="{{ route('sites.index') }}" class="btn btn-custom mt-3">ابدأ الآن</a>
        </div>
    </div>
@endsection