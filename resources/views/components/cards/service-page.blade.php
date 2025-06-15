<a href="{{ route('service_page', $item->slug) }}" class="uni_card service_card">
    <div class="card_img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <div class="card_content">
        <h3 class="product_card_title">{{ get_city_text($item->title) }}</h3>
        <span class="button">Подробнее</span>
    </div>
</a>
