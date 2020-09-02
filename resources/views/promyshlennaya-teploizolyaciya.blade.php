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

    <?php $pages = 'Промышленное утепление' ?>

    @component('components.breadcrumb')
{{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Промышленная теплоизоляция @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot



    @endcomponent


    <section class="uslugi">
        <div class="container">
            <div class="uslugi__inner">
                <h2 class="title">Услуги</h2>
                <div class="uslugi__row">

                    <a href="{{ url('/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Трубопроводов пара, отопления</h3>


                        <img src="{{ URL::asset('images/uslugi/1.png') }}" alt="Трубопроводов пара, отопления" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/truboprovodov-i-emkostej') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Трубопроводов и емкостей</h3>


                        <img src="{{ URL::asset('images/uslugi/2.jpg') }}" alt="Трубопроводов и емкостей" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/truboprovodov-holodnoj-vody') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Трубопроводов холодной воды</h3>


                        <img src="{{ URL::asset('images/uslugi/3.png') }}" alt="Трубопроводов холодной воды" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/rezervuarov-i-emkostej') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Резервуаров и емкостей</h3>


                        <img src="{{ URL::asset('images/uslugi/4.png') }}" alt="Резервуаров и емкостей" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/vozduhovodov-i-ventilyatorov') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Воздуховодов и вентиляторов</h3>


                        <img src="{{ URL::asset('images/uslugi/5.png') }}" alt="Воздуховодов и вентиляторов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/bolshih-vertikalnyh-emkostej') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Больших вертикальных емкостей</h3>


                        <img src="{{ URL::asset('images/uslugi/6.png') }}" alt="Больших вертикальных емкостей" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-ciklonov') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Теплоизоляция циклонов</h3>


                        <img src="{{ URL::asset('images/uslugi/7.png') }}" alt="Теплоизоляция циклонов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/goryachih-masloprovodov') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Горячих маслопроводов</h3>


                        <img src="{{ URL::asset('images/uslugi/8.png') }}" alt="Горячих маслопроводов" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/gorelok-i-sushilnyh-trub') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Горелок и сушильных труб</h3>


                        <img src="{{ URL::asset('images/uslugi/9.png') }}" alt="Горелок и сушильных труб" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/truboprovodov-otvodov-trojnikov') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Трубопроводов, отводов, тройников</h3>


                        <img src="{{ URL::asset('images/uslugi/10.png') }}" alt="Трубопроводов, отводов, тройников" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Теплоизоляция оборудования</h3>


                        <img src="{{ URL::asset('images/uslugi/11.png') }}" alt="Теплоизоляция оборудования" class="uslugi__img">
                    </a>


                </div>
            </div>
        </div>

        <img src="{{ URL::asset('images/bg-3.jpg') }}" alt="Услуги промышленного утепления" class="uslugi__bg">

    </section>



    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Промышленная теплоизоляция</h1>

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

            @component('components.form')

            @endcomponent

        </div>
    </section>




@endsection

