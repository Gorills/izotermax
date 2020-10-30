@extends('layouts.custom')

@section('title', 'Изделия из металла в Томске | В наличии и под заказ')
@section('description', 'Заказать изделия из металла по индивидуальным размерам в компании Изотермакс в Томске')
@section('keywords', 'резка металла, металлические изделия')
@section('canonical', '/izdeliya-iz-metalla')
@section('og:title', 'Изделия из металла в Томске | В наличии и под заказ')
@section('og:description', 'Заказать изделия из металла по индивидуальным размерам в компании Изотермакс в Томске')
@section('og:url', '/izdeliya-iz-metalla')
@section('twitter:title', 'Изделия из металла в Томске | В наличии и под заказ')
@section('twitter:description', 'Заказать изделия из металла по индивидуальным размерам в компании Изотермакс в Томске')


@section('content')

    <?php $pages = 'Изделия из металла' ?>

    @component('components.breadcrumb')

        @slot('parent') Главная @endslot

        @slot('active') Изделия из металла @endslot
        @slot('activelink') {{ url('/izdeliya-iz-metalla') }} @endslot


    @endcomponent

    <section class="uslugi">
        <div class="container">
            <div class="uslugi__inner">
                <h2 class="title">Продукты</h2>
                <div class="uslugi__row">


                @foreach($categories as $category)
                    <a href="{{ url("/izdeliya-iz-metalla/$category->slug") }}" class="uslugi__item">
                        <h3 class="uslugi__title">{{ $category->title }}</h3>


                        <img src="{{ URL::asset('/storage'.'/'. $category->image) }}" alt="{{ $category->title }}" class="uslugi__img">
                    </a>
                @endforeach



                </div>
            </div>
        </div>

        <img src="{{ URL::asset('images/bg-4.jpg') }}" alt="Изделия из металла" class="uslugi__bg">

    </section>



{{--    <section class="page">--}}
{{--        <div class="container">--}}
{{--            <div class="page__inner">--}}

{{--                <h1 class="title">Изделия из металла</h1>--}}

{{--                <img src="{{ URL::asset('/images/promyshlennoe-uteplenie.jpg') }}" alt="Изделия из металла" class="page__img">--}}

{{--                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>--}}

{{--                <ul class="page__list">--}}
{{--                    <li class="page__li">1</li>--}}
{{--                    <li class="page__li">2</li>--}}
{{--                    <li class="page__li">3</li>--}}
{{--                    <li class="page__li">4</li>--}}
{{--                    <li class="page__li">5</li>--}}
{{--                </ul>--}}

{{--                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>--}}
{{--                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>--}}
{{--                <p class="page__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab atque delectus exercitationem, fugit perspiciatis quaerat tempore vero. Doloremque esse id iste laudantium modi, nesciunt quasi recusandae repellendus suscipit unde vel?</p>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}




@endsection

