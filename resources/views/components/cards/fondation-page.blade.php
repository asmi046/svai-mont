<a href="{{ route('fondation_page', $item->slug) }}" class="uni_card fondation_card">
    <div class="card_img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <div class="card_content">
        <h3 class="product_card_title">{{ get_city_text($item->title) }}</h3>
        <span class="button" href="{{ route('fondation_page', $item->slug) }}">Подробнее</span>
    </div>
</a>
