<?php

namespace App\View\Components;

use Closure;
use App\Models\Page;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class AboutInMain extends Component
{

    public $page;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->page = Cache::rememberForever('about_in_main', function () {
            return Page::where('slug', 'tekst-na-glavnoi-stranice')->first();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.about-in-main');
    }
}
