@extends('layouts.custom')

@section('title', 'Изоляция оборудования и окожушивание | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции оборудования и окожушивания с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya')
@section('og:title', 'Изоляция оборудования и окожушивание | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции оборудования и окожушивания с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya')
@section('twitter:title', 'Изоляция оборудования и окожушивание | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции оборудования и окожушивания с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Трубопроводов пара, отопления' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Изоляция оборудования и окожушивание @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Изоляция оборудования и окожушивание</h1>

                <img src="{{ URL::asset('/images/11/1.png') }}" alt="Изоляция оборудования и окожушивание" class="page__img">


                <p class="page__text">
                    <strong>Цены от 2300 руб. за м.кв.</strong>
                </p>




                @component('components.text')
                    @slot('title')теплоизоляции оборудования и окожушивания @endslot
                    @slot('subtitle')теплоизоляции оборудования и окожушивания@endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

