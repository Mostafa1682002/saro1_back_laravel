@extends('layouts.master', [
    'active' => 'cart',
])

@section('content')
    <!--=============== CART PAGE ===============-->
    <section class="cart-page">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">السلة</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">السلة</a>
                </p>
            </div>
            <div class="cart-page-content">
                <div class="myBag">
                    <div class="head-bag">
                        <h2 class="title-bag">السلة</h2>
                        <p>{{ count($products) }} منتج</p>
                    </div>
                    @if (count($products))
                        {{-- <div class="bag-box">
                        <div class="img-bag">
                            <img src="assets/img/cart-1.png" alt="" />
                        </div>
                        <div class="bag-body">
                            <p>30.20 ر.س</p>
                            <h3>ثلاثية الأبعاد تتحرك الرمال</h3>
                            <span>Brown</span>
                            <div class="amount">
                                <form action="" class="price-amount">
                                    <input type="number" name="" id="" value="1" min="1"
                                        max="10" />
                                </form>
                                <a href=""><span class="far fa-heart fav"></span></a>
                            </div>
                        </div>
                        <a href="" class="remove-item"><span class="fas fa-trash"></span></a>
                    </div>
                    <div class="bag-box">
                        <div class="img-bag">
                            <img src="assets/img/cart-2.png" alt="" />
                        </div>
                        <div class="bag-body">
                            <p>30.20 ر.س</p>
                            <h3>شحن مروحة محمولة USB</h3>
                            <span>Red Mix</span>
                            <div class="amount">
                                <form action="" class="price-amount">
                                    <input type="number" name="" id="" value="1" min="1"
                                        max="10" />
                                </form>
                                <a href=""><span class="far fa-heart fav"></span></a>
                            </div>
                        </div>
                        <a href="" class="remove-item"><span class="fas fa-trash"></span></a>
                    </div>
                    <div class="bag-box">
                        <div class="img-bag">
                            <img src="assets/img/cart-3.png" alt="" />
                        </div>
                        <div class="bag-body">
                            <p>30.20 ر.س</p>
                            <h3>روبوت كنس ذكي لاسلكي</h3>
                            <span>Yellow</span>
                            <div class="amount">
                                <form action="" class="price-amount">
                                    <input type="number" name="" id="" value="1" min="1"
                                        max="10" />
                                </form>
                                <a href=""><span class="far fa-heart fav"></span></a>
                            </div>
                        </div>
                        <a href="" class="remove-item"><span class="fas fa-trash"></span></a>
                    </div> --}}
                    @else
                        <p style="text-align: center">السلة فارغة</p>
                    @endif
                </div>
                <div class="cacher">
                    <h2 class="title-cacher">التكلفة</h2>
                    <div class="caher-box">
                        <h4 class="sub-total">السعر</h4>
                        <p>30.20 ر.س</p>
                    </div>
                    <div class="caher-box">
                        <h4 class="sub-total">خدمة التوصيل</h4>
                        <p>30.20 ر.س</p>
                    </div>
                    <div class="caher-box">
                        <h3 class="sub-total">السعر الكلي</h3>
                        <p>30.20 ر.س</p>
                    </div>
                    <!-- <button>الدفع</button> -->
                    @if (count($products))
                        <a href="#" class="btn"> اكمال الدفع</a>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection
