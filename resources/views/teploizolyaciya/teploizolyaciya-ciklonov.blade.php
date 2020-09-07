@extends('layouts.custom')

@section('title', 'Теплоизоляция циклонов | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции циклонов с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/teploizolyaciya-ciklonov')
@section('og:title', 'Теплоизоляция циклонов | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции циклонов с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/teploizolyaciya-ciklonov')
@section('twitter:title', 'Теплоизоляция циклонов | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции циклонов с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция циклонов' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция циклонов @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-ciklonov') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция циклонов</h1>

                <img src="{{ URL::asset('/images/7/1.png') }}" alt="Теплоизоляция циклонов" class="page__img">


                <p class="page__text">
                    <strong>Цены от 3450 руб. за м.кв.</strong>
                </p>



                @component('components.text')
                    @slot('title')теплоизоляции циклонов@endslot
                    @slot('subtitle')теплоизоляции циклонов@endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

