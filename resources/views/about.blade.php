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

    <?php $pages = 'О компании' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        {{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') О компании @endslot
        @slot('activelink') {{ url('/about') }} @endslot



    @endcomponent

    <div class="about-page">
        <div class="container">
            <div class="about-page__inner">
                <h1 class="title">О нас</h1>
                <p class="about-page__text">
                    С 2012 года занимаемся теплоизоляционными работами на разных предприятиях, - в основном производства, промышленные объекты и склады. Так же, мы можем изготовить для Вас практически любое изделие из листового металла, будь то отлив, откос, уголок, ендова или водосточная система. Наше современное оборудование позволяет изготавливать широкий ассортимент изделий, различной геометрической формы.
                </p>
                <div class="about-page__wrapper">
                    <img src="{{ URL::asset('images/bg-2.jpg') }}" alt="" class="about-page__img">
                </div>
            </div>
        </div>
    </div>






@endsection

