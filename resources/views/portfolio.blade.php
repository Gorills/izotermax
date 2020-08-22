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

    <?php $pages = 'Портфолио' ?>

    @component('components.breadcrumb')
{{--        @slot('title') Промышленная теплоизоляция @endslot--}}


        @slot('parent') Главная @endslot
{{--        @slot('prev') Предыдущая @endslot--}}

        @slot('active') Портфолио @endslot
        @slot('activelink') {{ url('/portfolio') }} @endslot



    @endcomponent

    @component('components.portfolio')


    @endcomponent

    <section class="geography">
        <h2 class="title">География работ</h2>


        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac7a991fcb1557a49d196c2124efca01171144f451ee2b90afa83cc0e22c42541&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>

    </section>




@endsection

