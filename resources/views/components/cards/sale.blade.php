<div class="sale">
    <div class="img_wrapper">
        <div class="text">
            <h2>{{ $item->title }}</h2>
            <h3>{{ $item->sub_title }}</h3>
        </div>
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}">
    </div>
    <p>{{ $item->description }}</p>
</div>
