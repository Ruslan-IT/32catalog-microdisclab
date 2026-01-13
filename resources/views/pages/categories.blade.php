@extends('layouts.app')

@section('title', 'Главная')

@section('content')


    @include('partials.header')

    <style>
        /* Карточка товара — одинаковая высота */
        .product__items {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        /* Область картинки — фиксированная */
        .product__items--thumbnail {
            height: 220px;              /* одинаковая высота */
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Картинка */
        .product__items--img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;        /* НЕ обрезает фото */
        }

        /* Контент всегда снизу */
        .product__items--content {
            margin-top: auto;
            padding-top: 40px;
        }

        /* Заголовок — фиксированная высота */
        .product__items--content__title {
            min-height: 48px;           /* 2 строки */
            overflow: hidden;
        }
    </style>

    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">All Categories</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="/">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Categories</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="shop__section section--padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-8">
                    <div class="shop__product--wrapper">
                        <div class="tab_content">
                            <div id="product_grid" class="tab_pane active show">
                                <div class="product__section--inner product__section--style3__inner">
                                    <div class="row row-cols-xxl-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-3 row-cols-sm-3 row-cols-2 mb--n30">

                                        @forelse($categories as $category)
                                            <div class="col mb-30">
                                                <div class="product__items product__items2">

                                                    {{-- Картинка категории --}}
                                                    <div class="product__items--thumbnail">
                                                        <a class="product__items--link"
                                                           href="{{ route('category.show', $category->slug) }}">

                                                            <img class="product__items--img product__primary--img"
                                                                 src="{{ asset('storage/' . $category->main_image) }}"
                                                                 alt="{{ $category->name }}">
                                                        </a>
                                                    </div>

                                                    {{-- Контент --}}
                                                    <div class="product__items--content product__items2--content text-center">

                                                        <h3 class="product__items--content__title h4">
                                                            <a href="{{ route('category.show', $category->slug) }}">
                                                                {{ $category->name }}
                                                            </a>
                                                        </h3>

                                                        <a href="{{ route('category.show', $category->slug) }}"
                                                           class="add__to--cart__btn">
                                                            View products
                                                        </a>

                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <div class="col-12 text-center">
                                                <p>Категории не найдены</p>
                                            </div>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    @include('partials.footer')


@endsection


