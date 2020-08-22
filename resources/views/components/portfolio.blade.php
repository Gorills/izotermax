<section class="portfolio">
    <div class="container">
        <h2 class="title">Наши работы</h2>
    </div>

    <div class="portfolio__row">

        <a href="{{ url('/portfolio/zavod-kronospan') }}" class="portfolio__item">
            <div class="portfolio__wrapper">
                <h3 class="portfolio__title">г.Могилев. Беларусь. Завод KRONOSPAN</h3>
                <p class="portfolio__text">Дата сдачи проекта: 30.03.2016</p>
                <p class="portfolio__btn btn btn__accent">Подробнее</p>
            </div>
            <img src="{{ URL::asset('images/portfolio/1.jpg') }}" alt="" class="portfolio__img">
        </a>
        <a href="{{ url('/portfolio/talion-terra') }}" class="portfolio__item">
            <div class="portfolio__wrapper">
                <h3 class="portfolio__title">Талион Терра. Тверская область, г.Торжок ул. Старицкая 96А</h3>
                <p class="portfolio__text">Дата сдачи проекта: 10.05.2016</p>
                <p class="portfolio__btn btn btn__accent">Подробнее</p>
            </div>
            <img src="{{ URL::asset('images/portfolio/2.jpg') }}" alt="" class="portfolio__img">
        </a>
        <a href="{{ url('/portfolio/pavlovskij-dok') }}" class="portfolio__item">
            <div class="portfolio__wrapper">
                <h3 class="portfolio__title">г.Барнаул, п.Павловск. Павловский ДОК</h3>
                <p class="portfolio__text">Дата сдачи проекта: 25.10.2018</p>
                <p class="portfolio__btn btn btn__accent">Подробнее</p>
            </div>
            <img src="{{ URL::asset('images/portfolio/3.png') }}" alt="" class="portfolio__img">
        </a>
        <a href="{{ url('/portfolio/hyonda-sibir') }}" class="portfolio__item">
            <div class="portfolio__wrapper">
                <h3 class="portfolio__title">г.Асино. ООО Хёнда-Сибирь</h3>
                <p class="portfolio__text">Дата сдачи проекта: 26.05.2020</p>
                <p class="portfolio__btn btn btn__accent">Подробнее</p>
            </div>
            <img src="{{ URL::asset('images/portfolio/4.jpg') }}" alt="" class="portfolio__img">
        </a>


    </div>
</section>
