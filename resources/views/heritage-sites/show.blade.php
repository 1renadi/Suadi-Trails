@extends('layouts.app')

@section('title', $site->name)

@section('content')
    <div class="container">
        <div class="site-details text-center">
            <h1>{{ $site->name }}</h1>
            <img src="{{ asset($site->image) }}" class="img-fluid mb-3 site-image" alt="{{ $site->name }}">
            <div class="site-info">
                <p><strong>الوصف:</strong> {{ $site->description }}</p>
                <p><strong>المنطقة:</strong> {{ $site->region->name }}</p>
                <p><strong> </strong> {{ $site->details }}</p>
                <h3>صور إضافية:</h3>
                @if ($site->additional_images)
                    <div class="row justify-content-center">
                        @foreach ($site->additional_images as $image)
                            <div class="col-md-4 mb-3">
                                <img src="{{ asset($image) }}" class="img-fluid additional-image" alt="{{ $site->name }}">
                            </div>
                        @endforeach
                    </div>
                @else
                    <p>لا توجد صور إضافية.</p>
                @endif
                <a href="{{ route('sites.index') }}" class="btn btn-secondary mt-3">العودة</a>
            </div>
        </div>
    </div>
@endsection