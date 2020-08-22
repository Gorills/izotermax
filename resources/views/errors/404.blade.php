@extends('layouts.custom')


@section('title', '')
@section('description', '')
@section('keywords', '')
@section('canonical', '')
@section('og:title', '')
@section('og:description', '')
@section('og:url', '')
@section('twitter:description', '')
@section('twitter:title', '')

@section('content')

    <?php $pages = 'Ошибка 404' ?>

    @component('components.breadcrumb')
        {{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
        {{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Ошибка 404 @endslot
        @slot('activelink')  @endslot



    @endcomponent

    <div class="error">
        <div class="container">
            <div class="error__inner">
                <h1 class="error__title">Такая страница не найдена! Ошибка 404!</h1>


            </div>
        </div>
    </div>





@endsection
