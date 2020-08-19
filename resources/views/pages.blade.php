@extends('layouts.custom')

@section('title', 'Ремонт квартир в Томске, отделка квартир | ПРОРАБ70')
@section('description', 'Ремонт квартир в Томске под ключ. Цены на ремонт и отделку квартир от профессионалов. Тел: 89528052426')
@section('keywords', 'отделка квартир, ремонт квартир, ремонт квартиры под ключ, томск')
@section('canonical', 'https://prorab70.ru/remont-kvartir')
@section('og:title', 'Ремонт квартир в Томске, отделка квартир | ПРОРАБ70')
@section('og:description', 'Ремонт квартир в Томске под ключ. Цены на ремонт и отделку квартир от профессионалов. Тел: 89528052426')
@section('og:url', 'https://prorab70.ru/remont-kvartir')
@section('twitter:title', 'Ремонт квартир в Томске, отделка квартир | ПРОРАБ70')
@section('twitter:description', 'Ремонт квартир в Томске под ключ. Цены на ремонт и отделку квартир от профессионалов. Тел: 89528052426')


@section('content')

    <?php $pages = 'Отделка квартир' ?>

    @component('components.breadcrumb')
        @slot('title') Ремонт квартир @endslot


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Ремонт квартир @endslot
        @slot('activelink') {{ url('/remont-kvartir') }} @endslot
        @slot('img') {{ URL::asset('images/bg-breadcrumbs.jpg') }} @endslot
    @endcomponent




@endsection

