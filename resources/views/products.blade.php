@extends('layouts.master', [
    'active' => $id,
])
@section('content')
    <!--=============== SHOP ===============-->
    <section class="shop">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">المنتجات</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">المنتجات</a>
                </p>
            </div>
            <div class="shop-content">
                <div class="left-boxs">
                    <h3 class="head-left-box">فلتره بواسطة</h3>
                    <div class="filter-content">
                        <h4 class="head-filter">الحالة</h4>
                        <div class="fil-item">
                            <div class="filter">
                                <input type="checkbox" id="new" checked />
                                <label for="new">الجديد</label>
                            </div>
                            <p>(20)</p>
                        </div>
                        <div class="fil-item">
                            <div class="filter">
                                <input type="checkbox" id="sale" checked />
                                <label for="sale">السعر</label>
                            </div>
                            <p>(15)</p>
                        </div>
                    </div>
                    <div class="filter-content">
                        <h4 class="head-filter">النوع</h4>
                        @foreach ($categories as $category)
                            <div class="fil-item">
                                <div class="filter">
                                    <input type="checkbox" id="Women" />
                                    <label for="Women">{{ $category->name }}</label>
                                </div>
                                <p>({{ count($category->products) }})</p>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="right-boxs">
                    <div class="all-products">
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

                    {{-- <ul class="pagin">
                        <li class="fas fa-arrow-right ic"></li>
                        <li class="active">1</li>
                        <li>2</li>
                        <span>....</span>
                        <li>9</li>
                        <li>10</li>
                        <li class="fas fa-arrow-left ic"></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </section>
@endsection
