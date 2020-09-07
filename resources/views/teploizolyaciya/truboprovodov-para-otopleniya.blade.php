@extends('layouts.custom')

@section('title', 'Теплоизоляция трубопроводов пара и отопления | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции трубопроводов пара и отопления с выездом. Звоните: 8 (3822) 941-199')
@section('keywords', 'Теплоизоляция трубопроводов пара и отопления')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya')
@section('og:title', 'Теплоизоляция трубопроводов пара и отопления | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции трубопроводов пара и отопления с выездом. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya')
@section('twitter:title', 'Теплоизоляция трубопроводов пара и отопления | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции трубопроводов пара и отопления с выездом. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Трубопроводов пара, отопления' ?>

    @component('components.breadcrumb')



        @slot('parent') Главная @endslot
                @slot('prev') Теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Трубопроводов пара, отопления @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция трубопроводов пара и отопления</h1>

                <img src="{{ URL::asset('/images/uslugi/1.png') }}" alt="Теплоизоляция трубопроводов пара и отопления" class="page__img">


                <p class="page__text">
                    <strong>Цены от 670 руб. за м.пог.</strong>
                </p>
                <p class="page__text">
                    Для эффективной работы предприятия и для уменьшения потерь тепла производится теплоизоляция теплоизоляция трубопроводов пара,
                    отопления, горячей воды, газоходов. Это позволяет значительно сократить издержки на потерю тепла.
                </p>
                <p class="page__text">
                    На заводах и предприятиях, в котельных  теплоизоляция трубопроводов пара  производится  минераловатными матами ,
                    цилиндрами  разных производителей толщиной от 50 до 150мм  в зависимости от  диаметра трубопроводов. При изоляции
                    трубопроводов отопления используются  минераловатные маты, цилиндры  толщиной 50мм-80мм, также  используется при изоляции
                    отопления K-flex, Энергофлекс.
                </p>


                <h2 class="page__title">Расчитать стоимость теплоизотяции трубопроводов отопления и пара.</h2>

                <p class="page__text">
                    Для расчета стоимости теплоизотяции трубопроводов отопления и пара на Вашем объекте просто заполните форму ниже и наши специалисты свяжутся с Вами в
                    кратчайшие сроки. Не имеет значения в каком регионе Вы находитесь - мы сможем удивить Вас приятными ценами и качеством наших
                    услуг.
                </p>

                <p class="page__text">
                    Так же мы принимаем заявки на расчет стоимости на нашу почту <a href="mailto:ferrum_art@mail.ru">ferrum_art@mail.ru</a> и по телефону
                    <a href="tel:83822941199">8 (3822) 941-199</a>.
                </p>

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

