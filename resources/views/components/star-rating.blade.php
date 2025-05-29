@props(['rating', 'maxRating', 'readonly'])

<div class="star-rating" {{ $attributes }}>
    @if(!$readonly)
        <div class="star-rating__inputs" style="display: none;">
            @for($i = $maxRating; $i >= 1; $i--)
                <input
                    type="radio"
                    id="star{{ $i }}"
                    name="rating"
                    value="{{ $i }}"
                    {{ $rating == $i ? 'checked' : '' }}
                    class="star-rating__input"
                >
            @endfor
        </div>
    @endif

    <div class="star-rating__stars">
        @for($i = 1; $i <= $maxRating; $i++)
            @if($readonly)
                <div class="star-rating__star {{ $i <= $rating ? 'star-rating__star--active' : '' }}"></div>
            @else
                <label
                    for="star{{ $i }}"
                    class="star-rating__star {{ $i <= $rating ? 'star-rating__star--active' : '' }}"
                ></label>
            @endif
        @endfor
    </div>

    @unless($readonly)
        <div class="star-rating__value" style="display: none;">{{ $rating }}</div>
    @endunless
</div>
