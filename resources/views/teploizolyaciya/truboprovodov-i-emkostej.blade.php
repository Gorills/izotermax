@extends('layouts.custom')

@section('title', 'Теплоизоляция трубопроводов и емкостей | ООО Изотермакс')
@section('description', 'Минераловатная изоляция емкостей и трубопроводов с металлическим окожушиванием. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-i-emkostej')
@section('og:title', 'Теплоизоляция трубопроводов и емкостей | ООО Изотермакс')
@section('og:description', 'Минераловатная изоляция емкостей и трубопроводов с металлическим окожушиванием. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-i-emkostej')
@section('twitter:title', 'Теплоизоляция трубопроводов и емкостей | ООО Изотермакс')
@section('twitter:description', 'Минераловатная изоляция емкостей и трубопроводов с металлическим окожушиванием. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция трубопроводов и емкостей' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция трубопроводов и емкостей @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/truboprovodov-i-emkostej') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция трубопроводов и емкостей</h1>

                <img src="{{ URL::asset('/images/2/1.jpg') }}" alt="Теплоизоляция трубопроводов и емкостей" class="page__img">


                <p class="page__text">
                    <strong>Цены от 670 руб. за м.пог.</strong>
                </p>
                <p class="page__text">
                    Одним из основных направлений деятельности нашей компании является монтаж тонколистовых оболочек окожушка с применением минераловатной теплоизоляции.
                </p>
                <p class="page__text">
                    Этапы теплоизоляции трубопроводов с металлическим окожушиванием:
                </p>
                <ul class="page__list">
                    <li class="page__li">Трубопровод подвергается антикоррозийной обработке</li>
                    <li class="page__li">Изоляция трубопровода минераловатными матами (скорлупами)</li>
                    <li class="page__li">Покрытие поверхности изоляции оболочками из листа оцинкованной стали, нержавеющей стали, алюминиевого листа - окожушка</li>
                    <li class="page__li">Крепление производится саморезами и заклёпками.При работе с трубопроводами на неохраняемых
                        территориях возможно использование чёрного металла, бандажей и заклёпок.
                    </li>
                </ul>

                

                @component('components.text')
                    @slot('title')минераловатной изоляция емкостей и трубопроводов @endslot
                    @slot('subtitle') минераловатной изоляция емкостей и трубопроводов @endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

