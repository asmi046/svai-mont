<?php

namespace App\View\Components;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class TopContacts extends Component
{
    public $phone;
    public $site_name;
    public $tg_lnk;
    public $ws_lnk;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->phone = Cache::rememberForever('top_contacts', function () {
            $elem = Contact::where('name', 'phone')->first();
            return $elem->value;
        });
        $this->site_name = Cache::rememberForever('top_contacts', function () {
            $elem = Contact::where('name', 'site_name')->first();
            return $elem->value;
        });
        $this->tg_lnk = Cache::rememberForever('top_contacts', function () {
            $elem = Contact::where('name',  'tg_lnk')->first();
            return $elem->value;
        });
        $this->ws_lnk = Cache::rememberForever('top_contacts', function () {
            $elem = Contact::whereIn('name', 'ws_lnk')->first();
            return $elem->value;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-contacts');
    }
}
