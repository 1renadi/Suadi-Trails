@extends('layouts.app')

@section('title', 'تسجيل الدخول')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border" style="border-color: #D2B48C;">
                    <div class="card-body">
                        <h2 class="text-center mb-4" style="color: #355E3B; font-family: 'Amiri', serif;">تسجيل الدخول</h2>

                        @if ($errors->any())
                            <div class="alert alert-danger text-center" style="font-family: 'Amiri', serif;">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label" style="color: #355E3B; font-family: 'Amiri', serif;">البريد الإلكتروني</label>
                                <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autofocus style="border-color: #D2B48C;">
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label" style="color: #355E3B; font-family: 'Amiri', serif;">كلمة المرور</label>
                                <input type="password" name="password" id="password" class="form-control" required style="border-color: #D2B48C;">
                            </div>

                            <!-- Submit Button -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-custom" style="font-family: 'Amiri', serif;">تسجيل الدخول</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection