<div class="overlay_popup"></div>
<div class="popup">
    <div class="container">
        <p class="popup__title">Оставить заявку</p>
        <form class="popup__form" action= "{{ url('/sendemail/send') }}" method= "post">
            {{ csrf_field() }}

            <input class="popup__input" type= "text" name= "name" placeholder="Имя" required>

            <input class="popup__input" type= "tel" name= "tel" placeholder="Телефон" required>



            <textarea class="popup__input" rows= "10" cols= "45" name= "message" placeholder="Сообщение"></textarea>

            <input type="text" hidden="hidden" name="page" value="{{ $type ?? ''}}">

            <button class="popup__btn btn btn__second" type= "submit">Отправить заявку</button>

        </form>
    </div>

</div>
