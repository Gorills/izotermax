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

    <?php $pages = 'Воздуховоды' ?>

    @component('components.breadcrumb')



        @slot('parent') Главная @endslot
        @slot('prev') Изделия из металла @endslot
        @slot('link') {{ url('/izdeliya-iz-metalla') }} @endslot


        @slot('active') Воздуховоды @endslot
        @slot('activelink')  @endslot

    @endcomponent



    <section class="posad">
        <div class="container">
            <div class="posad__inner">
                <h1 class="title">Воздуховоды </h1>

                <div class="posad__row">

                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>
                    <div class="posad__item">
                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('images/dobor/1.jpg') }}" alt="" class="posad__img">
                        </div>
                        <h3 class="posad__title">Название элемента</h3>
                        <p class="posad__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, nisi.</p>
                        <p class="posad__price">1200 руб</p>

                    </div>



                </div>



            </div>
        </div>
    </section>
    <section class="page">
        <div class="container">
            <div class="page__inner">


                <h2 class="title">Воздуховоды</h2>

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

