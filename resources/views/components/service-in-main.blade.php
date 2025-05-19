<section id = "services_in_main" class="services_in_main green_section">
    <div class="container">
        <h2 class="section_h2">Услуги нашей компании</h2>
        <div class="services">
            @foreach ($services as $item)
                <x-cards.service :item="$item" />
            @endforeach
        </div>
    </div>
</section>
