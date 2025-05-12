<?php

namespace App\View\Components;

use Closure;
use App\Models\Menu;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class Footer extends Component
{
    public array $contacts;
    public $menu_1;
    public $menu_2;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contacts = Cache::rememberForever('footer_contacts', function () {
            return get_collection_array(Contact::all(), 'name');
        });

        $this->menu_1 = Cache::rememberForever('footer_menu_1', function () {
            return Menu::where('menu_name', 'Меню в подвале')->get();
        });

        $this->menu_2 = Cache::rememberForever('footer_menu_2', function () {
            return Menu::where('menu_name', 'Полезная информация')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer');
    }
}
