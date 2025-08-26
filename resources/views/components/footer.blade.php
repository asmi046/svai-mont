<footer>
    <div class="container">
        <div class="line top">
            <a href="{{ route('home') }}">
                <img class="logo" src="{{ asset('img/logo-white.svg') }}" >
            </a>

            <div class="bottom_phone">
                <div class="messenger">
                    <a class="msg_icon" href="{{ $contacts['tg_lnk']->value }}">
                        <svg class="sprite_icon">
                            <use xlink:href="#tg_icon_white"></use>
                        </svg>
                    </a>

                    <a class="msg_icon" href="{{ $contacts['ws_lnk']->value }}">
                        <svg class="sprite_icon">
                            <use xlink:href="#ws_icon_white"></use>
                        </svg>
                    </a>
                </div>

                <a class="phone" href="tel:+7{{ phone_format(get_city_text('[city|phone]') ) }}" alt="{{ $contacts['site_name']->value }}">{{ get_city_text('[city|phone]') }}</a>
            </div>
        </div>

        <div class="line body">
            <div class="coll menu">
                <h4>Меню</h4>
                <nav>
                    <ul>
                        @foreach ($menu_1 as $item)
                            <li><a href="{{ $item->lnk }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class="coll info">
                <h4>Полезная информация</h4>
                <nav>
                    <ul>
                        @foreach ($menu_2 as $item)
                            <li><a href="{{ $item->lnk }}" title="{{ $item->title }}">{{ $item->title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>

            <div class="coll contacts">
                <h4>Контактная информация</h4>
                <p><strong>Адрес: </strong> {{ get_city_text('[city|address]') }}</p>
                <p><strong>Время работы: </strong> {{ $contacts['work_time']->value }}</p>
                <p><strong>e-mail: </strong> {{ $contacts['email']->value }}</p>
            </div>
        </div>

        <div class="line bottom">
            <div class="copuright">
                <span class="copuright_text">
                    © 2025 Компания "СвайМонтаж"
                </span>
                <p class="discl">ВНИМАНИЕ: Цены на сайте не являются публичной офёртой и могут отличаться, уточняйте у наших менеджеров!</p>
            </div>

            <span class="policy">
                <a href="/page/politika-v-oblasti-obrabotki-personalnyx-dannyx">Политика конфиденциальности</a><br>
                <a href="/page/soglasie-na-obrabotku-personalnyx-dannyx">Соглавие на обработку ПД</a>
            </span>
        </div>
    </div>
</footer>
