@extends('layouts.custom')

@section('title', 'Теплоизоляция вертикальных емкостей | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции вертикальных емкостей с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/bolshih-vertikalnyh-emkostej')
@section('og:title', 'Теплоизоляция вертикальных емкостей | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции вертикальных емкостей с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/bolshih-vertikalnyh-emkostej')
@section('twitter:title', 'Теплоизоляция вертикальных емкостей | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции вертикальных емкостей с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция вертикальных емкостей' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция вертикальных емкостей @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/bolshih-vertikalnyh-emkostej') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция вертикальных емкостей</h1>

                <img src="{{ URL::asset('/images/6/1.png') }}" alt="Теплоизоляция вертикальных емкостей" class="page__img">


                <p class="page__text">
                    <strong>Цены от 3450 руб. за м.кв.</strong>
                </p>



                @component('components.text')
                    @slot('title')теплоизоляции вертикальных емкостей @endslot
                    @slot('subtitle') теплоизоляции вертикальных емкостей @endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

