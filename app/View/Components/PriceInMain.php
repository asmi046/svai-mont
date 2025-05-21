<?php

namespace App\View\Components;

use Closure;
use App\Models\PriceVidget;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PriceInMain extends Component
{
    public $price;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->price = Cache::rememberForever('price_in_main', function () {
            return PriceVidget::orderBy('order', 'ASC')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.price-in-main');
    }
}
