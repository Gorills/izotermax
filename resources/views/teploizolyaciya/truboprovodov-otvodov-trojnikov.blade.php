@extends('layouts.custom')

@section('title', 'Теплоизоляция трубопроводов, отводов, тройников и переходов | ООО Изотермакс')
@section('description', 'Расчитать стоимость теплоизоляции трубопроводов, отводов, тройников и переходов. Звоните: 8 (3822) 941-199')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-otvodov-trojnikov')
@section('og:title', 'Теплоизоляция трубопроводов, отводов, тройников и переходов | ООО Изотермакс')
@section('og:description', 'Расчитать стоимость теплоизоляции трубопроводов, отводов, тройников и переходов. Звоните: 8 (3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya/truboprovodov-otvodov-trojnikov')
@section('twitter:title', 'Теплоизоляция трубопроводов, отводов, тройников и переходов | ООО Изотермакс')
@section('twitter:description', 'Расчитать стоимость теплоизоляции трубопроводов, отводов, тройников и переходов. Звоните: 8 (3822) 941-199')


@section('content')

    <?php $pages = 'Теплоизоляция трубопроводов, отводов, тройников и переходов' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Теплоизоляция трубопроводов, отводов, тройников и переходов@endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/truboprovodov-otvodov-trojnikov') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция трубопроводов, отводов, тройников и переходов</h1>

                <img src="{{ URL::asset('/images/10/1.png') }}" alt="Теплоизоляция трубопроводов, отводов, тройников и переходов" class="page__img">


                <p class="page__text">
                    <strong>Цены от 1020 руб. за м.пог.</strong>
                </p>
                <p class="page__text">
                    Теплоизоляция трубопроводов, отводов, тройников и переходов с покрытием оцинкованной сталью
                </p>




                @component('components.text')
                    @slot('title')теплоизоляции трубопроводов, отводов, тройников и переходов @endslot
                    @slot('subtitle')теплоизоляции трубопроводов, отводов, тройников и переходов@endslot

                @endcomponent

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>



@endsection

