<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $page->title }}123</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $page->description }}" />
{{--    <meta name="keywords" content="noah scharrenberg, scharrenberg, portfolio, resume, cv, fontys, maastricht university, software, developer, engineer" />--}}
{{--    <meta name="author" content="Noah Scharrenberg" />--}}
    <link rel="canonical" href="{{ $page->getUrl() }}">
{{--    <link rel="shortcut icon" href="favicon.ico">--}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" type="text/css">

    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}" type="text/css">

    <script src="{{ mix('js/modernizr.custom.js', 'assets/build') }}"></script>
</head>
