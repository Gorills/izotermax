@extends('layouts.custom')

@section('title', 'Промышленная теплоизоляция | ООО Изотермакс ')
@section('description', 'Теплоизоляция и утепление трубопроводов, оборудования, емкостей, паропроводов на строительных и промышленных объектах в России и ближнем зарубежье по выгодным ценам! Звоните!')
@section('keywords', '')
@section('canonical', 'https://izotermax.ru/')
@section('og:title', 'Промышленная теплоизоляция | ООО "Изотермакс" ')
@section('og:description', 'Теплоизоляция и утепление трубопроводов, оборудования, емкостей, паропроводов на строительных и промышленных объектах в России и ближнем зарубежье по выгодным ценам! Звоните!')
@section('og:url', 'https://izotermax.ru/')
@section('twitter:title', 'Промышленная теплоизоляция | ООО "Изотермакс" ')
@section('twitter:description', 'Теплоизоляция и утепление трубопроводов, оборудования, емкостей, паропроводов на строительных и промышленных объектах в России и ближнем зарубежье по выгодным ценам! Звоните!')


@section('content')


    @php ($pages = 'Главная')


    <section class="start">


                <div class="start__item">
                    <div class="start__inner">
                        <div class="container">
                            <h2 class="start__title">Теплоизоляция</h2>
                            <p class="start__subtitle">Трубопроводов и оборудования</p>
                            <p class="start__text">
                                Климатические особенности России таковы, что часто приходится тратить большие
                                средства на отопление зданий и сохранение в них тепла. Российская экономика развивается сегодня в
                                направлении экономии топливно-энергетических ресурсов. Один из удачных вариантов решения проблемы
                                сохранения тепла – теплоизоляция трубопроводов.
                            </p>


                            <div class="start__btn-wrapper">
                                <a href="{{ url('/promyshlennaya-teploizolyaciya') }}" class="btn btn__accent">Подробнее</a>
                                <a href="#" class="btn btn__second show_popup">Заказать звонок</a>
                            </div>
                        </div>
                    </div>
                    <img src="{{ URL::asset('images/banner/banner-1.jpg') }}" alt="Теплоизоляция трубопроводов и оборудования" class="start__img">
                </div>




    </section>


    <section class="advantages">
        <div class="container">
            <div class="advantages__inner">
                <h2 class="title advantages__title">Наши преимущества</h2>

                <div class="advantages__row">

                    <div class="advantages__item">
                        <i class="fas fa-gem"></i>
                        <h3 class="advantages__item-title">
                            Оборудование
                        </h3>
                        <p class="advantages__text">
                            Собственный парк оборудования.

                        </p>

                    </div>

                    <div class="advantages__item">
                        <i class="fas fa-users"></i>
                        <h3 class="advantages__item-title">
                            Работают профессионалы
                        </h3>
                        <p class="advantages__text">
                            Квалифицированные сотрудники.

                        </p>

                    </div>

                    <div class="advantages__item">
                        <i class="fas fa-map-marked-alt"></i>
                        <h3 class="advantages__item-title">
                            Выезд
                        </h3>
                        <p class="advantages__text">
                            Работаем по всей России и ближнему зарубежью.

                        </p>

                    </div>



                </div>


            </div>
        </div>
    </section>



    <section class="about">
        <div class="container">
            <div class="about__inner">
                <h1 class="title">ООО "Изотермакс"</h1>
                <p class="about__text">
                    С 2012 года занимаемся теплоизоляционными работами на разных предприятиях, - в основном производства, промышленные объекты и склады. Так же, мы можем изготовить для Вас практически любое изделие из листового металла, будь то отлив, откос, уголок, ендова или водосточная система. Наше современное оборудование позволяет изготавливать широкий ассортимент изделий, различной геометрической формы.

                    ИзоТерМакс также занимается обработкой металла. Изготовлением и монтажом различных изделий из листового металла, проектированием инженерных систем.

                </p>
                <a href="{{ url('/about') }}" class="btn btn__second about__btn">Подробнее</a>



            </div>
        </div>

        <img src="{{ URL::asset('images/bg-1.jpg') }}" alt="Теплоизоляция трубопроводов и оборудования" class="about__img">
    </section>



    <div class="about-2">
        <div class="container">
            <div class="about-2__inner">
                <div class="about-2__item">
                    <p class="about-2__number">15</p>
                    <p class="about-2__text">Реализованных проектов</p>


                </div>
                <div class="about-2__item">
                    <p class="about-2__number">8</p>
                    <p class="about-2__text">Лет опыта работы по Томску и Томской области</p>


                </div>
                <div class="about-2__item">
                    <p class="about-2__number">16</p>
                    <p class="about-2__text">Технологий по теплоизоляции и промышленному утеплению</p>


                </div>


            </div>
        </div>

        <img src="{{URL::asset('images/bg-2.jpg')}}" alt="Теплоизоляция трубопроводов и оборудования" class="about-2__img">

    </div>



    @component('components.portfolio')


    @endcomponent

    <section class="partners">
        <div class="container">
            <div class="partners__inner">
                <h2 class="title">Наши партнеры</h2>
                <div class="partners__row">
                    <a class="partners__link" href="#">

                        <img src="{{ URL::asset('images/partners/1.png') }}" alt="" class="partners__img">

                    </a>
                    <a class="partners__link" href="#">

                        <img src="{{ URL::asset('images/partners/2.png') }}" alt="" class="partners__img">

                    </a>
                    <a class="partners__link" href="#">

                        <img src="{{ URL::asset('images/partners/3.png') }}" alt="" class="partners__img">

                    </a>
                    <a class="partners__link" href="#">

                        <img src="{{ URL::asset('images/partners/4.png') }}" alt="" class="partners__img">

                    </a>
                    <a class="partners__link" href="#">

                        <img src="{{ URL::asset('images/partners/5.png') }}" alt="" class="partners__img">

                    </a>

                </div>



            </div>
        </div>
    </section>




@endsection
