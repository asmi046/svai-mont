<section id="galery_section" class="galery_section green_section">
    <div class="container">
        <h2 class="section_h2">Услуги нашей компании</h2>
        <div class="galery">
            @foreach ($galery as $item)
                <div class="galery_item">
                    <div class="img_wrapper">
                        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="galery_img">
                    </div>

                    <h3 class="galery_title">{{ $item->title }}</h3>
                </div>
            @endforeach
        </div>
    </div>
</section>
