@extends('layouts.master', [
    'active' => '',
])
@section('content')
    <!--=============== REGISTRATION ===============-->
    <section class="registration">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">انشاء حساب</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">انشاء حساب</a>
                </p>
            </div>
            <div class="registration-content">
                <form class="form-registration" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="item-form">
                        <label for="name">الاسم</label>
                        <input type="text" name="name" required id="name" value="{{ old('name') }}"
                            placeholder="الاسم " />
                    </div>
                    <div class="item-form">
                        <label for="email-r">البريد الالكتروني</label>
                        <input type="email" name="email" required id="email-r" value="{{ old('email') }}"
                            placeholder="البريد الالكتروني" />
                        @error('email')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="item-form">
                        <label for="phone">الهاتف</label>
                        <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                            placeholder="الهاتف" />
                    </div>
                    <div class="item-form">
                        <label for="password">الرقم السري</label>
                        <input type="password" name="password" id="password" required placeholder="الرقم السري" />
                        @error('password')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="item-form">
                        <label for="password-confirmation">تاكيد الرقم السري</label>
                        <input type="password" name="password_confirmation" required id="password-confirmation"
                            placeholder="تاكيد الرقم السري" />
                    </div>
                    <button type="submit">انشاء حساب</button>
                </form>
            </div>
        </div>
    </section>
@endsection
