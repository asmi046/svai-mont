<section id="galery_section" class="galery_section green_section">
    <div class="container">
        <h2 class="section_h2">Галерея наших работ</h2>
        <div class="galery">
            @foreach ($galery as $item)
                <x-cards.galery :item="$item" />
            @endforeach
        </div>
    </div>
</section>
