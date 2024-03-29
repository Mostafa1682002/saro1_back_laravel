@extends('layouts.master', [
    'active' => 'about',
])

@section('content')
    <!--=============== ABOUT ===============-->
    <section class="about">
        <div class="container">
            <div class="page-content">
                <h2 class="page-title">معلومات عنا</h2>
                <p class="links">
                    <a href="{{ route('home') }}" class="home">الرئيسية</a>
                    <span>></span>
                    <a href="#" class="curent">معلومات عنا</a>
                </p>
            </div>
            <div class="about-content">
                <div class="about-img">
                    <img src="{{ asset('front/assets/img/about-img.jpg') }}" alt="" />
                </div>
                <div class="about-body">
                    <h3 class="about-text">
                        من نحن حقا <br />
                        لماذا أخترتنا
                    </h3>
                    <p>
                        مجموعة متنوعة من الملابس: يقدم المتجر تشكيلة واسعة من الملابس
                        الشتوية، بما في ذلك معاطف فاخرة، وسترات دافئة، وكنزات ناعمة. كما
                        يتيح للزبائن اختيار الألوان والتصاميم التي تتناسب مع أذواقهم. جودة
                        عالية: يتميز المتجر بتوفير منتجات عالية الجودة مصنوعة من مواد
                        متينة ودافئة، مما يضمن للعملاء راحة فائقة وحماية فعّالة من البرد.
                        تقنيات حديثة للحماية من البرد: يقدم المتجر ملابس تستخدم أحدث
                        التقنيات للحفاظ على الدفء في الأيام الباردة، مثل العوازل الحرارية
                        والبطانات الداخلية الفعّالة. ملحقات شتوية: بالإضافة إلى الملابس،
                        يقدم المتجر مجموعة متنوعة من الاكسسوارات الشتوية، مثل القفازات
                        الدافئة، والقبعات الأنيقة، والوشاحات الرائعة، لإكمال إطلالة
                        الشتاء. توفير وسائل الدفع الآمنة: يوفر المتجر وسائل دفع آمنة
                        وموثوقة لراحة العملاء، مع ضمان سرية المعلومات الشخصية. خدمة عملاء
                        متميزة: يقدم المتجر فريق دعم عملاء متخصص وودود، جاهز للإجابة على
                        استفسارات العملاء وتقديم المساعدة في عملية الشراء. توصيل سريع
                        وخدمة رائعة: يوفر المتجر خدمة توصيل سريعة لضمان وصول المنتجات في
                        وقت قصير، مما يعزز تجربة التسوق عبر الإنترنت.
                    </p>
                    <div class="about-check">
                        <i class="fas fa-check-square"></i>
                        <span>نحن نقدم دائما في الوقت المحدد </span>
                    </div>
                    <div class="about-check">
                        <i class="fas fa-check-square"></i>
                        <span> نقدم لك إرشادات لحماية منتجاتك والعناية بها</span>
                    </div>
                    <div class="about-check">
                        <i class="fas fa-check-square"></i>
                        <span>نحن نأتي دائمًا لإجراء فحص ما بعد البيع</span>
                    </div>
                    <div class="about-check">
                        <i class="fas fa-check-square"></i>
                        <span>ضمان استرداد الأموال بنسبة 100%</span>
                    </div>
                    <a href="shop.html">
                        <button>اشتري الان <i class="fas fa-arrow-left"></i></button></a>
                </div>
            </div>
        </div>
    </section>
@endsection
