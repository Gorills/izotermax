@extends('layouts.custom')

@section('title', 'Теплоизоляция горелок и сушильных труб | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции горелок и сушильных труб с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/gorelok-i-sushilnyh-trub')
@section('og:title', 'Теплоизоляция горелок и сушильных труб | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции горелок и сушильных труб с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/gorelok-i-sushilnyh-trub')
@section('twitter:title', 'Теплоизоляция горелок и сушильных труб | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции горелок и сушильных труб с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция горелок и сушильных труб' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция горелок и сушильных труб @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/gorelok-i-sushilnyh-trub') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция горелок и сушильных труб</h1>

                <img src="{{ URL::asset('/images/9/1.png') }}" alt="Теплоизоляция горелок и сушильных труб" class="page__img">


                <p class="page__text">
                    <strong>Цены от 1770 руб. за м.пог.</strong>
                </p>



                @component('components.text')
                    @slot('title')теплоизоляции горелок и сушильных труб @endslot
                    @slot('subtitle')теплоизоляции горелок и сушильных труб@endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

