@extends('layouts.app')

@section('title', 'تواصل معنا')

@section('content')
    <div class="container">
        <h1 class="text-center my-4" style="font-family: 'Amiri', serif; color: #355E3B" > تواصل معنا</h1>
        <p class="text-center" style="font-family: 'Amiri', serif; color: #5a3921" >يمكنك التواصل معنا عبر البريد الإلكتروني: RenadYaser23@gmail.com</p>
        <form action="/contact" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">الاسم</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">البريد الإلكتروني</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">الرسالة</label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            </div>
            <button type="submit" class="btn .btn-custom ">إرسال</button>
        </form>
    </div>
@endsection



5a3921