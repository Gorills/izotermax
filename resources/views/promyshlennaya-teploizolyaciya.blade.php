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

                    <a href="{{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-oborudovaniya-i-pomeshchenij') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Теплоизоляция оборудования и помещений</h3>


                        <img src="{{ URL::asset('images/uslugi/1.jpg') }}" alt="Теплоизоляция оборудования" class="uslugi__img">
                    </a>
                    <a href="{{ url('/promyshlennaya-teploizolyaciya/teploizolyaciya-truboprovodov') }}" class="uslugi__item">
                        <h3 class="uslugi__title">Теплоизоляция трубопроводов</h3>


                        <img src="{{ URL::asset('images/uslugi/2.jpg') }}" alt="Теплоизоляция трубопроводов" class="uslugi__img">
                    </a>

                </div>
            </div>
        </div>

        <img src="{{ URL::asset('images/bg-3.jpg') }}" alt="Услуги промышленного утепления" class="uslugi__bg">

    </section>



    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Промышленное утепление</h1>

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

