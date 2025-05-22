<?php

namespace App\View\Components;

use Closure;
use App\Models\Fondation;
use App\Models\PriceVidget;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class FondationInMain extends Component
{
    public $fondation;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->fondation = Cache::rememberForever('fondation_in_main', function () {
            return Fondation::orderBy('order', 'ASC')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.fondation-in-main');
    }
}
