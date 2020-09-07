@extends('layouts.custom')

@section('title', 'Теплоизоляция горячих маслопроводов | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции горячих маслопроводов с выездом. Звоните: 8 (3822) 941-199 ')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/goryachih-masloprovodov')
@section('og:title', 'Теплоизоляция горячих маслопроводов | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции горячих маслопроводов с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/goryachih-masloprovodov')
@section('twitter:title', 'Теплоизоляция горячих маслопроводов | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции горячих маслопроводов с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Трубопроводов пара, отопления' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция горячих маслопроводов @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/goryachih-masloprovodov') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция горячих маслопроводов</h1>

                <img src="{{ URL::asset('/images/8/1.png') }}" alt="Теплоизоляция горячих маслопроводов" class="page__img">


                <p class="page__text">
                    <strong>Цены от 995 руб. за м.пог.</strong>
                </p>



                @component('components.text')
                    @slot('title')теплоизоляции горячих маслопроводов @endslot
                    @slot('subtitle') теплоизоляции горячих маслопроводов @endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

