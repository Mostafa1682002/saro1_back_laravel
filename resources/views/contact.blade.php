@extends('layouts.master', ['active' => 'contact'])
@section('content')
    <!--=============== CONTACT US  ===============-->
    <section class="contact">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">تواصل معنا</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">تواصل معنا</a>
                </p>
            </div>
            <div class="contact-content">
                <div class="my-contact">
                    <div class="box-contact">
                        <span class="fas fa-phone"></span>
                        <div class="co-txt">
                            <h4>اتصل بنا</h4>
                            <a href="tel:+0503600937">0503600937</a>
                        </div>
                    </div>
                    <div class="box-contact">
                        <span class="fas fa-envelope"></span>
                        <div class="co-txt">
                            <h4>البريد الالكتروني</h4>
                            <a href="mailto:saro1_store@hotmail•com">saro1_store@hotmail•com</a>
                        </div>
                    </div>
                    <div class="box-contact">
                        <span class="fas fa-location-dot"></span>
                        <div class="co-txt">
                            <h4>العنوان</h4>
                            <a href="#">المملكة العربية السعودية - جدة </a>
                        </div>
                    </div>
                </div>
                <form class="form-contact" action="{{ route('contactSend') }}" method="POST">
                    @csrf
                    <div class="item-form">
                        <label for="name">الاسم</label>
                        <input type="text" name="name" required id="name" placeholder="الاسم" />
                        @error('name')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="item-form">
                        <label for="email">البريد الالكتروني</label>
                        <input type="email" name="email" id="email" required placeholder="ادخل بريدك الالكتروني .."
                            value="{{ old('email') }}" />
                        @error('email')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="item-form">
                        <label for="object">الموضوع</label>
                        <input type="text" name="object" required id="object" value="{{ old('object') }}"
                            placeholder="اكتب موضوعك ....." />
                        @error('object')
                            <p>{{ $message }}</p>
                        @enderror
                    </div>
                    <label for="message">الرسالة</label>
                    <textarea name="message" id="message" required placeholder="اكتب رسالتك ......">{{ old('message') }}</textarea>
                    @error('message')
                        <p>{{ $message }}</p>
                    @enderror
                    <button type="submit">ارسال</button>
                </form>
            </div>
        </div>
    </section>
@endsection
