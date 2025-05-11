<section class="bn_section">
    <div class="container">
        <div class="hiro">
            <img src="{{ Storage::url($img) }}" class="fon" />
            <div class="shadow"></div>
            <h1>{!! $text !!}</h1>
            <div class="bn_ch">
                <div class="ch ch0">
                    <div class="c">{{ $cerecters[0]->value }}</div>
                    <div class="text"> {!! $cerecters[0]->title !!}</div>
                </div>
                <div class="ch ch1">
                    <div class="c">{{ $cerecters[1]->value }}</div>
                    <div class="text"> {!! $cerecters[1]->title !!}</div>
                </div>
                <div class="ch ch2">
                    <div class="c">{{ $cerecters[2]->value }}</div>
                    <div class="text"> {!! $cerecters[2]->title !!}</div>
                </div>
            </div>
        </div>
    </div>
</section>
