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

        @slot('active') Г.Могилев. Беларусь. Завод KRONOSPAN @endslot
        @slot('activelink') {{ url('/portfolio/zavod-kronospan') }} @endslot



    @endcomponent


    <div class="works-page">
        <div class="container">
            <div class="works-page__inner">
                <h1 class="works-page__title">г.Могилев. Беларусь. Завод KRONOSPAN</h1>
                <div class="slider">

                    <div class="slick">

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/1/1.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>
                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/1/2.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>

                        <div>
                            <div class="slider__wrapper">
                                <img src="{{ URL::asset('images/portfolio/1/3.jpg') }}" alt="" class="slider__img">
                            </div>
                        </div>



                    </div>
                </div>

                <p class="works-page__description">
                    Данный объект отличался своей срочностью. На заводе был срочный ремонт оборудования,
                    наша задача заключалась в разборке и восстановлении теплоизоляции на работающем
                    оборудовании.
                </p>
                <h2 class="works-page__subtitle">Цель проекта</h2>
                <p class="works-page__text">
                    Восстановление теплоизоляции трубопроводов и различного оборудования диаметром 2000мм . Толщина утепления 80мм - 200мм. Работы проводились на работающем оборудовании в основном на высоте от 5м-525м. Покрывной слой- алюминий 1мм
                </p>
                <p class="works-page__date">Дата сдачи проекта: 30.03.2016</p>


            </div>
        </div>
    </div>




@endsection

