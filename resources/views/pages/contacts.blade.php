


@extends('layouts.app')

@section('title', 'Контакты')

@section('content')

    @include('partials.header')

    <!-- Breadcrumb area Start -->
    <section class="breadcrumb__section breadcrumb__bg">
        <div class="container">
            <div class="row row-cols-1">
                <div class="col">
                    <div class="breadcrumb__content text-center">
                        <h1 class="breadcrumb__content--title text-white mb-25">Contact Us</h1>
                        <ul class="breadcrumb__content--menu d-flex justify-content-center">
                            <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb__content--menu__items"><span class="text-white">Contact Us</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb area End -->

    <!-- Main Content Wrapper Start -->
    <main class="main-content-wrapper">
        <div class="page-content-inner pt--75 pt-md--55">
            <!-- Contact Area Start -->

            <!-- Contact Area End -->
            <section class="contact__section section--padding">
                <div class="container">

                    {{-- Заголовок --}}
                    <div class="section__heading text-center mb-40">
                        <span class="section__heading--subtitle">Contact With Us</span>
                        <h2 class="section__heading--maintitle">Get In Touch</h2>
                    </div>

                    <div class="main__contact--area position__relative">

                        {{-- ФОРМА --}}
                        <div class="contact__form">
                            <h3 class="contact__form--title mb-40">Contact Us</h3>

                            <form class="contact__form--inner"
                                  id="contact-form"
                                  action="{{ route('contact.send') }}"
                                  method="POST">
                                @csrf

                                {{-- важно сохранить --}}
                                <input type="hidden" name="subject">
                                <input type="hidden" name="page" id="page">

                                <div class="row">

                                    {{-- NAME --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact__form--list mb-20">
                                            <label class="contact__form--label">
                                                Name <span class="contact__form--label__star">*</span>
                                            </label>
                                            <input
                                                class="contact__form--input"
                                                type="text"
                                                name="name"
                                                placeholder="Your Name"
                                                required
                                            >
                                        </div>
                                    </div>

                                    {{-- PHONE --}}
                                    <div class="col-lg-6 col-md-6">
                                        <div class="contact__form--list mb-20">
                                            <label class="contact__form--label">
                                                Phone <span class="contact__form--label__star">*</span>
                                            </label>
                                            <input
                                                class="contact__form--input"
                                                type="text"
                                                name="phone"
                                                placeholder="Phone Number"
                                                required
                                            >
                                        </div>
                                    </div>

                                    {{-- EMAIL --}}
                                    <div class="col-12">
                                        <div class="contact__form--list mb-20">
                                            <label class="contact__form--label">
                                                Email <span class="contact__form--label__star">*</span>
                                            </label>
                                            <input
                                                class="contact__form--input"
                                                type="email"
                                                name="email"
                                                placeholder="Email Address"
                                                required
                                            >
                                        </div>
                                    </div>

                                    {{-- MESSAGE --}}
                                    <div class="col-12">
                                        <div class="contact__form--list mb-20">
                                            <label class="contact__form--label">
                                                Message <span class="contact__form--label__star">*</span>
                                            </label>
                                            <textarea
                                                class="contact__form--textarea"
                                                name="message"
                                                placeholder="Write your message"
                                                required
                                            ></textarea>
                                        </div>
                                    </div>

                                </div>

                                <button class="contact__form--btn btn" type="submit">
                                    <span>Send Request</span>
                                </button>

                                <div class="form__output"></div>
                            </form>
                        </div>

                        {{-- КОНТАКТНАЯ ИНФОРМАЦИЯ --}}
                        <div class="contact__info border-radius-5">

                            <div class="contact__info--items">
                                <h3 class="contact__info--content__title text-white mb-15">
                                    Phone
                                </h3>
                                <p class="contact__info--content__desc text-white">
                                    <a href="tel:{{ $siteSettings->phone }}">
                                        {{ $siteSettings->phone }}
                                    </a>
                                </p>
                            </div>

                            <div class="contact__info--items">
                                <h3 class="contact__info--content__title text-white mb-15">
                                    Email
                                </h3>
                                <p class="contact__info--content__desc text-white">
                                    <a href="mailto:{{ $siteSettings->email }}">
                                        {{ $siteSettings->email }}
                                    </a>
                                </p>
                            </div>

                            <div class="contact__info--items">
                                <h3 class="contact__info--content__title text-white mb-15">
                                    Address
                                </h3>
                                <p class="contact__info--content__desc text-white">
                                    {{ $siteSettings->address }}
                                </p>
                            </div>

                            <div class="contact__info--items">
                                <h3 class="contact__info--content__title text-white mb-15">
                                    Working Hours
                                </h3>
                                <p class="contact__info--content__desc text-white">
                                    Mon – Fri : 9:00 – 18:00
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </section>


        </div>
    </main>
    <!-- Main Content Wrapper End -->


    @include('partials.footer')


@endsection

