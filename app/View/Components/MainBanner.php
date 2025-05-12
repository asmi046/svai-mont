<?php

namespace App\View\Components;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class MainBanner extends Component
{
    public string $img;
    public string $text;
    public array $cerecters;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $parametrs = Cache::rememberForever('main_banner', function () {
            $src = Parametr::where('section', 'Баннер на главной')->get();

            return get_collection_array($src, 'str_id');
        });

        $this->img = $parametrs['banner_img']->img;
        $this->text = $parametrs['banner_text']->value;

        $this->cerecters[] = $parametrs['banner_projects'];
        $this->cerecters[] = $parametrs['banner_verency'];
        $this->cerecters[] = $parametrs['banner_types'];

        // dd($this->cerecters, $this->img , $this->text);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.main-banner');
    }
}
