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

    <?php $pages = 'Трубопроводов пара, отопления' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
                @slot('prev') Промышленная теплоизоляция @endslot
        @slot('link') {{ url('/promyshlennaya-teploizolyaciya') }} @endslot

        @slot('active') Трубопроводов пара, отопления @endslot
        @slot('activelink') {{ url('/promyshlennaya-teploizolyaciya/truboprovodov-para-otopleniya') }} @endslot



    @endcomponent

    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h1 class="title">Теплоизоляция трубопроводов и оборудования</h1>

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

