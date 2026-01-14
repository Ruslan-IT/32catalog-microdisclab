@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    @include('partials.header')

    <style>
        .product__items--thumbnail {
            height: 280px;           /* одинаковая высота */
            overflow: hidden;
            margin: 0 0 50px 0
        }

        .product__items--img {
            width: 100%;
            height: 280px;
            object-fit: cover;       /* НЕ растягивает фото */
            display: block;
            border-radius: 10px;
        }

        .instagram__thumbnail {
            height: 260px;              /* высота блока */
            display: flex;
            align-items: center;        /* вертикальный центр */
            justify-content: center;    /* горизонтальный центр */
            overflow: hidden;
        }

        .instagram__thumbnail--img {
            width: 100%;
            height: 100%;
            object-fit: cover;          /* заполняет блок */
        }


        /* Контейнер карточки */
        .product-card {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%; /* карточка растягивается на всю высоту слайда */
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Обёртка изображения */
        .product-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* фиксированная высота блока изображения */
            overflow: hidden;
            background-color: #f7f7f7;
        }

        /* Изображение в центре и с адаптивным масштабом */
        .product-image img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain; /* сохраняет пропорции изображения */
        }

        /* Контент карточки */
        .blog__items--content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            flex-grow: 1;
            padding: 15px;
        }

        /* Ограничение высоты описания, чтобы карточки были одинаковыми */
        .blog__items--desc {
            min-height: 50px; /* можно регулировать */
        }

        /* Кнопка View product */
        .blog__items--readmore {
            margin-top: auto;
            display: inline-block;
            font-weight: 600;
            color: #ff6600;
        }


        .brand__logo--section__inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px; /* расстояние между логотипами */
        }

        .brand__logo--items {
            flex: 1 1 0; /* чтобы все логотипы занимали одинаковое место */
            display: flex;
            justify-content: center;
            align-items: center;
            max-height: 80px; /* фиксированная высота блока для логотипа */
            overflow: hidden;
        }

        .brand__logo--items__thumbnail--img {
            max-height: 100%; /* изображение растягивается по высоте блока */
            max-width: 100%;
            object-fit: contain; /* сохраняет пропорции изображения */
            display: block;
        }

    </style>

    <main class="main__content_wrapper">
        <!-- Start slider section -->
        <section class="hero__slider--section mb-60">
            <div class="hero__slider--inner hero__slider--activation swiper">
                <div class="hero__slider--wrapper swiper-wrapper">
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">To launch line of optimized</span>
                                            <h2 class="slider__content4--maintitle text-white h1">
                                                SORB FX vessels <br> for PFAS removal
                                            </h2>
                                            <p class="slider__content4--desc text-white d-sm-none">
                                                De Nora to launch line of optimized SORB FX vessels for PFAS removal
                                            </p>
                                            <a class="btn slider__btn style4 open-modal" href="#">Discover more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg two">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle text-white">DECODE Season 2:</span>
                                            <h2 class="slider__content4--maintitle text-white h1">in the heart <br> of
                                                our business</h2>
                                            <p class="slider__content4--desc text-white d-sm-none">The more you love
                                                your health, more you eat organic. No medicine can heal you better than
                                                organic food does</p>
                                            <a class="btn slider__btn style4 open-modal" href="#">Shop Now</a> i
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide ">
                        <div class="hero__slider--items slider__4--bg three">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-7">
                                        <div class="slider__content4">
                                            <span class="slider__content4--subtitle">Cathodic Protection: </span>
                                            <h2 class="slider__content4--maintitle h1">Preventing Corrosion <br>in
                                                Infrastructure </h2>
                                            <p class="slider__content4--desc d-sm-none">The more you love your health,
                                                more you eat organic. No medicine can heal you better than organic food
                                                does</p>
                                            <a class="btn slider__btn style4 open-modal" href="#">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__pagination swiper-pagination"></div>
            </div>
        </section>
        <!-- End slider section -->

        <!-- Start banner section -->
        <section class="banner__section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-2 row-cols-1 mb--n30">
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="#">

                                <img class="banner__items--thumbnail__img display-block"
                                     src="assets/img/banner/banner10.jpg" alt="banner-img">

                                <div class="banner__items--content3">
                                    <h2 class="banner__items--content3__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner__items--content3__btn text-white open-modal  ">Discover more
                                        <svg class="banner__two--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col mb-30">
                        <div class="banner__items position__relative">
                            <a class="banner__items--thumbnail display-block" href="#">

                                <img class="banner__items--thumbnail__img display-block"
                                     src="assets/img/banner/banner11.png" alt="banner-img">

                                <div class="banner__items--content3">
                                    <h2 class="banner__items--content3__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner__items--content3__btn text-white">Discover more
                                        <svg class="banner__two--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container">
                <div class="section__heading text-center mb-25">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Trending Products</h2>
                </div>

                <div class="tab_content">
                    <div id="product_all" class="tab_pane active show">
                        <div class="product__section--inner product__section--style3__inner">
                            <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">

                                @foreach($categoriesRandom as $category)
                                    <div class="col md-28">
                                        <div class="product__items product__items2">

                                            {{-- THUMBNAIL --}}
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link"
                                                   href="{{ route('category.show', $category->slug) }}">

                                                    <img class="product__items--img product__primary--img" src="{{ asset('storage/' . $category->main_image) }}"
                                                         alt="{{ $category->name }}">

                                                </a>

                                                {{-- BADGE --}}
                                                <div class="product__badge">
                                                    <span class="product__badge--items">
                                                        {{ $category->slug  }}
                                                    </span>
                                                </div>
                                            </div>

                                            {{-- CONTENT --}}
                                            <div class="product__items--content product__items2--content text-center">

                                                <h3 class="product__items--content__title h4">
                                                    <a href="{{ route('category.show', $category->slug) }}">
                                                        {{ $category->name }}
                                                    </a>
                                                </h3>

                                                <a class="add__to--cart__btn"
                                                   href="{{ route('category.show', $category->slug) }}">
                                                    View Products
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End product section -->

        <!-- Start banner section -->
        <section class="banner__section banner4__section section--padding pt-0">
            <div class="container">
                <div class="row mb--n30">
                    <div class=" banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block  open-modal  " href="#"><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner12.jpg" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">56% off in all <br>
                                        products</h2>
                                    <span class="banner4__items--content__btn text-white">Discover more
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-6 mb-30">
                        <div class="banner__items banner4__items position__relative mb-20">
                            <a class="banner__items--thumbnail display-block open-modal" href="shop.html"><img
                                    class="banner__items--thumbnail__img banner__img--max__height display-block"
                                    src="assets/img/banner/banner13.jpg" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Energy Transition<br>
                                        products</h2>
                                    <span class="banner4__items--content__btn text-white">Discover more
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block open-modal" href="shop.html"><img
                                    class="banner__items--thumbnail__img banner__img--max__height display-block"
                                    src="assets/img/banner/banner14.jpg" alt="banner-img">
                                <div class="banner4__items--content content__style2">
                                    <h2 class="banner4__items--content__title style2 text-white">Dragonfly® System is here <br>
                                        Vegetable</h2>
                                    <span class="banner4__items--content__btn text-white">Discover more
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="banner4__items--col col-lg-3 mb-30">
                        <div class="banner__items banner4__items position__relative">
                            <a class="banner__items--thumbnail display-block open-modal" href="#"><img
                                    class="banner__items--thumbnail__img display-block"
                                    src="assets/img/banner/banner15.jpg" alt="banner-img">
                                <div class="banner4__items--content content__style1 text-center">
                                    <h2 class="banner4__items--content__title text-white">Natural Fresh <br>
                                        Fruit</h2>
                                    <span class="banner4__items--content__btn text-white">Discover more
                                        <svg class="banner4__items--content__btn--arrow__icon"
                                             xmlns="http://www.w3.org/2000/svg" width="10.383" height="7.546"
                                             viewBox="0 0 10.383 7.546">
                                            <path data-name="Path 77287"
                                                  d="M10.241,45.329l-3.09-3.263a.465.465,0,0,0-.683,0,.53.53,0,0,0,0,.721l2.266,2.393H.483a.511.511,0,0,0,0,1.02H8.734L6.469,48.592a.53.53,0,0,0,0,.721.465.465,0,0,0,.683,0l3.09-3.263A.53.53,0,0,0,10.241,45.329Z"
                                                  transform="translate(0 -41.916)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner section -->

        <!-- Start product section -->
        <section class="product__section product__section--style3 section--padding pt-0">
            <div class="container product3__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">New Products</h2>
                </div>
                <div
                    class="product__section--inner product3__section--inner__padding product__section--style3__inner product__swiper--activation swiper">
                    <div class="swiper-wrapper">

                        @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="product__items product__items2">

                                    {{-- THUMBNAIL --}}
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link"
                                           href="{{ route('product.show', $product->slug) }}">

                                            <img class="product__items--img product__primary--img"
                                                 src="{{ asset('storage/' . $product->main_image) }}"
                                                 alt="{{ $product->name }}">

                                            @if($product->secondary_image)
                                                <img class="product__items--img product__secondary--img"
                                                     src="{{ asset('storage/' . $product->secondary_image) }}"
                                                     alt="{{ $product->name }}">
                                            @endif
                                        </a>

                                        {{-- BADGE --}}
                                        @if($product->is_sale)
                                            <div class="product__badge">
                                                <span class="product__badge--items sale">Sale</span>
                                            </div>
                                        @endif
                                    </div>

                                    {{-- CONTENT --}}
                                    <div class="product__items--content product__items2--content text-center">

                                        <a class="add__to--cart__btn"
                                           href="{{ route('product.show', $product->slug) }}">
                                            View Product
                                        </a>

                                        <h3 class="product__items--content__title h4">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                {{ $product->title }}
                                            </a>
                                        </h3>

                                        <div class="product__items--price">
                        <span class="current__price">

                        </span>

                                            @if($product->old_price)
                                                <span class="old__price">
                                {{ $product->old_price }} $
                            </span>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>


                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End product section -->

        <!-- Start accordion section -->
        <section class="accordion__section accordion__bg section--padding">
            <div class="container">
                <div class="section__heading text-center mb-60">
                    <span class="section__heading--subtitle"></span>
                    <h2 style="font-weight: bold; color: #fff0ff"  class="section__heading--maintitle">Our worldwide presence</h2>
                </div>
                <div class="accordion__section--inner">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="accordion__banner banner__items">
                                <a class="banner__items--thumbnail display-block" href="shop.html"><img
                                        class="banner__items--thumbnail__img display-block"
                                        src="assets/img/banner/banner16.png" alt="banner img"></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- End accordion section -->

        <!-- Start instagram section -->
        <div class="instagram__section section--padding">
            <div class="container-fluid p-0">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added our store</span>
                    <h2 class="section__heading--maintitle">Our Product</h2>
                </div>
                <div class="instagram__section--inner instagram__swiper--activation swiper">
                    <div class="swiper-wrapper">

                        @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="instagram__thumbnail position__relative">

                                    <a class="instagram__thumbnail--link display-block"
                                       href="{{ route('product.show', $product->slug) }}">

                                        <img class="instagram__thumbnail--img display-block"
                                             src="{{ asset('storage/' . $product->main_image) }}"
                                             alt="{{ $product->title }}">

                                        <span class="instagram__social--icon">
                                            {{-- Instagram icon --}}
                                            {{ $product->title }}
                                        </span>

                                    </a>

                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </div>
        <!-- End instagram section -->

        <!-- Start blog section -->
        <section class="blog__section section--padding pt-0">
            <div class="container blog__section--container">
                <div class="section__heading text-center mb-40">
                    <span class="section__heading--subtitle">Recently added products in our store</span>
                    <h2 class="section__heading--maintitle">New Products</h2>
                </div>
                <div class="blog__section--inner blog__swiper--activation swiper">
                    <div class="swiper-wrapper">
                        @foreach($deals as $product)
                            <div class="swiper-slide">
                                <div class="blog__items product-card">

                                    {{-- IMAGE --}}
                                    <div class="blog__items--thumbnail product-image">
                                        <a href="{{ route('product.show', $product->slug) }}">
                                            <img
                                                src="{{ asset('storage/' . $product->main_image) }}"
                                                alt="{{ $product->name }}"
                                            >
                                        </a>
                                    </div>

                                    {{-- CONTENT --}}
                                    <div class="blog__items--content text-center">

                                        <h3 class="blog__items--title">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                {{ $product->title }}
                                            </a>
                                        </h3>

                                        <p class="blog__items--desc">
                                            {{ Str::limit($product->short_description, 80) }}
                                        </p>

                                        <div class="product-price">

                                        </div>

                                        <a class="blog__items--readmore"
                                           href="{{ route('product.show', $product->slug) }}">
                                            View product →
                                        </a>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="swiper__nav--btn swiper-button-next"></div>
                    <div class="swiper__nav--btn swiper-button-prev"></div>
                </div>
            </div>
        </section>
        <!-- End blog section -->

        <!-- Start brand logo section -->
        <div class="brand__logo--section section--padding pt-0">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="brand__logo--section__inner d-flex justify-content-between align-items-center">
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                     src="assets/img/logo/brand-logo6.jpg" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                     src="assets/img/logo/brand-logo2.jpg" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                     src="assets/img/logo/brand-logo3.jpg" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                     src="assets/img/logo/brand-logo4.jpg" alt="brand logo">
                            </div>
                            <div class="brand__logo--items">
                                <img class="brand__logo--items__thumbnail--img display-block"
                                     src="assets/img/logo/brand-logo5.jpg" alt="brand logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End brand logo section -->


    </main>

    @include('partials.footer')

    @include('partials.modal')

@endsection
