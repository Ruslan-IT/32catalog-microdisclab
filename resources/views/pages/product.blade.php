@extends('layouts.app')

@section('title', $product->title)

@section('content')


    <div class="wrapper">

        @include('partials.header')

        <style>
            .product__media--preview__items {

                max-height: 450px;
                /* display: flex; */
                align-items: center;
                justify-content: center;
                overflow: hidden;
            }

            .product__media--preview__items--img {
                max-height: 100%;
                max-width: 100%;
                object-fit: contain;    /* НЕ обрезает */
            }
        </style>



        <main class="main__content_wrapper">

            <!-- Start breadcrumb section -->
            <section class="breadcrumb__section breadcrumb__bg">
                <div class="container">
                    <div class="row row-cols-1">
                        <div class="col">
                            <div class="breadcrumb__content text-center">
                                <h1 class="breadcrumb__content--title text-white mb-25"> {{ $product-> title}}</h1>
                                <ul class="breadcrumb__content--menu d-flex justify-content-center">
                                    <li class="breadcrumb__content--menu__items"><a class="text-white" href="/">Home</a></li>
                                    <li class="breadcrumb__content--menu__items"><span class="text-white"> {{ $product-> title}}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End breadcrumb section -->

            <!-- Start product details section -->
            <section class="product__details--section section--padding">
                <div class="container">
                    <div class="row row-cols-lg-2 row-cols-md-2">
                        <div class="col">
                            <div class="product__details--media">

                                <div class="product__media--preview swiper">
                                    <div class="swiper-wrapper">

                                        {{-- Главное изображение --}}
                                        <div class="swiper-slide">
                                            <div class="product__media--preview__items">
                                                <a class="product__media--preview__items--link glightbox"
                                                   data-gallery="product-media-preview"
                                                   href="{{ asset('storage/' . $product->main_image) }}">
                                                    <img class="product__media--preview__items--img"
                                                         src="{{ asset('storage/' . $product->main_image) }}"
                                                         alt="{{ $product->title }}">
                                                </a>
                                            </div>
                                        </div>

                                        {{-- Галерея --}}
                                        @if(!empty($product->gallery) && is_array($product->gallery))

                                            @foreach($product->gallery as $image)
                                                @if($image !== $product->main_image)
                                                    <div class="swiper-slide">
                                                        <div class="product__media--preview__items">
                                                            <a class="product__media--preview__items--link glightbox"
                                                               data-gallery="product-media-preview"
                                                               href="{{ asset('storage/' . $image) }}">
                                                                <img class="product__media--preview__items--img"
                                                                     src="{{ asset('storage/' . $image) }}"
                                                                     alt="{{ $product->title }}">
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif

                                    </div>
                                </div>


                                <div class="product__media--nav swiper">
                                    <div class="swiper-wrapper">

                                        {{-- Главное изображение --}}
                                        <div class="swiper-slide">
                                            <div class="product__media--nav__items">
                                                <img class="product__media--nav__items--img"
                                                     src="{{ asset('storage/' . $product->main_image) }}"
                                                     alt="{{ $product->title }}">
                                            </div>
                                        </div>

                                        {{-- Галерея --}}
                                        @foreach($product->gallery ?? [] as $image)
                                            @if($image !== $product->main_image)
                                                <div class="swiper-slide">
                                                    <div class="product__media--nav__items">
                                                        <img class="product__media--nav__items--img"
                                                             src="{{ asset('storage/' . $image) }}"
                                                             alt="{{ $product->title }}">
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach

                                    </div>

                                    <div class="swiper__nav--btn swiper-button-next"></div>
                                    <div class="swiper__nav--btn swiper-button-prev"></div>
                                </div>

                            </div>
                        </div>
                        <div class="col">
                            <div class="product__details--info">
                                <form action="#">
                                    <h2 class="product__details--info__title mb-15">{{ $product->title }}</h2>
                                    <div class="product__details--info__price mb-15">

                                    </div>
                                    <div class="product__items--rating d-flex align-items-center mb-15">
                                        <ul class="d-flex">
                                            <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                </svg>
                                            </span>
                                            </li>
                                            <li class="product__items--rating__list">
                                            <span class="product__items--rating__icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16.105" height="14.732" viewBox="0 0 10.105 9.732">
                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                </svg>
                                            </span>
                                            </li>
                                        </ul>
                                        <span class="product__items--rating__count--number">(24)</span>
                                    </div>
                                    <p class="product__details--info__desc mb-20">
                                        {{ $product->description }}
                                    </p>
                                    <div class="product__variant">
                                        <div class="product__variant--list mb-10">

                                        </div>


                                        <div class="product__variant--list mb-15">

                                            <button class="variant__buy--now__btn btn" type="submit">Buy it now</button>
                                        </div>

                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End product details section -->

            <!-- Start product details tab section -->
            <section class="product__details--tab__section section--padding">
                <div class="container">
                    <div class="row row-cols-1">
                        <div class="col">
                            <ul class="product__tab--one product__details--tab d-flex mb-30">
                                <li class="product__details--tab__list active" data-toggle="tab" data-target="#description">Description</li>

                            </ul>
                            <div class="product__details--tab__inner border-radius-10">
                                <div class="tab_content">
                                    <div id="description" class="tab_pane active show">
                                        <div class="product__tab--content">
                                            <div class="product__tab--content__step mb-30">
                                                <h2 class="product__tab--content__title h4 mb-10">Nam provident sequi</h2>
                                                <p class="product__tab--content__desc">
                                                    {{ $product->desc1 }}
                                                </p>

                                                <p class="product__tab--content__desc">
                                                    {{ $product->desc2 }}
                                                </p>

                                                <p class="product__tab--content__desc">
                                                    {{ $product->desc3 }}
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End product details tab section -->
        </main>




    </div>

    <!-- Global Overlay Start -->
    <div class="global-overlay"></div>
    <!-- Global Overlay End -->





@include('partials.modal')
@include('partials.footer')

@endsection
