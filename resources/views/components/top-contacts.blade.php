<div class="colls">
    <div class="col left">
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('img/logo-color.svg') }}" alt="{{ $site_name }}">
        </a>
    </div>
    <div class="col right">
        <div class="top_contacts">
            <a class="phone" href="tel:+7{{ phone_format($phone) }}">{{ $phone }}</a>
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
</div>
