@extends('layouts.custom')

@section('title', 'Изоляция труб холодной воды | ООО Изотермакс')
@section('description', 'Расчитать стоимость изоляции труб холодной воды. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-holodnoj-vody')
@section('og:title', 'Изоляция труб холодной воды | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость изоляции труб холодной воды. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-holodnoj-vody')
@section('twitter:title', 'Изоляция труб холодной воды | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость изоляции труб холодной воды. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Изоляция труб холодной воды' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Изоляция труб холодной воды @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/truboprovodov-holodnoj-vody') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Изоляция труб холодной воды</h1>

                <img src="{{ URL::asset('/images/3/1.png') }}" alt="Изоляция труб холодной воды" class="page__img">


                <p class="page__text">
                    <strong>Цены от 670 руб. за м.пог.</strong>
                </p>
                <p class="page__text">
                    Мы производим изоляцию холодной воды от конденсата на пищевых предприятиях.
                    Изоляция холодной воды производится внутри помещений, так и на открытом пространстве.
                    В зависимости от технических условий и задач - внутри помещений при изоляции холодной воды используются  материалы  на основе вспененного каучука ( K-flex, Armafllex и др.)  и на основе вспененного полиэтилена (Энергофлекс, Пенофол, Вилатерм и др.)
                    На открытых пространствах используются также эти материалы и материалы на стеклянной, минераловатной основе.
                </p>
                <p class="page__text">
                    В зависимости от технических условий и Ваших пожеланий, мы поможем вам определить, какую толщину  изоляции холодной воды нужно применить  и  какое покрытие металлом сделать, чтобы это было качественно, красиво, долговечно и технически грамотно.
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

