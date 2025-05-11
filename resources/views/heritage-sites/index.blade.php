@extends('layouts.app')

@section('title', 'المواقع التراثية')

@section('content')
    <div class="container">
        <h1 class="text-center my-4">المواقع التراثية</h1>
        <div class="row">
            @forelse ($sites as $site)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset($site->image) }}" class="card-img-top" alt="{{ $site->name }}" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $site->name }}</h5>
                            <p class="card-text">{{ Str::limit($site->description, 100) }}</p>
                            <a href="{{ route('sites.show', $site->id) }}" class="btn btn-custom">استكشف المزيد</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center">لا توجد مواقع تراثية متاحة.</p>
            @endforelse
        </div>
    </div>
@endsection