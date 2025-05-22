<div class="sidebar">
    <div class="list_group">
        <details class="sidebar_details">
            <summary>
                Продукция нашей компании
            </summary>
            <div class="response">
                <nav>
                    <ul>
                        @foreach ($products as $item)
                            <li><a href="{{ route('product_page', $item->slug) }}">{{ $item->short_title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </details>
        <details class="sidebar_details">
            <summary>
                Наши услсги
            </summary>
            <div class="response">
                <nav>
                    <ul>
                        @foreach ($services as $item)
                            <li><a href="{{ route('service_page', $item->slug) }}">{{ $item->sub_title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </details>
        <details class="sidebar_details">
            <summary>
                Фундаменты
            </summary>
            <div class="response">
                <nav>
                    <ul>
                        @foreach ($fondations as $item)
                            <li><a href="{{ route('fondation_page', $item->slug) }}">{{ $item->short_title }}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </details>
    </div>
</div>
