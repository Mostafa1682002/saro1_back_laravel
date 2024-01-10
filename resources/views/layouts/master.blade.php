@inject('categories', 'App\Models\Category')
<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--=============== ICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}" />
    <link rel="stylesheet" class="color-style" href="{{ asset('front/assets/css/colors/color-1.css') }}" />
    <title>Saro1</title>
    <style>
        .footer .container .footer-content .foot .info {
            padding: 0;
        }

        .footer .container .footer-content .foot span {
            color: var(--first-color);
            font-size: 15px;
        }
    </style>
    {{-- Toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <div class="head_about">
            <p>لدينا افضل المنتجات ولدينا افضل العروض</p>
        </div>
        <div class="container">
            <div class="header-content">
                <h4 class="logo">
                    <a href="{{ route('home') }}">
                        <img class="logo-header" src="{{ asset('front/assets/img/logo.jpg') }}" alt="" />
                    </a>
                </h4>
                <ul class="nav">
                    <span class="fas fa-times close-menu"></span>
                    <li><a class="{{ $active == 'home' ? 'active' : '' }}" href="{{ route('home') }}">الرئيسية</a></li>

                    @foreach ($categories->all() as $category)
                        <li><a class="{{ $active == $category->id ? 'active' : '' }}"
                                href="{{ route('products', $category->id) }}">{{ $category->name }}</a></li>
                    @endforeach
                    <li><a class="{{ $active == 'cart' ? 'active' : '' }}" href="{{ route('cart') }}">السلة</a></li>
                    <li><a class="{{ $active == 'about' ? 'active' : '' }}" href="{{ route('about') }}">معلومات
                            عنا</a>
                    </li>
                    <li><a class="{{ $active == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">تواصل
                            معنا</a></li>
                </ul>
                <div class="icons">
                    <span class="fas fa-user-alt login"></span>
                    <span class="fas fa-shopping-cart cart">
                        <span class="co-cart">
                            @if (session()->has('saro1_cart'))
                                {{ count(session()->get('saro1_cart')) }}
                            @else
                                0
                            @endif
                        </span>
                    </span>
                    <span class="fas fa-bars bars"></span>
                </div>
            </div>
        </div>
    </header>

    <!--=============== CART ===============-->
    <div class="cart-section" id="cart-section">
        <span class="fas fa-times close-cart"></span>
        <h3 class="title">السلة</h3>
        <div class="cart-content">
            {{-- <div class="cart-item">
                <div class="item-img">
                    <img src="assets/img/cart-1.png" alt="" />
                </div>
                <div class="item-info">
                    <h4 class="title-item">ثلاثية الأبعاد تتحرك الرمال</h4>
                    <p class="item-price">50.22 ر.س</p>
                    <div class="amount">
                        <form action="" class="price-amount">
                            <input type="number" name="" id="" value="1" min="1"
                                max="10" />
                        </form>
                        <a href=""><span class="fas fa-trash delete"></span></a>
                    </div>
                </div>
            </div>
            <div class="cart-item">
                <div class="item-img">
                    <img src="assets/img/cart-2.png" alt="" />
                </div>
                <div class="item-info">
                    <h4 class="title-item">شحن مروحة محمولة USB</h4>
                    <p class="item-price">50.22 ر.س</p>
                    <div class="amount">
                        <form action="" class="price-amount">
                            <input type="number" name="" id="" value="1" min="1"
                                max="10" />
                        </form>
                        <a href=""><span class="fas fa-trash delete"></span></a>
                    </div>
                </div>
            </div>
            <div class="cart-item">
                <div class="item-img">
                    <img src="assets/img/cart-3.png" alt="" />
                </div>
                <div class="item-info">
                    <h4 class="title-item">روبوت كنس ذكي لاسلكي</h4>
                    <p class="item-price">50.22 ر.س</p>
                    <div class="amount">
                        <form action="" class="price-amount">
                            <input type="number" name="" id="" value="1" min="1"
                                max="10" />
                        </form>
                        <a href=""><span class="fas fa-trash delete"></span></a>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="total-content">
            <h3 class="count-item">منتج : <span class="length">
                    @if (session()->has('saro1_cart'))
                        {{ count(session()->get('saro1_cart')) }}
                    @else
                        0
                    @endif
                </span></h3>
            <h3 class="total">
                السعر الكلي : <span class="total-price">00ر.س</span>
            </h3>
        </div>
        <a href="cart.html">
            <button>ادفع الان</button>
        </a>
    </div>

    <!--=============== LOGIN ===============-->
    <div class="login-section" id="login-section">
        <span class="fas fa-times close-login"></span>
        @auth
            <h3 class="title">{{ auth()->user()->name }}</h3>
            <form action="{{ route('logout') }}" method="POST" class="form-login">
                @csrf
                <button type="submit">تسجيل الخروج</button>
            </form>
        @else
            <h3 class="title">تسجيل الدخول</h3>
            <form action="{{ route('login') }}" method="POST" class="form-login">
                @csrf
                <div class="form-content">
                    <label for="email">البريد الالكتروني</label>
                    <input type="email" name="email" id="email" placeholder="أدخل بريدك الإلكتروني" required />
                </div>
                <div class="form-content">
                    <label for="password">الرقم السري</label>
                    <input type="password" name="password" id="password" placeholder="أدخل  الرقم السري" required />
                </div>
                <button type="submit">تسجيل الدخول</button>
                <p class="signup">
                    ليس لديك حساب ؟ <a href="{{ route('register') }}">انشاء حساب</a>
                </p>
            </form>
        @endauth
    </div>

    @yield('content')
    <!--=============== FOOTER ===============-->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="foot">
                    <h3>
                        <a href="{{ route('home') }}"><i class="fas fa-shopping-bag"></i> متجر Saro1
                        </a>
                    </h3>
                    <p>
                        مرحبا بكم في متجر saro1
                        تسوق واختار مايناسبك من منتجاتنا المميزه نحن في خدمتكم ..
                    </p>
                    <div class="social">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://wa.me/0503600937"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="foot">
                    <h3>معلومات عنا</h3>
                    <p class="info">البريد الالكتروني</p>
                    <span>saro1_store@hotmail•com</span>
                    <p class="info">الهاتف</p>
                    <span>0503600937</span>
                    <p class="info">العنوان</p>
                    <span>المملكة العربية السعودية - جدة</span>
                </div>
                <div class="foot">
                    <h3>خدماتنا</h3>
                    <ul>
                        <li><a href="#">الرئيسية</a></li>
                        <li><a href="#">معلومات عنا </a></li>
                        <li><a href="#">دعم العملاء</a></li>
                        <li><a href="#">مركز الدعم</a></li>
                    </ul>
                </div>
                <div class="foot">
                    <h3>من نحن</h3>
                    <ul>
                        <li><a href="#">تواصل معنا</a></li>
                        <li><a href="#">انشاء حساب</a></li>
                        <li><a href="#">الشروط والاحكام</a></li>
                        <li><a href="#">سياسة التوصيل</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-copy">
                جميع الحقوق محفوظه لدي <span>متجر Saro1</span> &copy;
                <span class="year"></span>
            </div>
        </div>
    </footer>
    <!--=============== SCROLL UP ===============-->
    <button class="scroll-up"><i class="fas fa-arrow-up"></i></button>
    <!--=============== STYLE SWITCHER ===============-->
    <div class="swither">
        <p><span class="fas fa-gear gear"></span></p>
        <div class="all-color">
            <span class="fas color fa-check" data-color="color-1"></span>
            <span class="fas color" data-color="color-2"></span>
            <span class="fas color" data-color="color-3"></span>
            <span class="fas color" data-color="color-4"></span>
            <span class="fas color" data-color="color-5"></span>
        </div>
    </div>
    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!--=============== JS ===============-->
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
    <!-- jquery -->
    <script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <!-- plugins-jquery -->
    <script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
    {{-- Toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif
</body>

</html>
