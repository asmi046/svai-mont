<div class="uni_card product_card">
    <div class="card_img">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <div class="card_content">
        <h3 class="product_card_title">{{ get_city_text($item->title) }}</h3>
        <a href="{{ route('service_page', $item->slug) }}" class="button">Подробнее</a>
    </div>
</div>
