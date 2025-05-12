<footer>
    <div class="container">
        <div class="line top">
            <a href="{{ route('home') }}">
                <img class="logo" src="{{ asset('img/logo-white.svg') }}" >
            </a>

            <div class="bottom_phone">
                <a class="phone" href="tel:+7{{ phone_format($phone) }}" alt="{{ $site_name }}">{{ $phone }}</a>
                <div class="messenger">
                    <a class="msg_icon" href="{{ $tg_lnk }}">
                        <svg class="sprite_icon">
                            <use xlink:href="#tg_icon"></use>
                        </svg>
                    </a>

                    <a class="msg_icon" href="{{ $ws_lnk }}">
                        <svg class="sprite_icon">
                            <use xlink:href="#ws_icon"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="line body">

        </div>
        <div class="line bottom"></div>
    </div>
</footer>
