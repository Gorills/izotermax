<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::asset('css/site.css?').('v.1.0.0') }}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">

    <script src="https://kit.fontawesome.com/0af96d350a.js" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')"/>
    <meta name="keywords" content="@yield('keywords')" />
    <link rel="canonical" href="@yield('canonical')"/>
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('og:title')" />
    <meta property="og:description" content="@yield('og:description')" />
    <meta property="og:url" content="@yield('og:url')" />
    <meta name="theme-color" content="#b0a171">
    <meta property="og:site_name" content="https://prorab70.ru/" />
    <meta property="og:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta property="vk:image" content="{{ URL::asset('images/og.jpg') }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('twitter:title')" />
    <meta name="twitter:description" content="@yield('twitter:description')" />


</head>
<body>



@component('components.header')

@endcomponent





@yield('content')



<div class="phone-btn">
    <a href="#" class="phone-btn__link">
        <i class="phone-btn__icon fas fa-phone"></i>
    </a>
</div>

<div class="whatsapp-btn">
    <a href="#" class="whatsapp-btn__link">
        <i class="whatsapp-btn__icon fab fa-whatsapp"></i>
    </a>
</div>



@component('components.footer')

@endcomponent




@component('components.schema')

@endcomponent

@component('components.popup')

@endcomponent



<style src="{{ URL::asset('js/app.js') }}"></style>
<script src="{{ URL::asset('js/site.js') }} "></script>


</body>
</html>
