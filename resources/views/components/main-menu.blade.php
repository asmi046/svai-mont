<ul>
    @foreach ($menu as $item)
        <li>
            <a href="{{ $item->lnk }}">{{ $item->title }}</a>
        </li>
    @endforeach
</ul>
