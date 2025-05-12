<?php

namespace App\View\Components;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class AdvSection extends Component
{
    public $adv;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->adv = Cache::rememberForever('adv_list', function () {
            return Parametr::where('section', 'Преимущества')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.adv-section');
    }
}
