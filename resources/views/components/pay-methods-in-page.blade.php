<div class="pay_methods_in_page">
    <h2 class="in_page_h2">Способы оплаты</h2>

    <div class="pay_methods_wrapper">
        @foreach ($pay_methods as $item)
            <div class="box">
                <div class="icon">
                    <img src="{{ Storage::url($item->img) }}" alt="{{ $item->value }}">
                </div>
                <h3>{{ $item->title }}</h3>
            </div>

        @endforeach
    </div>
</div>
