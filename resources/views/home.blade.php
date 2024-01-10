@extends('layouts.master', [
    'active' => 'home',
])

@section('content')
    <!--=============== HOME ===============-->
    <section class="home">
        <!-- <div class="swipper"> -->
        <div class="container">
            <div class="home-content swiper">
                <div class="home-groups swiper-wrapper">
                    <div class="group swiper-slide">
                        <div class="part-left">
                            <div class="img-home">
                                <img src="{{ asset('front/assets/img/p-11.webp') }}" alt="" />
                            </div>
                            <div class="details-img">
                                <h4 class="details-title">ديكور المنزل</h4>
                                <p class="details-subtitle">المنتجات المستورده</p>
                            </div>
                        </div>
                        <div class="part-right">
                            <h3 class="home-subtitle">ديكور المنزل</h3>
                            <h1 class="home-title">
                                لدينا افضل <br />
                                العروض <br />و الخصومات!!
                            </h1>
                            <p class="home-discription">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا
                                النص .
                            </p>
                            <div class="home-buttons">
                                <a href="shop.html" class="btn">تسوق الآن</a>
                                <a href="shop.html" class="show-details">
                                    عرض التفاصيل <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="group swiper-slide">
                        <div class="part-left">
                            <div class="img-home">
                                <img src="{{ asset('front/assets/img/p-2_.webp') }}" alt="" />
                            </div>
                            <div class="details-img">
                                <h4 class="details-title">ديكور المنزل</h4>
                                <p class="details-subtitle">المنتجات المستورده</p>
                            </div>
                        </div>
                        <div class="part-right">
                            <h3 class="home-subtitle">ديكور المنزل</h3>
                            <h1 class="home-title">
                                لدينا افضل <br />
                                العروض <br />و الخصومات!!
                            </h1>
                            <p class="home-discription">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا
                                النص .
                            </p>
                            <div class="home-buttons">
                                <a href="shop.html" class="btn">تسوق الآن</a>
                                <a href="shop.html" class="show-details">
                                    عرض التفاصيل <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="group swiper-slide">
                        <div class="part-left">
                            <div class="img-home">
                                <img src="{{ asset('front/assets/img/p-3.webp') }}" alt="" />
                            </div>
                            <div class="details-img">
                                <h4 class="details-title">ديكور المنزل</h4>
                                <p class="details-subtitle">المنتجات المستورده</p>
                            </div>
                        </div>
                        <div class="part-right">
                            <h3 class="home-subtitle">ديكور المنزل</h3>
                            <h1 class="home-title">
                                لدينا افضل <br />
                                العروض <br />و الخصومات!!
                            </h1>
                            <p class="home-discription">
                                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا
                                النص .
                            </p>
                            <div class="home-buttons">
                                <a href="shop.html" class="btn">تسوق الآن</a>
                                <a href="shop.html" class="show-details">
                                    عرض التفاصيل <i class="fas fa-arrow-left"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!--=============== DISCOUNT ===============-->
    <section class="discount">
        <div class="container">
            <div class="discont-content">
                <div class="img-dis">
                    <img src="{{ asset('front/assets/img/p-3.webp') }}" alt="" />
                </div>
                <div class="discount-date">
                    <p>تخفيضات حتي 50%</p>
                    <h3>علي المنتجات الجديده</h3>
                    <a href="" class="btn">اذهب إلى الجديد</a>
                </div>
            </div>
        </div>
    </section>
    <!--=============== NEW ARRIVALS ===============-->
    <section class="newArrivals">
        <div class="container">
            <h2 class="section-title">المنتجات</h2>
            <div class="swiper new-Swip">
                <div class="newArrivals-content swiper-wrapper">
                    @foreach ($products as $product)
                        <div class="box swiper-slide">
                            <span class="new btn">جديد</span>
                            <a href="{{ route('product', $product->id) }}"><img src="{{ $product->main_image }}"
                                    alt="" /></a>
                            <h3 class="box-title">
                                {{ $product->name }}
                            </h3>
                            <p class="info">{{ $product->category->name }}</p>
                            <div class="box-price">
                                <span class="disc-price">{{ $product->price }}ر.س</span>
                                @if ($product->discount)
                                    <span class="bre-price">{{ $product->discount }}ر.س</span>
                                @endif
                            </div>
                            <button class="arrival-btn">
                                <a href="#" style="color: #fff"><i class="fas fa-shopping-cart"></i></a>
                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--=============== STEPS ===============-->
    <section class="steps">
        <div class="container">
            <h2 class="section-title">
                كيفية طلب المنتجات <br />
                من متجر Saro1
            </h2>
            <div class="steps-content">
                <div class="step-item">
                    <p class="number">01</p>
                    <h3 class="step-tit">اختيار المنتجات</h3>
                    <p class="step-dis">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص .
                    </p>
                </div>
                <div class="step-item">
                    <p class="number">02</p>
                    <h3 class="step-tit">تقديم الطلب</h3>
                    <p class="step-dis">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص .
                    </p>
                </div>
                <div class="step-item">
                    <p class="number">03</p>
                    <h3 class="step-tit">الحصول على تسليم الطلب</h3>
                    <p class="step-dis">
                        هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد
                        هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص .
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
