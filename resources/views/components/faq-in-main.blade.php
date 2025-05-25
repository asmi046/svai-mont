<section class="faq_in_main_section">
    <div class="container">
        <h2 class="section_h2">Ответы на популярные вопросы</h2>
        <div class="faq">
            @foreach ($questions as $item)
                <x-cards.faq :item="$item" />
            @endforeach
        </div>
    </div>
</section>
