<a href="{{ route('fondation_page', $item->slug) }}" class="fondation_card">
    <div class="icon">
        <img src="{{ Storage::url($item->icon) }}" alt="{{ $item->short_title }}">
    </div>
    <div class="text">
        <h2>{{ $item->short_title }}</h2>
        <span class="about_lnk">Подробнее...</span>
    </div>
</a>
