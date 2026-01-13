<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <title>@yield('title', 'CATALOG')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Подключение CSS -->

    <!-- ::::::::::::::Favicon icon::::::::::::::-->
    <link rel="icon" href="{{ asset('favicon-4.png') }}" type="image/png">

    <link rel="stylesheet" href="/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/css/plugins/glightbox.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Plugin css -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/modalForm.css">

</head>
<body>

<!-- Start preloader -->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
                    <span data-text-preloader="M" class="letters-loading">
                        M
                    </span>

                <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>

                <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>

                <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>

                <span data-text-preloader="O" class="letters-loading">
                        O
                    </span>

                <span data-text-preloader="D" class="letters-loading">
                        D
                    </span>

                <span data-text-preloader="I" class="letters-loading">
                        I
                    </span>
                <span data-text-preloader="S" class="letters-loading">
                        S
                    </span>
                <span data-text-preloader="C" class="letters-loading">
                        C
                    </span>
                <span data-text-preloader="L" class="letters-loading">
                        L
                    </span><span data-text-preloader="A" class="letters-loading">
                        A
                    </span>
                 </span><span data-text-preloader="B" class="letters-loading">
                        B
                    </span>

            </div>
        </div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
</div>
<!-- End preloader -->

<!-- Main Wrapper Start -->





<!-- Основной контент -->

    @yield('content')


<!-- All Script JS Plugins here  -->
<script src="/assets/js/vendor/popper.js" defer="defer"></script>
{{--<script src="/assets/js/vendor/bootstrap.min.js" defer="defer"></script>--}}
<script src="/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="/assets/js/plugins/glightbox.min.js"></script>

<!-- Customscript js -->
<script src="/assets/js/script.js"></script>
<script src="/assets/js/modalForm.js"></script>



</body>
</html>
