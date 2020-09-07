@extends('layouts.custom')

@section('title', 'Тепловая изоляция емкостей с металлической оболочкой | ООО Изотермакс')
@section('description', 'Расчитать стоимость тепловой изоляции емкостей с металлической оболочкой с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/rezervuarov-i-emkostej')
@section('og:title', 'Тепловая изоляция емкостей с металлической оболочкой | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость тепловой изоляции емкостей с металлической оболочкой с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/rezervuarov-i-emkostej')
@section('twitter:title', 'Тепловая изоляция емкостей с металлической оболочкой | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость тепловой изоляции емкостей с металлической оболочкой с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Тепловая изоляция емкостей с металлической оболочкой' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Тепловая изоляция емкостей с металлической оболочкой @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/rezervuarov-i-emkostej') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Тепловая изоляция емкостей с металлической оболочкой</h1>

                <img src="{{ URL::asset('/images/4/1.png') }}" alt="Тепловая изоляция емкостей с металлической оболочкой" class="page__img">


                <p class="page__text">
                    <strong>Цены от 2300 руб. за м.кв.</strong>
                </p>



                @component('components.text')
                    @slot('title')изоляции труб холодной воды@endslot
                    @slot('subtitle')изоляции труб холодной воды @endslot

                @endcomponent
            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

