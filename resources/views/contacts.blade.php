@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


@section('content')

    <?php $pages = 'Контакты' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        {{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Контакты @endslot
        @slot('activelink') {{ url('/contacts') }} @endslot



    @endcomponent

    <section class="contacts">
        <div class="container">
            <div class="contacts__inner">
                <h1 class="title">Наши контакты</h1>



                <div class="contacts__wrapper">
                    <div class="contacts__item"><i class="fas fa-phone"></i><a href="tel:83822941199" class="contacts__link contacts__tel">8 (3822) 941-199</a></div>
                    <div class="contacts__item"><i class="fas fa-envelope"></i><a href="mailto:ferrum_art@mail.ru" class="contacts__link contacts__tel">ferrum_art@mail.ru</a></div>


                </div>


                <div class="contacts__map">
                    <a class="dg-widget-link" href="http://2gis.ru/tomsk/firm/70000001018677311/center/84.94879961013795,56.52827606425975/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Томска</a><div class="dg-widget-link"><a href="http://2gis.ru/tomsk/firm/70000001018677311/photos/70000001018677311/center/84.94879961013795,56.52827606425975/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии компании</a></div><div class="dg-widget-link"><a href="http://2gis.ru/tomsk/center/84.948794,56.527837/zoom/16/routeTab/rsType/bus/to/84.948794,56.527837╎ИзоТерМакс?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до ИзоТерМакс</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":56.52827606425975,"lon":84.94879961013795,"zoom":16},"opt":{"city":"tomsk"},"org":[{"id":"70000001018677311"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>


            </div>
        </div>
    </section>


@endsection

