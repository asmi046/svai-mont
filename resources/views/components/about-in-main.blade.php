<section class="about_in_main">
    <div class="container">
        <h2 class="section_h2">О компании СвайМонтаж</h2>
        <div class="colls">
            <div class="col pictures">
                <div class="big_photo pw">
                    <img src="{{ Storage::url($page->images[0]['img']) }}" alt="{{ $page->images[0]['title'] }}">
                </div>
                <div class="smile_photos">
                    <div class="pw p1">
                        <img src="{{ Storage::url($page->images[1]['img']) }}" alt="{{ $page->images[1]['title'] }}">
                    </div>
                    <div class="pw p2">
                        <img src="{{ Storage::url($page->images[2]['img']) }}" alt="{{ $page->images[2]['title'] }}">
                    </div>
                </div>
            </div>
            <div class="col text text_styles">
                {!! get_city_text($page->description) !!}
            </div>
        </div>
    </div>

    </div>
</section>

