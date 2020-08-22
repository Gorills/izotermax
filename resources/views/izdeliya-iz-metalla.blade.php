@extends('layouts.custom')

@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:title', '')
@section('twitter:description', '')


@section('content')

    <?php $pages = 'Изделия из металла' ?>

    @component('components.breadcrumb')
{{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Изделия из металла @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot



    @endcomponent


    <section class="uslugi">
        <div class="container">
            <div class="uslugi__inner">
                <h2 class="title">Продукты</h2>
                <div class="uslugi__row">


                    <a href="{{ url('/izdeliya-iz-metalla/dobornye-ehlementy') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Доборные элементы</h3>


                        <img src="{{ URL::asset('images/metall/1.jpeg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/vodostochnye-sistemy') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Водосточные сиситемы</h3>


                        <img src="{{ URL::asset('images/metall/2.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/otlivy') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Отливы</h3>


                        <img src="{{ URL::asset('images/metall/3.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/otkosy') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Откосы</h3>


                        <img src="{{ URL::asset('images/metall/4.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/ventilyacionnye-kolpaki') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Вентиляционные колпаки</h3>


                        <img src="{{ URL::asset('images/metall/5.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/kolpaki-na-zabory') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Колпаки на заборы</h3>


                        <img src="{{ URL::asset('images/metall/6.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/vozduhovody') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Воздуховоды</h3>


                        <img src="{{ URL::asset('images/metall/7.jpg') }}" alt="Теплоизоляция оборудования" class="uslugi__img">
                    </a>
                    <a href="{{ url('/izdeliya-iz-metalla/ventilyaciya') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Вентиляция</h3>


                        <img src="{{ URL::asset('images/metall/8.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>

                </div>
            </div>
        </div>

        <img src="{{ URL::asset('images/bg-4.jpg') }}" alt="Услуги промышленного утепления" class="uslugi__bg">

    </section>



    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Изделия из металла</h1>

                <img src="{{ URL::asset('/images/promyshlennoe-uteplenie.jpg') }}" alt="" class="page__img">

                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>

                <ul class="page__list">
                    <li class="page__li">1</li>
                    <li class="page__li">2</li>
                    <li class="page__li">3</li>
                    <li class="page__li">4</li>
                    <li class="page__li">5</li>
                </ul>

                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>
                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>
                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>


            </div>
        </div>
    </section>




@endsection

