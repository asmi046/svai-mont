<section class="fondation_in_main">
    <div class="container">
        <h2 class="section_h2">Свайные фундаменты</h2>
        <div class="fondation_wrapper">
            @foreach ($fondation as $item)
                <x-cards.fondation :item="$item" />
            @endforeach
        </div>
    </div>
</section>
