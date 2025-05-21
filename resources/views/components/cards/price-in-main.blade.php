<div class="price_in_main_item">
    <p class="label">Винтовые сваи:</p>
    <p class="size">{{$item->size}} мм</p>
    <p class="label">Цена сваи:</p>
    <p class="price">{{$item->price}} руб.</p>
    <p class="label">Цена с монтажем:</p>
    <p class="price">{{$item->price_mont}} руб.</p>
    <img class="sv_img" src="{{ Storage::url( $item->img) }}" alt="Цена винтовых свай {{$item->size}} мм">
</div>
