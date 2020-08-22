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

        @slot('active') Талион Терра. Тверская область, г.Торжок ул. Старицкая 96А @endslot
        @slot('activelink') {{ url('/portfolio/zavod-kronospan') }} @endslot



    @endcomponent


    <div class="works-page">
        <div class="container">
            <div class="works-page__inner">
                <h1 class="works-page__title">Талион Терра. Тверская область, г.Торжок ул. Старицкая 96А</h1>
                <div class="slider">

                    <div class="slick">

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/2/1.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/2/2.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/2/3.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/2/4.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/2/5.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                    </div>
                </div>

                <p class="works-page__description">
                    Работы проводились нашими специалистами на новом строящемся заводе. это был крайне интересный объект с точки зрения сложности, оперативности принятия организационных вопросов, условий произвводственного процесса.
                </p>
                <h2 class="works-page__subtitle">Цель проекта</h2>
                <p class="works-page__text">
                    Изолирование трубопроводов и различного оборудования диаметром от 80мм- 425мм . Толщина утепления 80мм - 200мм. Работы проводились в основном на высоте от 10м-35м.
                </p>
                <p class="works-page__date">Дата сдачи проекта: 10.05.2016</p>


            </div>
        </div>
    </div>




@endsection

