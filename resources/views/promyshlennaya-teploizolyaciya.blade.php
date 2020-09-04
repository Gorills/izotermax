@extends('layouts.custom')

@section('title', 'Промышленная теплоизоляция. Рассчет стоимости теплоизоляции | ООО Изотермакс')
@section('description', 'Заказать теплоизоляцию трубопровода, оборудования и помещений по всей России и ближнему зарубежью. Звоните: 8(3822) 941-199')
@section('keywords', 'промышленная теплоизоляция')
@section('canonical', 'https://izotermax.ru/promyshlennaya-teploizolyaciya')
@section('og:title', 'Промышленная теплоизоляция. Рассчет стоимости теплоизоляции | ООО Изотермакс')
@section('og:description', 'Заказать теплоизоляцию трубопровода, оборудования и помещений по всей России и ближнему зарубежью. Звоните: 8(3822) 941-199')
@section('og:url', 'https://izotermax.ru/promyshlennaya-teploizolyaciya')
@section('twitter:title', 'Промышленная теплоизоляция. Рассчет стоимости теплоизоляции | ООО Изотермакс')
@section('twitter:description', 'Заказать теплоизоляцию трубопровода, оборудования и помещений по всей России и ближнему зарубежью. Звоните: 8(3822) 941-199')


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
                <h2 class="title">Услуги промышленной теплоизоляции</h2>
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

                <p class="page__text">
                    Наша компания уже несколько лет успешно занимается промышленной теплоизоляцией всех видов. Мы работаем во всех регионах России и даже в ближнем зарубежье.
                    Собственный парк техники и обученные специалисты помогают нам сокращать расходы для наших клиентов и делать все работы по промышленной теплоизоляции на
                    самом высоком уровне.


                </p>
                <p class="page__text">
                    Исходя из специфики объекта, бюджета мы предлагаем заказчикам варианты теплоизоляции оборудования. По ссылке в меню сайта вы можете ознакомится с
                    примерами выполненного монтажа по утеплению труб,  емкостей, оборудования и прочих объектов.
                    Наша компания имеет ряд постоянных заказчиков, обращающихся к нам по ряду причин:
                </p>
                <ul class="page__list">
                    <li class="page__li">берем заботы по теплоизоляции на себя;</li>
                    <li class="page__li">предлагаем низкие цены;</li>
                    <li class="page__li">контролируем график работ;</li>
                    <li class="page__li">и сроки сдачи объекта. </li>
                </ul>

                <p class="page__text">
                    Мы - компания, которая специализируется на теплоизоляции промышленных объектов и оборудования, это основной профиль нашей деятельности. Что позволяет нам
                    соблюдать сроки и держать на низком уровне цены без ущерба качеству промышленной теплоизоляции в России.
                </p>

                <h2 class="page__title">Рассчитать стоимость промышленной теплоизоляции.</h2>

                <p class="page__text">

                    Для расчета стоимости теплоизоляции на Вашем объекте просто заполните форму ниже и наши специалисты свяжутся с Вами в
                    кратчайшие сроки. Не имеет значения в каком регионе Вы находитесь - мы сможем удивить Вас приятными ценами и качеством наших
                    услуг.

                </p>

                <p class="page__text">
                    Так же мы принимаем заявки на расчет стоимости на нашу почту <a href="mailto:ferrum_art@mail.ru">ferrum_art@mail.ru</a> и по телефону
                    <a href="tel:83822941199">8 (3822) 941-199</a>.
                </p>

            </div>

            @component('components.form')

            @endcomponent

        </div>
    </section>




@endsection

