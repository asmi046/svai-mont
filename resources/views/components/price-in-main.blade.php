<section class="price_in_main">
    <div class="container">
        <h2 class="section_h2">Цены на винтовые сваи</h2>
        <div class="price_in_main_wrapper">
            @foreach ($price as $item)
                <x-cards.price-in-main :item="$item" />
            @endforeach
        </div>
    </div>
</section>
