<section class="adv_section gray_section">
    <div class="container">
        <h2 class="section_h2">ПРЕИМУЩЕСТВА «СВАЙМАСТЕР»</h2>

        <div class="adv_wrapper">
            @foreach ($adv as $item)
                <div class="box">
                    <div class="icon">
                        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->value }}">
                    </div>
                    <h3>{!! $item->title !!}</h3>
                    <p>
                        {!! $item->value !!}
                    </p>
                </div>

            @endforeach
        </div>
    </div>
</section>
