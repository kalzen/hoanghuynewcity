<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Hoang Huy New City, Dự án Hoàng Huy New City, Tân Dương, Thủy Nguyên, Hải Phòng, Nhà liền kề, Shophouse, Chung cư, Biệt thự" />
    <meta name="author" content="Hoang Huy New City" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Khu đô thị mới Hoàng Huy New City là dự án Nhà liền kề, shophouse và chung cư với tổng diện tích đất lớn 65ha do Tập đoàn tài chính Hoàng Huy làm chủ đầu tư tọa lạc tại thành phố Thủy Nguyên, Hải Phòng." />
    <meta property="og:title" content="Hoang Huy New City" />
    <meta property="og:description" content="Khu đô thị mới Hoàng Huy New City là dự án Nhà liền kề, shophouse và chung cư với tổng diện tích đất lớn 65ha do Tập đoàn tài chính Hoàng Huy làm chủ đầu tư tọa lạc tại thành phố Thủy Nguyên, Hải Phòng." />
    <meta property="og:image" content="{{ asset('images/main-slider/slider1.jpg') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta name="format-detection" content="telephone=no">
    
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">
    
    <!-- PAGE TITLE HERE -->
    <title>@yield('title', 'Dự án Hoàng Huy New City')</title>
    
    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Hoang Huy New City",
        "url": "{{ url()->current() }}",
        "logo": "{{ asset('images/logo/logo.png') }}",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+84-928291291",
            "contactType": "Customer Service",
            "areaServed": "VN",
            "availableLanguage": "Vietnamese"
        },
        "sameAs": [
            "https://www.facebook.com/hoanghuynewcity",
            "https://twitter.com/hoanghuynewcity",
            "https://www.linkedin.com/company/hoanghuynewcity",
            "https://www.instagram.com/hoanghuynewcity"
        ]
    }
    </script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-962429511">
    </script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-962429511');
    </script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/lightgallery/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.css') }}">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1.01') }}">
    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/revolution/revolution/css/revolution.min.css') }}">
</head>
