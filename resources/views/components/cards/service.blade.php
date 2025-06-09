<a href="{{ route('service_page', $item->slug) }}" class="cervice_item">
    <div class="order">01.</div>
    <h3 class="title">{{ get_city_text($item->title) }}</h3>
    <p class="subtitle"> {{ get_city_text($item->sub_title) }} </p>
    <span class="more">Подробнее...</span>
</a>
