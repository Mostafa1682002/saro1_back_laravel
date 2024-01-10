@extends('layouts.master', ['active' => ''])
@section('content')
    <!--=============== DETAILS ===============-->
    <section class="datails-section">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">تفاصيل المنتج</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">تفاصيل المنتج</a>
                </p>
            </div>
            <div class="details-content">
                <div class="imgs">

                    <img src="{{ $product->main_image }}" alt="" />
                    @foreach ($product->images as $image)
                        <img src="{{ $image->image }}" alt="" />
                    @endforeach
                    <div class="curent-imgs">
                        <span onclick="prev()" class="fas fa-arrow-left"></span>
                        <div class="img-src">
                            <span onclick="closeImg()" class="fas fa-times close-img"></span>
                            <img src="" alt="" />
                            <div class="fo">
                                <h5>متجر لوقة</h5>
                                <p class="len"></p>
                            </div>
                        </div>
                        <span onclick="next()" class="fas fa-arrow-right"></span>
                    </div>
                </div>
                <div class="datails-info">
                    <p class="subtit">المنتجات > {{ $product->category->name }}</p>
                    <h3 class="title">
                        {{ $product->name }}
                    </h3>
                    <div class="starts-content">
                        <div class="start">
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="fas fa-star"></span>
                            <span class="far fa-star"></span>
                        </div>
                        <p class="review">40+ Reviews</p>
                    </div>
                    <div class="price-details">
                        <span class="price">{{ $product->price }} ر.س</span>
                        @if ($product->discount)
                            <span class="price-pr">{{ $product->discount }}ر.س</span>
                        @endif
                        {{-- <p class="off">خصم 50%</p> --}}
                    </div>
                    <div class="amount">
                        <form action="" class="price-amount">
                            <input style="padding: 10px 20px" type="number" name="" id="" value="1"
                                min="1" max="10" />
                        </form>
                        {{-- <span class="far fa-heart fav"></span> --}}
                    </div>
                    <h5 class="txt-tit">تفاصيل المنتج</h5>
                    <p class="text">
                        {{ $product->discription }}
                    </p>
                    <a href="#"> <button>اضافة للسلة</button></a>
                </div>
            </div>
        </div>
    </section>
    <!--=============== RELATED PRODUCTS ===============-->
    <section class="related-products">
        <div class="container">
            <h2 class="section-title">منتجات ذات صلة</h2>
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
@endsection
