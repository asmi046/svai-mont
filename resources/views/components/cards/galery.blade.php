<div class="galery_item">
    <a data-fslightbox="page-galery" href="{{ Storage::url($item->img) }}" class="img_wrapper">
        <img src="{{ Storage::url($item->img) }}" alt="{{ $item->title }}" class="galery_img">
    </a>
    <h3 class="galery_title">{{ $item->title }}</h3>
</div>
