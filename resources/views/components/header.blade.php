<div class="toggle-menu">
    <div class="toggle-section">
        <a href="#" class="menu-btn">
            <span></span>
        </a>
    </div>
</div>
<div class="header__closer"></div>


<?php $home = '/' ?>
<div class="header">

    <div class="header__top">
        <div class="container">
            <div class="header__inner">
                <div class="header__logo-wrapper">
                    @if($home == $_SERVER['REQUEST_URI'])

                        <img src="{{ URL::asset('images/logo.png') }}" alt="Изотермакс" class="header__logo">


                    @else
                        <a href="{{ url('/') }}" class="header__logo-link">
                            <img src="{{ URL::asset('images/logo.png') }}" alt="Изотермакс" class="header__logo">
                        </a>
                    @endif
                </div>

                <div class="header__contacts">

                        <div class="header__contacts-text">Работаем со всеми регионами России, а так же СНГ</div>
                        <a href="#" class="header__phone">8 (3822) 123 - 456</a>

                </div>

                <div class="header__popup">
                    <a href="#" class="btn btn__accent header__btn show_popup">Обратный звонок</a>


                </div>


            </div>
        </div>
    </div>

    <div class="header__bottom">
        <div class="container">
            <div class="header__bottom-inner">
                <nav class="header__nav" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
                    <ul class="header__list" itemprop="about" itemscope="" itemtype="http://schema.org/ItemList">

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">Главная</a>
                            <meta itemprop="name" content="Главная" />
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">Промышленное утепление</a>
                            <meta itemprop="name" content="Промышленное утепление" />
                        </li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">Изделия из металла</a>
                            <meta itemprop="name" content="Изделия из металла" />
                        </li>


                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">О компании</a>
                            <meta itemprop="name" content="О компании" />
                        </li>



                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList">
                            <a class="header__link" href="{{ url('/') }}" itemprop="url">Контакты</a>
                            <meta itemprop="name" content="Контакты" />
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>



</div>
