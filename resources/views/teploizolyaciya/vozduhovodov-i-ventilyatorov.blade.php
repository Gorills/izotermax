@extends('layouts.custom')

@section('title', 'Теплоизоляция воздуховодов и вентиляторов | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции воздуховодов и вентиляторов. Звоните: 8 (3822) 941-199 ')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/vozduhovodov-i-ventilyatorov')
@section('og:title', 'Теплоизоляция воздуховодов и вентиляторов | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции воздуховодов и вентиляторов. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/vozduhovodov-i-ventilyatorov')
@section('twitter:title', 'Теплоизоляция воздуховодов и вентиляторов | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции воздуховодов и вентиляторов. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция воздуховодов и вентиляторов' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция воздуховодов и вентиляторов @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/vozduhovodov-i-ventilyatorov') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция воздуховодов и вентиляторов</h1>

                <img src="{{ URL::asset('/images/5/1.png') }}" alt="Теплоизоляция трубопроводов пара и отопления" class="page__img">


                <p class="page__text">
                    <strong>Цены от 1800 руб. за м.пог.</strong>
                </p>



                @component('components.text')
                    @slot('title')теплоизоляции воздуховодов и вентиляторов@endslot
                    @slot('subtitle')теплоизоляции воздуховодов и вентиляторов @endslot

                @endcomponent


            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

