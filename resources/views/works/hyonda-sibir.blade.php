@extends('layouts.custom')

@section('title', 'г.Асино. ООО Хёнда-Сибирь')
@section('description', 'Модернизация завода по производству МДФ плит')
@section('keywords', '')
@section('canonical', '')
@section('og:title', 'г.Асино. ООО Хёнда-Сибирь')
@section('og:description', 'Модернизация завода по производству МДФ плит')
@section('og:url', '')
@section('twitter:title', 'г.Асино. ООО Хёнда-Сибирь')
@section('twitter:description', 'Модернизация завода по производству МДФ плит')


@section('content')

    <?php $pages = 'Промышленное утепление' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        @slot('prev') Портфолио @endslot
        @slot('link') {{ url('/portfolio') }} @endslot

        @slot('active') г.Асино. ООО Хёнда-Сибирь @endslot
        @slot('activelink') {{ url('/portfolio/zavod-kronospan') }} @endslot



    @endcomponent


    <div class="works-page">
        <div class="container">
            <div class="works-page__inner">
                <h1 class="works-page__title">г.Асино. ООО Хёнда-Сибирь</h1>
                <div class="slider">

                    <div class="slick">

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/1.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/2.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/3.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/4.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/5.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/6.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/7.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/8.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/9.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/10.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/11.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/12.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/13.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/14.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/4/15.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>



                    </div>
                </div>

                <p class="works-page__description">
                    Модернизация завода по производству МДФ плит. Выполнялись работы по переделке и доделке теплоизозоляционного и покрывного слоёв, на существующих трубопроводах и оборудовании. Так же заказчик захотел чтобы наша компания выполнила работы по обрамлению и изоляции проходных отверстий между помещениями.
                </p>
                <h2 class="works-page__subtitle">Цель проекта</h2>
                <p class="works-page__text">

                    Частичные переделки существующей смонтированной теплоизоляции. Заказчик описал проблему как: попадание осадков под покрывной слой, и потерю тепла из за некачественного монтажа теплоизоляционного слоя. Собственно эти проблемы и были устранены. Толщина изоляции- 50мм-100мм Покрывной слой- ОЦ 0,5мм
                </p>
                <p class="works-page__date">Дата сдачи проекта: 26.05.2020</p>


            </div>
        </div>
    </div>




@endsection

