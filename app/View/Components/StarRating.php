<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StarRating extends Component
{
    public $rating;
    public $maxRating;
    public $readonly;

    /**
     * Create a new component instance.
     *
     * @param float $rating Текущий рейтинг
     * @param int $maxRating Максимальный рейтинг (по умолчанию 5)
     * @param bool $readonly Только для чтения (по умолчанию false)
     */
    public function __construct($rating = 0, $maxRating = 5, $readonly = false)
    {
        $this->rating = min(max($rating, 0), $maxRating);
        $this->maxRating = $maxRating;
        $this->readonly = $readonly;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.star-rating');
    }
}
