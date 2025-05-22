<div class="certificat_item">
    <div class="img_wrapper">
        <a data-fslightbox="cert-galery"  href="{{ Storage::url($item->img) }}">
            <img src="{{ Storage::url($item->img) }}" alt=" {{ $item->title }}">
        </a>

    </div>
    <div class="text">
        {{ $item->title }}
    </div>
</div>
