<?php

namespace App\View\Components;

use Closure;
use App\Models\Galery;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class GaleryInMain extends Component
{
    public $galery;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->galery = Cache::rememberForever('galery_in_main', function () {
            return Galery::orderBy('order', 'asc')->take(4)->get();
        });

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.galery-in-main');
    }
}
