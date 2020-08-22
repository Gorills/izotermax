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

    <?php $pages = 'Промышленное утепление' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        @slot('prev') Портфолио @endslot
        @slot('link') {{ url('/portfolio') }} @endslot

        @slot('active') г.Барнаул, п.Павловск. Павловский ДОК @endslot
        @slot('activelink') {{ url('/portfolio/zavod-kronospan') }} @endslot



    @endcomponent


    <div class="works-page">
        <div class="container">
            <div class="works-page__inner">
                <h1 class="works-page__title">г.Барнаул, п.Павловск. Павловский ДОК</h1>
                <div class="slider">

                    <div class="slick">

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/1.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/2.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/3.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/4.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/1.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/5.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/6.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/7.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/8.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/9.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/10.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/11.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/3/12.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>


                    </div>
                </div>

                <p class="works-page__description">
                    Строящийся завод по производству МДФ плит. Мобилизация на объект составила 3 дня, работы были закрыты в срок, без задержек.
                </p>
                <h2 class="works-page__subtitle">Цель проекта</h2>
                <p class="works-page__text">
                    Изолирование трубопроводов и различного оборудования диаметром 2000мм . Толщина утепления 80мм - 200мм. Работы проводились в основном на высоте от 10м-53м. Покрывной слой- алюминий 1мм
                </p>
                <p class="works-page__date">Дата сдачи проекта: 25.10.2018</p>


            </div>
        </div>
    </div>




@endsection

