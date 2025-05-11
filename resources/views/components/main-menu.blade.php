<section class="main_menu_section green_section">
    <div class="container">
        <nav>
            <ul>
                @foreach ($menu as $item)
                    <li>
                        <a href="{{ $item->lnk }}">{{ $item->title }}</a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</section>
