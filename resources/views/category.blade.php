@extends('layouts.custom')



@section('title', $category->meta_title)
@section('description', $category->meta_description)
@section('keywords', '')
@section('canonical', '/izdeliya-iz-metalla'.'/'.$category->slug)
@section('og:title', $category->meta_title)
@section('og:description', $category->meta_description)
@section('og:url', '/izdeliya-iz-metalla'.'/'.$category->slug)
@section('twitter:title', $category->meta_title)
@section('twitter:description', $category->meta_description)


@section('content')
    @component('components.breadcrumb')



        @slot('parent') Главная @endslot
        @slot('prev') Изделия из металла @endslot
        @slot('link') {{ url('/izdeliya-iz-metalla') }} @endslot


        @slot('active') {{$category->title}} @endslot
        @slot('activelink')   @endslot

    @endcomponent



    <section class="posad">
        <div class="container">
            <div class="posad__inner">
                <h1 class="title">{{ $category->title }}</h1>

                <div class="posad__row">

                @foreach($category->products as $product)

                    <div class="posad__item">

                        <div class="posad__wrapper">
                            <img src="{{ URL::asset('/storage'.'/'. $product->image) }}" alt="{{ $product->title }}" class="posad__img">
                        </div>

                        <div class="posad__text-wrapper">
                            <h3 class="posad__title">{{ $product->title }}</h3>
                            <p class="posad__description">{!! $product->description !!}</p>
                            <p class="posad__price">{{ $product->price }}</p>
                        </div>

                    </div>
                    @endforeach

                </div>



            </div>
        </div>
    </section>
    <section class="page">
        <div class="container">
            <div class="page__inner">

                <h2 class="title">{{ $category->title }} купить в Томске</h2>

                <img src="{{ URL::asset('/storage'.'/'. $category->image) }}" alt="{{ $category->title }} купить в Томске" class="page__img">


                <p class="page__text">{!! $category->description ?? '' !!}</p>


                <h3 class="page__text">{{ $category->description_short ?? '' }}</h3>
                <p class="page__text">{!! $category->text_one ?? '' !!} </p>
                <p class="page__text">{!! $category->text_two ?? '' !!}</p>
                <p class="page__text">{!! $category->text_three ?? '' !!}</p>



            </div>
        </div>
    </section>


@endsection

