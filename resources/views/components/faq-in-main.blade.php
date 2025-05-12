<section class="faq_in_main_section">
    <div class="container">
        <h2 class="section_h2">Ответы на популярные вопросы</h2>
        <div class="faq">
            @foreach ($questions as $item)
                <details>
                    <summary>
                        {{ $item->title }}
                    </summary>
                    <div class="response">
                        {!! $item->description !!}
                    </div>
                </details>
            @endforeach

        </div>
    </div>
</section>
